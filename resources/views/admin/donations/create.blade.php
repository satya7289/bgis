@extends('admin.layout')

@section('title')
 Add Donation Details    
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


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i> Add Donation Details</h1>
<br>

<form method="POST" action="/admin/adddonations" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Name:</label>
        <input class="form-control" name="name" id="name" type="text" placeholder="Donor Name" required>
    </div>
    <div class="form-group">
        <label for="image">Phone:</label>
        <input class="form-control" name="phone" id="phone" type="number" required>
    </div>
    <div class="form-group">
            <label for="image">Email</label>
            <input class="form-control" name="email" id="email" type="email" required>
        </div>
        <div class="form-group">
                <label for="image">Address:</label>
                <input class="form-control" name="address" id="address" type="text" required>
            </div>
            <div class="form-group">
                    <label for="image">City:</label>
                    <input class="form-control" name="city" id="city" type="text" required>
                </div>
                <div class="form-group">
                        <label for="image">State:</label>
                        <input class="form-control" name="state" id="state" type="text" required>
                    </div>
                    <div class="form-group">
                            <label for="image">Zip:</label>
                            <input class="form-control" name="zip" id="zip" type="number" required>
                        </div>
                        <div class="form-group">
                                <label for="image">Country:</label>
                                <input class="form-control" name="country" id="country" type="text" required>
                            </div>
                            <div class="form-group">
                                    <label for="image">Amount:</label>
                                    <input class="form-control" name="amount" id="amount" type="number" required>
                                </div>
                                    <div class="form-group">
                                            <label for="image">Order ID:</label>
                                            <p>Leave Blank if NA</p>
                                            <input class="form-control" name="order_id" id="order_id" type="text">
                                        </div>
                                        <div class="form-group">
                                                <label for="image">Tracking ID/ Transaction ID:</label>
                                                <p>Leave Blank if NA</p>
                                                <input class="form-control" name="tracking_id" id="tracking_id" type="text">
                                            </div>
                                            <div class="form-group">
                                                    <label for="image">Mode of Payment:</label>
                                                    <p>CCAvenue/ Bank etc</p>
                                                    <input class="form-control" name="order_status" id="order_status" type="text" required>
                                                </div>
    <button type="submit" class="btn btn-success">Add Details</button>
</form>






    
@endsection