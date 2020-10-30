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



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\GoalController::class, 'index'])->name('home.index');

//goals 
Route::get('/goals', [App\Http\Controllers\GoalController::class, 'index'])->name('goals.index');
Route::post('/goals/add', [App\Http\Controllers\GoalController::class, 'add'])->name('goals.add');
Route::post('/goals/delete/{goal}', [App\Http\Controllers\GoalController::class, 'delete'])->name('goals.delete');
Route::get('/goals/edit/{goal}', [App\Http\Controllers\GoalController::class, 'edit'])->name('goals.edit');
Route::post('/goals/update/{goal}', [App\Http\Controllers\GoalController::class, 'update'])->name('goals.update');

//tasks 
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks/add', [App\Http\Controllers\TaskController::class, 'add'])->name('tasks.add');
Route::post('/tasks/delete/{task}', [App\Http\Controllers\TaskController::class, 'delete'])->name('tasks.delete');
Route::get('/tasks/edit/{task}', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/update/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');

//rewards
Route::get('/rewards', [App\Http\Controllers\RewardController::class, 'index'])->name('rewards.index');
Route::post('/rewards/add', [App\Http\Controllers\RewardController::class, 'add'])->name('rewards.add');
Route::post('/rewards/delete/{reward}', [App\Http\Controllers\RewardController::class, 'delete'])->name('rewards.delete');
Route::get('/rewards/edit/{reward}', [App\Http\Controllers\RewardController::class, 'edit'])->name('rewards.edit');
Route::post('/rewards/update/{reward}', [App\Http\Controllers\RewardController::class, 'update'])->name('rewards.update');

//home
Route::get('/home', [App\Http\Controllers\FrontEndController::class, 'home'])->name('home.index');

Route::get('/profile', [App\Http\Controllers\FrontEndController::class, 'profile'])->name('profile.index');

//Tasks added to To Do

Route::post('/tasksAdd/addList', [App\Http\Controllers\TaskAddController::class, 'addFromList'])->name('tasks.addFromList');
Route::post('/tasksAdd/add', [App\Http\Controllers\TaskAddController::class, 'add'])->name('tasksAdd.add');
Route::post('/tasksAdd/delete/{taskAdd}', [App\Http\Controllers\TaskAddController::class, 'delete'])->name('TaskAdd.delete');
Route::post('/tasksAdd/done/{taskAdd}', [App\Http\Controllers\TaskAddController::class, 'done'])->name('TaskAdd.done');

// taking rewards - a.k.a adding to history
Route::post('/takeReward/new', [App\Http\Controllers\HistoryController::class, 'TakeRewardNew'])->name('takeReward.new');
Route::post('/takeReward/list', [App\Http\Controllers\HistoryController::class, 'TakeRewardList'])->name('takeReward.list');
Route::get('/history', [App\Http\Controllers\FrontEndController::class, 'history'])->name('history.index');
Route::get('/histroy/dates', [App\Http\Controllers\HistoryController::class, 'history'])->name('history.list');

Route::get('/show', [App\Http\Controllers\TaskAddController::class, 'show'])->name('whow');