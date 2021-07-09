<?php

use App\Http\Controllers\Backend\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Models\Category;
use App\Models\comments;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('Inicio');


Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');
Route::get('blog/{post:id}',[PostController::class, 'post'])->name('post');

Route::group(['middleware' => 'auth'], function () {
Route::get('posts',[PostsController::class, 'index'])->name('index');
Route::get('posts/crear',[PostsController::class, 'create'])->name('create');
Route::post('store',[PostsController::class, 'store'])->name('post.store');
Route::get('posts/{post}/editar',[PostsController::class,'edit'])->name('edit');
Route::post('posts/update/{post}',[PostsController::class,'update'])->name('update');
Route::delete('posts/{post}', [PostsController::class,'destroy'])->name('destroy');

Route::get('posts/course',[PostsController::class, 'course'])->name('course');
Route::get('posts/eventos',[PostsController::class, 'event'])->name('event');
Route::get('posts/historia',[PostsController::class, 'story'])->name('story');


Route::get('post/{category}/Category',[CategoryController::class,'show'])->name('listCategory');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/post/{post}/comment',[CommentsController::class, 'store'])->name('comment.store');

});