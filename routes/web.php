<?php
use App\Http\Controllers\inscriptionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// FRONT END 

// Home page
Route::get('/','App\Http\Controllers\produits@getDataFromProduit');


// log in
Route::get('/loginfront', function () {
    return view('loginfront');
})->middleware('guest');  
Route::post('/Acceuil', 'App\Http\Controllers\login@getData'
);
/* logout */
Route::get('logout', 'App\Http\Controllers\logout@logout')->middleware('auth');


// Sign in
Route::get('/signinfront', function () {
    return view('signinfront');
})->middleware('guest');
Route::post('/SaveAjout','App\Http\Controllers\signin@insertDataIntoClient'
);






/* panier */
Route::get('/Panier/{u}','App\Http\Controllers\paniers@getDataFromPanier')->middleware('auth'); 
Route::get('/supprimerPanier/{c}','App\Http\Controllers\paniers@deleteFromPanier')->middleware('auth');
Route::get('/supprimertoutPanier/{u}','App\Http\Controllers\paniers@deleteAllPanier')->middleware('auth');
Route::get('/Ajproduit/{p}/{u}','App\Http\Controllers\produits@addToPanier')->middleware('auth');






Route::fallback(function(){;
    return redirect('/');
});










Route::get('/inscription', function(){
    return view('fronts.SginIn');
});
Route::get('/login', function(){
    return  view('fronts.Login');
});