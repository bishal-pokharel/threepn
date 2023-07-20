<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes([
    'register' => false,          
    'reset' => false              
]);
Route::get('/logout', 'Auth\LoginController@logout');


Route::group(['middleware' => ['auth']],function() {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/enquires', 'HomeController@enquires')->name('admin.enquires');
    Route::get('/enquires/{enquiry}/view', 'HomeController@enquiry_view')->name('admin.enquires.view');
    
    Route::group(['prefix' => 'user'] ,function() {
       Route::get('/', 'UserController@index')->name('admin.users.index');
       Route::any('/create', 'UserController@create')->name('admin.users.create');
       Route::get('/delete/{id}', 'UserController@destroy')->name('admin.users.delete');
       Route::get('/activate/{id}', 'UserController@activate')->name('admin.users.activate');
    });
});
