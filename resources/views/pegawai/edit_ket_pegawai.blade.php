@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">EDIT TUNJANGAN</h4></div>
                    <div class="panel-body">
        
	    <div class="content">
	        <form action="{{ url('update', $peg->id_pegawai)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
	        
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Nama Pegawai</label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" name="nama" disabled required="required" value="{{$peg -> nama}}" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3" for="first-name">Choose Ket<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              
                              <input type="radio" value="Aktif" name="keterangan">Aktif<br>
                              <input type="radio" value="Tidak Aktif" name="keterangan">Tidak Aktif<br>
                              <input type="radio" value="Cuti" name="keterangan">Cuti<br>
                             
                            </div>
                          </div>
            



            <div class="text-center">
                <input type="submit" class="btn btn-info btn-fill btn-wd" name="submit" placeholder="Submit">
            </div>
                <!-- new input type here -->

          </div>
          </form>
    </div>
</div>
</div>
</div>
</div>

@endsection