@extends('layouts.app')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<meta name="csrf_token" content="{{ csrf_token() }}" />
<div class="container">

<div class="row justify-content-center">
        <div class="col-md-3">
            
            <div class="card">
            <div class="card-header">Detail Group</div>
                    <div class="card-body">
                    @foreach($group as $result)
                    <!-- <div class="form-group">
                        <label for="">Nama Group</label>
                        <input type="text" class="form-control" disabled value="{{$result->groups_name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Biaya</label>
                        <input type="text" class="form-control" disabled value="{{$result->biaya}}">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Peserta</label>
                        <input type="text" class="form-control" disabled value="{{$result->jumlah_peserta}}">
                    </div>
                    <div class="form-group">
                        <label for="">Total Hadiah</label>
                        <input type="text" class="form-control" disabled value="{{$result->total_hadiah}}">
                    </div> -->
                    <ul class="list-group h6">
                        <li class="list-group-item" style="border-style: dotted;">Nama Group : {{$result->groups_name}}</li>
                        <li class="list-group-item" style="border-style: dotted;">Biaya Rp {{$result->biaya}}</li>
                        <li class="list-group-item" style="border-style: dotted;">Jumlah Peserta : {{$result->jumlah_peserta}} Orang</li>
                        <li class="list-group-item" style="border-style: dotted;">Total Hadiah : Rp {{$result->total_hadiah}}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Peserta</div>
                        <div class="card-body">                    
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                     
                            <div class="table-responsive">
                                <form method="POST" id="dynamic_form">
                                <span id="result"></span>
                                
                                <table class="table table-bordered table-striped" id="user_table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telpon</th>
                                    <th></th>
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
                        <input type="submit" name="save" id="save" class="btn btn-outline-primary float-right" value="Simpan" />
                        </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" name="nama[]" class="form-control" /></td>';
        html += '<td><input type="email" name="email[]" class="form-control" /><input type="hidden" name="status_arisan[]" value="0"></td>';
        @foreach($group as $result)
        html += '<td><input type="text" name="telpon[]" class="form-control" /><input type="hidden" name="group_id[]" value="{{$result->id}}"></td>';
        @endforeach
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-outline-danger remove">-</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-outline-primary">+</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("xcmember.insert") }}',
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
                    window.location.href = "{{URL::to('xcarisan')}}"
                    // $('#result').prop('href', 'http://www.example.com');
                }
                $('#save').attr('disabled', false);
            }
        })
    });
});

</script>
@endsection
