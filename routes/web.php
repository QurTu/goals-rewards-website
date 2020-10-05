<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//goals 
Route::get('/goals', [App\Http\Controllers\GoalController::class, 'index'])->name('goals.index');
Route::get('/goals/create', [App\Http\Controllers\GoalController::class, 'create'])->name('goals.create');
Route::post('/goals/add', [App\Http\Controllers\GoalController::class, 'add'])->name('goals.add');
Route::post('/goals/delete/{goal}', [App\Http\Controllers\GoalController::class, 'delete'])->name('goals.delete');
Route::get('/goals/edit/{goal}', [App\Http\Controllers\GoalController::class, 'edit'])->name('goals.edit');
Route::post('/goals/update/{goal}', [App\Http\Controllers\GoalController::class, 'update'])->name('goals.update');
