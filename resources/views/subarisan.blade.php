@extends('layouts.app')

@section('content')
<div class="container">

<div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Peserta Arisan</div>
                    <div class="card-body text-left">
                        <table class="table table-borderless text-center">
                            <thead>
                                <tr>
                                    <th class="text-left">Nama Peserta</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            @foreach($submember as $hasil)
                            <tbody>
                                <tr>
                                    <td class="text-left">{{$hasil->nama}}</td>
                                    <td> 
                                        <?php
                                            if($hasil->status_arisan == 1)
                                            {
                                                echo '<i class="fas fa-check"></i>';
                                            }else{
                                                echo '<i class="fas fa-times"></i>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </di>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informasi Group</div>
                    <div class="card-body text-left col-md-8">
                        @foreach($subview as $result)
                            <table class="table table-borderless">
                                <!-- <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead> -->
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
                                    @foreach($result_pem as $pemenang)
                                    <tr>
                                        <td>Pemenang Terakhir</td>
                                        <td>{{$pemenang->nama}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                    <div class="card-footer text-center">
                        </i> <span id="countdown"></span>
                    </div>
                </div>
            </div>
        </div>   

    </div>
</div>

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
							document.getElementById(id).innerHTML = '<b>TUGAS SUDAH BERAKHIR</b> ';
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
