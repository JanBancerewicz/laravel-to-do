<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

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

Route::namespace('Web')->group(function()
{

    Route::get('/', 'SiteController@index')->name('index');
    
    Route::get('/db-test', 'SiteController@getall');
    Route::get('/db-test2', function(){
    
        return dd(DB::connection()->getPdo());
    });


    Route::prefix('/tasks')->group(function(){

        //index
        Route::get('/','TaskController@index')->name('tasks.index');
    
        //add
        Route::get('/add','TaskController@index')->name('tasks.add');
    
        //store
        Route::post('/store','TaskController@index')->name('tasks.store');
    
        //{task}
        Route::get('/{task}','TaskController@index')->name('tasks.show');
    
        //{task}/edit
        Route::get('/{task}/edit','TaskController@index')->name('tasks.edit');
    
        //{task}
        Route::put('/{task}','TaskController@index')->name('tasks.update');
    
        //{task}
        Route::delete('/{task}','TaskController@index')->name('tasks.delete');
    });


});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
