<?php

use App\Http\Controllers\SeriesController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/series');
});
//criando groupo de rotas
Route::controller(SeriesController::class)->group(function (){
Route::get('/series','index')->name('series.index');
Route::get('/series/criar','create')->name('series.create');
Route::post('/series/salvar','store')->name('series.store');

});
