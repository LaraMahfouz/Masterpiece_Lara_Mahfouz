<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::get('blank', function () {
    return view('layouts/adminApp');
})->name('blank');

Route::get('/','FrontController@index');

Route::get('sub/{category}','FrontController@sub');

Route::get('allpost/sub/{category}','FrontController@test');

Route::get('sub/subpost/{subcategory}','FrontController@subpost');

Route::get('sub/subpost/sub/{category}','FrontController@test');


Route::get('allpost','FrontController@allpost')->name('allpost');

Route::get('profile','FrontController@profile')->name('profile')->middleware('auth');

Route::get('auther/{auther}','FrontController@auther')->name('auther');

Route::get('single/auther/{auther}','FrontController@singleauther');
Route::get('sub/subpost/single/auther/{auther}','FrontController@singleauther');


Route::get('single/{post}','FrontController@single');

Route::get('auther/single/{post}','FrontController@single');


Route::post('single/{post}/comment','CommentController@comment');

Route::post('auther/single/{post}/comment','CommentController@comment');

Route::post('/sub/subpost/single/{post}/comment','CommentController@comment');


Route::get('sub/subpost/single/{post}','FrontController@single');

Route::get('allpost/single/{post}','FrontController@single');

Route::get('profile/edit/{id}','UserController@edituser');
Route::post('profile/edit/update/{id}','UserController@updateuser');

Route::get('ourteem', function () {
    return view('ourteem');
})->name('ourteem');


Route::get('404', function () {
    return view('404');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('privacy', function () {
    return view('privacy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Manage Admin 
// Route::get('admindash','AdminController@index')->middleware('superadmin');

Route::get('admindash','AdminController@index')->name('admindash')->middleware('superadmin');
Route::post('admindash/store','AdminController@store');
Route::get('admindash/{id}/delete','AdminController@destroy');
Route::get('admindash/{id}/edit', 'AdminController@edit');
// Route::post('admindash/{id}/update','AdminController@update');
Route::post('admindash/{id}/update','UserController@adminupdate');


// Manage Users 
// Route::get('usersdash', 'UserController@index')->middleware('admin')
Route::get('usersdash','UserController@index')->middleware('admin');
Route::get('usersdash/{id}', 'UserController@destroy')->middleware('admin');


// Manage Category 
// Route::get('categorydash', function () { return view('dashboardviews.categorydash'); });
Route::get('categorydash/{id}', 'CategoryController@destroy')->middleware('admin');
Route::get('categorydash/edit/{id}', 'CategoryController@updateView')->name('admin.edit');
Route::post('categorydash/edit/{id}', 'CategoryController@update')->name('admin.edit.submit');
Route::post('categorydash', 'CategoryController@store')->middleware('admin');
Route::get('categorydash', 'CategoryController@create')->middleware('admin');

// Manage Sub Category 
// Route::get('subdash', function () { return view('dashboardviews.subdash'); });
Route::get('subdash/{id}', 'SubCategoryController@destroy')->middleware('admin');
Route::get('subdash/edit/{id}', 'SubCategoryController@updateView')->name('admin.edit');
Route::post('subdash/edit/{id}', 'SubCategoryController@update')->name('admin.edit.submit');
Route::post('subdash', 'SubCategoryController@store')->middleware('admin');
Route::get('subdash', 'SubCategoryController@create')->middleware('admin');


//Post 
// Route::get('postsdash', function () { return view('dashboardviews.postsdash'); });
Route::get ('postsdash','PostController@lara')->middleware('admin');
Route::get('postsdash/{id}/delete','PostController@destroy')->middleware('admin');
Route::post('user/post', 'PostController@storecat');
Route::post('user/post/add', 'PostController@store')->middleware('auth');
// Route::get('/home/{id}', 'HomeController@index')->name('home');


//Search 
Route::get('/search/', 'SearchController@search')->name('search');