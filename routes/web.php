<?php


Route::get('/', 'PostsController@index');

Route::get('/videos/{id}', 'PostsController@show');
Route::get('/category/{id}', 'CategoriesController@show');

Route::get('/popular', 'PostsController@most_viewed');

Route::get('/featured', 'PostsController@featured');

Route::get('/query', 'PostsController@query');


