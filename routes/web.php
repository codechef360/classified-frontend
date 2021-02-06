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

#Unathenticated user
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/view-advert/{slug}', [App\Http\Controllers\HomeController::class, 'viewAdvert'])->name('view-advert');
Route::get('/contact-vendor/{slug}', [App\Http\Controllers\HomeController::class, 'contactVendor'])->name('contact-vendor');

Auth::routes();
Route::get('/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
#Authenticated user
Route::get('/marketplace', [App\Http\Controllers\MarketplaceController::class, 'index'])->name('marketplace');

#Ads routes
Route::get('/post-ads', [App\Http\Controllers\AdsController::class, 'showPostAdsForm'])->name('post-ads');
Route::post('/post-ads', [App\Http\Controllers\AdsController::class, 'postAds']);
Route::post('/initialize-defaults', [App\Http\Controllers\AdsController::class, 'initializeDefaults']);
Route::post('/get-subcategories', [App\Http\Controllers\AdsController::class, 'getSubcategories']);
Route::post('/get-areas', [App\Http\Controllers\AdsController::class, 'getAreas']);

Route::get('/my-adverts', [App\Http\Controllers\AdsController::class, 'myAdverts'])->name('my-adverts');
Route::get('/advert/view/{slug}', [App\Http\Controllers\AdsController::class, 'advertDetail'])->name('advert-detail');
Route::post('/leave-comment', [App\Http\Controllers\AdsController::class, 'leaveComment'])->name('leave-comment');
Route::post('/add-to-wishlist', [App\Http\Controllers\AdsController::class, 'addToWishlist']);
Route::get('/wishlist', [App\Http\Controllers\AdsController::class, 'wishlist'])->name('wishlist');
//Route::post('/initialize-subcategories', [App\Http\Controllers\AdsController::class, 'initializeSubcategories']);

#Marketplace routes
//Route::get('/marketplace', [App\Http\Controllers\MarketplaceController::class, 'marketplace'])->name('marketplace');
