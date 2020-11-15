
@extends('layout')

@section('title')
    home
@endsection

@section('content')
<section id="todo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center display-4">CUSTOMER DETAILS</h1>
            </div>
            <div class="col-md-12">
                <form method="POST" action="{{route('store')}}">
                    @csrf
                    <label for="title">Name*</label>
                    <input type="text" name="name" id="name" class="form-control mb-2"/>
                    <label for="title">Email_id*</label>
                    <input type="text" name="email_id" id="email_id" class="form-control mb-2"/>
                    <label for="title">Phone Number*</label>
                    <input type="text" name="phone_no" id="phone_no" class="form-control mb-2"/>
                    <input type="submit" class="btn btn-dark btn-block" value="Submit"/>
                </form>
            </div>
            <div class="col-md-12 mt-3">
                <div class="todo-list text-center">
                    @foreach($todos as $customer)
                    <div class="todo-content border border-dark p-2 mb-2 d-flex justify-content-between">
                        <div>
                            <span class="lead">{{$customer->name}}</span><br>
                            <span class="lead">{{$customer->email_id}}</span><br>
                            <span class="lead">{{$customer->phone_no}}</span>
                        </div>
                        <div>
                            <a href="{{route('edit',$customer->id)}}" class="btn btn-warning">Update</a>
                            <form action="{{route('delete',$customer->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Delete"/>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>

@endsection