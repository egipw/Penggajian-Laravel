@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection
@section('main-content')
<div class="container spark-screen">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">CREATE GAJI POKOK</h4></div>
                    <div class="panel-body">
            
        
            <form action="{{ url('/store2')}}" method="POST" >
            {!! csrf_field() !!}
        <div class="content"> 
            

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <input type="number" class="form-control border-input" name="gapok" placeholder="Gaji Pokok" >
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