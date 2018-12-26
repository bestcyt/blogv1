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
//Route::get('/', 'back\PageController@index');
//Route::get('/test','back\PageController@test');
//Route::get('/test2','back\PageController@test2');

//Auth::routes();['namespace'=>'back','prefix'=>'back']
Route::prefix('back')->middleware('getCommonInfo')->group(function (){
    //后台注册登录路由
//    Auth::routes();
    //后台统一back命名空间
    Route::get('table','TestsController@index');
    Route::namespace('back')->group(function (){
        Route::get('/', 'PageController@index');
        //文章资源路由
        Route::resource('posts', 'PostsController', ['names' => [
            'index'   => 'posts.index',
            'create'  => 'posts.create',
            'store'   => 'posts.store',
            'show'    => 'posts.show',
            'edit'    => 'posts.edit',
            'update'  => 'posts.update',
            'destroy' => 'posts.destroy'
        ]]);
        //分类管理资源路由
        Route::resource('sorts', 'SortsController', ['names' => [
            'index'   => 'sorts.index',
            'create'  => 'sorts.create',
            'store'   => 'sorts.store',
            'show'    => 'sorts.show',
            'edit'    => 'sorts.edit',
            'update'  => 'sorts.update',
            'destroy' => 'sorts.destroy'
        ]]);
        //标签管理资源路由
        Route::resource('labels', 'labelsController', ['names' => [
            'index'   => 'labels.index',
            'create'  => 'labels.create',
            'store'   => 'labels.store',
            'show'    => 'labels.show',
            'edit'    => 'labels.edit',
            'update'  => 'labels.update',
            'destroy' => 'labels.destroy'
        ]]);
        //分类管理资源路由
        Route::resource('sorts', 'SortsController', ['names' => [
            'index'   => 'sorts.index',
            'create'  => 'sorts.create',
            'store'   => 'sorts.store',
            'show'    => 'sorts.show',
            'edit'    => 'sorts.edit',
            'update'  => 'sorts.update',
            'destroy' => 'sorts.destroy'
        ]]);
        Route::get('getLabelsJson','labelsController@getLabelsJson');
        Route::get('getSortsJson','SortsController@getSortsJson');
    });
});


