@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Surat Penetapan Tersangka')

@section('materi')

{!! Form::model($case, ['url' => route('rp3mum.store'), 'method' => 'post']) !!}
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-12">
		<!-- No. Surat -->
		<div class="form-group">
			<label> No.</label>
			<input type="text" class="form-control" placeholder="B-">
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12">
		<!-- Tanggal Surat -->
		<div class="form-group">
			<label>Tanggal</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input type="date" class="form-control pull-right" id="datepicker">
			</div>
			<!-- /.input group -->
		</div>
		<!-- /.form group -->
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12">
		<!-- No. SprinDik -->
		<div class="form-group">
			<label>Berdasarkan Sprint Penyidikan Umum:</label>
			{!! Form::text('no_surat_perkara', null, ['class' => 'form-control', 'placeholder' => 'PRINT-', 'disabled' => '']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12">
		<!-- Disposisi / Keterangan -->
		<div class="form-group">
			<label>Berdasarkan Disposisi / Keterangan:</label>
			{!! Form::text('disposisi', null, ['class' => 'form-control', 'placeholder' => '', 'disabled' => '']) !!}
		</div>
	</div>
</div>

<div class="rows"> 
	<div class="col-lg-12 col-md-12 col-sm-12">
	<h4>Data Tersangka <small class="text-red"><br>Pilih tersangka tertentu untuk berkas perkara yang sama!</small></h4>
	<div class="row">
		@foreach ($subyeks as $subyek)
		<div class="col-lg-3 col-md-3 col-sm-12" align="center">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tsk{{ $subyek->subyek_id }}">
				  {{ $subyek->nama_terlapor }}
				</button>
				<a href="#"> <img alt="64x64" class="thumbnail" data-src="holder.js/64x64" src="{{ asset('images/robert.jpg') }}" data-holder-rendered="true" style="width: 140px; height: 140px;"></a>
				<!-- Button trigger modal -->

				<!-- Modal -->
				<div class="modal fade" id="tsk{{ $subyek->subyek_id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Tersangka #{{ $loop->iteration }}</h4>
				      </div>
				      <div class="modal-body">
				        <div class="rows"> 
				        	<div class="col-lg-12 col-md-12 col-sm-12">
				        		{!! Form::model($subyek, ['url' => route('rp3mum.store'), 'method' => 'post']) !!}
				        		<h4>Data Tersangka</h4>
				        		<!-- Nama Lengkap -->
				        		<div class="form-group">
				        			<label>Nama Lengkap</label>
				        			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				        		</div>
				        		<!-- Tempat Tinggal -->
				        		<div class="form-group">
				        			<label>Tempat Tinggal</label>
				        			{!! Form::text('tempat_tinggal', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				        		</div>
				        		<div class="row">
				        			<div class="col-lg-6 col-md-6 col-sm-12">
				        				<label>Jenis Kelamin</label>
				        			</div>
				        			<div class="col-lg-6 col-md-6 col-sm-12">
				        				<label class="checkbox-inline">
				        					<input type="checkbox" id="inlineCheckbox1" value="option1"> Laki-laki
				        				</label>
				        				<label class="checkbox-inline">
				        					<input type="checkbox" id="inlineCheckbox2" value="option2"> Perempuan
				        				</label>
				        			</div>
				        		</div>	
				        		<!-- Pendidikan -->
				        		<div class="form-group">
				        			<label>Pendidikan</label>
				        			{!! Form::text('pendidikan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
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
				        					{!! Form::text('tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
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
				        		</div>
				        	</div>
				        	<div class="col-lg-12 col-md-12 col-sm-12">
				        		<h4>Data Pekerjaan</h4>
				        		<!-- Pekerjaan -->
				        		<div class="form-group">
				        			<label>Pekerjaan</label>
				        			{!! Form::text('pekerjaan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				        		</div>
				        		<!-- Institusi / Lembaga -->
				        		<div class="form-group">
				        			<label>Institusi / Lembaga</label>
				        			{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'disabled']) !!}
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
				        	</div>
				        	<!-- Kategori Subyek -->
				        			<div class="form-group">
				        				<label>Kategori Subyek</label>
				        				<select class="form-control" style="width: 100%;">
				        					<option selected="selected">SWASTA</option>
				        					<option>PNS</option>
				        					<option>Hakim</option>
				        					<option>Pengacara</option>
				        					<option>Jaksa</option>
				        					<option>Gubernur</option>
				        					<option>Walikota</option>
				        				</select>
				        			</div>
				        </div>   
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
		</div>
		@endforeach
	</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
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