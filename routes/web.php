<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonyvController;


Route::get('/', [KonyvController::class,'index'])->name('konyvadatlap');
Route::post('/',[KonyvController::class,'rogzites']);
Route::get('/konyv-lista',[KonyvController::class,'lista'])->name('konyvlista');



