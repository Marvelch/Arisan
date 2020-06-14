@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('xcarisan')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{url('xcprofile')}}">Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    </nav>
    
        <form action="{{url('processupdate')}}" method="post">
         {{ csrf_field() }}
            @foreach($users as $result) 
            <div class="row">
            <div class="col-md-6 pt-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{$result->name}}" disabled>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Telpon" value="{{$result->phone}}">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="{{$result->email}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control textarea-status" name="status" placeholder="Status" value="{{$result->status}}">
                </div>
            </div>
          
            <div class="col-md-6 pt-3">
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-square"></i></span>
                    </div>
                    <input type="text" class="form-control" name="facebook" placeholder="facebook.com/username" value="{{$result->facebook}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter-square"></i></span>
                    </div>
                    <input type="text" class="form-control" name="twitter" placeholder="twitter.com/username" value="{{$result->twitter}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram-square"></i></span>
                    </div>
                    <input type="text" class="form-control" name="instagram" placeholder="instagram.com/username" value="{{$result->instagram}}">
                    </div>
                </div>
                @endforeach
                
                <div class="form-group text-right">
                    <input type="button" value="Batal"  class="btn btn-primary" onclick="window.location='{{ url ("xcprofile") }}' ">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
