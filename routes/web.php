<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ManagementUserController;


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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Lukman Hakim",
        "email" => "lukman.hakim@polije.ac.id",
        "image" => "lukman.jpg"
    ]);
});




Route::get('/blog', [PostController::class, 'index']);

// Halaman single post
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/user',[ManagementUserController::class, 'index']);
//Route::resource('/user', '\App\Http\Controllers\ManagementUserController');

Route::group(['namespace' => 'Frontend'], function()
{
    Route::resource('/home', '\App\Http\Controllers\Frontend\HomeController');
});

Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('/dashboard', '\App\Http\Controllers\Backend\DashboardController');
    Route::resource('/pendidikan', '\App\Http\Controllers\Backend\PendidikanController');
    Route::resource('/pengalaman_kerja', '\App\Http\Controllers\Backend\PengalamanKerjaController');

});
