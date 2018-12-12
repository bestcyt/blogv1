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
Route::get('/', 'back\PageController@index');
//Route::get('/test','back\PageController@test');
//Route::get('/test2','back\PageController@test2');

//Auth::routes();['namespace'=>'back','prefix'=>'back']
Route::prefix('back')->group(function (){
    //后台注册登录路由
    Auth::routes();
    //后台统一back命名空间
    Route::namespace('back')->group(function (){
        Route::get('/', 'PageController@index');
        Route::resource('posts', 'PostsController', ['names' => [
            'index'   => 'posts.index',
            'create'  => 'posts.create',
            'store'   => 'posts.store',
            'show'    => 'posts.show',
            'edit'    => 'posts.edit',
            'update'  => 'posts.update',
            'destroy' => 'posts.destroy'
        ]]);
    });
});

