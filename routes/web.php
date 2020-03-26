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



Route::prefix('user')->group(function(){
Route::post('new-comment','UserController@newComment')->name('newComment');
Route::get('dashboard','UserController@dashboard')->name('userDashboard');
Route::get('comments','UserController@comments')->name('userComments');
Route::post('comment/{id}/delete','UserController@deleteComment')->name('deleteComment');
Route::get('profile','UserController@profile')->name('userProfile');
Route::post('profile','UserController@profilePost')->name('userProfilePost');
});

Route::prefix('author')->group(function(){
Route::get('dashboard','AuthorController@dashboard')->name('authorDashboard');
Route::get('Posts/new','AuthorController@newPost')->name('newPost');
Route::Post('Posts/new','AuthorController@createPost')->name('createPost');
Route::get('posts','AuthorController@posts')->name('authorPosts');
Route::get('post/{id}/edit','AuthorController@postEdit')->name('postEdit');
Route::Post('post/{id}/edit','AuthorController@postEditPost')->name('postEditPost');
Route::Post('post/{id}/delete','AuthorController@deletePost')->name('deletePost');
Route::get('comments','AuthorController@comments')->name('authorComments');
});


Route::get('/','PublicController@index')->name('index');
Route::get('about','PublicController@about')->name('about');
Route::get('post/{post}','PublicController@singlePost')->name('singlePost');

Route::get('contact','PublicController@contact')->name('contact');
Route::post('contact','PublicController@contactPost')->name('contactPost');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::prefix('admin')->group(function(){
  Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');
  Route::get('posts','AdminController@posts')->name('adminPosts');
  Route::get('comments','AdminController@comments')->name('adminComments');
  Route::get('post/{id}/edit','AdminController@postEdit')->name('adminPostEdit');
  Route::Post('post/{id}/edit','AdminController@postEditPost')->name('adminPostEditPost');
  Route::Post('post/{id}/delete','AdminController@deletePost')->name('adminDeletePost');
  Route::Post('comment/{id}/delete','AdminController@deleteComment')->name('adminDeleteComment');
  Route::get('users','AdminController@users')->name('adminUsers');
  Route::get('users/{id}/edit','AdminController@editUser')->name('adminEditUser');
  Route::Post('users/{id}/edit','AdminController@editUser')->name('adminEditUserPost');
  Route::Post('user/{id}/delete','AdminController@deleteUser')->name('adminDeleteUser');


  Route::get('products','AdminController@products')->name('adminProducts');

  Route::get('products/new','AdminController@newProduct')->name('adminNewProduct');
  Route::Post('products/new','AdminController@newProductPost')->name('adminNewProduct');




  Route::get('product/{id}','AdminController@editProduct')->name('adminEditProduct');
  Route::Post('product/{id}','AdminController@editProductPost')->name('adminEditProduct');

});
Route::prefix('shop')->group(function(){
Route::get('/','shopController@index')->name('shop.index');




});
