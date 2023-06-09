<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function () {
	
	Route::get('dashboard' , [DashboardController::class, 'index'] );
	
	// admin category route


    Route::controller(CategoryController::class)->group(function () {
		Route::get('category', 'index');
		Route::get('category/create', 'create');
		Route::post('category', 'store');


      // category curd operation

		Route::get('category/{category}/edit', 'edit');
	});

	
});




