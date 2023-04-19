<?php

use App\Http\Controllers\BlogController;
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

Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/{slug}-{id}', 'show')->where([
        'slug' => '[a-z0-9\-]+',
        'id' => '[0-9]+'
    ])->name('show');

    Route::get('/{id}/edit', 'edit')->where([
        'id' => '[0-9]+'
    ])->name('edit');
});
