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

Route::get('/','BlogController@index')->name('homer');

Route::get('/blog/{slug}',['uses'=>'BlogController@show',
                              'as' => 'blog.show']);

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');


Route::resource('/backend/blog', 'Backend\BlogControllerler',[
    'as'=>'backend'
]);

//untuk edit
Route::get('/edit_post/{id}',['uses'=>'Backend\BlogControllerler@edit_dua',
                              'as' => 'backend.blog.edit_dua']);

//untuk memasukan data update
Route::put('/update_post/{id}',['uses'=>'Backend\BlogControllerler@update_post',
                              'as' => 'backend.blog.update_post']);

//untuk delete post
Route::delete('/delete_post/{id}',['uses'=>'Backend\BlogControllerler@delete_post',
                              'as' => 'backend.blog.delete_post']);