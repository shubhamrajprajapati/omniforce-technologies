<?php

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
})->name('home');



Route::prefix('admin')->group(function(){
    Route::view('/', 'admin.index')->name('admin');
    Route::controller(MenuController::class)->group(function(){
        Route::get('/menu', 'read')->name('admin-menu');
        Route::post('/menu', 'create')->name('admin-menu');
        Route::put('/menu', 'update')->name('admin-menu');
        Route::put('/menu', 'delete')->name('admin-menu');
    });

});

