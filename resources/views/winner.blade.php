@extends('layouts.sub_app')

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
                      <img src="/front_end/images/group.png" alt="Background Images" style="width:80%;">
                      <div class="card">
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>Lebih sederhana dengan membuat group dan pengundian secara otomatis.</p>
                            <footer class="blockquote-footer" style="font-size:13px; padding-bottom:1rem;"> Baca <cite title="Source Title"> Syarat & Ketentuan</cite></footer>
                          </blockquote>
                          <a href="{{url('/group')}}" class="btn btn-outline-primary">Buat Group Sekarang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless">
                        <thead>
                          <tr>
                            <td>Nama Group</td>
                            <td>Jumlah Peserta</td>
                            <td><i class="fa fa-ellipsis-h" aria-hidden="true"></i></td>
                          </tr>
                        </thead>
                        @foreach($groups as $group)
                          <tbody>
                            <tr>
                              <td>{{$group->groups_name}}</td>
                              <td>{{$group->jumlah_peserta}} Orang</td>
                              <td><a href="{{url('view/'.$group->id.'/group_')}}" style="underline:none;"><i class="fas fa-search"></i></a></td>
                            </tr>
                          </tbody>
                          @endforeach
                        </table>
                      {{ $groups->links() }}
                    </div>
                  </div>
                </div>
                <!-- terakhir foreach -->
              </div>
            </div>
          </section>
        
@endsection
