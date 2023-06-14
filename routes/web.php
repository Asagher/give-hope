<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\UserController;



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
Route::prefix('dashboard')->middleware('auth')->group(function(){

    Route::get('/',[AdminDashboard::class,'index'])->name('dashboard');
    Route::get('/showCampaign',[AdminDashboard::class,'dd'])->name('dashboard/dd');
    Route::resource('users',UserController::class);
    Route::get('/create',[AdminDashboard::class,'campaign_create'])->name('dashboard/create-campagin');
    Route::get('/edit/{slug}',[AdminDashboard::class,'edit'])->name('dashboard/edit-campagin');
    Route::get('/ex_dep',[AdminDashboard::class,'ex_dep'])->name('dashboard/ex_dep');
});

Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::put('/campaign/{slug}', [AdminDashboard::class, 'storeDonation'])
    ->name('admin.storeDonation');
Route::resource('campaigns',CampaignsController::class);
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

