<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FrontController;


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


Route::get('/',[FrontController::class,'index']);



Route::get('admin/blogs/create',[BlogController::class,'index'])->name('admin.blogs.create');

Route::post('blogs/store',[BlogController::class,'store']);

Route::get('admin/blogs/table',[BlogController::class,'table'])->name('admin.blogs.table');

Route::get('admin/blogs/edit/{id}',[BlogController::class,'edit'])->name('admin.blogs.edit');
Route::post('admin/blogs/update/{id}',[BlogController::class,'update'])->name('admin.blogs.update');

Route::get('admin/blogs/delete/{id}',[BlogController::class,'delete'])->name('admin.blogs.delete');

Route::get('admin/category/create',[CategoryController::class,'index'])->name('admin.category.create');
Route::post('store',[CategoryController::class,'store']);
Route::get('admin/category/table',[CategoryController::class,'table'])->name('admin.category.table');
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::post('admin/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');



Route::get('/detail/{id}',[FrontController::class,'detail'])->name('detail');
