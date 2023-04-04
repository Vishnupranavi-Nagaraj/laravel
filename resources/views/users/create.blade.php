<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

@extends('users.layout')
  
@section('content')

<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <!-- There were some problems with your input.<br><br> -->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="form_control">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" placeholder="Name">
            </div>
        </div>
        <div class="form_control">
            <div class="form-group">
                <br>
                <strong>Email:</strong>
                <input type="text" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form_control">
            <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- <div class="pull-right"> -->
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back </a>
        <!-- </div> -->
        </div>
    </div>
   
</form>
@endsection