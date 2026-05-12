<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "admin" middleware group. Enjoy building your admin routes!
|
*/

Route::prefix('/admin')->group(function () {

Route::controller(AdminController::class)->group(function(){
    Route::get('/', 'index')->name('admin.index');
});


});
