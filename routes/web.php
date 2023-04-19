<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

Route::get('/todo', 
    [TodoController::class,
    'home'
]);

Route::get('/todo/create', 
    [TodoController::class,
    'create'
]);

Route::post('store-form', 
    [TodoController::class,
    'store'])->name('store');

Route::get('/todo/delete/{id}', 
    [TodoController::class,
    'delete'
]);

Route::get('/todo/update/{id}', 
    [TodoController::class,
    'update'
]);

Route::post('todo/change-details/{id}',
    [TodoController::class,'changedetails'])
    ->name('changedetails');

Route::get('/todo/complete/{id}', 
    [TodoController::class,'complete'])
    ->name('complete');

Route::get('/todo/ongoing/{id}', 
    [TodoController::class,
    'ongoing'])
    ->name('ongoing');