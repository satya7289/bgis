@extends('admin.layout')

@section('title')
    Publications
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i> Publications</h1>
<br>

<a href="/admin/publications/create" class="btn btn-success">Create New</a><br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Actions</th>
                        <th>Date of Uploading</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($publications as $publication)
                    <tr>
    
                        <td>{{ $publication->title }}</td>
                        <td>
                            {{$publication->category}}
                        </td>
                        <td>
                        <a href="/admin/publications/{{ $publication->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        <form method="POST" action="/admin/publications/{{ $publication->id }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete this?')" type="submit" class="btn btn-danger pull-left">Delete</button>
                        </form>
    
                        </td>
                        <td>{{$publication->created_at->toDateString()}}</td>

                    </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    
@endsection