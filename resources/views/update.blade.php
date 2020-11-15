
@extends('layout')
@section('title')
Update
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">Update Details</h1>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{route('update',$customer->id)}}">
                @csrf
            <label for="title">Name*</label>
                    <input type="text" name="name" value={{$customer->name}} id="name" class="form-control mb-2"/>
                    
                    <label for="title">Email_id*</label>
                    <input type="text" name="email_id" value={{$customer->email_id}} id="email_id" class="form-control mb-2"/>
                    
                    <label for="title">Phone Number*</label>
                    <input type="text" name="phone_no" value={{$customer->phone_no}} id="phone_no" class="form-control mb-2"/>
                  
                <input type="submit" class="btn btn-dark btn-block" value="Update"/>
            </form>
        </div>
    </div>
</div>
@endsection
