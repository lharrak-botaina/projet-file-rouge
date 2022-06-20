<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetteContoller extends Controller
{
    public function index()
    {

      
       
        $recettes = DB::table('recettes')
        ->select("*")
        ->get();
        return view('pages.tableau-recette' , compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $ingredients = DB::table('ingredients')
        ->select("*")
        ->get();
       return view('pages.inserte-recette',compact("ingredients"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $nom = $request->input('name_recette');
       $description = $request->input('description_recette');
       $ingredient=implode(",",$request->input('ingredient'));
      
       if($request->hasfile('photo_recette'))
        {
            $file = $request->file('photo_recette');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img', $filename);
           $photo = $filename;
        }
       
    //    $photo = $request->input('photo_ingredient');
       $inserte = DB::insert('insert into recettes(nom_recette,photo_recette,description_recette,ingredients) value(?,?,?,?)',[$nom,$photo,$description,$ingredient]);
      if($inserte){
       return redirect('afficher-recette');
       
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
        $ingredients = DB::table('ingredients')
        ->select("*")
        ->get();
        $edit = DB::table('recettes')
        ->select('*')
        ->where('id_recette',$id)
        ->get();
        
        return view('pages.edit-recette', compact('edit',"ingredients"));

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
       $name=$request->input('name_recette');
       $description = $request->input('description_recette');


       if ($request->input('ingredient')) {
        $ingred =implode(",",$request->input('ingredient'));
       }
       else {
        $ingred = $request->input("recette_ingredient");
       }

       if ( $request->hasFile('photo_recette')) {
        $file = $request->file('photo_recette');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img', $filename);
            $image = $filename;
         }
       else{
           $image= $request->input("img");
      } 
      
      DB::table('recettes')
      ->where('id_recette',$id)
      ->update(['nom_recette'=>$name,'photo_recette'=>$image,'description_recette'=>$description,'ingredients'=>$ingred]);
      
      return redirect('afficher-recette');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('recettes')
        ->where('id_recette',$id)
        ->delete();

        return redirect('afficher-recette');
       
    }
}
