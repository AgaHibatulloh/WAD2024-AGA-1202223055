<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required|unique:dosens,kode_dosen|max:3',
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens,nip',
            'email' => 'required|unique:dosens,email',
            'no_telepon' => 'nullable',
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosens.index');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_dosen' => 'required|max:3|unique:dosens,kode_dosen,' . $id,
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens,nip,' . $id,
            'email' => 'required|unique:dosens,email,' . $id,
            'no_telepon' => 'nullable',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('dosens.index');
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosens.index');
    }
}