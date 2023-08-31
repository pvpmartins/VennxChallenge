<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\GlobalPosts;
use App\Livewire\ShowPost;
use App\Livewire\CreatePost;

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

// Route::get('/show-post/{postId}', ShowPost::class)->name('show.post');


Route::get('/post/{postId}', function ($postId) {
    return view('post', compact('postId'));
    
})->name('post.show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/posts', function () {
        return view('user');
    })->middleware(['auth', 'verified'])->name('user.posts');
    
    Route::get('/create-post', function () {
        return view('make-post-view');
    })->name('post.create');
});



Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
