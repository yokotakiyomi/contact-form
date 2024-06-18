<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

use App\Http\Controllers\AdminController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::controller(ContactController::class)->name('confirm.')->group(function () {
    Route::post('/confirm', 'confirm')->name('indx');
});

Route::get('/register',[AdminController::class,'index']);
Route::post('/login',[AdminController::class, 'store']);
Route::post('/admin',[AdminController::class,'show']);