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

Route::get('/todo/delete/{id}', 
    [TodoController::class,
    'delete'
]);

Route::get('/todo/update/{id}', 
    [TodoController::class,
    'update'
]);