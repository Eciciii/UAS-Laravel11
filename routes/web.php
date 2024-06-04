<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// pemanggilan view
// route::get('/halo', function(){
//     return view('coba.halo');
// });


// pemanggilan controller
route::get('/halo', [HaloController::class, 'cici']);

// route::get('/todo', function(){
//     return view('todo.app');
// });

route::get('/todo', [TodoController::class, 'index'])->name('todo');
route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');
route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.delete');