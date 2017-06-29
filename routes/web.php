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

Route::get('/test', function () {
    return view('client.master');
});
// This project not use user login
/*Auth::routes();
Route::get('user/logout',['as'=>'user.logout','uses'=>'Auth\LoginController@userLogout']);*/



//Route for client page
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',['as'=>'client.index','uses'=>'HomeController@index']);
Route::post('tu-van',['as'=>'client.consult','uses'=>'HomeController@postAddConsult']);
Route::post('dang-ky-ban',['as'=>'client.consult','uses'=>'HomeController@postAddRegSale']);


//Route for Admin page
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
            Route::get('list', ['as'=>'admin.event.list','uses'=>'EventController@getList']);
            Route::get('detail/{id}', ['as'=>'admin.event.detail','uses'=>'EventController@getDetailEvent']);
            Route::get('add', ['as'=>'admin.event.getAdd','uses'=>'EventController@getAdd']);
            Route::post('add', ['as'=>'admin.event.postAdd','uses'=>'EventController@postAdd']);
            Route::get('edit/{id}', ['as'=>'admin.event.getEdit','uses'=>'EventController@getEdit']);
            Route::post('edit/{id}', ['as'=>'admin.event.postEdit','uses'=>'EventController@postEdit']);
            Route::delete('delete/{id}', ['as'=>'admin.event.deleteEvent','uses'=>'EventController@deleteEvent']);
        });
        Route::group(['prefix' => 'consult'], function () {
            Route::get('list', ['as'=>'admin.consult.list','uses'=>'ConsultController@getListConsult']);
            Route::get('detail/{id}', ['as'=>'admin.consult.detail','uses'=>'ConsultController@getDetailConsult']);
        });
        Route::group(['prefix' => 'regsale'], function () {
            Route::get('list', ['as'=>'admin.regsale.list','uses'=>'RegisterSaleController@getListRegSale']);
            Route::get('detail/{id}', ['as'=>'admin.regsale.detail','uses'=>'RegisterSaleController@getDetailRegSale']);
        });
    });
  });