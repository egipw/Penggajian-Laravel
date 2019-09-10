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
						<form method="POST" action="{{url('gaji/simpan/'.$data->id_pegawai)}}">
							<div class="box-body col-md-6">
								{!! csrf_field() !!}
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" readonly name="nama" value="{{$data->nama}}">
								</div>
								<div class="form-group">
									<label>Tanggal Gajian</label>
									<input type="date" class="form-control" name="tanggal_gajian" value="{{Carbon\Carbon::now()->format('Y-m-d')}}">
								</div>
								<div class="form-group">
									<label>Jumlah Transport</label>
									<input type="number" class="form-control" name="jmlh_transport" placeholder="Masukkan Jumlah Transport" value="0">
								</div>
								<div class="form-group">
									<label>Jumlah Kinerja</label>
									<input type="number" class="form-control" name="jmlh_kinerja" placeholder="Masukkan Jumlah Kinerja" value="0">
								</div>

								<div class="form-group">
									<label>Keterangan Status</label><br>
									<input type="radio" value="Aktif" name="keterangan">Aktif<br>
									<input type="radio" value="Cuti" name="keterangan">Cuti<br>
								</div>
								<div class="form-group">
									<label>Gaji Pokok</label>
									<input type="text" class="form-control" readonly name="gapok" value="{{$data->gapok}}">
								</div>
								<div class="form-group">
									<label>Tunjangan Keluarga</label>
									<input type="text" class="form-control" readonly name="keluarga" value="{{$data->keluarga}}">
								</div>
								<div class="form-group">
									<label>Tunjangan Fungsional</label>
									<input type="text" class="form-control" readonly name="fungsional" value="{{$data->fungsional}}">
								</div>
							</div>
							<div class="box-body col-md-6">
								<div class="form-group">
									<label>Tunjangan Jabatan</label>
									<input type="text" class="form-control" readonly name="tjabatan" value="{{$data->tjabatan}}">
								</div>
								<div class="form-group">
									<label>Tunjangan Kinerja</label>
									<input type="text" class="form-control" readonly name="kinerja" value="{{$data->kinerja}}">
								</div>
								<div class="form-group">
									<label>Tunjangan Transportasi</label>
									<input type="text" class="form-control" readonly name="transportasi" value="{{$data->transportasi}}">
								</div>
								<div class="form-group">
									<label>Potongan Kesehatan</label>
									<input type="text" class="form-control" readonly name="kesehatan" value="{{$data->kesehatan}}">
								</div>
								<div class="form-group">
									<label>Potongan Pensiun</label>
									<input type="text" class="form-control" readonly name="pensiun" value="{{$data->pensiun}}">
								</div>
								<div class="form-group">
									<label>Tunjangan GTT</label>
									<input type="text" class="form-control" readonly name="gtt" value="{{$data->gtt}}">
								</div>
								<div class="form-group">
									<label>Potongan</label>
									<input type="text" class="form-control" readonly name="potongan" value="{{$data->potongan}}">
								</div>
							
								<button class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
		</div>
	</div>
</div>
</div>

@endsection