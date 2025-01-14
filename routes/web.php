<?php
use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/comments/morning', [GreetingController::class, 'morning']);
Route::get('/comments/afternoon', [GreetingController::class, 'afternoon']);
Route::get('/comments/evening', [GreetingController::class, 'evening']);
Route::get('/comments/night', [GreetingController::class, 'night']);
Route::get('/comments/freeword/{message}', [GreetingController::class, 'freeword']);
Route::get('/comments/random', [GreetingController::class, 'random']);
