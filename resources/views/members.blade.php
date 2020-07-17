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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<meta name="csrf_token" content="{{ csrf_token() }}" />
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Group Arisan</h2>
            </div>
          </header>
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h5>Data Group</h5>
                    </div>
                    <div class="card-body">
                    @foreach($group as $result)
                    <ul class="list-group" style="border:none">
                        <p>Nama Group : {{$result->groups_name}}</p>
                        <p>Biaya : Rp {{$result->biaya}}</p>
                        <p>Jumlah Peserta : {{$result->jumlah_peserta}} Orang</p>
                        <p>Total Hadiah : Rp {{$result->total_hadiah}} /pengundian</p>
                    </ul>
                    @endforeach
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <!-- <div class="card-header d-flex align-items-center">
                      <h5 class="pl-3"></i> Data Peserta</h5>
                    </div> -->
                    <div class="card-body">
                        <form method="POST" id="dynamic_form" onsubmit="return validation_members()" name="form_members">
                            <span id="result"></span>
                                <table class="table" id="user_table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <td>Nama Peserta</td>
                                            <td>Alamat Email</td>
                                            <td>No Telpon</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        @csrf
                                    </tr>
                                </tfoot>
                                </table>
                                <button class="btn btn-outline-primary float-right">Batal</button>
                            <input type="submit" name="save" id="save" class="btn btn-outline-primary float-right mr-2" value="Simpan" />
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

@foreach($group as $result)
<script>

/**
 * function validation
 */

//  function validation_members(){
//    var x = document.forms["validation_members"]["nama"].value;

//    if(x)
//  }

/**
 * function add and remove
 */

$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" name="nama[]" class="form-control" maxlength="15"/></td>';
        html += '<td><input type="email" name="email[]" class="form-control" maxlength="50"/><input type="hidden" name="status_arisan[]" value="0"></td>';
        @foreach($group as $result)
        html += '<td><input type="text" name="telpon[]" class="form-control"  maxlength="12" minlength="11"/><input type="hidden" name="group_id[]" value="{{$result->id}}"></td>';
        @endforeach
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-outline-warning remove"><i class="fa fa-minus-square"></i></button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-outline-primary"><i class="fa fa-plus-square"></i></button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);

  if(count >= {{$result->jumlah_peserta}})
  {
    $('#save').attr('disabled', true);
  }if(count <= {{$result->jumlah_peserta}})
  {
    $('#save').attr('disabled', true);
  }if(count == {{$result->jumlah_peserta}}) 
  {
    $('#save').attr('disabled', false);
  }
 

 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
  if(count >= {{$result->jumlah_peserta}})
  {
    $('#save').attr('disabled', true);
  }if(count <= {{$result->jumlah_peserta}})
  {
    $('#save').attr('disabled', true);
  }if(count == {{$result->jumlah_peserta}}) 
  {
    $('#save').attr('disabled', false);
  }
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("members.insert") }}',
            method: 'POST',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">Data Peserta Tidak Boleh Kosong !</div>');
                }
                else
                {   
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');   
                    window.location.href = "{{URL::to('home')}}"
                    // $('#result').prop('href', 'http://www.example.com');
                }
                $('#save').attr('disabled', false);
            }
        })
    });
});

</script>
@endforeach
@endsection
