<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RestoController;

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

Route::group(['middleware'=>"web"],function(){

Route::get('/',[RestoController::class,'home']);
Route::get('list',[RestoController::class,'list']);
Route::post('add',[RestoController::class,'add']);
Route::get('delete/{id}',[RestoController::class,'delete']);
Route::get('/edit/{id}', [RestoController::class, 'edit'])->name('edit');   
Route::put('/update/{id}', [RestoController::class, 'update'])->name('update'); 
Route::view('add','add');
Route::view('signup','signup');
Route::post('signup',[RestoController::class,'signup']);
Route::view('loggedin','loggedin');
Route::get('logout', [RestoController::class, 'logout']);
Route::post('loggedin',[RestoController::class,'loggedin']);
});




























Route::get('/test', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
