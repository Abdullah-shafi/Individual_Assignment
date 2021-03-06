<?php



Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/system/supportstaff/login', 'LoginController@index')->name('login.index');
Route::post('/system/supportstaff/login', 'LoginController@verify')->name('login.index');


Route::group(['middleware'=>['sess']], function(){

//admin_home
Route::get('/system/buses', 'adminController@index')->name('home.index');

//search
Route::get('/system/search', 'adminController@search');
//search_2
Route::post('/system/buses', 'adminController@search_2')->name('home.index');
//bus_add
Route::get('/system/buses/add', 'adminController@addbus')->name('home.addbus');


});




//logOut

Route::get('/logout', 'logoutController@index');


