@extends('layouts.sub_app')

@section('nav_menu')
  <ul class="list-unstyled">
    <li><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
    <li><a href="{{route('profile')}}"><i class="fas fa-id-card-alt"></i>Profile </a></li>
    <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
    <li><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
    <li class="active"><a href="{{route('votes')}}"><i class="fas fa-vote-yea"></i></i>Buat Vote</a></li>
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
              <h2 class="no-margin-bottom">Vote</h2>
            </div>
          </header>
          <section class="projects padding-top">
            <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Buat vote online
                </div>
                <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="">Pertanyaan</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Jawaban Pertama</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Jawaban Kedua</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                </div>
                    <a href="#" class="btn btn-primary">Kirim</a>
                </div>  
                </div>
            </div>
            </section>

<script>
    function payments()
      {
        payment = document.getElementById("selected_payments").value;
        
        if(payment == "gopay")
        {
          $("#GopayModal").modal('toggle'); //see here usage
        }else{
          $("#PaypalModal").modal('toggle');
        }
      }
    

</script>
@endsection
