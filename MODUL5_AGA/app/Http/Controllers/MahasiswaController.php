<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::with('dosen')->get();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('dosen')->findOrFail($id);
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        return view('mahasiswas.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama_mahasiswa' => 'required',
            'email' => 'required|unique:mahasiswas,email',
            'jurusan' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all();
        return view('mahasiswas.edit', compact('mahasiswa', 'dosens'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'nama_mahasiswa' => 'required',
            'email' => 'required|unique:mahasiswas,email,' . $id,
            'jurusan' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswas.index');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index');
    }
}