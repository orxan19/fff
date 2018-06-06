<?php


Route::get('/', 'PostsController@index');

Route::get('/videos/{id}', 'PostsController@show');
Route::get('/category/{id}', 'CategoriesController@show');

Route::get('/featured', 'PostsController@featured');


