<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;
class CostumersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumer = Costumer::all();
        return view('costumer.index', compact('costumer'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $costumer = new Costumer;
        $costumer->name_costumer = $request->name_costumer;
        $costumer->gender = $request->gender;
        $costumer->contact = $request->contact;
        $costumer->save();
        return redirect()->route('costumer.index')->with('success', 'The data sekseshfaley added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $costumer = Costumer::findOrFail($id);
        return view('costumer.show',compact('costumer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costumer = Costumer::findOrFail($id);
        return view('costumer.edit', compact('costumer'));

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
        $costumer = Costumer::findOrFail($id);
        $costumer->name_costumer = $request->name_costumer;
        $costumer->gender = $request->gender;
        $costumer->contact = $request->contact;
        $costumer->save();
        return redirect()->route('costumer.index')->with('success', 'The data sekseshfaley added!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costumer = Costumer::findOrFail($id);
        $costumer->delete();
        return redirect()->route('costumer.index')->with('success', 'The Data Sekseshfaley Deleted!');

    }
}
