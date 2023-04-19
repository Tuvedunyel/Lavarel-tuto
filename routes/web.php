<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', function (): View 
    {
        $post = Post::paginate(25);
        return view('blog.index', [
            'posts' => $post
        ]);
    })->name('index');

    Route::get('/{slug}-{post}', function() 
    {
        return 'Hello post';
    })->name('show');
});
