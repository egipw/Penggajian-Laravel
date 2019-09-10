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

			<a class="btn btn-warning" href="{{ url('create')}}" title="New"><i class="fa fa-plus"></i></a>
			

		
				<table id="users" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>NIP</th>
							<th>Nama Pegawai</th>					
							<th>Jabatan dan Keterangan</th>
							<th>Status Kepegawaian</th>
							
							<th>Keterangan</th>
							<th>Gaji Pokok</th>
							<th>Tunjangan Keluarga</th>
							<th>Tunjangan Fungsioanl</th>
							<th>Tunjangan Jabatan</th>
							<th>Tunjangan Transportasi</th>
							<th>Tunjangan Kinerja</th>
							<th>Potongan Kesehatan</th>									
							<th>Potongan Pensiun</th>
							<th>Tunjangan GTT-PTT</th>

							<th>Potongan</th>
							
							<th>__Aksi___</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($data as $data)
						<tr>
							<td><?php echo $no++; ?></td>
							<td>{{$data->nip}}</td>
							<td>{{$data->nama}}</td>							
							<td>{{$data->jabatan}}</td>
							<td>{{$data->status1['nama_status']}}</td>
							<td>{{$data->keterangan}}</td>
							<td>Rp. {{number_format($data->gapok['gapok'], 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->tunjangan_keluarga['nominal'], 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->tunjangan_fungsional['nominal'], 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->tunjangan_jabatan['nominal'], 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->transportasi, 0, ',','.')}}</td>							
							<td>Rp. {{number_format($data->kinerja, 0, ',','.')}}</td>							
							<td>Rp. {{number_format($data->tunjangan_kesehatan['nominal'], 0, ',','.')}}</td>	
							<td>Rp. {{number_format($data->tunjangan_pensiun['nominal'], 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->tunjangan_gtt['nominal'], 0, ',','.')}}</td>	
							<td>Rp. {{number_format($data->potongan['nominal'], 0, ',','.')}}</td>
							

							<td>	
								<a class="btn btn-info" href="{{ url('edit/'. $data->id_pegawai) }}" title="Edit Data"><i class="fa fa-edit"></i></a>
								<!-- <a class="btn btn-warning" href="{{ url('edit_ket/'. $data->id_pegawai) }}" title="Keterangan"><i class="fa fa-edit"></i></a>
								 --><!-- <a class="btn btn-danger" href="{{ url('delete/'. $data->id_pegawai) }}" onclick="return fungsi()" title="Delete"><i class="fa fa-trash"></i></a>
							 --></td>				
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