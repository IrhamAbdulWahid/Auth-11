<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santris = \App\Models\Santri::all();

        return view('santri.index', compact('santris'));
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        $santri = new \App\Models\Santri;
        $santri->nama = $request->nama;
        $santri->ttl = $request->ttl;
        $santri->jenis_kelamin = $request->jenis_kelamin;
        $santri->anak_ke = $request->anak_ke;
        $santri->alamat = $request->alamat;
        $santri->asal_sekolah = $request->asal_sekolah;
        $santri->save();

        return redirect()->route('santri.index')->with('success', 'Data santri berhasil ditambahkan');
    }

    public function edit($id)
    {
        $santri = \App\Models\Santri::find($id);

        return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        $santri = \App\Models\Santri::find($id);
        $santri->nama = $request->nama;
        $santri->ttl = $request->ttl;
        $santri->jenis_kelamin = $request->jenis_kelamin;
        $santri->anak_ke = $request->anak_ke;
        $santri->alamat = $request->alamat;
        $santri->asal_sekolah = $request->asal_sekolah;
        $santri->save();

        return redirect()->route('santri.index')->with('success', 'Data santri berhasil diubah');
    }

    public function destroy($id)
    {
        $santri = \App\Models\Santri::find($id);
        $santri->delete();

        return redirect()->route('santri.index')->with('status', 'Data santri berhasil dihapus');
    }
}
