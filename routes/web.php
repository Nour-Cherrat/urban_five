<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\ServiceController;
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
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('register');

/************************ Admin ************************/
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');


/************************ Classe ************************/
Route::get('/cours', [ClasseController::class, 'index'])->name('cours.index')->middleware('auth');
Route::post('/cours/create', [ClasseController::class, 'create'])->name('cours.create')->middleware('auth');
Route::post('/cours/update', [ClasseController::class, 'update'])->name('cours.update')->middleware('auth');
Route::delete('/cours/delete', [ClasseController::class, 'delete'])->name('cours.delete')->middleware('auth');
Route::get('/cours/details', [ClasseController::class, 'details'])->name('cours.details')->middleware('auth');


/************************ Adherent ************************/
Route::get('/adherent', [AdherentController::class, 'index'])->name('adherent.index')->middleware('auth');
Route::post('/adherent/create', [AdherentController::class, 'create'])->name('adherent.create')->middleware('auth');
Route::post('/adherent/update', [AdherentController::class, 'update'])->name('adherent.update')->middleware('auth');
Route::delete('/adherent/delete', [AdherentController::class, 'delete'])->name('adherent.delete')->middleware('auth');
Route::post('/adherent/update-status/{id}', [AdherentController::class, 'updateStatus'])->name('adherent.updateStatus');
Route::get('/adherent/profile', [AdherentController::class, 'profile'])->name('adherent.profile')->middleware('auth');


/************************ Coach ************************/
Route::get('/coach', [CoachController::class, 'index'])->name('coach.index')->middleware('auth');
Route::post('/coach/create', [CoachController::class, 'create'])->name('coach.create')->middleware('auth');
Route::post('/coach/update', [CoachController::class, 'update'])->name('coach.update')->middleware('auth');
Route::delete('/coach/delete', [CoachController::class, 'delete'])->name('coach.delete')->middleware('auth');
Route::get('/coach/profile', [CoachController::class, 'profile'])->name('coach.profile')->middleware('auth');


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
Route::get('/invite/profile', [InviteController::class, 'profile'])->name('invite.profile')->middleware('auth');

/************************ Contact ************************/
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index')->middleware('auth');
Route::post('/contact/create', [ContactController::class, 'create'])->name('contact.create')->middleware('auth');
Route::delete('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete')->middleware('auth');
Route::get('/contact/details', [ContactController::class, 'details'])->name('contact.details')->middleware('auth');


/************************ Activite ************************/
Route::get('/activite', [ActiviteController::class, 'index'])->name('activite.index')->middleware('auth');
Route::post('/activite/create', [ActiviteController::class, 'create'])->name('activite.create')->middleware('auth');
Route::post('/activite/update', [ActiviteController::class, 'update'])->name('activite.update')->middleware('auth');
Route::delete('/activite/delete', [ActiviteController::class, 'delete'])->name('activite.delete')->middleware('auth');


/************************ Salle ************************/
Route::get('/salle', [SalleController::class, 'index'])->name('salle.index')->middleware('auth');
Route::post('/salle/create', [SalleController::class, 'create'])->name('salle.create')->middleware('auth');
Route::post('/salle/update', [SalleController::class, 'update'])->name('salle.update')->middleware('auth');
Route::delete('/salle/delete', [SalleController::class, 'delete'])->name('salle.delete')->middleware('auth');


/************************ Service ************************/
Route::get('/service', [ServiceController::class, 'index'])->name('service.index')->middleware('auth');
