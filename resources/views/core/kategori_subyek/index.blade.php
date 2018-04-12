@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Master Kategori Subyek')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<p align="right">
							<a class="btn btn-primary btn-xs" href="{{ route('kategori_subyek.create') }}"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
						</p>
						<div class="table-responsive">
							{!! $html->table(['class' => 'table table-striped table-bordered', 'width' => '100%']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection