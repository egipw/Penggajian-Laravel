@extends('layouts.app')

@section('htmlheader_title')
Home
@endsection

@section('main-content')
<div class="container spark-screen">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>
						<center>Aplikasi Penghitungan Gaji SMP IT Fitrah Insani</center>
					</h1>
				</div>
				<div class="panel-body">

					<!-- HOME -->
					<section class="content-header">
						
					<br>
						
					</section>

					<!-- Main content -->
					<section class="content">
						<!-- Small boxes (Stat box) -->
						<div class="row">
							
							<!-- ./col -->
							<div class="col-lg-3 col-xs-6">
								<!-- small box -->
								<div class="small-box bg-yellow">
									<div class="inner">
										<h3>33</h3>

										<p>Tambah Pegawai</p>	
									</div>
									<div class="icon">
										<i class="ion ion-person-add"></i>
									</div>
									<a href="{{ url('create') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-xs-6">
								<!-- small box -->
								<div class="small-box bg-aqua">
									<div class="inner">
										<h3>150</h3>

										<p>Data Pegawai</p>
									</div>
									<div class="icon">
										<i class="ion ion-person"></i>
									</div>
									<a href="{{ url('pegawai') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-xs-6">
								<!-- small box -->
								<div class="small-box bg-red">
									<div class="inner">
										<h3>65</h3>

										<p>Absensi Pegawai</p>
									</div>
									<div class="icon">
										<i class="ion ion-pie-graph"></i>
									</div>
									<a href="{{ url('tunjangan') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							
							<!-- ./col -->
							<div class="col-lg-3 col-xs-6">
								<!-- small box -->
								<div class="small-box bg-green">
									<div class="inner">
										<h3>53<sup style="font-size: 20px">%</sup></h3>

										<p>Laporan Penggajian</p>
									</div>
									<div class="icon">
										<i class="ion ion-stats-bars"></i>
									</div>
									<a href="{{ url('laporan') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
						</div>
						<!-- /.row -->
						<!-- Main row -->
					</section>

<!-- HOME -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


