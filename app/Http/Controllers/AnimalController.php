<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Animal::all();
        return view("welcome" , compact("data"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data  = $request->validate([
        "type"=>"required",
        "name"=>"required",
        "age"=>"required",
        "price"=>"required"
    ]);

        Animal::create($data);
        return redirect(url("/"));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view("update" , compact("animal"));
    }

    /**
     * Update the specified resource in storage.
     */
 
     public function update(Request $request, $id)
     {
         $animal = Animal::findOrFail($id);
         $data = $request->validate([
             'type' => 'required',
             'name' => 'required',
             'age' => 'required',
             'price' => 'required'
         ]);
         $animal->update($data);
         return redirect('/'); 
     }
 
    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
       $animal = Animal::findOrfail($id);
       $animal->delete();
       return redirect(url("/"));
    }
}
