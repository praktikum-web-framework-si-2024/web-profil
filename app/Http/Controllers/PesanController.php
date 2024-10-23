<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    // Display the form and all Pesan records
    public function index() {
        $pesans = Pesan::all();
        return view('pesan', compact('pesans'));
    }

    // Display the form and all Pesan records
    public function edit(int $id) {
        $pesan = Pesan::find($id);
        return view('edit-pesan', compact('pesan'));
    }

    // Store new Pesan in the database
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save new Pesan record
        Pesan::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect('/pesan')->with('success', 'Pesan berhasil dikirim!');
    }

    // Update Pesan in the database
    public function update(int $id, Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Update Pesan record
        $pesan = Pesan::find($id);

        $pesan->name = $request->name;
        $pesan->email = $request->email;
        $pesan->message = $request->message;

        $pesan->save();

        return redirect('/pesan')->with('success', 'Pesan berhasil diedit!');
    }

    public function destroy(int $id) {
        // Save new Pesan record
        $pesan = Pesan::find($id);
        $pesan->delete();

        return redirect('/pesan')->with('success', 'Pesan berhasil dihapus!');
    }
}
