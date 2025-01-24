<?php

use App\Http\Controllers\AffectationController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\FonctionObtenueController;
use App\Http\Controllers\MutationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/index', function (){
    return view('index');
})->middleware(['auth', 'verified'])->name('index');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('affectations', AffectationController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('mutations',MutationController::class);
    Route::resource('directions', DirectionController::class);
    Route::resource('domaines', DomaineController::class);
    Route::resource('fonctions', FonctionController::class);
    Route::resource('fonctions-obtenues', FonctionObtenueController::class);
    Route::resource('agents', AgentController::class);
    });

Route::middleware(['auth','verified'])->group(function(){
    Route::resource('/agents',AgentController::class);
});

require __DIR__.'/auth.php';
