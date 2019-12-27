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
/*
 * GET /projects (index)
 * GET /projects (create)
 * GET /projects/1 (show)
 * GET /projects /1(edit)
 * POST /projects (store)
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 */

 Route::group(['namespace' => 'Auth'], function () {
     Route::get('login', 'LoginsController@create')->name('login');
     Route::post('login', 'LoginsController@store');
     Route::get('logout', 'LoginsController@destroy')->name('logout');
     
     Route::get('register', 'RegistersController@create')->name('register');
     Route::post('register', 'RegistersController@store');

 });

Route::resource('projects', 'ProjectsController');
Route::get('/', 'ProjectsController@index')->name('projects');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store')->name('tasks.store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
/*
Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::post('/projects', 'ProjectsController@store')->name('projects.store');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::get('/projects/{projects}', 'ProjectsController@show')->name('projects.show');
Route::get('/projects/{projects}/edit', 'ProjectsController@edit')->name('projects.edit');
Route::patch('/projects/{projects}', 'ProjectsController@update')->name('projects.update');
Route::delete('/projects/{projects}', 'ProjectsController@destroy')->name('projects.destroy');
*/
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
