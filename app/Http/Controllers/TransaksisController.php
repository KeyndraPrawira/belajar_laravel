<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Pembeli;
class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi =Transaksi::all();
        return view('transaksi.index', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('buku','pembeli'));

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
            'id_buku' => 'required',
            'id_pembeli' => 'required',
            'jumlah' => 'required',
            'tanggal_transaksi' => 'required'
 
        ], [
            'id_buku' => 'Pilih buku terlebih dahulu!',
            'id_pembeli' => 'Pilih pembeli!',
            'jumlah' => 'Jumlah harus diatas 0!',
            'tanggal_transaksi' => 'Tanggal transaksi harus jelas!',
 
          ]);

        $transaksi = new Transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.show', compact('buku', 'transaksi','pembeli'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit', compact('buku', 'pembeli','transaksi'));

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
        $request->validate([
            'id_buku' => 'required',
            'id_pembeli' => 'required',
            'jumlah' => 'required',
            'tanggal_transaksi' => 'required'
 
        ], [
            'id_buku' => 'Pilih buku terlebih dahulu!',
            'id_pembeli' => 'Pilih pembeli!',
            'jumlah' => 'Jumlah harus diatas 0!',
            'tanggal_transaksi' => 'Tanggal transaksi harus jelas!',
 
          ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi Berhasil Diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil dihapus');

    }
}
