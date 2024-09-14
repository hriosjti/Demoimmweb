<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        return view('user.join', ['title' => 'Join with us']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $request->prodi;

        try {
            // Simpan data ke database
            $mahasiswa->save();

            // Mengirim response sukses
            return response()->json(['success' => 'Data berhasil disimpan.']);
        } catch (\Exception $e) {
            // Mengirim response gagal
            return response()->json(['error' => 'Gagal menyimpan data.'], 500);
        }
        return redirect()->route('join.index')->with('succes', 'data berhasil teruplaod');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
