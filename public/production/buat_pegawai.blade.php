@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection
@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">CREATE PEGAWAI</h4></div>
                    <div class="panel-body">
            
	    
	        <form action="{{ url('/store')}}" method="POST" >
            {!! csrf_field() !!}

<h2 class="StepTitle">Input Data Pegawai </h2>

	    <div class="content">    
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                    	<label>NIP</label>
                        <input type="text" class="form-control border-input" name="nip" placeholder="NIP" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <input type="text" class="form-control border-input" name="nama" placeholder="Nama Pegawai">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Status Kepegawaian</label>
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
                        <label>Jabatan dan Keterangan</label>
                        <input type="text" class="form-control border-input" name="jabatan" placeholder="Jabatan" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <select class="form-control border-input" name="id_gapok">
                            @foreach($data as $pok)
                            <option value="{{$pok->id_gapok}}">{{$pok->gapok}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


<h2 class="StepTitle">Pilih Tunjangan </h2><br>
                    

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Keluarga</label>
                        <select class="form-control border-input" name="id_keluarga">
                            @foreach($aa as $kel)
                            <option value="{{$kel->id_keluarga}}">{{$kel->jenis_keluarga}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tunjangan Kesehatan</label>
                        <select class="form-control border-input" name="id_kesehatan">
                            @foreach($ss as $sehat)
                            <option value="{{$sehat->id_kesehatan}}">{{$sehat->jenis_kesehatan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Pilihan Tunjangan</label><br>
                        <?php $no = 1; ?>
                        @foreach($cs as $x)
                        <input type="checkbox" value="{{$x->nominal}}" name="<?php echo $no++;?>">{{$x->tunjangan}}<br>
                        @endforeach
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