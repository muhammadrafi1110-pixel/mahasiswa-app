<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan semua data mahasiswa.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Menampilkan form tambah mahasiswa.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Menyimpan data mahasiswa baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|unique:mahasiswas,npm',
            'jurusan' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan data mahasiswa tertentu.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Menampilkan form edit mahasiswa.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Mengupdate data mahasiswa.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|unique:mahasiswas,npm,' . $mahasiswa->id,
            'jurusan' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable',
        ]);

        $mahasiswa->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Menghapus data mahasiswa.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}