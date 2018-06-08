<?php


Route::get('/', 'PostsController@index');

Route::get('/videos/{slug}', 'PostsController@show');
Route::paginate('/category/{slug}', 'CategoriesController@show');

Route::paginate('/popular', 'PostsController@most_viewed');

Route::paginate('/featured', 'PostsController@featured');

Route::get('/query', 'PostsController@query');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
