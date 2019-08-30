@extends('admin.layout')

@section('title', 'Change Home Video')

@section('body')
@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif

@if(Session::has('error_message'))
<div class="alert alert-danger" role="alert">
        {{Session::get('error_message')}}
      </div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif

<form id="form-change-password" role="form" method="POST" action="/admin/homevideo" novalidate class="form-horizontal">
  <div class="col-md-9">             
    <label for="home-video" class="col-sm-4 control-label">Current Video:</label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="text" class="form-control" id="home-video" name="home-video" value="{{$yvlink->link}}">
      </div>
    </div>
    <div class="form-group">
            <div class="col-sm-offset-5 col-sm-6">
              <button type="submit" class="btn btn-danger">Update</button>
            </div>
  </div>
</form>

@endsection