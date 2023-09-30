<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
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
})->name('home');

Route::get('/posts/{post}', [BlogController::class, 'show'])->name('blog.post-show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::name('blog.')->group(function () {
    Route::get('/posts/new', [BlogController::class, 'create'])->name('post-create');

    Route::post('/posts/new', [BlogController::class, 'store'])->name('post-store');
    Route::post('/category', [BlogController::class, 'createCategory'])->name('category-create');
    Route::post('/tag', [BlogController::class, 'createTag'])->name('tag-create');

    Route::patch('/posts/{post}/edit', [BlogController::class, 'edit'])->name('post-edit');

    Route::delete('/posts/{post}', [BlogController::class, 'delete'])->name('post-delete');
    Route::delete('/category/{category}', [BlogController::class, 'deleteCategory'])->name('category-delete');
    Route::delete('/tag/{tag}', [BlogController::class, 'deleteTag'])->name('tag-delete');
})->middleware('auth');

Route::get('/projects/order-system', function () {
    return view('projects.ordersystem');
})->name('order-system');

Route::get('/projects', function () {
    return redirect('/#projects');
})->name('projects');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// for deployment purposes => 'php artisan storage:link' alternative
Route::get('/storage/{extra}', function ($extra) {
    return redirect('/public/storage/$extra');
})->where('extra', '.*');
