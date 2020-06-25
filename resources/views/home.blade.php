@extends('layouts.sub_app')

@section('nav_menu')
  <ul class="list-unstyled">
    <li class="active"><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
    <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
    <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
    <li><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
  </ul><span class="heading">Layanan</span>
  <ul class="list-unstyled">
    <li> <a href="{{route('contact')}}"> <i class="icon-mail"></i>Kontak </a></li>
  </ul>
@endsection
@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://miro.medium.com/max/7204/1*6896ASu1A0nqXyhwjxWgTA.png" alt="First slide" style="height: 25rem;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://miro.medium.com/max/9600/1*WBblwZRtd8yxDi19rLaj6A.png" alt="Second slide" style="height: 25rem;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://miro.medium.com/max/9600/1*kBkI057hByC8ODB4WV1PlQ.png" alt="Third slide" style="height: 25rem;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
                <!-- Item -->
                @foreach($counts as $count)
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Data</br>Peserta</span>
                      <div class="progress">
                        <div role="progressbar" style="width: {{$count}}%; height: 4px;" aria-valuenow="{{$count}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$count}}</strong></div>
                  </div>
                </div>
                @endforeach
                @foreach($count_group as $count_g)
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Data<br>Group</span>
                      <div class="progress">
                        <div role="progressbar" style="width: {{$count_g}}%; height: 4px;" aria-valuenow="{{$count_g}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$count_g}}</strong></div>
                  </div>
                </div>
                @endforeach
                @foreach($ends as $end)
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Peserta<br>Selesai</span>
                      <div class="progress">
                        <div role="progressbar" style="width: {{$end}}%; height: 4px;" aria-valuenow="{{$end}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$end}}</strong></div>
                  </div>
                </div>
                @endforeach
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Laporan</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>1</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-12">
                <div class="card text-center">
                    <div class="card-header">
                      <h5>Buat Group Arisan</h5>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Temukan layanan arisan online terpercaya & terbaik hanya bookingbuku.com </p>
                      <a href="{{route('group')}}" class="btn btn-primary">Buat Group</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection
