<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsCRUDController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('rooms-datatable', [RoomsCRUDController::class, 'index']);
Route::post('store-room', [RoomsCRUDController::class, 'store']);
Route::post('edit-room', [RoomsCRUDController::class, 'edit']);
Route::post('delete-room', [RoomsCRUDController::class, 'destroy']);
