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




// Route::get('produkte/getrocknete-früchtet','front\HomeController@showCategory')->name('getrocknete-früchtet');
// Route::get('category/{productCategory:slug}' , 'front\HomeController@showProducts')->name('category.showProduct');
// Route::get('products/freeze-dried/apfel','front\HomeController@datailProduct');
Route::get('/clear', function() {
    Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
return "Cleared!";
});
Route::prefix('admin')->namespace('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('product-category', 'ProductCategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('ean', 'EanController');
    Route::resource('recipe','RecipeController');
    Route::resource('nutrition-category','NutritionCategoryController');
    Route::resource('nutrition','NutritionController');
    Route::get('deleteImage/{id}','ProductController@deleteImage')->name('product.deleteImage');

});
Route::namespace('front')->group(function(){
    Route::get('/','HomeController@index')->name('home');
    Route::get('produkte/{slug}','HomeController@showCategory')->name('category.detail');
    Route::get('produktdetail/{id}/{slug}' , 'HomeController@detailProduct')->name('product.detail');
    Route::get('{page}','HomeController@showPage')->name('showPage');
});

