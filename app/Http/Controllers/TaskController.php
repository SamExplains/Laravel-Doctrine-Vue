<?php

namespace DocVueTodoList\Http\Controllers;

use DocVueTodoList\Entities\Task;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param EntityManagerInterface $em
   * @return \Illuminate\Http\Response
   */
    public function store(Request $request, EntityManagerInterface $em)
    {
//      $task = new Task(
//        $request->name,
//        $request->description
//      );
//      $em->persist($task);
//      $em->flush();

      return response()->json(['success' => 'Task stored']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \DocVueTodoList\Entities\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \DocVueTodoList\Entities\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \DocVueTodoList\Entities\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \DocVueTodoList\Entities\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
