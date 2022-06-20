<?php

use App\Http\Controllers\ingredient_recetteController;
use App\Http\Controllers\StockageController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\recetteController;

use Illuminate\Support\Facades\Route;
use Database\Factories\AddIngredientFactory;
use Database\Factories\CategorieFactory;

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AddIngredientController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/tableau-categorie', function () {  
    return view('pages.tableau-categorie');
    });

route::resource("ingredients",IngredientController::class);
route::resource("recette",recetteController::class);
// route::get("/recette",[recetteController::class,"index"]);
Route::resource('afficher-ingredient',AddIngredientController::class);
Route::resource('afficher-categorie', CategorieController::class);

// route::resource("stock",StockageController::class);
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
