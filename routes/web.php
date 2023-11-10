<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DarazController;
use App\Http\Controllers\crud;



Route::get('/',[DarazController::class,'HomePage']);
Route::get('/about',[DarazController::class,'about']);
Route::get('/service',[DarazController::class,'service']);
Route::get('/contact',[DarazController::class,'contact']);

// routes for crud
Route::post('/insert',[crud::class,'OnInsert']);

// route for select data 

Route::get('/view',[crud::class,'OnSelect']);

// for delete
Route::get('/delete/{id}',[crud::class,'OnDelete']);

// for edit
Route::get('/edit/{id}',[crud::class,'OnEdit']);
Route::post('/update/{id}',[crud::class,'OnUpdate']);