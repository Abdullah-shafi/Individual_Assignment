<?php



Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/system/supportstaff/login', 'LoginController@index')->name('login.index');
Route::post('/system/supportstaff/login', 'LoginController@verify')->name('login.index');


//busmanager_home
Route::get('/system/busmanager', 'busmanagerController@index')->name('home.index');



Route::get('/logout', 'logoutController@index');


