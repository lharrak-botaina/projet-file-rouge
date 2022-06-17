<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = DB::table('categories')
        ->select("*")
        // ->join("ingredients","categorie.id_categorie_ingredients","=","ingredients.id_ingredient")
        ->get();
        
        return view('pages.tableau-categorie' , compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredient =DB::table('ingredients')
        ->select('*')
        ->get();

        return view('pages.inserte-categorie', compact('ingredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name_categorie = $request->input('name_categorie');
        
        $id_ingredient= $request->input('id_ingredient');
      
        
         $inserte = DB::insert('insert into categories(name,id_categorie_ingredients) value(?,?)',[$name_categorie,$id_ingredient]);
         if($inserte){
          return redirect('afficher-categorie');
          
       }

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
        $edit = DB::table('categories')
        ->select('*')
        ->where('id',$id)
        ->get();
        
        return view('pages.edit-categorie', compact('edit'));
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
        $name_categorie=$request->input('name_categorie');
        DB::table('categories')
      ->where('id',$id)
      ->update(['name'=>$name_categorie]);
      
      return redirect('afficher-categorie');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')
        ->where('id',$id)
        ->delete();
        return redirect('afficher-categorie');
    }
}
