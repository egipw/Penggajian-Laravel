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
	        <form action="{{ url('update1', $data->id_tunjangan)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}

           
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" class="form-control border-input" name="nama" value="{{$data -> pegawai['nama']}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tanggal Gajian</label>
                        <input type="date" class="form-control border-input" name="tanggal_gajian" value="{{$data -> tanggal_gajian}}" placeholder="Tanggal Gajian" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Jumlah Transportasi</label>
                        <input type="number" class="form-control border-input" name="jmlh_transport" value="{{$data -> jmlh_transport}}" placeholder="Jumlah transportasi" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Jumlah Kinerja</label>
                        <input type="number" class="form-control border-input" name="jmlh_kinerja" value="{{$data -> jmlh_kinerja}}" placeholder="Jumlah Kinerja" required>
                    </div>
                </div>
            </div>

            <!-- <div class="form-group">
                <label>Keterangan Status</label><br>
                <input type="radio" value="Aktif" name="keterangan">Aktif<br>
                <input type="radio" value="Cuti" name="keterangan">Cuti<br>
            </div>
             -->
            



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