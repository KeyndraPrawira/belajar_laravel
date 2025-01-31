<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Genre;

class BukusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku =Buku::all();
        return view('buku.index', compact('buku'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $penerbit = Penerbit::all();
            $genre = Genre::all();
            return view('buku.create', compact('genre','penerbit'));
     
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
            'id_penerbit' => 'required',
            'nama_buku' => 'required',
            'tanggal_terbit' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'required',

        ], [
            'id_penerbit' => 'Nama penerbit harus jelas!',
            'nama_buku' => 'Buku harus memiliki nama!',
           'tanggal_terbit' => 'Tanggal terbit harus diisi!',
            'harga' => 'Harga buku harus jelas!',
            'stok' => 'Stok buku harus diatas 0!',
            'image' => 'Buku harus memiliki cover',
            'id_genre' =>'Genre buku harus jelas!'
        ]);

        $buku = new Buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->id_genre = $request->id_genre;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if($request->hasFile('image')){
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        };

        $buku->save();
        return redirect()->route('buku.index')->with('success', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.show', compact( 'buku','penerbit','genre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.edit', compact('genre','penerbit', 'buku'));

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
            'id_penerbit' => 'required',
            'nama_buku' => 'required',
            'tanggal_terbit' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'required',
            'id_genre' =>'required'

        ], [
            'id_penerbit' => 'Nama penerbit harus jelas!',
            'nama_buku' => 'Buku harus memiliki nama!',
           'tanggal_terbit' => 'Tanggal terbit harus diisi!',
            'harga' => 'Harga buku harus jelas!',
            'stok' => 'Stok buku harus diatas 0!',
            'image' => 'Buku harus memiliki cover',
            'id_genre' =>'Genre buku harus jelas!'
      ]);
     
        
        $buku =  Buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->id_genre = $request->id_genre;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('image')) {
            $buku->deleteImage();
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }
        $buku->save();
        return redirect()->route('buku.index', compact('buku'));
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus');

    }
}
