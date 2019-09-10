@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">CREATE GAJI HONOR PEGAWAI</h4></div>
                    <div class="panel-body">
            
        
            <form action="{{ url('/store3')}}" method="POST" >
            {!! csrf_field() !!}
            <div class="content"> 

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Pegawai</label>
                        <select class="form-control border-input" name="id_pegawai">
                        <option value=" " disabled>Nama Pegawai</option>
                        @foreach ($data as $datas)
                            <option value="{{$datas->id_pegawai}}">{{$datas->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Tanggal Honor</label>
                        <input type="date" class="form-control border-input" name="tanggal_honor" placeholder=" Tanggal Honor" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Jenis Honor</label>
                        <input type="text" class="form-control border-input" name="jenis_honor" placeholder=" Jenis Honor" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="number" class="form-control border-input" name="nominal" placeholder=" Nominal" >
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