<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

@extends('users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
           
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$store->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="form_control">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $store->name }}" placeholder="Name">
                </div>
            </div>
            <div class="form_control">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" placeholder="Email" value="{{ $store->email }}">
                </div>
            </div>
            <div class="form_control">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection