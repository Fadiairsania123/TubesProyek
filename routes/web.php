<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RestoController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\ContactController;
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
    return redirect('home');
});

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.action');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/register', [LoginController::class,'register'])->name('register.action');


// verifikasi registrasi
Route::get('/activation', [LoginController::class,'activation'])->name('activation');
Route::get("verify-email/{user_token}", [LoginController::class,'verify']) -> name('verifyLink');

// Forgot Password
Route::get('/forgot', [LoginController::class,'forgot'])->name('forgot');
Route::post('/forgot',[LoginController::class,'reset_action'])->name('forgot.action');
Route::get('/forgot-confirm',[LoginController::class,'confirm_email'])->name('confirm_email');
Route::get("verify-email-reset/{user_token}", [LoginController::class,'verifyReset']) -> name('verifyLinkReset');
Route::post("verify-email-reset", [LoginController::class,'reset_password']) -> name('verifyLinkResetAction');
Route::get("/home",[HomeController::class,"index"])->name('home');
Route::get("/detail/{id}",[HomeController::class,"detail"])->name('detail');
Route::get("/about",[AboutController::class,"index"])->name('about');


Route::group(['middleware' => ["Login"]], function () {


});

Route::group(['middleware' => ["Admin"],'prefix' => 'admin'], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboardadmin');

    Route::resource('resto', RestoController::class);
    Route::get('resto/delete/{id}', [RestoController::class,'destroy'])->name('resto.hapus');
    Route::resource('menu', MenuController::class);
    Route::get('resto/{id}/menu', [MenuController::class,'menu'])->name('menu.resto');
    Route::get('resto/{id}/menu/create', [MenuController::class,'menu_create'])->name('menu.resto.create');
    Route::post('resto/{id}/menu/create', [MenuController::class,'menu_store'])->name('menu.resto.store');
    Route::get('menu/delete/{id}', [MenuController::class,'destroy'])->name('menu.hapus');

});

Route::get("/contact",[ContactController::class,"index"])->name('contact');
Route::post("/contact", [ContactController::class,"store"])->name('contact.store');
