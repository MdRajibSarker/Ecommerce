<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('frontend.welcome1');
// });
//backend route 

Route::get('/admins', [AdminController::class, 'index'])->name('admin.login');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard'); 
Route::post('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard'); 




//frontend route 
Route::get('/', [HomeController::class, 'index']);

