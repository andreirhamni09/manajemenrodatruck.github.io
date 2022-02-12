<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TruckController;


Route::prefix('')->group(function(){
    Route::get('/', function(){
        return view('dashboard');
    });
});