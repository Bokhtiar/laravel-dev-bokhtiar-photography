<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\ProfileController;
use App\Models\Service;
use App\Models\Profile;
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
    $servies = Service::all();
    $photos = Profile::where('role_id', 3)->get();
    return view('user.index', compact('servies', 'photos'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*settings*/
Route::get('dashboard/logout', [App\Http\Controllers\SettingsController::class, 'logout'])->name('dashboard.logout');
Route::resource('permission', PermissionController::class);
Route::resource('services', ServiceController::class);
Route::resource('gigs', GigController::class);
Route::resource('profiles', ProfileController::class);

Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'User' , "middleware"=>['auth','user']],function(){
    Route::get('/dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
});

Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'Admin' , "middleware"=>['auth','admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
});