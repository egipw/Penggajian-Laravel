@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection
@section('main-content')

	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading"><h4 class="title">Gaji Pokok</h4></div>
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


			<a class="btn btn-success" href="{{ url('create2')}}" title="New"><i class="fa fa-plus"></i></a>
				<table id="users" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Gaji Pokok</th>
												
							<th>Aksi</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($data as $data)
						<tr>
							

							<td><?php echo $no++; ?></td>
								<td>Rp. {{number_format($data->gapok, 0, ',','.')}}</td>
							<td>
								
								<a class="btn btn-info" href="{{ url('edit2/'. $data->id_gapok) }}" title="Edit"><i class="fa fa-edit"></i></a>
								<a class="btn btn-danger" href="{{ url('delete2/'. $data->id_gapok) }}" onclick="return fungsi()" title="Delete"><i class="fa fa-trash"></i></a>
							</td>				
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>




@endsection
@section('script')
<script src="{{ URL::asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
$(function(){
	$('#users').DataTable({
		"pageLength" : 10,
		"sScrollX": "100%",
        "sScrollXInner": "110%",
        "bScrollCollapse": true });
});
</script>



<script type="text/javascript">
	function fungsi() {
	var r = confirm("Yakin ?");
	if (r == true) {

		} else {
			return false;
		}
	}
</script>

@endsection