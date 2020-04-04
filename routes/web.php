<?php

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


/*admin paths*/
Route::group(['prefix' => 'admin','middleware' => ['auth'], 'namespace' =>'Dashboard'], function () {
    Route::get('upload/{type}', 'PagesController@upload_form')->name('upload');
    Route::get('edit/{type}/{id}', 'PagesController@edit_form')->name('edit');
    Route::get('list/{type}', 'PagesController@list')->name('list');

    Route::post('insert_category/{type}', 'InsertController@insert_category')->name('insert_category');

    Route::get('/home', 'PagesController@index')->name('home');
    Route::get('change-password','PagesController@change_password')->name('change-password');
    Route::post('change-password-save', 'EditController@saveChangePassword')->name('change-password-save');





});
/*common paths*/
Route::group(['prefix' => 'admin','middleware' => ['auth'], 'namespace' =>'Dashboard'], function () {



});

Route::group(['prefix' => 'admin'], function() {
    //    turning off registration
    //Auth::routes(['register' => false]);
    Auth::routes();
});

Route::group(['prefix' => 'api','namespace' =>'Dashboard'], function () {
    Route::get('get/{type}/{id}', 'PagesController@get_single_data')->name('get_single_data');
    Route::get('get_all/{type}', 'PagesController@get_all_data')->name('get_all_data');
});
Route::group(['namespace' =>'Front'], function () {
    //new 
    
    Route::get('opportunities/{category?}/{region?}/{deadline?}', 'PagesController@opportunities');
    
    Route::get('opportunity/{id}', 'PagesController@opportunity');

    // 
    
    Route::get('/', 'PagesController@index');
    Route::get('explore_scholarship/{type}/{region}/{funding_type}/{deadline}/{degree_type}', 'PagesController@get_opps')->name('get_explore_opp');
    Route::post('explore_sholarship', 'PagesController@explore_opp')->name('post_explore_opp');

    Route::post('search', 'InsertController@post_search')->name('post_search');
    Route::get('search/{title}', 'InsertController@get_search')->name('get_search');
    Route::get('search', 'InsertController@get_empty_search')->name('get_empty_search');
    Route::get('post_page', 'PagesController@post_page')->name('post_page');
    Route::get('post_opp', 'PagesController@post_opp')->name('post_opp');
    /*static pages*/
    Route::get('static/{type}', 'PagesController@static_page')->name('static_page');

});


// 
Route::get('delete_object', 'Dashboard\EditController@delete_object_call')->name('delete_object');
// 
Route::post('ckeditor/image_upload', 'Dashboard\FunctionController@image_upload')->name('image_upload');
Route::post('insert_form_subs/{type}', 'Front\InsertController@insert_form')->name('insert_form_subs');
Route::post('insert/{type}', 'Dashboard\InsertController@insert_form')->name('insert_form');
    Route::get('get_states', 'Dashboard\EditController@get_states')->name('get_states');
    Route::get('get_cities', 'Dashboard\EditController@get_cities')->name('get_cities');
    Route::get('delete_image', 'Dashboard\EditController@delete_image')->name('delete_image');
   
Route::get('inc_application', 'Dashboard\EditController@inc_application')->name('inc_application');
