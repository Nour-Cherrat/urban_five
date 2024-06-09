<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InviteController;
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


Route::get('/', [Controller::class, 'index'])->name('site');


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


/************************ Coach ************************/
Route::get('/coach', [CoachController::class, 'index'])->name('coach.index')->middleware('auth');
Route::post('/coach/create', [CoachController::class, 'create'])->name('coach.create')->middleware('auth');
Route::post('/coach/update', [CoachController::class, 'update'])->name('coach.update')->middleware('auth');
Route::delete('/coach/delete', [CoachController::class, 'delete'])->name('coach.delete')->middleware('auth');


/************************ Abonnement ************************/
Route::get('/abonnement', [AbonnementController::class, 'index'])->name('abonnement.index')->middleware('auth');
Route::post('/abonnement/create', [AbonnementController::class, 'create'])->name('abonnement.create')->middleware('auth');
Route::post('/abonnement/update', [AbonnementController::class, 'update'])->name('abonnement.update')->middleware('auth');
Route::delete('/abonnement/delete', [AbonnementController::class, 'delete'])->name('abonnement.delete')->middleware('auth');


/************************ Invite ************************/
Route::get('/invite', [InviteController::class, 'index'])->name('invite.index')->middleware('auth');
Route::post('/invite/create', [InviteController::class, 'create'])->name('invite.create')->middleware('auth');
Route::post('/invite/update', [InviteController::class, 'update'])->name('invite.update')->middleware('auth');
Route::delete('/invite/delete', [InviteController::class, 'delete'])->name('invite.delete')->middleware('auth');

