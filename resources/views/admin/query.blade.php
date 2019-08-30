@extends('admin.layout')

@section('title')
  Admission Queries
@endsection

@section('body')
<h1><i class="fa fa-envelope"></i> Admission Query Form Submissions</h1>
<br>

<a href="/admin/query/export" class="btn btn-info">Export Admission Queries</a><br><br>

<table class="table table-bordered table-striped">
    <thead><tr>
        <th>Query Title                                   </th>
        <th>Date</th>
        <th>Name</th>
        <th>Phone</th>
    </tr></thead>
    <tbody>
        @foreach ($queries as $query )
        <tr>
            <td><a data-toggle="modal" data-target="#c{{ $query->id }}" href="#" role="button" aria-expanded="false" aria-controls="collapseExample">
                    {{$query->subject}}
                </a>
            </td>
            <td>
                    {{ $query->created_at->toDateString() }}
            </td>
            <td>
                    {{$query->name}}
            </td>
            <td>
                {{$query->phone}}
        </td>
        </tr>
        @endforeach
</table>

{{$queries->links()}}

@foreach ($queries as $query)

<div class="modal fade" id="c{{ $query->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ $query->subject}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><strong>Message:</strong></p>
              <p>{{$query->query}}</p>
              <br>
              <table class="table table-bordered table-striped">
                  <thead>
                      <tr class="border {{ $query->completed ? '': 'border-danger' }}">
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{{$query->name}}</td>
                          <td>{{$query->email}}</td>
                          <td>{{$query->phone}}</td>
                      </tr>
                  </tbody>
                </table>

            </div>
            <div class="modal-footer">  
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    
@endforeach

@endsection