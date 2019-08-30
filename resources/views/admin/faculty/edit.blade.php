@extends('admin.layout')

@section('title')
 Create New Faculty    
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif

<h4 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i> Edit Faculty : <em><ins>{{$faculty->name}}</ins></em></h4>
<br>

<form method="POST" action="/admin/faculty/{{$faculty->id}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" name="name" id="name" type="text" value="{{$faculty->name}}" required>
    </div>
    <div class="form-group">
        <p>Leave Blank If You do not want to change image.</p>
        <label for="image">Image</label>
        <input class="form-control" name="image" id="image" type="file">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="myTextEditor form-control" rows="8" name="description" id="description">{{$faculty->description}}</textarea>
        <br>
    </div>
    <div class="form-group">
        <label for="position">Position:</label>
        <input class="form-control" name="position" id="position" type="text" value="{{$faculty->position}}" required>
    </div>
    <button type="submit" class="btn btn-success pull-left">Edit</button>
</form>

<form method="POST" action="/admin/faculty/{{ $faculty->id }}">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Are you sure you want to delete this?')" type="submit" class="btn btn-danger pull-right">Delete</button>
</form>
    
@endsection