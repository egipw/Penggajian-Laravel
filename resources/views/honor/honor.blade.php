@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection
@section('main-content')

	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading"><h4 class="title">DATA KEHADIRAN PEGAWAI</h4></div>
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


			<a class="btn btn-success" href="{{ url('create3')}}" title="New"><i class="fa fa-plus"></i></a>
			<form action="{{ url('getPDFhonor')}}" method="get">
				<input type="month" name="bulan">
				<button class="btn btn-success" type="submit">Download!</button>
			</form>
				<table id="users" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama_Pegawai</th>
							<th>Tanggal Honor</th>
							<th>Honor Gaji</th>
							<th>Nominal</th>							
							<th>Aksi</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($data as $data)
						<tr>
							

						<td><?php echo $no++; ?></td>
						<td>{{$data->pegawai['nama']}}</td>
						<td>{{$data->tanggal_honor}}</td>
						<td>{{$data->jenis_honor}}</td>
						<td>Rp. {{number_format($data->nominal, 0, ',','.')}}</td>
						<td>
								
								<a class="btn btn-info" href="{{ url('edit3/'. $data->id_honor) }}" title="Edit"><i class="fa fa-edit"></i></a>
								<a class="btn btn-danger" href="{{ url('delete3/'. $data->id_honor) }}" onclick="return fungsi()" title="Delete"><i class="fa fa-trash"></i></a>
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