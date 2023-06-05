<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function (){
    return view('welcome');
});

Route::get('todos', [TodosController::class, 'index']);
