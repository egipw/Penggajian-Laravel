@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						@foreach ($data as $a)
							{{ @a->id_pegawai }}
							{{ @a->nama }}
							{{ @a->nama }}
							{{ @a->id_jabatan}}
							
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
