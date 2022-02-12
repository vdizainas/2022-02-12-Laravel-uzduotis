@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status
                  <select>
                    @foreach ($taskStatuses as $status)
                      <option value="{{$status->id}}">{{$status->title}}</option>
                    @endforeach         
                  </select> 
                </th>
              </tr>

              @foreach ($tasks as $task)
                  <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->taskTaskStatuses->title}}</td>
                  </tr>
              @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
