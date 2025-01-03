<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    /**
     * Tampilkan form pendaftaran jemaat baru.
     */
    public function create()
    {
        return view('jemaats.create');
    }

    /**
     * Simpan data jemaat baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:jemaats,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        Jemaat::create($request->all());

        return redirect()->route('jemaats.index')->with('success', 'Jemaat berhasil didaftarkan.');
    }

    /**
     * Tampilkan data jemaat di dashboard.
     */
    public function index()
    {
        $jemaats = Jemaat::all();
        return view('jemaats.index', compact('jemaats'));
    }
}
