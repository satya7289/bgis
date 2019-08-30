@extends('admin.layout')

@section('title')
Close the Ticket   
@endsection

@section('body')
<h2>{{$ticket->title}}</h2>
<p class="text-muted">{{$ticket->created_at->toDateString()}} | {{$ticket->created_at->toTimeString()}}</p>
<p>Status: <span style="color:{{ $ticket->closed ? 'green' : 'red' }}">{{$ticket->closed ? 'Closed'  : 'Open'}}</span><span class="pull-right">Created Against: <strong>{{$ticket->against->name}}</strong></span></p>
<hr style="background-color:burlywood;color:burlywood;height:1px;border:none">

@if (!$ticket->closed)
<form method="POST" action="/admin/tickets/{{ $ticket->id }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <p style="color:red">Are You Sure You want to mark this Ticket as <strong>Closed</strong>? Once a ticket is closed, it cannot be reopened.</p>
    <button type="submit" class="btn btn-success" onclick="this.form.submit">Close This Ticket</button>
</form>
@else 
<p>The Ticket is Already Closed. Once a ticket is closed, it cannot be reopened. Please Create a New Ticket.
@endif

@endsection