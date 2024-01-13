<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/db-test', 'Web\SiteController@getall');
Route::get('/db-test2', function(){
    
    return dd(DB::connection()->getPdo());
});

Route::get('/slug', function(){
    
    return dd(Str::slug("ja pierdole"));
    
});

Route::prefix('/tasks')->group(function(){

    //index
    Route::get('/', function(){
        
    })->name('tasks.index');

    //add
    Route::get('/add', function(){

    })->name('tasks.add');

    //store
    Route::post('/store', function(){

    })->name('tasks.store');

    //{task}
    Route::get('/{task}', function(Task $task){
        dd($task);
    })->name('tasks.show');

    //{task}/edit
    Route::get('/{task}/edit', function(){

    })->name('tasks.edit');

    //{task}
    Route::put('/{task}', function(){

    })->name('tasks.update');

    //{task}
    Route::delete('/{task}', function(){

    })->name('tasks.delete');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
