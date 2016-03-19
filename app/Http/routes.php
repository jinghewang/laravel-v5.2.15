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


Route::get('/test', function () {
    return view('test');
});

Route::get('/test2/{id?}', function ($id = null) {
    return 'User ' . $id;
});

Route::get('/test3/{id?}', function ($id = null) {
    return 'User ' . $id;
})
->where('id', '[1-9]');

Route::get('/user/{id}/{name}', function ($id = null, $name = null) {
    return 'User ' . $id . ',name: ' . $name;
})
->where(['id'=>'[1-9]','name'=>'[a-d]+']);


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
    //
});
