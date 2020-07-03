@extends('layouts.sub_app')

@section('nav_menu')
<ul class="list-unstyled">
            <li><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
            
            <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
            <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
            <li><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
          </ul><span class="heading">Layanan</span>
          <ul class="list-unstyled">
            <li  class="active"><a href="#"> <i class="icon-mail"></i>Kontak </a></li>
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
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <div class="col-sm-6">
                <div class="card-body">
                      <form>
                        <div class="form-group pt-3">
                          <label class="form-control-label">Email</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Subyek</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Pesan</label>
                          <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">       
                          <input type="submit" value="Kirim" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                </div>
                <div class="col-sm-5">
                <div class="card-body">
                      <form>
                      <div class="card-deck">
                        <div class="card text-center">
                            <img class="card-img-top" src="img/no_photo.png" alt="Card image cap">
                            <div class="card-body">
                            <!-- <h5 class="card-title">Email</h5> -->
                            <p class="card-text">Cs@bookingbook.my.id</p>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </section>
@endsection
