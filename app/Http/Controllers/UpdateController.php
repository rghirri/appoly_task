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
            'label' => 'required|min:6|max:12'
        ]);

        $data = $request->all();

        $fruit = new Fruit();

        $fruit->label = $data['label'];

        $fruit->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fruitId)
    {
       $fruit = Fruit::find($fruitId);
       
       return view('update.show')->with('fruit', $fruit);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fruitId)
    {
        $fruit = Fruit::find($fruitId);
       
       return view('update.edit')->with('fruit', $fruit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fruitId)
    {
        $this->validate($request, [
            'label' => 'required|min:6|max:12'
        ]);

        $data = $request->all();

        $fruit = Fruit::find($fruitId);

        $fruit->label = $data['label'];

        $fruit->save();
       
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fruitId)
    {
        $fruit = Fruit::find($fruitId);

        $fruit->delete();

        return redirect('/');
        
    }
}