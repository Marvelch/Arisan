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
                <!-- Pemenang Arisan Terakhir-->
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                    Semua Group
                    </div>
                    <div class="card-body">
                      <!-- <p>Lorem ipsum dolor sit amet consectetur.</p> -->
                      <form>
                      @foreach($groups as $group)
                        <div class="form-group">
                        <table class="table table-borderless text-left">
                          <tbody>
                            <tr>
                              <th><a href="{{url('view/'.$group->id.'/group_')}}"><i class="fa fa-external-link"></i><span class="ml-3">{{$group->groups_name}}</span></a></th>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                        @endforeach
                      </form>
                      {{ $groups->links() }}
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    Buat Group
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Arisan Bookingbook.my.id</h5>
                    <p class="card-text">Temukan cara yang lebih sederhan untuk melakukan arisan.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </section>
          
    
@endsection
