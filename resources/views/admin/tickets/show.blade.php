@extends('admin.layout')

@section('title')
    {{ $ticket->title }}
@endsection

@section('body')
<h2>{{$ticket->title}}</h2>
<p class="text-muted">{{$ticket->created_at->toDateString()}} | {{$ticket->created_at->toTimeString()}}</p>
<p>Status: <span style="color:{{ $ticket->closed ? 'green' : 'red' }}">{{$ticket->closed ? 'Closed'  : 'Open'}}</span><span class="pull-right">Created Against: <strong>{{$ticket->against->name}}</strong></span></p>
@if(!$ticket->closed && Auth::id() === $ticket->owner_id)<a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-success pull-left" style="margin-right: 3px;">Mark as Complete</a>
@endif
<br>
<hr style="background-color:burlywood;color:burlywood;height:1px;border:none">
<h3 style="text-align:center;color:green">{{ $ticket->closed ? 'This Ticket has been marked as closed.' : ''}}</h3>
<p>{{$ticket->body}}</p>

<br><br>

<hr style="background-color:burlywood;color:burlywood;height:1px;border:none">

@comments(['model' => $ticket])
@endcomments    
@endsection