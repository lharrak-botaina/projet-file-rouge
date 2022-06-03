<?php


use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\Controller;
use Database\Factories\IngredientFactory;
use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/inserte-endroit', function () {  
//     return view('pages.inserte-endroit');
//     });
// Route::get('/edit-endroit', function () {  
//     return view('pages.edit-endroit');
//     });
// Route::get('/inserte-categorie', function () {  
//     return view('pages.inserte-categorie');
//     });
// Route::get('/edit-categorie', function () {  
//     return view('pages.edit-categorie');
//     });
// Route::get('/tableau-endroit', function () {  
//     return view('pages.tableau-endroit');
//     });
// Route::get('/tableau-categorie', function () {  
//     return view('pages.tableau-categorie');
//     });


// route::get('/afficher',[CategorieController::class,'index']);
   
Route::resource('afficher-ingredient',IngredientsController::class);
Route::resource('afficher-endroit', PlaceController::class);

