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
}
