@extends('layouts.sub_app')

@section('nav_menu')
  <ul class="list-unstyled">
    <li class="active"><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
    <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
    <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
    <li><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
  </ul><span class="heading">Layanan</span>
  <ul class="list-unstyled">
    <li> <a href="{{route('contact')}}"> <i class="icon-mail"></i>Bantuan </a></li>
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
          <section class="dashboard-counts no-padding-bottom" style="padding:30px;">
            <div class="container-fluid">
              <div class="row bg-white has-shadow" style="padding:0px;">
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
                @foreach($reports as $report)
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Laporan</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$report}}</strong></div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </section>
@endsection
