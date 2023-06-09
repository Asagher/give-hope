<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\AdminDashboard;


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

Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('dashboard',[AdminDashboard::class,'index'])->name('dashboard');
Route::get('dashboard/showCampaign',[AdminDashboard::class,'dd'])->name('dashboard/dd');
Route::get('dashboard/create',[AdminDashboard::class,'campaign_create'])->name('dashboard/create-campagin');
Route::get('dashboard/edit/{slug}',[AdminDashboard::class,'edit'])->name('dashboard/edit-campagin');




Route::resource('campaigns',CampaignsController::class);
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

