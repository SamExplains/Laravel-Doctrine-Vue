<?php

use LaravelDoctrine\ORM\Facades\EntityManager as EntityManager;
use \Doctrine\ORM\EntityManagerInterface as EntityManagerInterface;
use \DocVueTodoList\Entities\Task as Task;
use \DocVueTodoList\Entities\User as User;
use DocVueTodoList as DVT;

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

  $task = new Task('Make an app', 'This app will showcase Doctrine in Laravel as opposed to Symphony');

  EntityManager::persist($task);
  EntityManager::flush();

  return response()->json('Added');


});

Route::get('/find', function (EntityManagerInterface $em) {

  $task = $em->find(Task::class, 1);

  return response()->json(['name' => $task->getName(), 'description' => $task->getDescription()]);


});

Route::get('test-rel', function(EntityManagerInterface $em) {
  $user = new User(
    'Francesco',
    'francescomalatesta@live.it'
  );

  $user->addTask(new Task(
    'Buy milk',
    'Because it is healthy'
  ));

  $user->addTask(new Task(
    'Buy chocolate',
    'Because it is good'
  ));

  $em->persist($user);
  $em->flush();

  return 'Done!';
});

Route::resources([
  'task' => 'TaskController',
]);