<?php

namespace App\Http\Controllers;

use App\Models\ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = DB::table("ingredients")->select("*")->get();
        return view("pages.afficher-ingredients",compact("ingredients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check=$request->input('ingredients');
        
        
        $insert = DB::insert('insert into stockage (id_ingredient_stock) values(?)',
                [$check]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingredient $ingredient)
    {
        //
    }
}
