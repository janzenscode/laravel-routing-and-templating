<?php

Route::get('/', 'HomeController@index');

# via controller

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/contact', 'HomeController@contact');


# directly via views

// Route::view('/home', 'pages/home');
// Route::view('/profile', 'pages/profile');
// Route::view('/gallery', 'pages/gallery');
// Route::view('/contact', 'pages/contact');




