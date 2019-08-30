@extends('admin.layout')

@section('body')
@if(Session::has('flash_message'))
<div class="alert alert-info" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif




<h1><i class='fa fa-globe'></i> News and Events</h1>
<br>
<a href="/admin/events/create" class="btn btn-success">Create New</a>
<br><br>
<div class="table-responsive">
<table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date of Publishing</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                <tr>

                    <td>{{ $event->title }}</td>
                    <td>{{ $event->created_at->toDateString() }}</td>
                    <td>
                    <a href="/admin/events/{{ $event->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
					<form method="POST" action="/admin/events/{{ $event->id }}">
    					@csrf
    					@method('DELETE')
    					<button onclick="return confirm('Are you sure you want to delete this?')" type="submit" class="btn btn-danger pull-left">Delete</button>
					</form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    {{ $events->links() }}
    
@endsection