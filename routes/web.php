<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\signupController;
use App\Models\signupModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
});

// Route::post('/register-user',[signupController::class,'save']);
Route::view('/signup', '/layouts.signup');
Route::view('/login-user', '/layouts.login');
Route::view('/categories', '/layouts.categories');
Route::view('/detail', '/layouts.blog-details');
Route::view('/watching', '/layouts.ani-watch');
Route::view('/anime-detail', '/layouts.ani-details');
Route::view('/blog', '/layouts.blog');
Route::view('/contact', '/layouts.contact');
Route::view('/manga1-details', '/layouts.manga1-details');


Route::post('/register-user', [signupController::class, 'save']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/ad-dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.ad-dashboard');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes('admin.ad-dashboard');
});
