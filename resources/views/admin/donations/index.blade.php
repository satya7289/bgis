@extends('admin.layout')

@section('title')
    Donations
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-money" aria-hidden="true"></i> Donations</h1>
<br>

<a href="/admin/donationadd" class="btn btn-success">Add Donation Details</a>
@can('View Full Donations')<a href="/admin/donations/export" class="btn btn-info">Export Donation Details</a>@endcan<br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Donor Name</th>
                        <th>Tracking ID</th>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        @can('View Full Donations')<th>More</th>@endcan
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($donations as $donation)
                    <tr>
    
                        <td>{{ $donation->billing_name }}</td>
                        <td>
                            {{$donation->tracking_id}}
                        </td>
                        <td>
                            {{$donation->order_id}}
                        </td>
                        <td>
                            {{$donation->created_at->toDateString()}}
                        </td>
                        <td>
                            <span style="color: {{ $donation->order_status === 'Success' ? 'green' : ''}}">{{$donation->order_status}}</span>
                        </td>
                        <td>
                            {{$donation->amount}}
                        </td>
                        @can('View Full Donations')
                        <td>
                            <a href="/admin/donations/{{$donation->id}}">Details</a>
                        </td>
                        @endcan

                    </tr>
                    @endforeach
                </tbody>
    
            </table>
            
        </div>
        {{ $donations->links() }}
    
@endsection