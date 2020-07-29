@extends('layouts.sub_app')

@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Profile</h2>
            </div>
          </header>
          <section class="dashboard-counts" style="padding:30px 0">
              <div class="row">
                @foreach($users as $user)
                <div class="col-lg-12">
                  <div class="client card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" class="dropdown-toggle" onclick="window.location='{{url("profile_edit")}}'" title="Edit Profile"><i class="fas fa-edit fa-lg default-color"></i></button>
                      </div>
                    </div>
                    <div class="card-body text-center">
                      <div class="client-avatar"><img src="img/user.png" alt="User Photo" class="img-fluid rounded-circle">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                        <h3>{{$user->name}}</h3>
                      </div>
                      <div class="client-title">
                        <span class="pt-2">
                        <ul class="list-inline">
                          <li class="list-inline-item">{{$user->email}}</li>
                          <li class="list-inline-item">
                          <?php
                            $nohp = $user->phone;
                            if($nohp == null)
                            {
                              echo "Tidak Terdaftar";
                            }else{
                              function hp($nohp) {
                                // kadang ada penulisan no hp 0811 239 345
                                $nohp = str_replace(" ","",$nohp);
                                // kadang ada penulisan no hp (0274) 778787
                                $nohp = str_replace("(","",$nohp);
                                // kadang ada penulisan no hp (0274) 778787
                                $nohp = str_replace(")","",$nohp);
                                // kadang ada penulisan no hp 0811.239.345
                                $nohp = str_replace(".","",$nohp);
                            
                                // cek apakah no hp mengandung karakter + dan 0-9
                                if(!preg_match('/[^+0-9]/',trim($nohp))){
                                    // cek apakah no hp karakter 1-3 adalah +62
                                    if(substr(trim($nohp), 0, 3)=='+62'){
                                        $hp = trim($nohp);
                                    }
                                    // cek apakah no hp karakter 1 adalah 0
                                    elseif(substr(trim($nohp), 0, 1)=='0'){
                                        $hp = '+62'.substr(trim($nohp), 1);
                                    }
                                }
                                print $hp;
                            }
                            hp($nohp);
                            }
                            
                            ?>
                          </li>
                          <li class="list-inline-item">Tidak Terverifikasi</li>
                        </ul>
                        </span> 
                    </div>
                      <div class="client-info">
                        <div class="row">
                          <div class="col-4 text-right "><strong><a href="{{$user->facebook}}" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></strong></div>
                          <div class="col-4"><a href="{{$user->twitter}}" target="_blank"><strong><i class="fab fa-instagram-square fa-2x"></i></a></strong></div>
                          <div class="col-4 text-left"><a href="{{$user->instagram}}" target="_blank"><strong><i class="fab fa-twitter-square fa-2x"></i></a></strong></div>
                        </div>
                        <div class="text-center">
                          <span class="pt-2">
                             <button type="button" class="btn btn-primary"><i class="fa fa-share-alt-square fa-lg" aria-hidden="true"></i> Bagikan</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </section>
@endsection
