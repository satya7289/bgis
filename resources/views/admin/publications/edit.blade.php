@extends('admin.layout')

@section('title')
 Edit Publication    
@endsection

@section('body')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif



<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i>Edit Publication</h1>
<br>

<form method="POST" action="/admin/publications/{{$publication->id}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="title">Title:</label>
        <input class="form-control" name="title" id="title" type="text" value="{{$publication->title}}" required>
    </div>
    <p>Leave Blank if you do not want to change it.</p>
    <div class="form-group">
        <label for="image">Image</label>
        <input class="form-control" name="image" id="image" type="file">
    </div>
    <p>Leave Blank if you do not want to change it.</p>
    <div class="form-group">
            <label for="image">File</label>
            <input class="form-control" name="file" id="file" type="file">
        </div>

<br>
    <div class="form-group">
        <label for="position">Year:</label>
        <input class="form-control" name="year" id="year" type="number" value="{{$publication->year}}" required>
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
</form>






    
@endsection