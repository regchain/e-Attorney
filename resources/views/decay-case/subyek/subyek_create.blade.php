@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Tambah Subyek Baru')

@section('content')

{!! Form::open(['url' => route('subyek.store', $kasus_id), 'method' => 'post', 'files' => 'true']) !!}
<div class="rows"> 
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Tersangka</h4>
		<!-- Nama Lengkap -->
		<div class="form-group{{ $errors->has('nama_terlapor') ? ' has-error' : '' }}">
			<label>Nama Lengkap</label>
			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'required' => 'required']) !!}
		</div>
		<!-- Tempat Tinggal -->
		<div class="form-group{{ $errors->has('tempat_tinggal') ? ' has-error' : '' }}">
			<label>Tempat Tinggal</label>
			{!! Form::text('tempat_tinggal', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<label>Pendidikan</label>
					{!! Form::text('pendidikan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<label>Jenis Kelamin</label>
				<div class="form-group">
					{!! Form::radio('jenis_kelamin', 'L') !!} Laki-laki
					<label class="checkbox-inline">
						{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan
					</label>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Tempat Lahir -->
				<div class="form-group">
					<label>Tempat Lahir</label>
					{!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Tanggal Lahir -->
				<div class="form-group">
					<label>Tanggal Lahir</label>
					{!! Form::date('tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Kebangsaan / Kewarganegaraan -->
				<div class="form-group">
					<label>Kebangsaan / Kewarganegaraan</label>
					{!! Form::text('kewarganegaraan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Agama -->
				<div class="form-group">
					<label>Agama</label>
					{!! Form::text('agama', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="form-group">
					<label>Keterangan / Disposisi</label>
					{!! Form::text('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Pekerjaan</h4>
		<!-- Pekerjaan -->
		<div class="form-group">
			<label>Pekerjaan</label>
			{!! Form::text('pekerjaan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- Institusi / Lembaga -->
		<div class="form-group">
			<label class="text-red"><strong>* Institusi</strong></label>
			{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Institusi / Lembaga tempat subyek bekerja ...', 'required' => 'required']) !!}
		</div>
		<!-- Jabatan Resmi -->
		<div class="form-group">
			<label>Jabatan Resmi</label>
			{!! Form::text('jabatan_resmi', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- Jabatan Lain -->
		<div class="form-group">
			<label>Jabatan Lain</label>
			{!! Form::text('jabatan_lain', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- Kategori Subyek -->
		<div class="form-group">
			<label class="text-red"><strong>* Kategori Subyek</strong></label>
			{!! Form::select('kategori_subyek_id', $kategori_subyek, 1, ['class'=>'form-control', 'placeholder' => '']) !!}
		</div>
		<div class="form-group">
			<label>Foto</label>
			{!! Form::file('foto') !!}
		</div>
		<div class="box-tools pull-right">
			<a href="{{ route('rp3mum.index') }}" class="btn btn-danger"> BATAL</a>
			{{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
		</div>
	</div>
</div>
{!! Form::close() !!}

@stop

@section('script')

@endsection