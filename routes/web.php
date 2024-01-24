<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::latest()->paginate(4)
    ]);
})->name('home');

Route::view('manifesto', 'manifesto');

Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class)->middleware('auth');

// Route::resource('/dashboard', AdminController::class)->middleware(['auth', 'verified', 'can:admin'])->name('dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'can:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
