@extends('layouts.app')

@section('content')
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Pemenang</li>  
  </ol>
</nav>
<div class="row justify-content-center">
        <div class="col-md-3">
            
            <div class="card">
                <div class="card-header">Daftar Group Arisan</div>
                    <div class="card-body text-left">
                        @foreach($group as $result)
                        <div class="list-group">
                            <a href="{{ URL('xcsubarisan/'.$result->id) }}" class="list-group-item list-group-item-action"><i class="fas fa-caret-right"></i> {{$result->groups_name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        
        <div class="col-md-9">
        <div class="card text-left">
        <div class="card-header">
            <i class="fas fa-trophy"></i> Pemenang Arisan
        </div>
       
        <div class="card-body">
        @foreach($group as $result)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th  style="border-style: dotted;">Nama Peserta</th>
                        <th  style="border-style: dotted;">Email</th>
                        <th  style="border-style: dotted;">Telpon</th>
                        <th  style="border-style: dotted;">Tersisa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$result->groups_name}}</td>
                        <td>{{$result->tanggal_mulai}}</td>
                        <td>{{$result->waktu_pengocokan}}</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
            @endforeach
        </div>
        <div class="card-footer text-right">
            <i class="far fa-question-circle"></i>
        </div>
    </div>
</div>
@endsection
