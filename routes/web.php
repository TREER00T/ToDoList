<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HomeController;

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todos/create', [TodoController::class, 'store']);
Route::put('/todos/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
Route::delete('/todos/{todo}/delete', [TodoController::class, 'delete']);

Route::get('/', [UserController::class, 'index']);
Route::post('/upload', [UserController::class, 'uploadAvatar']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();


