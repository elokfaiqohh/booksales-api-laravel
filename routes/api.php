<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');


// ----------------------
// PUBLIC ROUTES (Tanpa Login)
// ----------------------
Route::get('/authors', [AuthorController::class, 'index']);  // Read All
Route::get('/authors/{id}', [AuthorController::class, 'show']); // Show Detail

Route::get('/genres', [GenreController::class, 'index']);  // Read All
Route::get('/genres/{id}', [GenreController::class, 'show']); // Show Detail

Route::get('/books', [BookController::class, 'index']); // Semua bisa lihat buku
Route::get('/books/{id}', [BookController::class, 'show']); // Detail buku

Route::get('/transactions', [TransactionController::class, 'index']); // Semua bisa lihat buku
Route::get('/transactions/{id}', [TransactionController::class, 'show']); 

// ----------------------
// PROTECTED ROUTES (Admin Only)
// ----------------------
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {

    // Books: Create, Update, Destroy
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);

    // Authors: Create, Update, Destroy
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{id}', [AuthorController::class, 'update']);
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);

    // Genres: Create, Update, Destroy
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{id}', [GenreController::class, 'update']);
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']);
});


// Route::get('/books', [BookController::class, 'index']);
// Route::post('/books', [BookController::class, 'store']);
// Route::get('/books/{id}', [BookController::class, 'show']);
// Route::post('/books/{id}', [BookController::class, 'update']);
// Route::delete('/books/{id}', [BookController::class, 'destroy']);

// Route::get('/genres', [GenreController::class, 'index']);
// Route::post('/genres', [GenreController::class, 'store']);
// Route::get('/genres/{id}', [GenreController::class, 'show']);
// Route::post('/genres/{id}', [GenreController::class, 'update']);
// Route::delete('/genres/{id}', [GenreController::class, 'destroy']);

// Route::get('/authors', [AuthorController::class, 'index']);
// Route::post('/authors', [AuthorController::class, 'store']);
// Route::get('/authors/{id}', [AuthorController::class, 'show']);
// Route::post('/authors/{id}', [AuthorController::class, 'update']);
// Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);