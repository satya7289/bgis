@extends('admin.layout')

@section('title')
    View Tickets
@endsection

@section('body')
<h1><i class="fa fa-users"></i> View Tickets </h1>
    <hr>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#against">Tickets Against</a></li>
    <li><a data-toggle="tab" href="#self">Self Created Tickets</a></li>
    @can('View All Tickets')
        <li><a data-toggle="tab" href="#menu2">View All Tickets</a></li>
    @endcan
</ul>
        
    <div class="tab-content">
        <div id="against" class="tab-pane fade in active">
            <br>
            <h3>Tickets Against {{ Auth::user()->name}}</h3>
            <br>
            <div class="table-responsive">
                    <table class="table table-bordered table-striped">
            
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created By</th>
                                <th>Date of Creating</th>
                                <th>Responses</th>
                                <th>Status</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            @foreach ($against as $ticket)
                            <tr>
            
                                <td><a href="/admin/tickets/{{$ticket->id}}"> {{$ticket->title }}</a></td>
                                <td>{{ $ticket->owner->name }}</td>
                                <td>{{ $ticket->created_at->toDateString() }}</td>
                                <td>{{ $ticket->comments->count() }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                <td><p style="color:{{ $ticket->closed? 'green' : 'red' }}">{{ $ticket->closed ? 'CLOSED' : 'OPEN' }}</p></td>
                            </tr>
                            @endforeach
                        </tbody>
            
                    </table>
                </div>
        </div>
        <div id="self" class="tab-pane fade">
                <br>
                <h3>Tickets Created By {{ Auth::user()->name}}</h3>
                <br>
                <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Created Against</th>
                                    <th>Date</th>
                                    <th>Responses</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                
                            <tbody>
                                @foreach ($owner as $ticket)
                                <tr>
                
                                    <td><a href="/admin/tickets/{{$ticket->id}}">{{ $ticket->title }}</a></td>
                                    <td>{{ $ticket->against->name }}</td>
                                    <td>{{ $ticket->created_at->toDateString() }}</td>
                                    <td>{{ $ticket->comments->count() }}</td>
                                    <td>
                                        @if(!$ticket->closed)<a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Mark as Complete</a>
                                        @else 
                                        <p style="color:green">This Ticket has been Closed.</p>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                
                        </table>
                    </div>
        </div>
        @can('View All Tickets')
        <div id="menu2" class="tab-pane fade">
            <br>
            <h3>All Tickets</h3>
            <p>Only Administrator Can View All Tickets</p>
            <div class="table-responsive">
                    <table class="table table-bordered table-striped">
            
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created By</th>
                                <th>Created Against</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            @foreach ($tickets as $ticket)
                            <tr>
            
                                <td><a href="/admin/tickets/{{$ticket->id}}"> {{$ticket->title }}</a></td>
                                <td>{{ $ticket->owner->name }}</td>
                                <td>{{ $ticket->against->name }}</td>
                                <td>{{ $ticket->created_at->toDateString() }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                <td><p style="color:{{ $ticket->closed? 'green' : 'red' }}">{{ $ticket->closed ? 'CLOSED' : 'OPEN' }}</p></td>
                            </tr>
                            @endforeach
                        </tbody>
            
                    </table>
                </div>
        </div>
        @endcan
    </div>
@endsection