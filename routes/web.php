<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController; // <-- ADD THIS LINE!
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/form', [UserController::class, 'showForm']);

Route::post('/save', [UserController::class, 'saveUser'])->name('save');

Route::get('/users', [UserController::class, 'index']);

Route::get('/delete/{id}', [UserController::class, 'deleteUser']);

Route::get('/edit/{id}', [UserController::class, 'renderupdate']);

Route::post('/update/{id}', [UserController::class, 'updateUser']);

});
Route::middleware(['auth'])->group(function () {

    Route::get('/employees', [EmployeeController::class,'index']);

    Route::get('/employees/create', [EmployeeController::class,'create']);

    Route::post('/employees/store', [EmployeeController::class,'store']);

    Route::get('/employees/edit/{id}', [EmployeeController::class,'edit']);

    Route::post('/employees/update/{id}', [EmployeeController::class,'update']);

    Route::get('/employees/delete/{id}', [EmployeeController::class,'delete']);

});

require __DIR__.'/auth.php';
