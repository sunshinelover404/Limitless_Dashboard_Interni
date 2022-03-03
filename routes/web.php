<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('/admin/layouts/app');
});
Route::get('/dashboard', function () {
    return view('/admin/layouts/dashboard');
});
Route::get('/lms', function () {
    return view('/admin/layouts/lms');
}); 

Route::resource('/products', ProductController::class);


