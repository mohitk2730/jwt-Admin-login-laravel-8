<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

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
    return view('welcome');
});
Route::get('/admin/login', function () {
    return view('Admin.auth.login');
});

Route::post('admin/login',[AdminAuthController::class,'adminLogin'])->name('admin.login');
Route::get('admin/logout',[AdminAuthController::class,'adminLogout'])->name('admin.logout');
// Route::prefix('Admin')->middleware(['auth', 'can:isDepartment'])->group(function () {
  

// });
Route::prefix('admin')->middleware(['auth', 'can:isAdmin'])->group(function () {
  
    Route::get('/dashboard', function () {
         echo"Dashbord";
    });
});