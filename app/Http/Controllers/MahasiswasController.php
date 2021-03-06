<?php

namespace App\Http\Controllers;

use App\mahasiswas;
use App\pelajar;
use Illuminate\Http\Request;

class MahasiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswas = mahasiswas::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nim'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'fakultas'=>'required',
            'jurusan'=>'required'
        ]);

        $mahasiswas = new mahasiswas;
        $mahasiswas -> nim = $request->nim;
        $mahasiswas -> nama = $request->nama;
        $mahasiswas -> alamat = $request->alamat;
        $mahasiswas -> fakultas = $request->fakultas;
        $mahasiswas -> jurusan = $request->jurusan;
        

        $mahasiswas->save();

        return redirect('/mahasiswas')->with('status', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswas $mahasiswas)
    {
        return view  ('mahasiswas.detail', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswas $mahasiswas)
    {
        return view('mahasiswas.edit', compact('mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswas $mahasiswas)
    {
        mahasiswas::where('id', $mahasiswas->id)
        ->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'fakultas'=>$request->fakultas,
            'jurusan'=>$request->jurusan,
        ]);
        return redirect('/mahasiswas')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswas $mahasiswas)
    {
        mahasiswas::destroy($mahasiswas->id);
        return redirect('/mahasiswas')->with('status', 'data berhasil dihapus');

    }
}
