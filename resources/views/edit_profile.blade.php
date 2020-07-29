@extends('layouts.sub_app')

@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Profile</h2>
            </div>
          </header>
        <form action="{{url('processupdate')}}" method="post">
         {{ csrf_field() }}
          @foreach($users as $user)
          <!-- Dashboard Counts Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Inline Form-->
                <div class="col-lg-6">                           
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Pengguna</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <input type="text" placeholder="Nama Lengkap" class="form-control" name="name" maxlength="30" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="Email" class="form-control" name="email" value="{{$user->email}}" disabled>
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="Telpon" class="form-control" name="phone" maxlength="12" minlength="11" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="Status" class="form-control" name="status" maxlength="30" value="{{$user->status}}">
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" data-toggle="modal" data-target="#myModal" class="dropdown-toggle"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                    </div>
                    </div>
                    <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Bantuan</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                        <img src="img/help.png" alt="" class="img-thumbnail">
                            <ul class="list-unstyled pt-3">
                                <li><small><i class="fa fa-check-square-o" aria-hidden="true"></i> Pengisian link sosial media harus penggunakan link lengkap contohnya seperti https://www.instagram.com/<b>username_pengguna</b></small></li>
                            </ul>
                            <ul class="list-unstyled">
                            <li><small><i class="fa fa-check-square-o" aria-hidden="true"></i> Email pengguna tidak bisa diganti karena alasan keamanan. Bila terdapat masalah silahkan hubungi email cs@bookingbuku.com</small></li>
                            </ul>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                        </div>

                        </div>
                    </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Sosial Media</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-instagram-square fa-lg" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="instagram" placeholder="Instagram" value="{{$user->instagram}}">
                        </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-twitter-square fa-lg" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="twitter" placeholder="Twitter" value="{{$user->twitter}}">
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="facebook" placeholder="Facebook" value="{{$user->facebook}}">
                        </div>
                        </div>
                        <div class="form-group text-right">
                           <button type="button" class="btn btn-primary" onclick="window.location='{{url("profile")}}'">Batal</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          @endforeach
        </form>
@endsection
