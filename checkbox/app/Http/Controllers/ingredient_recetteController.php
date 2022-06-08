<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ingredient_recetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $checkbox=$request->input("ingredients");

        $recettes = DB::table("ingredients_recettes")

        // ->join('recettes', 'ingredients_recettes.id_recette', '=', 'recettes.id_recette')
        ->select("*")
        ->where('ingredients_recettes.id_ingredient',$checkbox)
        // ->orWhere('ingredients_recettes.id_ingredient', ">",$checkbox)
        ->join('ingredients','ingredients_recettes.id_ingredient', '=', 'ingredients.id_ingredient')
        ->join('recettes', 'ingredients_recettes.id_recette', '=', 'recettes.id_recette')
        ->get();
        
    
        // if('ingredients_recettes.id_ingredient'=>$checkbox){
        // ->join('ingredients', 'ingredients_recettes.id_ingredient', '=', 'ingredients.id_ingredient')
        // ->join('recettes', 'ingredients_recettes.id_recette', '=', 'recettes.id_recette')
        // ->get();
        // }
        // else(){
        // 'try again'
        // }
        

        return view("pages.recettes",compact("recettes"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
