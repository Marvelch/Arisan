@extends('layouts.sub_app')

@section('sub_content')
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Detail Pesanan</h2>
            </div>
          </header>

          <section class="dashboard-counts" style="padding:30px;">
            <div class="container-fluid">
                <div class="row bg-white has-shadow">
               
                <div class="col-md-12">
                    <h2>Keterangan Paket Pembelian</h2>
                <div class="pt-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    No Pesanan
                                </td>
                                <td>
                                    NV0192012309
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Jenis Paket  
                                </td>
                                <td>
                                    <?php
                                        if($kode == 'status_normal')
                                        {
                                            echo "<span class='badge badge-success'> NORMAL</span>";
                                        }else{
                                            echo "<span class='badge badge-success'> PRO</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Harga
                                </td>
                                <td>
                                    <?php
                                        if($kode == 'status_normal')
                                        {
                                            echo "Rp 2.500";
                                        }else{
                                            echo "Rp 5.000";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">Bayar</button>
                </div>
                </div>
            </div>
          </section>
          
@endsection
