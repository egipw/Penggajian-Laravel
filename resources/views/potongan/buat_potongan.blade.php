@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">CREATE POTONGAN GAJI</h4></div>
                    <div class="panel-body">
            
        
            <form action="{{ url('/store7')}}" method="POST" >
            {!! csrf_field() !!}
        <div class="content"> 
            

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Jenis Potongan</label>
                        <input type="text" class="form-control border-input" name="potongan" placeholder="Jenis Potongan" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="number" class="form-control border-input" name="nominal" placeholder="Nominal" >
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