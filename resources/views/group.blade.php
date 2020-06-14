@extends('layouts.app')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Ketentuan Layanan Arisanyo.com</div>
                    <div class="card-body">
                        <div class="card mb-3">
                            <img class="card-img-top" src="https://images.dusdusan.com/product/kzbfhFwC1560755523_BANNER%20ARTIKEL%202-02.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Baca Ketentuan</h5>
                            <p class="card-text">- Buat nama group berbeda dari sebelumnya. Sehingga tidak ada group yang memiliki nama yang sama pada satu admin arisan.</p>
                            <p class="card-text">- Potongan harga untuk 1 group arisan sebesar 5% dari total pengumpulan dana. Sebagai biaya layanan yang diberikan oleh Arisanyo.com</p>
                            <p class="card-text">- Tanggal selesai dan tanggal mulai akan membantu untuk mengetahui catatan waktu mulai arisan dan tanggal selesai sebagai tanggal penonaktifan group.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Group Arisan</div>
                    <div class="card-body">
                        <form action="/xcgroup/xcpost" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="groups_name" require="required"> 
                                <!-- <small id="emailHelp" class="form-text text-muted">Bedakan nama bila memiliki beberapa group arisan.</small> -->
                            </div>
                            <div class="form-group">
                                <label>Biaya</label>
                                <input type="text" class="form-control" name="biaya" id="bayar" require="required">
                                <!-- <small id="emailHelp" class="form-text text-muted">Biaya yang digunakan /perminggu atau /bulan untuk setiap peserta.</small> -->
                            </div>
                            <div class="form-group">
                            <label>Tanggal Mulai</label>
                                <input class="form-control" type="datetime-local" value="2020-08-19T13:45:00" name="tanggal_mulai" require="required">
                            </div>
                            <div class="form-group">
                            <label>Rentan Hari Pengocokan</label>
                                <input class="form-control" type="number" name="rentan_waktu_pengocokan" require="required">
                            </div>
                            <div class="form-group">
                                <label>Jumlah peserta</label>
                                <input type="text" class="form-control" name="jumlah_peserta" id="diskon" require="required">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" class="form-control" name="total_hadiah" id="Tbayar" readonly="readonly">
                            </div>
                            <!-- <button type="button" class="btn btn-primary float-right" name="btn_group" value="buat group">Buat Group</button> -->
                               <div class="form-group">
                               <input type="submit" class="btn btn-outline-primary px-lg-5 float-right m-3" name="btn_group" value="Buat">
                               <button type="button" class="btn btn-outline-primary px-lg-5 float-right m-3" onclick="location.href='{{ url('home') }}'">Batal</button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
