<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit =Penerbit::all();
        return view('penerbit.index', compact('penerbit'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.register');
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
            'nama' => 'required',
        ], [
            'nama' => 'Nama penerbit harus ada!',
        ]);
        $penerbit = new Penerbit;
        $penerbit->nama_penerbit = $request->nama;
        $penerbit->save();
        return redirect()->route('penerbit.index')->with('success', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.show', compact('penerbit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.edit',  compact('penerbit'));

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
            'nama' => 'required',
        ], [
            'nama' => 'Nama penerbit harus ada!',
        ]);
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->nama_penerbit = $request->nama;
        $penerbit->save();
        return redirect()->route('penerbit.index', compact('penerbit'));
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();
        return redirect()->route('penerbit.index')->with('success', 'Data berhasil dihapus');

    }
}
