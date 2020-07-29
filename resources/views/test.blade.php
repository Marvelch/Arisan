@extends('layouts.sub_app')

@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>

          <section class="dashboard-counts" style="padding:30px;">
          <div class="container-fluid">
              <div class="row bg-white has-shadow" >
              <div class="card-deck">
                <div class="card">
                  <img class="card-img-top img-fluid w-100" src="/front_end/images/learn.png" alt="Notification">
                  <div class="card-body">
                    <h5 class="card-title">Tutorial Buat Group</h5>
                    <p class="card-text">Belum mengerti dengan cara penggunaan website bookingbook ? Yuk belajar !</p>
                    <p class="card-text"><small class="text-muted"><i class="fa fa-check-square-o"></i> Lihat Blog</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid w-100" src="/front_end/images/alert.png" alt="Notification">
                  <div class="card-body">
                    <h5 class="card-title">Laporkan Penipuan</h5>
                    <p class="card-text">Perna mengalami penipuan ? Ayo segera laporkan tindak penipuan kepada kami.</p>
                    <p class="card-text"><small class="text-muted"><i class="fa fa-check-square-o"></i> Lihat Blog</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid w-100" src="/front_end/images/help.png" alt="Notification">
                  <div class="card-body">
                    <h5 class="card-title">Kuesioner</h5>
                    <p class="card-text">Bantu kami meningkatkan layanan dengan mengisi kuesioner layanan.</p>
                    <p class="card-text"><small class="text-muted"><i class="fa fa-file-word-o" aria-hidden="true"></i> Kuesioner</small></p>
                  </div>
                </div>
              </div>
              </div>
            </div>
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
