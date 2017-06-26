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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout',['as'=>'user.logout','uses'=>'Auth\LoginController@userLogout']);        


Route::group(['prefix'=>'admin'], function () {    
    Route::get('login',['as'=>'admin.login','uses'=>'Admin\LoginController@showLoginForm']);        
    Route::post('login',['as'=>'admin.login','uses'=>'Admin\LoginController@login']);
    Route::get('logout',['as'=>'admin.logout','uses'=>'Admin\LoginController@logout']);        
    Route::post('password/email',['as'=>'admin.password.email','uses'=>'Auth\AdminForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset',['as'=>'admin.password.request','uses'=>'Auth\AdminForgotPasswordController@showLinkRequestForm']);    
    Route::post('password/reset',['uses'=>'Auth\AdminResetPasswordController@reset']);
    Route::get('password/reset/{token}',['as'=>'admin.password.reset','uses'=>'Auth\AdminResetPasswordController@showResetForm']);

    Route::group(['middleware' => ['auth:admin']], function () { 
        Route::get('/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@index']); 
        Route::get('profile',['as'=>'admin.getProfile','uses'=>'AdminController@getProfileInfo']);  
        Route::post('profile',['as'=>'admin.postProfile','uses'=>'AdminController@postUpdateInfo']);  
        Route::get('password/change',['as'=>'admin.getChangePass','uses'=>'AdminController@getChangePassword']);  
        Route::post('password/change',['as'=>'admin.postChangePass','uses'=>'AdminController@postChangePassword']);  

        Route::group(['prefix' => 'role'], function () { 
            Route::get('list', ['as'=>'admin.role.list','uses'=>'AdminController@getListRole']); 
            Route::get('add', ['as'=>'admin.role.getAdd','uses'=>'AdminController@getAddRole']); 
        });           
        Route::group(['prefix' => 'admin'], function () { 
            Route::get('list', ['as'=>'admin.admin.list','uses'=>'AdminController@getListAdmin']); 
            Route::get('add', ['as'=>'admin.admin.getAdd','uses'=>'AdminController@getAddAdmin']);  
            Route::post('add',['as'=>'admin.admin.postAdd','uses'=>'AdminController@postAddAdmin']);  
        });

        Route::group(['prefix' => 'event'], function () { 
            Route::get('add', ['as'=>'admin.event.add','uses'=>'EventController@getAdd']); 
        });
    }); 
  });