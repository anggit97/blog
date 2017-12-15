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

Route::get('/blog', [
	'uses' => 'PostController@getHome',
	'as' => 'blog'
]);


Route::get('/',function(){
	return view('about');
})->name('about');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/signin',[
	'uses' => 'UserController@getSignin',
	'as' => 'signin'
]);

Route::get('/daftar', function() {
    return view('daftar');
})->name('daftar');

Route::post('/signup', [
	'uses' => 'UserController@getSignup',
	'as' => 'signup'
]);

Route::get('/dashboard',[
	'uses' => 'UserController@getDashbaord',
	'as' => 'dashboard',
	'middleware' => 'auth'
]);

Route::get('/logout', [
	'uses' => 'UserController@getSignout',
	'as' => 'logout',
	'middleware' => 'auth'
]);

Route::get('post', [
	'uses' => 'PostController@getPost',
	'as' => 'post'
]);

Route::get('/create-post', [
	'uses' => 'PostController@createPost',
	'as' => 'create.post'
]);

Route::post('/create-post-process', [
	'uses' => 'PostController@createPostProcess',
	'as' => 'create.post.process'
]);

Route::get('/post-image/{filename}', [
	'uses' => 'PostController@getPostImage',
	'as' => 'get.image'
]);

Route::get('/edit-post/{id}', [
    'uses' => 'PostController@editPost',
    'as' => 'edit.post'
]);

Route::post('/edit-post-process', [
	'uses' => 'PostController@editPostProcess',
	'as' => 'edit.post.process'
]);

Route::get('/delete-post/{id}', [
	'uses' => 'PostController@deletePost',
	'as' => 'delete.post'
]);

Route::get('/detail-post/{slug}', [
	'uses' => 'PostController@detailPost',
	'as' => 'detail.post'
]);

Route::get('/dashboard/category', [
	'uses' => 'PostController@getDashboardCategory',
	'as' => 'dashboard.category'
]);

Route::get('/dashboard/category/create', function() {
    return view('create-category');
})->name('create.category');

Route::post('/dashboard/category/process', [
	'uses' => 'PostController@createCategory',
	'as' => 'create.category.process'
]);

Route::get('/dashboard/category/{id}', [
	'uses' => 'PostController@editCategory',
	'as' => 'edit.category'
]);

Route::post('/dashboard/category/edit', [
	'uses' => 'PostController@editCategoryProcess',
	'as' => 'edit.category.process'
]);

Route::get('/account/{username}', [
	'uses' => 'UserController@getAccount',
	'as' => 'account'
]);

Route::post('/account/save', [
	'uses' => 'UserController@saveAccount',
	'as' => 'account.save'
]);

Route::get('/tags', [
	'uses' => 'PostController@getTag',
	'as' => 'tags'
]);