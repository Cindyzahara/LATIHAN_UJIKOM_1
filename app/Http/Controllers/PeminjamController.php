<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //memanggil data relasi antarv tabel di model
        //programa memesan id dan atribut lain nya dengan menggunakan desc/asc
        $peminjam = Peminjaman::with('user', 'buku')->orderBy('id', 'desc')->get();
        return view('peminjam.index', compact('peminjam'));
    }

    public function input()
    {
        return view('peminjam.input');
    }

    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'user_id' => 'required',
                'buku_id' => 'required',
                'tanggal_peminjaman' => 'required',
                'tanggal_pengembalian' => 'required',
                'status_peminjam' => 'required',
            ],
            [
                'user_id.required' => 'user wajib diisi',
                'buku_id.required' => 'buku wajib diisi',
                'tanggal_peminjaman.required' => 'buku wajib diisi',
                'tanggal_pengembalian.required' => 'buku wajib diisi',
                'status_peminjam.required' => 'buku wajib diisi',
            ],
        );

        $peminjam = [
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status_peminjam' => $request->status_peminjam,
        ];

        Peminjaman::create($peminjam);
        return redirect()->route('peminjam.index');
    }

    


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
