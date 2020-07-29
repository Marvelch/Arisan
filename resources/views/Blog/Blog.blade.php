@extends('layouts.sub_app')

@section('nav_menu')
  <ul class="list-unstyled">
    <li><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
    <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
    <li class="active"><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
    <li><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
  </ul><span class="heading">Layanan</span>
  <ul class="list-unstyled">
    <li> <a href="{{route('contact')}}"> <i class="icon-mail"></i>Kontak </a></li>
    <li> <a href="{{route('blog')}}"> <i class="icon-mail"></i>Blog </a></li>
  </ul>
@endsection
@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Donasi</h2>
            </div>
          </header>
          <section class="projects padding-top">
            <div class="container-fluid">
              <!-- Project-->
              <div class="project">
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                      <div class="text text-center">
                        <h3 class="h4">Layanan Donasi</h3><small>Bantu kami untuk terus mengembangkan layanan.</small>
                      </div>
                    </div>
                  </div>
                  <div class="pt-1 col-lg-6 d-flex align-items-center">
                  <select class="form-control form-control-sm" onchange="payments()" id="selected_payments" onclick="myFunction()">
                    <option>Pilih Metode Donasi</option>
                    <option value="paypal">Paypal</option>
                    <option value="gopay">Go - pay</option>
                    </select>
                    </div>
                  </div>
                </div>
              <!-- Modal Go-pay-->
            <div class="modal fade" id="GopayModal" tabindex="-1" role="dialog" aria-labelledby="GopayModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="GopayModal">Go-pay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <ul>
                      <p>Belum Tersedia</p>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Paypal -->
            <div class="modal fade" id="PaypalModal" tabindex="-1" role="dialog" aria-labelledby="PaypalModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="PaypalModal">Paypal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <ul>
                      <p>Belum Tersedia</p>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
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
