<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Managelogo;
use App\Http\Controllers\SliderController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontendController::class,'index'])->name('front.homepage');
Route::get('about', [App\Http\Controllers\FrontendController::class,'about']);
Route::get('services', [App\Http\Controllers\FrontendController::class,'services']);
Route::get('contact', [App\Http\Controllers\FrontendController::class,'contact'])->name('contact.page');
//add appoint 
Route::post('Inquries', [App\Http\Controllers\FrontendController::class,'home_Inquries'])->name('store.inquries');


Auth::routes();
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home')->middleware('isUser');
Route::group(['prefix'=>'user', 'middleware'=>['auth','isUser']], function(){
Route::get('file-status',[App\Http\Controllers\UserController::class, 'status']);
});
Route::group(['prefix'=>'admin', 'middleware'=>['auth','isAdmin']], function(){
Route::get('dashboard',[App\Http\Controllers\AdminController::class,'index']);
Route::get('Inquries',[App\Http\Controllers\AdminController::class,'pending'])->name('visitor.Inquries');
Route::get('completed',[App\Http\Controllers\AdminController::class,'completed']);
Route::get('rejected',[App\Http\Controllers\AdminController::class,'rejected']);




// del_Inquries
Route::get('delInquries/{id}', [App\Http\Controllers\AdminController::class,'del_Inquries'])->name('del.inquries');

});

Route::group(['prefix'=>'admin/logo', 'middleware'=>['auth','isAdmin']], function(){

Route::get('view',[Managelogo::class,'logo_table'])->name('manage.front.logo');


// frontend.add.logo
Route::post('store',[Managelogo::class,'frontend_store_logo'])->name('frontend.store.logo');
    // edit front end logo
Route::get('edit/{id}',[Managelogo::class,'edit_frontend_logo'])->name('frontend.edit.logo');

// update logo 
Route::post('update/{id}',[Managelogo::class,'update_frontend_logo'])->name('frontend.update.logo');
// Delete logo 
Route::get('delete/{id}',[Managelogo::class,'delete_frontend_logo'])->name('frontend.delete.logo');

	});

// slider prefix 
Route::group(['prefix'=>'admin/slider', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(SliderController::class)->group(function () {
        // view slider 
        Route::get('view','slider_table')->name('manage.front.slider');
        // // slider store 
        // Route::post('store','frontend_store_logo')->name('frontend.store.logo');
        // // slider edit 
        // Route::get('edit/{id}','edit_frontend_logo')->name('frontend.edit.logo');
        // // slider update 
        // Route::post('update/{id}','update_frontend_logo')->name('frontend.update.logo');
        // // slider delete 
        // Route::get('delete/{id}','delete_frontend_logo')->name('frontend.delete.logo');
    });

});
