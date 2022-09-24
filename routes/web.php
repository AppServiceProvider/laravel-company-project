<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AboutController, BrandController, CategoryController, Multipics, MultipleImage, Portfolio, SliderController};
use Illuminate\Support\Facades\DB;
use App\Models\multipic;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Portfolio', [Portfolio::class, 'index'])->name('portfolio');

Route::get('/', function () {
    $brand=DB::table('brands')->get();
    $slider = DB::table('sliders')->get();
    $images = Multipic::all();
    
    return view('frontEnd.home.home',compact('brand','slider','images'));
})->name('index');

Auth::routes();
// Admin Home 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Admin Home 

// CATEGORY START 
Route::get('/category/all', [CategoryController::class, 'AllCat'])->middleware(['auth'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/soft/delete/{id}', [CategoryController::class, 'softDeleteController'])->name('softdelete');

// category soft delete 
Route::get('/restor/{id}', [CategoryController::class, 'categoryRestoreController'])->name('categoryRestore');
Route::get('/edit/{id}', [CategoryController::class, 'categoryEditController'])->name('categoryEdit');
Route::post('/category/update/{id}', [CategoryController::class, 'catagoryUpdateController'])->name('catagoryUpdate');
Route::get('/permanent/delete/{id}', [CategoryController::class, 'permanentDeleteController'])->name('permanentDelete');
// category soft delete end
// CATEGORY END 

// BRAND START 
Route::get('/brand/all', [BrandController::class, 'allBrandConroller'])->middleware(['auth'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'brandAddController'])->middleware(['auth'])->name('store.brand');
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);
Route::get('/brand/edit/{id}', [BrandController::class, 'brandEditController']);
Route::post('/brand/update/{id}', [BrandController::class, 'updateBrand']);
// BRAND END

//multiple Image
Route::get('/multi/image', [Multipics::class, 'Multpic'])->middleware(['auth'])->name('multipleImageIndex');
Route::post('/multi/add', [Multipics::class, 'StoreImg'])->name('store.image');
//multiple Image


// Slider Image Title & Description START
Route::get('/home/slider', [SliderController::class, 'SliderIndex'])->name('home.slider');
Route::get('/add/slider', [SliderController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [SliderController::class, 'StoreSlider'])->name('store.slider');
// Slider Image Title & Description End
