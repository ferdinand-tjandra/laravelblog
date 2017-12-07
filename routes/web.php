<?php

Route::group(['namespace' => 'User'], function(){
    Route::get('/','HomeController@index');
    Route::get('post/{post?}','PostController@post')->name('post');
    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');
});

Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin/home', 'HomeController@home')->name('admin.home');

    //Users Routes
    Route::resource('admin/user', 'UserController');

    //Post Routes
    Route::resource('admin/post', 'PostController');

    //Tag Routes
    Route::resource('admin/tag', 'TagController');

    //Category Routes
    Route::resource('admin/category', 'CategoryController');

    // Admin Auth routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
