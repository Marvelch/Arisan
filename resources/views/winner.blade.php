@extends('layouts.sub_app')

@section('nav_menu')
  <ul class="list-unstyled">
    <li><a href="{{route('home')}}"> <i class="icon-home"></i>Dashboard </a></li>
    <li><a href="{{route('profile')}}"> <i class="fa fa-id-card-o"></i>Profile </a></li>
    <li><a href="{{route('donation')}}"> <i class="fa fa-credit-card "></i>Donasi </a></li>
    <li class="active"><a href="{{route('winner')}}"> <i class="fa fa-users"></i>Group</a></li>
  </ul><span class="heading">Layanan</span>
  <ul class="list-unstyled">
    <li> <a href="{{route('contact')}}"> <i class="icon-mail"></i>Kontak </a></li>
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
          <section class="forms"> 
            <div class="container-fluid">
              @if(Session::has('message'))
                <div class="alert {{ Session::get('alert alert-secondary', 'alert-info') }}">
                  <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>   
                @endif
              <div class="row">
              <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="/front_end/images/group.png" alt="Background Images" style="width:23rem;">
                      <!-- <p class="card-text">Buat group arisan sesuai dengan keinginan sendiri. Kumpulkan semua peserta dan buat group arisan kalian !</p> -->
                      <a href="{{url('/group')}}" class="btn btn-primary">Buat Group Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <form>
                        <div class="form-group">
                        <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th>Nama Group</th>
                            <th>Peserta</th>
                            <th></th>
                          </tr>
                        </thead>
                        @foreach($groups as $group)
                          <tbody>
                            <tr>
                              <td>{{$group->groups_name}}</td>
                              <td>{{$group->jumlah_peserta}} Orang</td>
                              <td><a href="{{url('view/'.$group->id.'/group_')}}" style="underline:none;"><i class="fa fa-key" aria-hidden="true"></i></a></td>
                            </tr>
                          </tbody>
                          @endforeach
                        </table>
                        </div>
                      </form>
                      {{ $groups->links() }}
                    </div>
                  </div>
                </div>
                <!-- terakhir foreach -->
              </div>
            </div>
          </section>
          
    
@endsection
