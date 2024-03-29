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


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('{provider}/auth', [
    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);
Route::get('/{provider}/redirect', [
    'uses' => 'SocialsController@auth_callback',
    'as' => 'social.callback'
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['admin'])->group(function() {
    Route::post('/creatediss', [
        'uses' => 'DiscussionController@create',
        'as' => 'diss'
    ]);
});
Route::get('/creatediss', [
    'uses' => 'DiscussionController@index'
]);

Route::get('/create/discussion', [
'uses' => 'PostController@index'
]);
Route::post('/create/discussion', [
    'uses' => 'PostController@store',
    'as' => 'create.post'
    ]);
    Route::get('/like/{id}', [
        'uses' => 'PostController@like',
        'as' => 'create.like'
        ]);
        Route::get('/unlike/{id}', [
            'uses' => 'PostController@unlike',
            'as' => 'unlike'
            ]);
            Route::post('/comment/{id}', [
                'uses' => 'PostController@comment',
                'as' => 'comment'
                ]);
    Route::get('/post/{id}', [
        'uses' => 'PostController@show'

    ]);