@extends('layouts.app')

@section('content')
<div class="container">

<div class="row justify-content-center">
        <div class="col-md-3">
            
            <div class="card">
                <div class="card-header">Buat Group</div>
                    <div class="card-body text-center">
                       <b>Arisanyo.com</b> cara sederhana untuk arisan secara online
                       <div class="form-group py-sm-3">
                        <button type="button" class="btn btn-outline-primary px-lg-5" onclick="location.href='{{ url('xcgroup') }}'">Buat Group</button>
                       </div>
                    </div>
                </div>
            </div>
        
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="https://i.ytimg.com/vi/-EcLfqsOpSM/maxresdefault.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://valar.in/wp-content/uploads/2019/05/ecommerce-organic.png" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
