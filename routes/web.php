<?php

use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('console', ConsoleController::class)
->except(['show'])
->middleware('auth');

Route::resource('game', App\Http\Controllers\GameController::class)
->middleware('auth')
->except(['show']);

Route::resource('metadata', App\Http\Controllers\MetadataController::class)
->middleware('auth')
->except(['show']);

Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/generar-pdf', [ConsoleController::class, 'generarPdf'])->name('generar.pdf');
//API 
Route::post('/api/registro','App\Http\Controllers\UserController@register');
Route::post('/api/acceso','App\Http\Controllers\UserController@login');

Route::resource('/api/carros', 'App\Http\Controllers\CarController');


