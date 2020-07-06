@extends('layouts.sub_app')

@section('nav_menu')
<ul class="list-unstyled">
            <li><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
            
            <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
            <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
            <li><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
          </ul><span class="heading">Layanan</span>
          <ul class="list-unstyled">
            <li  class="active"><a href="#"> <i class="icon-mail"></i>Bantuan </a></li>
          </ul>
@endsection
@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kontak</h2>
            </div>
          </header>
          
          <form action="{{url('contact/report')}}" method="post">
          {{csrf_field()}}
          <section class="dashboard-counts">
            <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
              @endif
              <div class="row bg-white has-shadow">
              <div class="col-sm-6">
                  <img class="card-img-top" src="img/contact.jpg" alt="Card image cap">
                </div>
                <div class="col-sm-6">
                <div class="card-body">
                      <form>
                        <div class="form-group pt-3">
                          <label class="form-control-label">Email</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Subyek</label>
                          <input type="text" class="form-control" maxlength="50" name="subyek">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Pesan</label>
                          <textarea name="message" ols="30" rows="5" maxlength="150" class="form-control"></textarea>
                        </div>
                        <div class="form-group">       
                          <button class="btn btn-primary">Kirim</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
          </section>
          </form>
@endsection
