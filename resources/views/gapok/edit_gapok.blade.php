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
	        <form action="{{ url('update2', $data->id_gapok)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}


            
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <input type="number" class="form-control border-input" name="gapok" value="{{$data -> gapok}}" placeholder="Gaji Pokok" required>
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