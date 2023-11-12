<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;

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

Route::get('/', [ListingsController::class, 'index']);
Route::get('/listing/create', [ListingsController::class, 'create']);
Route::get('/listing/{id}/edit', [ListingsController::class, 'edit']);
Route::put('/listing/{$id}', [ListingsController::class, 'update']);
Route::post('/listing', [ListingsController::class, 'store']);
Route::get('/listing/{id}', [ListingsController::class, 'show']);

