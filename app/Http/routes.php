<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

   Route::get('/', function () {
       return view('welcome');
   });



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

   Route::group(['middleware' => ['web']], function () {
       //ææ

      route::get('dashboard','Desktop\DashboardController@index');
      //route::get('product','Product\ProductController@index');
      route::resource('product','Product\ProductController');
      route::get('listall','Product\ProductController@listall');

      route::get('modelweb','Desktop\DashboardController@modelweb');

      Route::auth();

      Route::get('/home', 'HomeController@index');


      Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
            route::get('demo',['as'=>'demo','uses'=>'DemoController@index']);
      });



   });

