@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection
@section('main-content')

<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">DATA PEGAWAI</h4></div>
                    <div class="panel-body">
            
                    @if(Session::has('success'))
                    <div class="row">
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @elseif(Session::has('updated'))
                        <div class="alert alert-warning">
                            {{Session::get('updated')}}
                        </div>
                        @elseif(Session::has('deleted'))
                        <div class="alert alert-danger">
                            {{Session::get('deleted')}}
                        </div>
                    </div>
                    @endif

        <table class="table">
            <tbody>
                <tr>
                    <td><strong>Nomor Induk Kepegawaian</strong></td>
                    <td>: {{$data->nip}}</td>
                </tr>
                <tr>
                    <td><strong>Nama Pegawai</strong></td>
                    <td>: {{$data->nama}}</td>
                </tr>
                <tr>
                    <td><strong>Status Kepegawaian</strong></td>
                    <td>: {{$data->status['nama_status']}}</td>
                </tr>
                    <td><strong>Jabatan dan Keterangan</strong></td>
                    <td>: {{$data->jabatan}}</td>      
                <tr>
                    <td><strong>Gaji pokok</strong></td>
                    <td>Rp. {{number_format($data->gapok, 0, ',','.')}}</td>
                </tr>  

                <tr>
                    <td><strong>Status</strong></td>
                    <td>: {{$data->status}}</td>
                </tr>

                <tr>
                    <td><strong>Jumlah Anak</strong></td>
                    <td>: {{$data->jumlah_anak}}</td>
                </tr>

                <tr>
                    <td><strong>T. Kesehatan</strong></td>
                    <td>: {{$data->kesehatan}}</td>
                </tr>

                <tr>
                    <td><strong>T. Fungsional</strong></td>
                    <td>: {{$data->fungsional}}</td>
                </tr>

                <tr>
                    <td><strong>T. Pensiun</strong></td>
                    <td>: {{$data->pensiun}}</td>
                </tr>

                <tr>
                    <td><strong>T. Jabatan</strong></td>
                    <td>: {{$data->tjabatan}}</td>
                </tr>
                <td></td>  
                    <td>
                        <a class="btn btn-primary" href="{{ url('getPDFlihat', $data->id_pegawai)}}" title="Download"><i class="fa fa-download"></i></a>
                                       
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
@endsection
