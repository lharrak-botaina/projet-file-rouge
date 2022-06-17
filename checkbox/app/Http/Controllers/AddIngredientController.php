<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = DB::table('ingredients')
        ->select("*")
        ->get();
        return view('pages.tableau-ingredient' , compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.inserte-ingredient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('name_ingredient');
      
      
       if($request->hasfile('photo_ingredient'))
        {
            $file = $request->file('photo_ingredient');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img', $filename);
           $photo = $filename;
        }
       
    //    $photo = $request->input('photo_ingredient');
       $inserte = DB::insert('insert into ingredients(name_ingredient,photo_ingredient) value(?,?)',[$nom,$photo]);
      if($inserte){
       return redirect('afficher-ingredient');
       
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
        $edit = DB::table('ingredients')
        ->select('*')
        ->where('id_ingredient',$id)
        ->get();
        
        return view('pages.edit-ingredient', compact('edit'));
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
        $name=$request->input('name_ingredient');


       if ( $request->hasFile('photo_ingredient')) {
        $file = $request->file('photo_ingredient');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img', $filename);
            $image = $filename;
         }
       else{
           $image= $request->input("img");
      } 
      
      DB::table('ingredients')
      ->where('id_ingredient',$id)
      ->update(['name_ingredient'=>$name, 'photo_ingredient'=>$image]);
      
      return redirect('afficher-ingredient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ingredients')
        ->where('id_ingredient',$id)
        ->delete();

        return redirect('afficher-ingredient');
    }
}
