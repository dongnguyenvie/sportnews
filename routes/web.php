<?php

use App\Categories;

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

Route::get('admin/','UserController@getLogin');

Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');
Route::get('admin/logout','UserController@getLogout');


Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){

    //CATEGORIES
    Route::group(['prefix'=>'categories'],function(){
        Route::get('list','CategoriesController@list');

        Route::get('edit/{id}','CategoriesController@show');
        Route::post('edit/{id}','CategoriesController@edit');


        Route::get('add','CategoriesController@add');
        Route::post('add','CategoriesController@store');

        Route::get('delete/{id}','CategoriesController@delete');
    });

    //POST
    Route::group(['prefix'=>'post'],function(){
        Route::get('list','PostController@list');

        Route::get('edit/{id}','PostController@show');
        Route::post('edit/{id}','PostController@edit');

        Route::get('add','PostController@add');
        Route::post('add','PostController@store');

        Route::get('delete/{id}','PostController@delete');
    });

    //LIVE MATCH
    Route::group(['prefix'=>'live-match'],function(){
        Route::get('list','LiveMatchController@list');

        Route::get('edit/{id}','LiveMatchController@show');
        Route::post('edit/{id}','LiveMatchController@edit');

        Route::get('add','LiveMatchController@add');
        Route::post('add','LiveMatchController@store');

        Route::get('delete/{id}','LiveMatchController@delete');
    });


    //COLLECT
    Route::group(['prefix'=>'collect'],function(){
        Route::get('list','CollectController@list');

        Route::get('edit/{id}','CollectController@show');
        Route::post('edit/{id}','CollectController@edit');

        Route::get('delete/{id}','CollectController@delete');
    });


    //COLLECTOR
    Route::group(['prefix'=>'collector'],function(){
        Route::get('list','CollectorController@list');

        Route::get('edit/{id}','CollectController@show');
        Route::post('edit/{id}','CollectController@edit');

        Route::get('delete/{id}','CollectorController@delete');
    });

    //USER
    Route::group(['prefix'=>'user'],function(){
        Route::get('list','UserController@list');

        Route::get('edit/{id}','UserController@show');
        Route::post('edit/{id}','UserController@edit');

        Route::get('add','UserController@add');
        Route::post('add','UserController@store');

        Route::get('delete/{id}','UserController@delete');
    });

    //VIDEOS
    Route::group(['prefix'=>'video'],function(){
        Route::get('list','VideoController@list');

        Route::get('edit/{id}','VideoController@show');
        Route::post('edit/{id}','VideoController@edit');

        Route::get('add','VideoController@add');
        Route::post('add','VideoController@store');

        Route::get('delete/{id}','VideoController@delete');
    });

    //ADVERTISEMENT
    Route::group(['prefix'=>'advertisement'],function(){
        Route::get('list','AdvertisementController@list');

        Route::get('edit/{id}','AdvertisementController@show');
        Route::post('edit/{id}','AdvertisementController@edit');

        Route::get('add','AdvertisementController@add');
        Route::post('add','AdvertisementController@store');

        Route::get('delete/{id}','AdvertisementController@delete');
    });

    //AD-POSITION
    Route::group(['prefix'=>'ad-position'],function(){
        Route::get('list','AdPositionController@list');

        Route::get('edit/{id}','AdPositionController@show');
        Route::post('edit/{id}','AdPositionController@edit');

        Route::get('add','AdPositionController@add');
        Route::post('add','AdPositionController@store');

        Route::get('delete/{id}','AdPositionController@delete');
    });


    Route::get('dashboard', 'DashboardController@index');
});

Route::group(['prefix'=>'/'],function(){
    Route::get('/','PagesController@index');

    Route::get('categories/{id}/{alias}','PagesController@categories');

    Route::get('single/{id}','PagesController@post');

    Route::post('search','PagesController@search');

    Route::get('standing/{id}','PagesController@standing');

    Route::get('videos','PagesController@video');
    Route::get('videos-categories/{id}/{alias}','PagesController@videosCate');
    Route::get('watch/{id}','PagesController@watch');

    Route::get('fixtures/{id}','PagesController@fixtures');

    Route::get('live/{id}','PagesController@score');

    Route::get('collect','PagesController@collect');
    Route::get('single-collect/{id}','PagesController@singlecollect');

    Route::get('live-match/{id}','PagesController@livematch');

    Route::get('login','CollectorController@login');
    Route::post('login','CollectorController@postlogin');

    Route::get('register','CollectorController@register');
    Route::post('register','CollectorController@postregister');

    Route::get('logout','CollectorController@logout');
});


    Route::get('profile/{id}','CollectorController@profile');
    Route::get('new-post','CollectorController@newpost');
    Route::post('new-post','CollectorController@postnewpost');
    Route::get('edit-post/{id}','CollectorController@getCollectEdit');
    Route::post('edit-post/{id}','CollectorController@postCollectEdit');
    Route::get('collects-delete/{id}','CollectorController@collectsDelete');












