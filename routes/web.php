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

//tasks 
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/add', [App\Http\Controllers\TaskController::class, 'add'])->name('tasks.add');
Route::post('/tasks/delete/{task}', [App\Http\Controllers\TaskController::class, 'delete'])->name('tasks.delete');
Route::get('/tasks/edit/{task}', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/update/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');

Route::post('/koja', [App\Http\Controllers\TaskController::class, 'koja'])->name('koja');