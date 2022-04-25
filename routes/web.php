<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Managelogo;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\OurServicesController;

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
        // slider store 
        Route::post('store','frontend_store_slider')->name('frontend.store.slider');
        // // slider edit 
        Route::get('edit/{id}','edit_frontend_slider')->name('frontend.edit.slider');
        // // slider update 
        Route::post('update/{id}','update_frontend_slider')->name('frontend.update.slider');
        // // slider delete 
        Route::get('delete/{id}','delete_frontend_slider')->name('frontend.delete.slider');
    });

});
// manage contact 
Route::group(['prefix'=>'admin/contact', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(ContactController::class)->group(function () {
        // view slider 
        Route::get('view','contact_table')->name('view.contact_address');
        // // slider store 
        Route::post('store','contact_store')->name('contact.store');
        // // // slider edit 
        Route::get('edit/{id}','contact_edit')->name('contact.edit');
        // // // slider update 
        Route::post('update/{id}','update_contact')->name('update.contact');
        // // // slider delete 
        Route::get('delete/{id}','delete_contact')->name('delete.contact');
    });

});
// 
Route::group(['prefix'=>'admin/contact', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(ContactController::class)->group(function () {
        // view slider 
        Route::get('view','contact_table')->name('view.contact_address');
        // // slider store 
        Route::post('store','contact_store')->name('contact.store');
        // // // slider edit 
        Route::get('edit/{id}','contact_edit')->name('contact.edit');
        // // // slider update 
        Route::post('update/{id}','update_contact')->name('update.contact');
        // // // slider delete 
        Route::get('delete/{id}','delete_contact')->name('delete.contact');
    });

});

// status update 
Route::group(['prefix'=>'admin/status', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(StatusController::class)->group(function () {
        // complete_inquries
        Route::get('/completed/{id}','complete_inquries')->name('complete.inquries');
        // pending_inquries
        Route::get('/pending/{id}','pending_inquries')->name('pending.inquries');
        //Rejected  
        Route::get('/rejected/{id}','rejected_inquries')->name('reject.inquries');

    });

});
// home page content 
Route::group(['prefix'=>'admin/home-content', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(HomeAboutController::class)->group(function () {
        // view_home_contact
           Route::get('view','view_home_contact')->name('view.home_content');
        // home_data_store
           Route::post('store','home_data_store')->name('store.home.content');
        //    // // //  edit 
           Route::get('edit/{id}','home_data_edit')->name('edit.home.content');
        //    // // //  update 
           Route::post('update/{id}','home_data_update')->name('update.home.content');
        //    // // //  delete 
           Route::get('delete/{id}','delete_home_data')->name('delete.homedata');

    });

});

// home page content 
Route::group(['prefix'=>'admin/support-text', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(HomeAboutController::class)->group(function () {
        // view_home_contact
        Route::get('view','view_support_text')->name('view.support_text');
        //  home_data_store
           Route::post('store','support_text_store')->name('store.support_text');
        //   edit 
           Route::get('edit/{id}','support_data_edit')->name('edit.support_text');
        // update 
           Route::post('update/{id}','support_data_update')->name('update.support_text');
        // delete 
           Route::get('delete/{id}','delete_support_text')->name('delete.support_text');

    });

});


Route::group(['prefix'=>'admin/home-services', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(ServiceController::class)->group(function () {
        // view_home_contact
           Route::get('view','view_services')->name('view.home_services');
        // // home_data_store
           Route::post('store','home_services_store')->name('store.home.services');
        // //    // // //  edit 
           Route::get('edit/{id}','home_services_edit')->name('edit.home.services');
        // //    // // //  update 
           Route::post('update/{id}','home_services_update')->name('update.home.services');
        // //    // // //  delete 
           Route::get('delete/{id}','delete_home_services')->name('delete.home.services');

    });

});


// ====================== about page routes ======================



Route::group(['prefix'=>'admin/about-us', 'middleware'=>['auth','isAdmin']], function(){
    Route::controller(AboutController::class)->group(function () {
        // view_home_contact
           Route::get('view','view_about_data')->name('view.about_data');
        // // // home_data_store
           Route::post('store','about_data_store')->name('store.about_data');
        // // //    // // //  edit 
           Route::get('edit/{id}','data_store_edit')->name('edit.about_data');
        // // //    // // //  update 
           Route::post('update/{id}','data_store__update')->name('update.about_data');
        // // //    // // //  delete 
        //    Route::get('delete/{id}','delete_home_services')->name('delete.home.services');

    });

});

// Socia link 
Route::group(['prefix'=>'admin/social-links', 'middleware'=>['auth','isAdmin']], function(){
   Route::controller(SocialController::class)->group(function () {
       // view_home_contact
          Route::get('view','social_links_data')->name('view.social_links');
       // home_data_store
         Route::post('store','social_links_store')->name('store.social_links');
       // edit 
         Route::get('edit/{id}','social_links_edit')->name('edit.social_links');
       // update 
         Route::post('update/{id}','social_links_update')->name('update.social_links');
       // delete 
      Route::get('delete/{id}','delete_socail')->name('delete.socail_links');

      Route::get('active/{id}','active_status')->name('active_aocial_status');
      Route::get('inactive/{id}','inactive_status')->name('inactive_aocial_status');


   });

});


//manage our services page data 
Route::group(['prefix'=>'admin/manage/our-services', 'middleware'=>['auth','isAdmin']], function(){
   Route::controller(OurServicesController::class)->group(function () {
       // view_home_contact
          Route::get('view','view_our_services')->name('view.our.services_page');
      //  // home_data_store
         Route::post('store','social_our_services')->name('store.our_services');
      //  // edit 
         Route::get('edit/{id}','our_services_edit')->name('edit.our_services');
      //  // update 
         Route::post('update/{id}','our_services_update')->name('update.our_services');
      //  // delete 
      Route::get('delete/{id}','delete_our_services')->name('delete.our_services');

      Route::get('active/{id}','active_status')->name('active_our_services');
      Route::get('inactive/{id}','inactive_status')->name('inactive_our_services');


   });

});
