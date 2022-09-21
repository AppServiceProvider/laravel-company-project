<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AboutController, BrandController, CategoryController };


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category Controller 
Route::get('/category/all', [CategoryController::class, 'AllCat'])->middleware(['auth'])->name('all.category');

Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/soft/delete/{id}', [CategoryController::class, 'softDeleteController'])->name('softdelete');

Route::get('/permanent/delete/{id}', [CategoryController::class, 'permanentDeleteController'])->name('permanentDelete');



Route::get('/restor/{id}', [CategoryController::class, 'categoryRestoreController'])->name('categoryRestore');


Route::get('/edit/{id}', [CategoryController::class, 'categoryEditController'])->name('categoryEdit');

Route::post('/category/update/{id}', [CategoryController::class, 'catagoryUpdateController'])->name('catagoryUpdate');

Route::put('/edit/{id}', [App\Http\Controllers\Dashboard::class, 'updatePostContro'])->middleware(['auth'])->name('update-post'); 

// BRAND START 

Route::get('/brand/all', [BrandController::class, 'allBrandConroller'])->middleware(['auth'])->name('all.brand');

Route::post('/brand/add', [BrandController::class, 'brandAddController'])->middleware(['auth'])->name('store.brand');

// BRAND END
