<?php

use App\Http\Controllers\categorieController;
use App\Http\Controllers\entreController;
use App\Http\Controllers\produitController;
use App\Http\Controllers\sortieController;
use App\Http\Controllers\userController;
use App\Models\produit;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function ()
{
    Route::get('/dashboard',function()
    {
     return view('admin.layout.admin_dash_layout');
    });
    Route::get('/createuser',[userController::class,'createUser']);
    Route::get('/grant/{id}',[userController::class,'grant']);
    Route::get('/revoc/{id}',[userController::class,'revoc']);
    Route::post('/creerUtilisateur',[userController::class,'create']);
    Route::get('/rapport',[produitController::class,'rapport']);
    Route::get('/rapports',[produitController::class,'rapportprod' ] );
    Route::post('/ajouterproduit',[produitController::class,'insertion']);
    Route::get('/ListProd',[produitController::class,'selectprod']);
    Route::get('/profile',[userController::class ,'profile']);
    Route::get('/editProd/{id}',[produitController::class,'edit']);
    Route::put('/updateProd/{id}', [produitController::class,'updateprod']);
    Route::get('/deleteProd/{id}', [produitController::class,'deletePro']);

    Route::get('/editEntre/{id}',[entreController::class,'edit']);
    Route::put('/updateEntre/{id}',[entreController::class,'apdateEntre']);
    Route::get('/deleteEntre/{d}', [entreController::class,'deletEntre']);

    Route::get('/editSorte/{id}',[sortieController::class,'editSortie']);
    Route::put('/updateSortie/{id}',[sortieController::class,'apdateSortie']);
    Route::get('/deleteSortie/{d}', [sortieController::class,'deletSortie']);

    Route::get('/addcategorie', [categorieController::class,'ajouterCat']);
    Route::post('/addCat', [categorieController::class,'insertCat']);
    Route::get('/ListeCat', [categorieController::class,'selection']);
    Route::get('editCat/{id}', [categorieController::class,'editcat']);
    Route::put('/UpdateCact/{id}', [categorieController::class,'UpdateCat']);
    Route::get('deleteCat/{id}', [categorieController::class,'deleteCate']);

});
Route::get('/produit',[produitController::class,'index']);
Route::post('insert',[produitController::class,'insertion']);
Route::get('/listpro',[produitController::class,'selectprod']);
Route::post('/addProd',[produitController::class,'insertion']);
Route::get('/entre',[entreController::class,'index']);
Route::post('/addentre',[entreController::class,'inserer']);
Route::get('/Sortie',[sortieController::class,'indexSortie']);
Route::post('/addSortie',[sortieController::class,'insererSortie']);
Route::get('/ListeEntre', [entreController::class,'selection']);
Route::get('/ListeSortie', [sortieController::class,'selectionSortie']);
Route::get('/userProfile', [userController::class,'profiles']);
Route::get('/recherche', [produitController::class,'research']);
Route::get('/rechercheSortie',[sortieController::class,'research']);
Route::get('/rechercheEntre', [entreController::class,'research']);
