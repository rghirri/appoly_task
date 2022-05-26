<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('update.index')->with('fruits', Fruit::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('update.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'label' => 'required|min:6'
        ]);

        $data = $request->all();

        $fruit = new Fruit();

        $fruit->label = $data['label'];

        $fruit->save();

        session()->flash('success', 'Item added successfully.');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
  
       return view('update.show')->with('fruit', $fruit);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
       return view('update.edit')->with('fruit', $fruit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruit $fruit)
    {
        $this->validate($request, [
            'label' => 'required|min:6'
        ]);

        $data = $request->all();

        $fruit->label = $data['label'];

        $fruit->save();

        session()->flash('success', 'Item updated successfully.');
       
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit)
    {

        $fruit->delete();

        return redirect('/');
        
    }
}