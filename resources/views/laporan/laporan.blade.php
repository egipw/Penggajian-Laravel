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

			<p>Pilih Bulan</p>
			<form action="{{ url('getPDFsemua')}}" method="get">
				<input type="month" name="bulan">
				<button class="btn btn-success" type="submit">Download!</button>
			</form>

		
				<table id="users" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Tanggal Gajian</th>
							<th>NIP</th>
							<th>Nama Pegawai</th>					
							<th>Jabatan dan Keterangan</th>
							<th>Status Kepegawaian</th>
							<th>Gaji Pokok</th>
						
							<th>Tunjangan Keluarga</th>
							<th>Tunjangan Fungsioanl</th>
							<th>Tunjangan Jabatan</th>
							<th>Jumlah Transportasi</th>
							<th>Tunjangan Transportasi</th>
							<th>Jumlah Kinerja</th>
							<th>Tunjangan Kinerja</th>
							<th>Tunjangan GTT-PTT</th>
							
							<th>Potongan Kesehatan</th>									
							<th>Potongan Pensiun</th>
							
							<th>Potongan Lain</th>
							<th>Jumlah Total</th>
							<th>Jumlah Potonngan</th>
							<th>Total Bersih Gaji</th>
							<th>Keterangan</th>
							<th>Aksi</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($data as $data)
						<tr>
							<td><?php echo $no++; ?></td>
							<td>{{$data->tanggal_gajian}}</td>
							<td>{{$data->nip}}</td>
							<td>{{$data->nama}}</td>							
							<td>{{$data->jabatan}}</td>
							<td>{{$data->nama_status}}</td>
							<td>Rp. {{number_format($data->gapok, 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->keluarga, 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->fungsional, 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->tjabatan, 0, ',','.')}}</td>

							<td>{{$data->jmlh_transport}} hari</td>

							<td>Rp. {{number_format($data->transportasi, 0, ',','.')}}</td>							
							
							<td>{{$data->jmlh_kinerja}} hari</td>

							<td>Rp. {{number_format($data->kinerja, 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->gtt, 0, ',','.')}}</td>						
																		
							<td>Rp. {{number_format($data->kesehatan, 0, ',','.')}}</td>						
							<td>Rp. {{number_format($data->pensiun, 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->potonganlain, 0, ',','.')}}</td>
							
							<td>Rp. {{number_format($data->total, 0, ',','.')}}</td>
							<td>Rp. {{number_format($data->jumlahpotongan, 0, ',','.')}}</td>
							
							<td>Rp. {{number_format($data->total_bersih, 0, ',','.')}}</td>
							<td>{{$data->keterangan}}</td>						
		
							<td>						
								<a class="btn btn-danger" href="{{ url('getPDF/'. $data->id_tunjangan) }}" title="Download PDF"><i class="fa fa-download"></i></a>
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