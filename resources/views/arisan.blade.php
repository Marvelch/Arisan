@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="https://cdn.dribbble.com/users/1128531/screenshots/4961572/cover.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title blue-web">Data Peserta</h5>
                      <p class="card-text">Semua kumpulan data peserta arisan terdapat pada halaman data peserta.</p>
                  </div>
                  <div class="card-footer text-center">
                  <button type="button" class="btn btn-primary col-md-10 " onclick="window.location='{{url("xcprofile")}}'">PILIH</button>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="https://cdn.dribbble.com/users/1170793/screenshots/6018665/ecommerce-illustration.png" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title"><a href="{{url('xcwinner')}}" style="text-decoration:none">Pemenang</a></h5>
                      <p class="card-text">Lihat detail pemanng arisan pada setiap harinya berdasarkan data arisanyo.com </p>
                  </div>
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-primary col-md-10" onclick="window.location='{{url("xcwinner")}}'">PILIH</button>
                  </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/736x/c1/11/e0/c111e06c44ce5eb443fd51dc5fad09ac.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{url('xcwinner')}}" style="text-decoration:none">Profile</a></h5>
                  <p class="card-text">Lengkapi data diri pengguna sehingga tidak akan ada kekeliruan data pengguna.</p>
                </div>
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-primary col-md-10 " onclick="window.location='{{url("xcprofile")}}'">PILIH</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

</div>
@endsection
