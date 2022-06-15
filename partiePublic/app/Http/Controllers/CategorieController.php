<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    function afficher_categories(){
       
        // $categories = DB::table("exercices_de_jours")
        // ->select("*")
       
        // ->join('ingredients','categorie_ingredient.ingredient_id','=',"ingredients.id_ingredient")
        // ->join('categories',"categorie_ingredient.categorie_id",'=','categories.id_categorie')
        // ->groupBy("name_categorie")
        // ->get();
        // return view("pages.checkbox",compact('categories'));



        $programme=DB::table('exercices_de_jours')
        ->select('*')
        
        // ->join("categories","exercices_de_jours.categorie_id",'=',"categories.id_categorie")
        ->join("exercices","exercices_de_jours.exercice_id",'=',"exercices.id_exercice")
        ->join("jours","exercices_de_jours.jour_id",'=',"jours.id_jour")
        ->groupBy("jour")

        ->get();
        return view('pages.checkbox',compact("programme"));
    }
}
