<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();
Route::get('/dene', 'HomePageController@deneme');
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
Route::group(['middleware' => ['web']], function () {

    /* Sayfa Yönlendirmeleri */
    Route::get('/', 'HomeController@home');
    Route::get('/redirect', 'SocialAuthController@redirect');
    Route::get('/callback', 'SocialAuthController@callback');
    Route::get('/home', 'HomeController@home');
    Route::get('/market', 'HomeController@showMarket');
    Route::get('/kupon-olustur', 'HomeController@createCoupon');
    /* Sayfa Yönlendirmeleri */

    /* User Modülü */
    Route::get('/profil/{username?}', 'UserController@showProfile');
    Route::get('/çıkış', 'UserController@logOut');

    Route::post('/guncelleProfil', 'UserController@updateUser');
    Route::post('/userFollow', 'UserController@userFollow');
    /* User Modülü Bitiş */

    /* Share Modülü */
    Route::get('/loadShare', 'ShareController@loadShare');
    Route::get('/showShare/{shareId?}', 'ShareController@showShare');
    Route::get('/loadMYShare/{user_id?}', 'ShareController@loadMYShare');

    Route::post('/addShare', 'ShareController@addShare');
    Route::post('/addShareLike', 'ShareController@addShareLike');
    Route::post('/addShareComment', 'ShareController@addShareComment');
    Route::post('/addShareShare', 'ShareController@addShareShare');
    /* Share Modülü Bitiş */

    /* Mesajlar Modülü */
    Route::get('/mesajlar/{receiver?}', 'MessageController@showMessage');
    Route::get('/loadMessage/{receiver?}/{lastid?}', 'MessageController@loadMessage');
    Route::get('/loadMessageLast', 'MessageController@loadMessageLast');

    Route::post('/saveMessage', 'MessageController@saveMessage');
    /* Mesajlar Modülü Bitiş */

    /* Notifikasyon Modülü */
    Route::get('/loadNotification', 'NotificationController@loadNotification');

    Route::post('/deleteNtfn', 'NotificationController@deleteNtfn');
    /* Notifikasyon Modülü Bitiş */

    /* Test */
    Route::get('/test', 'HomeController@loadMessage');
    /* Test Bitiş */
});