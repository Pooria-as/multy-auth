<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\Presets\React;

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
//user pannel
Route::get('/', function () { return view('welcome');});
Route::get("user/logOut","HomeController@LogOut")->name("user.logout");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin panel
Route::get("admin/home","AdminController@index")->name("admin.home");
Route::get("admin","Admin\LoginController@showLoginForm")->name("admin.showLoginForm");
Route::get("admin/logout","AdminController@logout")->name("admin.logout");
// Route::post("admin","Admin\LoginController@logIn");


Auth::routes();

