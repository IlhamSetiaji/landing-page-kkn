<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrukturController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/profil',[ProfileController::class,'index']);
Route::get('/struktur',[StrukturController::class,'index']);
Route::get('/potensi',[PotensiController::class,'index']);
Route::get('/artikel',[ArtikelController::class,'index']);
Route::get('/kontak',[KontakController::class,'index']);

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'login']);

Route::middleware('auth')->group(function(){
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::prefix('admin')->group(function(){
        Route::get('/',[AdminController::class,'index']);
        Route::get('/home-hero',[HomeController::class,'indexHero']);
        // Route::post('/home-hero',[HomeController::class,'storeHero']);
        Route::post('/home-hero/{heroID}/update',[HomeController::class,'updateHero']);
        // Route::get('/home-hero/{heroID}/delete',[HomeController::class,'deleteHero']);
        Route::get('/home-feature',[HomeController::class,'indexFeature']);
        Route::post('/home-feature/{heroID}/update',[HomeController::class,'updateFeature']);
        Route::get('/profile-content',[ProfileController::class,'indexContent']);
        Route::post('/profile-content/{contentID}/update',[ProfileController::class,'updateContent']);
        Route::get('/profile-team',[ProfileController::class,'indexTeam']);
        Route::post('/profile-team/{teamID}/update',[ProfileController::class,'updateTeam']);
        Route::get('/artikel',[ArtikelController::class,'indexArticle']);
        Route::post('/artikel',[ArtikelController::class,'storeArticle']);
    });
});