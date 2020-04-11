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
//bus_add
Route::post('/system/buses/add', 'adminController@addbusverify')->name('home.addbus');
//bus_edit
Route::get('/system/buses/{id}/edit', 'adminController@editbus')->name('home.editbus');

//bus_edit
Route::post('/system/buses/{id}/edit', 'adminController@editbusverify')->name('home.editbus');

//bus_delete
Route::get('/system/buses/{id}/delete', 'adminController@deletebus')->name('home.deletebus');
//bus_delete
Route::post('/system/buses/{id}/delete', 'adminController@destroy')->name('home.deletebus');

//schedule_admin
Route::get('/system/busesschedule', 'adminController@index2')->name('schedule.index');

//search
Route::get('/system/searchbus', 'managerController@searchbus');
//search_2
Route::post('/system/busesschedule', 'managerController@searchbus_2')->name('home.index');
});





//logOut

Route::get('/logout', 'logoutController@index');


