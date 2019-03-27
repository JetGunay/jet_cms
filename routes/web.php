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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('/callback/{service}', 'Auth\LoginController@handleProviderCallback');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/**
 * 
 * Auth Middleware
 * 
 */
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::resource('/posts', 'PostController');
});


/**
 * 
 *  Authentication Routes...
 * 
 */
// Auth::routes();
$this->get('admin', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('admin', 'Auth\LoginController@login');

/**
 * 
 *  Registration Routes...
 * 
 */
$this->get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('admin/register', 'Auth\RegisterController@register');

/**
 * 
 *  Password Reset Routes... 
 * 
 */
$this->get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('admin/password/reset', 'Auth\ResetPasswordController@reset');
