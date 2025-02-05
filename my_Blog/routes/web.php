<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postConyroller;
use App\Models\Post;

// Main welcome page route
Route::get('/', function () {
    return view('welcome'); // Ensure 'welcome.blade.php' exists in resources/views
});

// Authentication routes (Login, Register, etc.)
Auth::routes();

// Home route (Ensure HomeController exists in app/Http/Controllers)
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::Post('/posts/store',[postConyroller::class,'store'])->name('posts','store');
