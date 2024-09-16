<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(TaskController::class)->group( function(){

    Route::get('taskget',  'index')->name('task_get');
    Route::get('taskcreate','create')->name('task_create');
    Route::get('taskshow','show')->name('task_show');
    Route::post('taskstore','store')->name('task_store');
    Route::get('taskedit/{id}', 'edit')->name('task_edit');
    Route::post('taskupdate/{id}', 'update')->name('task_update');
    Route::get('taskdelete/{id}','destroy')->name('task_delete');
    Route::get('cancel','cancel')->name('cancel');

});
//Auth::routes();


