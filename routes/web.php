<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(TodosController::class)->group(function () {
    Route::get('/todos', 'index')->name('todos.index');
    Route::get('/todos/create', 'create')->name('todos.create');
    Route::post('/todos/store', 'store')->name('todos.store');
    Route::get('/todos/{todo}', 'show')->name('todos.show');
    Route::get('/todos/{todo}/complete', 'complete')->name('todos.complete');
    Route::get('/todos/{todo}/edit', 'edit')->name('todos.edit');
    Route::patch('/todos/{todo}/update', 'update')->name('todos.update');
    Route::delete('/todos/{todo}/delete', 'destroy')->name('todos.delete');
});
