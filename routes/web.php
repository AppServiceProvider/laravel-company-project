<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AboutController,CategoryController };
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

// Category Controller 
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');

Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/soft/delete/{id}', [CategoryController::class, 'softDeleteController'])->name('softdelete');

Route::get('/permanent/delete/{id}', [CategoryController::class, 'permanentDeleteController'])->name('permanentDelete');



Route::get('/restor/{id}', [CategoryController::class, 'categoryRestoreController'])->name('categoryRestore');


Route::get('/edit/{id}', [CategoryController::class, 'categoryEditController'])->name('categoryEdit');

Route::post('/category/update/{id}', [CategoryController::class, 'catagoryUpdateController'])->name('catagoryUpdate');

Route::put('/edit/{id}', [App\Http\Controllers\Dashboard::class, 'updatePostContro'])->middleware(['auth'])->name('update-post'); 
