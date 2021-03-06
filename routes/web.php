<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeusersController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\QcategoryController;
use App\Http\Controllers\AcategoryController;
use App\Http\Controllers\ScategoryController;
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
})->name('home');
//login routs
Route::get('admin/login', [beusersController::class, 'login']);
//dashboard routs
Route::get('admin', [beusersController::class, 'index']);
//submit login routs
Route::post('admin/login', [beusersController::class, 'submit_login']);
//logout routs
Route::get('admin/logout', [beusersController::class, 'logout']);

Route::get('banner',[BannerController::class,'addBanner'])->name('banner.create');
Route::post('banner',[BannerController::class,'addBanner']);
Route::get('banners',[bannerController::class,'show'])->name('banner.show');

//Category routs
Route::get('category', [CategoryController::class, 'create'])->name('category.create');
Route::post('category', [CategoryController::class, 'store']);
Route::get('category/{id}', [CategoryController::class, 'edit']);
Route::patch('category/{id}', [CategoryController::class, 'update']);
Route::get('sub_category/{cat_id}', [HomeController::class, 'getSubCategories']);

Route::get('experts', [ExpertController::class, 'show'])->name('expert.show');
Route::get('expert', [ExpertController::class, 'create'])->name('expert.create');
Route::post('expert', [ExpertController::class, 'store']);
Route::get('expert/{id}', [ExpertController::class, 'edit']);
Route::patch('expert/{id}', [ExpertController::class, 'update']);
Route::delete('expert/{id}', [ExpertController::class, 'destroy']);
Route::get('expert/{country}/{category}/{sub_category}', [ExpertController::class, 'getTestimonialsByFilter']);

Route::get('testimonials', [TestimonialController::class, 'show'])->name('testimonial.show');
Route::get('testimonial', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::post('testimonial', [TestimonialController::class, 'store']);
Route::get('testimonial/{id}', [TestimonialController::class, 'edit']);
Route::patch('testimonial/{id}', [TestimonialController::class, 'update']);
Route::delete('testimonial/{id}', [TestimonialController::class, 'destroy']);

//Question category routes
Route::get('qcategory', [QcategoryController::class, 'create'])->name('qcategory.create');
Route::post('qcategory', [QcategoryController::class, 'store']);
Route::get('qcategory/{id}', [QcategoryController::class, 'edit']);
Route::patch('qcategory/{id}', [QcategoryController::class, 'update']);
Route::delete('qcategory/{id}', [QcategoryController::class, 'destroy']);

//Assignment category routes
Route::get('acategory', [AcategoryController::class, 'create'])->name('acategory.create');
Route::post('acategory', [AcategoryController::class, 'store']);
Route::get('acategory/{id}', [AcategoryController::class, 'edit']);
Route::patch('acategory/{id}', [AcategoryController::class, 'update']);
Route::delete('acategory/{id}', [AcategoryController::class, 'destroy']);

//Subject category  routes
Route::get('scategory', [ScategoryController::class, 'create'])->name('scategory.create');
Route::post('scategory', [ScategoryController::class, 'store']);
Route::get('scategory/{id}', [ScategoryController::class, 'edit']);
Route::patch('scategory/{id}', [ScategoryController::class, 'update']);
Route::delete('scategory/{id}', [ScategoryController::class, 'destroy']);
Route::get('scategory_qid/{qid}', [ScategoryController::class, 'getAidByQid']);