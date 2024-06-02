<?php

use App\Http\Controllers\AdherentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
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
    return view('welcome');
});


/************************ Auth ************************/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/************************ Admin ************************/
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');


/************************ Classe ************************/
Route::get('/cours', [ClasseController::class, 'index'])->name('cours.index')->middleware('auth');
Route::post('/cours/create', [ClasseController::class, 'create'])->name('cours.create')->middleware('auth');
Route::post('/cours/update', [ClasseController::class, 'update'])->name('cours.update')->middleware('auth');
Route::delete('/cours/delete', [ClasseController::class, 'delete'])->name('cours.delete')->middleware('auth');


/************************ Adherent ************************/
Route::get('/adherent', [AdherentController::class, 'index'])->name('adherent.index')->middleware('auth');
Route::post('/adherent/create', [AdherentController::class, 'create'])->name('adherent.create')->middleware('auth');
Route::post('/adherent/update', [AdherentController::class, 'update'])->name('adherent.update')->middleware('auth');
Route::delete('/adherent/delete', [AdherentController::class, 'delete'])->name('adherent.delete')->middleware('auth');
