<?php



Route::namespace('Front')->group(function () {

Route::get('/', 'HomePageController@index');
Route::get('/contact-us', 'ContactController@index');
Route::post('storeContactInfo', 'ContactController@storeContactInfo');
Route::post('subscribe', 'ContactController@subscribe');
Route::get('/blog', 'BlogController@index');
Route::get('/about-us', 'AboutController@index');
Route::get('/porfolio', 'PorfolioController@index');
Route::get('/services', 'ServiceController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace' => 'Admin', 'prefix' => 'dashboard'], function () {

Route::get('/', 'HomePageController@index');
Route::get('contact-us', 'ContactController@showAllContacts');
Route::get('contact-us/delete/{contact}', 'ContactController@deleteContact')->name('dashboard.contact.delete');

Route::get('subscribe', 'ContactController@showAllSubscribe');
Route::get('subscribe/delete/{subscribe}', 'ContactController@deleteSubscribe')->name('dashboard.subscribe.delete');

Route::resource('services', 'ServiceController');
Route::resource('blogs', 'BlogController');
Route::resource('porfolios', 'PorfolioController');
});
