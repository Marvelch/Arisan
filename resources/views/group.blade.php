@extends('layouts.sub_app')

@section('nav_menu')
  <ul class="list-unstyled">
    <li><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
    <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
    <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
    <li class="active"><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
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
              <h2 class="no-margin-bottom">Group Arisan</h2>
            </div>
          </header>
          <!-- Form input  -->
          <form action="/group/post" method="POST" onsubmit="return validation_group()" name="form_group">
          {{csrf_field()}}
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <!-- <p>Perhatikan kembali pengisian data group arisan.</p> -->
                      <form>
                        <div class="form-group">
                          <label class="form-control-label">Nama Group</label>
                          <input type="text" class="form-control" name="groups_name" require="required">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Biaya</label>
                          <input type="text" class="form-control" name="biaya" id="bayar" require="required">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Tanggal Mulai</label>
                          <input type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" min="<?php echo date('Y-m-d') ?>" name="tanggal_mulai" require="required">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Rentan Waktu Pengundian</label>
                          <input type="text" class="form-control" type="number" name="rentan_waktu_pengocokan" require="required">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Jumlah peserta</label>
                          <input type="text" class="form-control" name="jumlah_peserta" id="diskon" require="required">
                        </div><div class="form-group">       
                          <label class="form-control-label">Total Dana</label>
                          <input type="text" class="form-control" name="total_hadiah" id="Tbayar" readonly="readonly">
                        </div>
                        <div class="form-group pt-3">       
                          <input type="submit" class="btn btn-primary px-lg-5 float-right m-3" name="btn_group" value="Buat">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      Ketentuan Pembuatan Group
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled small">
                      <li>1. Penamaan group usahakan berbeda dari group sebelumnya. Sehingga tidak akan ada kekeliruan pada tampilan pengguna.</li>
                      <li>2. Biaya merupakan biaya tagihan per peserta arisan yang akan ditagihkan setiap pengundian selesai.</li>
                      <li>3. Tanggal mulai adalah tanggal group dibuat dan pengundian arisan akan dilakukan berdasarkan pada rentang waktu pengundian. Contoh : Tanggal pengundian 16/06/2020 dan Rentang waktu pengundian 7 hari maka 7 hari dari tanggal 16/06/2020 akan dilakukan pengundian yaitu pada tanggal 23/06/2020.</li>
                      <li>4. Pastikan jumlah peserta terisi dengan benar.</li>
                      <li>5. Total dana merupakan total dana yang akan diterima oleh peserta per pengundian.</li>
                      <li class="text-right pt-3">Terima kasih kami.</li>
                    </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </form>
        <script>
          /**
           * Javascript validation form_group
           */

          function validation_group()
          {
            var z = document.forms["form_group"]["groups_name"].value;
            var x = document.forms["form_group"]["biaya"].value;
            var c = document.forms["form_group"]["jumlah_peserta"].value;
            var v = document.forms["form_group"]["rentan_waktu_pengocokan"].value;

            if(z == "")
              {
                toastr.error('Kolom Nama Tidak Boleh Kosong !');
                return false;
              }if(x == ""){
                toastr.error('Kolom Biaya Tidak Boleh Kosong !');
                return false;
              }if(c == ""){
                toastr.error('Kolom Jumlah Peserta Tidak Boleh Kosong !');
                return false;
              }if(v == ""){
                toastr.error('Kolom Rentan Waktu Tidak Boleh Kosong !');
                return false;
              }
          }
        </script>
@endsection
