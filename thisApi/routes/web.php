<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController AS UC;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/user', [UC::class, 'index'])->name('user.index');   
Route::post('/user', [UC::class, 'create'])->name('user.create');

Route::get('/user/{id}/edit', [UC::class, 'edit'])->name('user.edit');  // edit comes first
Route::put('/user/{id}', [UC::class, 'update'])->name('user.update');

Route::get('/user/{id}', [UC::class, 'show'])->name('user.show');       // show comes after edit
Route::delete('/user/{id}', [UC::class, 'destroy'])->name('user.destroy');