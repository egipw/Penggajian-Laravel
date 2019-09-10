@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">EDIT JENIS TUNJANGAN</h4></div>
                    <div class="panel-body">
            
	    <div class="content">
	        <form action="{{ url('update_gty', $data->id_gty)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}


            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control border-input" name="nip" value="{{$data -> nip}}" placeholder="NIP" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" class="form-control border-input" name="nama" value="{{$data -> nama}}" placeholder="Nama Pegawai" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Jabatan </label>
                        <input type="text" class="form-control border-input" name="jabatan" value="{{$data -> jabatan}}" placeholder="Jabatan" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control border-input" name="id_status">
                            
                            <option value="1">PTY</option>
                            <option value="2">PTT</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <input type="number" class="form-control border-input" name="gapok" value="{{$data -> gapok}}" placeholder="Gaji Pokok" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Keluarga</label>
                        <input type="number" class="form-control border-input" name="t_keluarga" value="{{$data -> t_keluarga}}" placeholder="Tunjangan Keluarga" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Kesehatan</label>
                        <input type="number" class="form-control border-input" name="t_kesehatan" value="{{$data -> t_kesehatan}}" placeholder="Tunjangan Kesehatan" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Fungsional</label>
                        <input type="number" class="form-control border-input" name="t_fungsional" value="{{$data -> t_fungsional}}" placeholder="Tunjangan Fungsional" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan jabatan</label>
                        <input type="number" class="form-control border-input" name="t_jabatan" value="{{$data -> t_jabatan}}" placeholder="Tunjangan Jabatan" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Transportasi</label>
                        <input type="number" class="form-control border-input" name="t_transportasi" value="{{$data -> t_transportasi}}" placeholder="Tunjangan Trasnportasi" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Kinerja</label>
                        <input type="number" class="form-control border-input" name="t_kinerja" value="{{$data -> t_kinerja}}" placeholder="Tunjangan Kinerja" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Pensiun</label>
                        <input type="number" class="form-control border-input" name="t_pensiun" value="{{$data -> t_pensiun}}" placeholder="Tunjangan Pensiun" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan GTT-PTT</label>
                        <input type="number" class="form-control border-input" name="t_gtt" value="{{$data -> t_gtt}}" placeholder="Tunjangan GTT-PTT" required>
                    </div>
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