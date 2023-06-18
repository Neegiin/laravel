<?php

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
    return view('welcome');
});

Route::get('/articles',function() {
    return 'Articles List';
});

Route::get('/lessons',function() {
    return 'Lessons List';
});

Route::get('/gallery',function() {
    return 'Gallery';
});

Route::prefix('admin')->group(function(){

    Route::get('/admin1',function() {
        return 'Admin 1';
    });
    Route::get('/admin2',function() {
        return 'Admin 2';
    });
    Route::get('/admin3',function() {
        return 'Admin 3';
    });

});