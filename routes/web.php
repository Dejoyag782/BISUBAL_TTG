<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsCRUDController;
use App\Http\Controllers\CourseCRUDController;
use App\Http\Controllers\ProfessorsCRUDController;

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


Route::middleware(['auth'])->group(function () {
    
    
    Route::get('rooms', [RoomsCRUDController::class, 'index']);
    Route::post('store-room', [RoomsCRUDController::class, 'store']);
    Route::post('show-room', [RoomsCRUDController::class, 'show']);
    Route::post('edit-room', [RoomsCRUDController::class, 'edit']);
    Route::post('delete-room', [RoomsCRUDController::class, 'destroy']);

   
    Route::get('course', [CourseCRUDController::class, 'index']);
    Route::post('store-course', [CourseCRUDController::class, 'store']);
    Route::post('show-course', [CourseCRUDController::class, 'show']);
    Route::post('edit-course', [CourseCRUDController::class, 'edit']);
    Route::post('delete-course', [CourseCRUDController::class, 'destroy']);

    
    Route::get('professors', [ProfessorsCRUDController::class, 'index']);
    Route::post('store-professor', [ProfessorsCRUDController::class, 'store']);
    Route::post('show-professor', [ProfessorsCRUDController::class, 'show']);
    Route::post('edit-professor', [ProfessorsCRUDController::class, 'edit']);
    Route::post('delete-professor', [ProfessorsCRUDController::class, 'destroy']);
});