@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <table class="table table-hover table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Operations</th>
          </tr>
          </thead>
          <tbody>
          @foreach($tasks as $key => $task)
            <tr>
                <td scope="row">{{ $task->getId() }}</td>
                <td>{{ $task->getName() }}</td>
                <td>{{ $task->getDescription() }}</td>
                <td>{{ ($task->isDone()) ? 'true' : 'false' }}</td>
                <td>--</td>
            </tr>
          @endforeach
          </tbody>
        </table>


      </div>
    </div>
  </div>
@endsection