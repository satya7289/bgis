@extends('admin.layout')

@section('title')
  Contact Us Form
@endsection

@section('body')
<h1><i class="fa fa-envelope"></i> Contact Form Submissions</h1>
<br>

<table class="table table-bordered table-striped">
    <thead><tr>
        <th>Query Title</th>
        <th>Date</th>
        <th>Status</th>
    </tr></thead>
    <tbody>
        @foreach ($contacts as $contact )
        <tr>
            <td><a data-toggle="modal" data-target="#c{{ $contact->id }}" href="#" role="button" aria-expanded="false" aria-controls="collapseExample">
                    {{$contact->subject}}
                </a>
            </td>
            <td>
                    {{ $contact->created_at->toDateString() }}
            </td>
            <td>
                    <span style="color: {{$contact->completed ? 'green' : 'red'}}">{{ $contact->completed ? 'Completed' : 'Not Completed'}}</span>
            </td>
        </tr>
        @endforeach
</table>

{{$contacts->links()}}

@foreach ($contacts as $contact)

<div class="modal fade" id="c{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ $contact->subject}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p><strong>Message:</strong></p>
              <p>{{$contact->message}}</p>
              <br>
              <table class="table table-bordered table-striped">
                  <thead>
                      <tr class="border {{ $contact->completed ? '': 'border-danger' }}">
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{{$contact->name}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->phone}}</td>
                      </tr>
                  </tbody>
              </table>

              <form method="POST" action="/admin/contact/{{ $contact->id }}">
                @method('PATCH')
                @csrf
                <div class="form-check">
                <label class="form-check-label" for="completed">Completed</label>
                <input class="form-check-input" type="checkbox" name="completed" onchange="this.form.submit()" {{ $contact->completed ? 'checked' : ''}}>
                </div>
            </form>

            </div>
            <div class="modal-footer">  
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    
@endforeach

@endsection