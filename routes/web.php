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




//contact
Route::post('create_contact','ContactController@store');
Route::get('delete_contact/{id}','ContactController@delete');

//about
Route::post('update_content','AboutController@update');

//event
Route::post('create_event','EventController@store');
Route::get('delete_event/{id}','EventController@delete');
Route::get('edit_event/{id}','EventController@edit');
Route::post('update_event','EventController@update');

//blog
Route::post('create_blog','BlogController@store');
Route::get('delete_blog/{id}','BlogController@delete');
Route::get('edit_blog/{id}','BlogController@edit');
Route::post('update_blog','BlogController@update');

//service
Route::post('update_service','ServiceController@update');

//ticket
Route::post('create_ticket','TicketController@store');
Route::get('delete_ticket/{id}','TicketController@delete');
Route::get('edit_ticket/{id}','TicketController@edit');
Route::post('update_ticket','TicketController@update');

//course
Route::post('create_course','CourseController@store');
Route::get('delete_course/{id}','CourseController@delete');
Route::get('edit_course/{id}','CourseController@edit');
Route::post('update_course','CourseController@update');


//User
Route::get('/', 'UserController@index');
Route::get('/index', 'UserController@index');
Route::get('/about', 'UserController@about');
Route::get('/price', 'UserController@price');
Route::get('/event', 'UserController@event');
Route::get('/service', 'UserController@service');
Route::get('/blog', 'UserController@blog');
Route::get('/blog_detail/{id}', 'UserController@blog_detail');
Route::get('/course', 'UserController@course');
Route::get('/course_detail/{id}','UserController@course_detail');
Route::get('/contact', 'UserController@contact');

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
    
    Route::get('/index','AdminController@index');
    Route::get('/about','AdminController@about');
    Route::get('/service','AdminController@service');
    Route::get('/ticket','AdminController@ticket');
    Route::get('/event','AdminController@event');
    Route::get('/blog','AdminController@blog');
    Route::get('/course','AdminController@course');
    Route::get('/contact','AdminController@contact');

        
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
