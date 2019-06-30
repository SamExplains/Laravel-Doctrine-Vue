<?php

use LaravelDoctrine\ORM\Facades\EntityManager as EntityManager;

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

Route::get('/test', function () {

  $task = new \DocVueTodoList\Entities\Task('Make an app', 'This app will showcase Doctrine in Laravel as opposed to Symphony');

  EntityManager::persist($task);
  EntityManager::flush();

  return response()->json('Added');


});