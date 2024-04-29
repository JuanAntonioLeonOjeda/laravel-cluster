<?php

use App\Http\Controllers\PetController;
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

Route::get('/cluster', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return view('hello');
});

Route::get('/reboot/test', function() {
    return view('reboot');
});

Route::get('/pets', [PetController::class, 'getAllPets']);

Route::get('/pets/{id}', [PetController::class, 'getOnePet']);

