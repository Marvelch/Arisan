@extends('layouts.app')

@section('content')
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('xcarisan')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                    
    @if (Session::has('success'))
        <div class="alert alert-primary" role="alert">
        {{ Session::get('success') }}
</div>
    @endif
    <div class="row">
    <!-- <div class="col-md-4">
        <img src="/img/no_photo.png" alt="" class="photo-frame">
    </div> -->
        @foreach($users as $result)
            <div class="col-md-6 pt-3">
                <div class="form-group">
                    <input type="text" class="form-control label-font" value="{{$result->name}}" placeholder="Nama Lengkap" disabled>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  value="{{$result->phone}}" placeholder="No Telpon" disabled>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" value="{{$result->email}}" placeholder="Email" disabled>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control textarea-status" value="{{$result->status}}" placeholder="Status " disabled>
                </div>
            </div>
        
            <div class="col-md-6 pt-3">
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-square"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="facebook.com/username"  value="{{$result->facebook}}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter-square"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="twitter.com/username" value="{{$result->twitter}}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram-square"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="instagram.com/username" value="{{$result->facebook}}" disabled>
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary" onclick="window.location='{{url("xceditprofile")}}'">Edit Profile</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
