<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\RecoverPassword;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\HomeController;
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

Route::get('/',[Login::class,'landingPage']);
Route::get('index',[Login::class,'landingPage']);
Route::get('about',[HomeController::class,'about']);
Route::get('plans',[HomeController::class,'plans']);
Route::get('terms',[HomeController::class,'terms']);
Route::get('terms',[HomeController::class,'terms']);
Route::get('services',[HomeController::class,'services']);
Route::get('faqs',[HomeController::class,'faqs']);
Route::get('faq',[HomeController::class,'faqs']);
Route::get('estate',[HomeController::class,'estate']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('loan',[HomeController::class,'loan']);
Route::get('privacy',[HomeController::class,'privacy']);
Route::get('legal',[HomeController::class,'legal']);
Route::get('buy-btc',[HomeController::class,'buyBtc']);
Route::get('register',[Register::class,'landingPage']);


