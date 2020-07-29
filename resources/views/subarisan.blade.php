@extends('layouts.sub_app')

@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Group Preview</h2>
            </div>
          </header>
          <!-- Client Section-->
          <section class="feeds padding-top">
            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-6">
                  <div class="articles card">
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Peserta Status</h2>
                    </div>
                    <div class="card-body no-padding">
                    @foreach($submember as $hasil)
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="{{asset('img/avatar-9.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="#">
                            <h3 class="h5">{{$hasil->nama}}</h3></a>
                            <small>
                                <?php
                                    if($hasil->status_arisan == 1)
                                    {
                                        echo "Terpilih";
                                    }else{
                                        echo "Belum Terpilih";
                                    }
                                ?>
                            </small>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <!-- Check List -->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">           
                      <h2 class="h3">Pengundian</h2>
                    </div>
                    @foreach($subview as $result)
                      <table class="table table-borderless col-sm-8 mt-3 ml-3">
                        <tbody>
                            <tr>
                                <td>Nama Arisan</td>
                                <td>{{$result->groups_name}}</td>
                            </tr>
                            <tr>
                                <td>Biaya</td>
                                <td>Rp {{$result->biaya}}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Peserta</td>
                                <td>{{$result->jumlah_peserta}} Orang</td>
                            </tr>
                            <tr>
                                <td>Total Hadiah</td>
                                <td>Rp {{$result->total_hadiah}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Mulai</td>
                                <td>{{ Carbon\Carbon::parse($result->tanggal_mulai)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengocokan</td>
                                <td>{{ Carbon\Carbon::parse($result->waktu_pengocokan)->format('d-m-Y') }}</td>
                            </tr>
                            @foreach($hasil_pemenang as $pemenang)
                            <tr>
                                <td>Pemenang Terakhir</td>
                                <td>
                                    {{$pemenang}}
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <div class="badge bg-green" style="border-radius: 0rem;"></i> <span id="countdown"></span></div>
                            </tr>
                        </tbody>
                      </table>
                      @endforeach
                  </div>
                </div>
              </div>
            </div>
          </section>

          @foreach($subview as $subresult)

<script>
	CountDownTimer('{{$subresult->created_at}}', 'countdown');
		function CountDownTimer(dt, id)
			{
			    var end = new Date('{{$subresult->waktu_pengocokan}}');
			    var _second = 1000;
			    var _minute = _second * 60;
			    var _hour = _minute * 60;
			    var _day = _hour * 24;
			    var timer;
			    function showRemaining() {
						var now = new Date();
						var distance = end - now;
                        if (distance < 0)
                        {
						    clearInterval(timer);
							document.getElementById(id).innerHTML = '<b>TELAH SELESAI</b> ';
							return;
                        }
                        
					var days = Math.floor(distance / _day);
					var hours = Math.floor((distance % _day) / _hour);
					var minutes = Math.floor((distance % _hour) / _minute);
					var seconds = Math.floor((distance % _minute) / _second);

				document.getElementById(id).innerHTML = days + ' Hari ';
				document.getElementById(id).innerHTML += hours + ' Jam ';
				document.getElementById(id).innerHTML += minutes + ' Menit ';
				// document.getElementById(id).innerHTML += seconds + ' Detik';
				// document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
			}
		timer = setInterval(showRemaining, 1000);
    }
</script>

    @endforeach
@endsection
