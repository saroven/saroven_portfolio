<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', 'indexController@index');

Route::get('/admin', 'indexController@adminView');

Route::get('/admin/profile', 'indexController@viewProfile');

Route::get('/admin/profile/edit', 'indexController@editProfile');

Route::get('/admin/settings', 'indexController@setting');

Route::get('/admin/settings/edit', 'indexController@editSetting');

Route::post('/admin/settings/update', 'indexController@updateSetting');

Route::get('/admin/portfolio', 'indexController@viewPortfolio');

Route::get('/admin/portfolio/add', 'indexController@addPortfolio');

Route::post('/admin/portfolio/add', 'indexController@insertPortfolio');

Route::get('/admin/portfolio/edit/{id}', 'indexController@editPortfolio');

Route::post('/admin/portfolio/update', 'indexController@updatePortfolio');

Route::get('/admin/portfolio/delete/{id}', 'indexController@deletePortfolio');


Route::get('/admin/social', 'indexController@viewSocial');

Route::get('/admin/social/add', 'indexController@addSocial');

Route::post('/admin/social/insert', 'indexController@insertSocial');

Route::get('/admin/social/edit/{id}', 'indexController@editSocial');

Route::post('/admin/social/update', 'indexController@updateSocial');

Route::get('/admin/social/delete/{id}', 'indexController@deleteSocial');

Route::get('/admin/message', 'indexController@message');




