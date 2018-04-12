@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Perkara Penyelidikan')

@section('content')

{!! Form::model($case, ['url' => route('rp2.update', $case->id), 'method' => 'put']) !!}
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- Judul Surat -->
		<div class="form-group{{ $errors->has('judul_kasus') ? ' has-error' : '' }}">
			<label>Judul Kasus</label>
			{!! Form::text('judul_kasus', null, ['class' => 'form-control', 'placeholder' => 'ANIM PARIATUR CLICHE REPREHENDERIT', 'required' => '']) !!}
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- Tanggal Surat -->
		<div class="form-group">
			<label>Tanggal</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				{!! Form::date('tanggal_surat_perkara', \Carbon\Carbon::now(), ['class' => 'form-control pull-right', 'id' => 'datepicker']) !!}
			</div>
			<!-- /.input group -->
		</div>
		<!-- /.form group -->
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- No. Surat -->
		<div class="form-group">
			<label> No. Surat</label>
			{!! Form::text('no_surat_perkara', null, ['class' => 'form-control', 'placeholder' => 'PRINT-']) !!}
			{!! Form::hidden('surat_id', null) !!}
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<label>Kasus Posisi</label><br>
		{!! Form::textarea('kasus_posisi', null, ['class' => 'form-control', 'size' => '120x10', 'required' => '']) !!}
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<label>Status</label>
		<div class="input-group">
			{{-- {!! Form::select('status_rp2', ['1' => 'BARU', '3' => 'DITERUSKAN', '2' => 'DIALIHKAN', '4' => 'DIHENTIKAN'], $status_rp2, ['class' => 'form-control']) !!} --}}
			
			<!-- Disposisi / Petunjuk -->
			<div class="form-group">
				<label>Disposisi / Petunjuk</label>
				{!! Form::textarea('disposisi', null, ['class' => 'form-control', 'size' => '0x7']) !!}
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>Data Terlapor</h4>			
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">			
		<!-- Institusi / Lembaga -->
		<div class="form-group">
			<label>Institusi / Lembaga</label>
			{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<!-- Nama Lengkap -->
		<div class="form-group">
			<label>Nama Lengkap</label>
			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			{!! Form::hidden('subyek_id', null) !!}
		</div>
	</div>		
	
	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>Data Obyek</h4>		
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-group">
			<label>Obyek Pidana</label>
			{!! Form::text('obyek_pidana', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			{!! Form::hidden('obyek_id', null) !!}
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<!-- Nilai Anggaran / Kontrak -->
		<div class="form-group">
			<label class="text-red">* Nilai Anggaran</label>
			<div class="input-group">
				<span class="input-group-addon">Rp</span>
				{!! Form::number('nilai_kontrak', null, ['class' => 'form-control', 'placeholder' => 'Masukkan 0 bila belum ada ...', 'step' => 'any']) !!}
				<span class="input-group-addon">,-</span>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>Data Jaksa Yang Telah Dipilih</h4>
		<div class="form-group">
			@include('decay-case.partials._jaksa', ['surat_jaksa' => $surat_jaksa, 'tipe' => 'RP2', 'kasus_id' => $case->id])
        </div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>Data Jaksa</h4>
			<div class="form-group">
			<label>Pilih Jaksa</label>
				{!! Form::select('jaksa_id[]', $jaksas, 0, ['class'=>'form-control', 'placeholder' => 'Pilih Jaksa', 'multiple' => 'multiple', 'size' => '10']) !!}
			</div>
			<a href="{{ route('rp2.index') }}" class="btn btn-danger"> BATAL</a>
			{{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
	</div>
</div>
{!! Form::close() !!}

@stop

@section('script')

	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>

@endsection
