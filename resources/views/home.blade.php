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
                <div class="row bg-white has-shadow">
                  <!-- Menu price list -->
                  <div class="col-md-5 text-center">
                    <h1 class="default-color"><b>Daftar Harga</b></h1>
                    <p><small>Berlanggan paket berbayar untuk layanan tak terbatas. Pesan Sekarang !</small></p>
                    <img class="img-price" src="/front_end/images/learn.png" alt="">
                  </div>
                  <!-- price list name bar -->
                  <div class="card-deck col-md-7">
                  <div class="card price-list">
                    <div class="card-body">
                    <div class="heading">
                        <h3 class="subtitle"><b>Normal</b></h3>
                    </div>
                      <h5 class="card-title">Rp 2.500</h5>
                      <p class="card-text"><small class="text-muted">Pembelian langsung diproses.</small></p>
                      <p class="card-text"><small class="text-muted"><b>Layanan</b> : Tidak Lengkap</small></p>
                      <p class="card-text"><small class="text-muted"><b>Jumlah Group</b> : 25 group</small></p>
                      <p class="card-text"><small class="text-muted"><b>Kedaluwarsa</b> : 30 hari</small></p>
                      <button class="btn btn-primary col-md-12" onclick="window.location='{{ url("pay_detail/status_normal/") }}'">Pilih Paket</button>
                    </div>
                  </div>
                  <div class="card price-list">
                    <div class="card-body">
                    <div class="heading">
                        <h3 class="subtitle"><b>Premium</b></h3>
                    </div>
                      <h5 class="card-title">Rp 5.000</h5>
                      <p class="card-text"><small class="text-muted">Pembelian langsung diproses.</small></p>
                      <p class="card-text"><small class="text-muted"><b>Layanan</b> : Tersedia Semua</small></p>
                      <p class="card-text"><small class="text-muted"><b>Jumlah Group</b> : Unlimited</small></p>
                      <p class="card-text"><small class="text-muted"><b>Kedaluwarsa</b> : 30 hari</small></p>
                      <button class="btn btn-primary col-md-12" onclick="window.location='{{ url("pay_detail/status_pro/") }}'">Pilih Paket</button>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </section>
          
@endsection
