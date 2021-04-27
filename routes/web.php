<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

// Home
Route::get('/home', 'HomeController@index')->name('home');

//products
Route::get('/products','ProductController@index')->name('product.index');

//details dan pesan
Route::get('products/details/{id}', 'DetailsController@index');
Route::post('cart/{id}', 'DetailsController@cart');

// User Logout
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Admin Route List
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
    //Login
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    //Logout
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //Regist
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password Reset
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');

    
});
