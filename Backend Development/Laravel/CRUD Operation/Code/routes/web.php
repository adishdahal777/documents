<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //For the CRUD
    Route::get('/details', [UserController::class, 'index'])->name('details.index');
    Route::get('/details/create', [UserController::class, 'create'])->name('details.create');
    Route::post('/details/store', [UserController::class, 'store'])->name('details.store');
    // For Delete
    Route::get('/details/delete/{id}', [UserController::class, 'delete'])->name('details.delete'); //Dynamic Routing
    // For Edit
    Route::get('/details/edit/{id}', [UserController::class, 'edit'])->name('details.edit'); //Dynamic Routing
    Route::post('/details/update/{id}', [UserController::class, 'update'])->name('details.update'); //Dynamic Routing


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
