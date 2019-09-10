@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">CREATE TUNJANGAN</h4></div>
                    <div class="panel-body">
            
        
            <form action="{{ url('/store_gty')}}" method="POST" >
            {!! csrf_field() !!}
            <div class="content"> 

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control border-input" name="nip" placeholder="NIP" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" class="form-control border-input" name="nama" placeholder="Nama Pegawai" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control border-input" name="jabatan" placeholder="Jabatan" >
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control border-input" name="id_status">
                            <option value="1">GTY</option>
                            <option value="2">GTT</option>
                            <option value="3">PTY</option>
                            <option value="4">PTT</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <input type="number" class="form-control border-input" name="gapok" placeholder="Gaji Pokok" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Keluarga</label>
                        <input type="number" class="form-control border-input" name="t_keluarga" placeholder="Tunjangan Keluarga" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Kesehatan</label>
                        <input type="number" class="form-control border-input" name="t_kesehatan" placeholder="Tunjangan Kesehatan" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Fungsional</label>
                        <input type="number" class="form-control border-input" name="t_fungsional" placeholder="Tunjangan Fungsional" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Jabatan</label>
                        <input type="number" class="form-control border-input" name="t_jabatan" placeholder="Tunjangan Jabatan" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Transportasi</label>
                        <input type="number" class="form-control border-input" name="t_transportasi" placeholder="Tunjangan Transportasi" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Kinerja</label>
                        <input type="number" class="form-control border-input" name="t_kinerja" placeholder="Tunjangan Kinerja" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Pensiun</label>
                        <input type="number" class="form-control border-input" name="t_pensiun" placeholder="Tunjangan Pensiun" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan PTY-PTT</label>
                        <input type="number" class="form-control border-input" name="t_gtt" placeholder="Tunjangan PTY-PTT" >
                    </div>
                </div>
            </div>


            <div class="text-center">
                <button class="btn btn-primary">Submit</button>
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