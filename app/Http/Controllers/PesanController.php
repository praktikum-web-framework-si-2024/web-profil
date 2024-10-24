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

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255', // validasi name harus string dan maksimal 255 karakter
            'email' => 'required|email', // validasi email harus email
            'message' => 'required|string', // validasi message harus string
        ]);
        // mencari berdasarkan id
        $pesan = Pesan::findOrFail($id);
        $pesan->update([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect('/pesan')->with('success', 'Pesan berhasil diubah!'); // redirect ke halaman pesan dengan pesan sukses
    }
    
}
