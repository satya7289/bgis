@extends('admin.layout')

@section('title')
    Admission Test Dates
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-calendar" aria-hidden="true"></i> Admission Test Dates</h1>
<br>

<a href="/admin/dates/create" class="btn btn-success">Create New</a><br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Venue</th>
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($dates as $date)
                    <tr>
    
                        <td>{{ $date->date }}</td>
                        <td>
                            {{$date->venue}}
                        </td>
                        <td>
                        <form method="POST" action="/admin/dates/{{ $date->id }}">
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
    
@endsection