@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Tambah Laporan Kasus')

@section('materi')

{!! Form::open(['url' => 'frp1']) !!}
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<h4>Data Kasus</h4>
		<!-- Asal Surat -->
		<div class="form-group">
			<label>Asal Surat</label>
            {!! Form::text('asal_surat', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- No. Surat -->
		<div class="form-group">
			<label>No. Surat</label>
			{!! Form::text('no_surat', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- Tanggal Surat-->
		<div class="form-group">
			<label>Tanggal Surat</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input name="tanggal_surat_pelapor" type="date" class="form-control pull-right" id="datepicker">
			</div>
			<!-- /.input group -->
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- Diterima Tanggal-->
		<div class="form-group">
			<label>Diterima Tanggal</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input name="tangal_surat_diterima" type="date" class="form-control pull-right" id="datepicker">
			</div>
			<!-- /.input group -->
		</div>
		<!-- /.form group -->
		<!-- Pembuat Catatan -->
		<div class="form-group">
			<label>Pembuat Catatan</label>
			{!! Form::text('pembuat_catatan_surat', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<!-- Judul Kasus -->
		<div class="form-group">
			<label>Judul Kasus: </label>
			<input name="judul_kasus" type="text" class="form-control" placeholder="ANIM PARIATUR CLICHE REPREHENDERIT">
		</div>
		<label>Kasus Posisi / Telaahan Masalah</label>
        <br>
        <textarea id="kasus_posisi" name="kasus_posisi" rows="10" cols="120">(BERISI URAIAN KASUS POSISI SECARA SINGKAT)</textarea>
	</div>
</div>
<div class="rows"> 
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Pelapor</h4>
		<!-- Nama Lengkap -->
		<div class="form-group">
			<label>Nama Lengkap</label>
			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- Alamat -->
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..."></textarea>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<!-- Kota -->
				<div class="form-group">
					<label>Kota</label>
					{!! Form::text('kota', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form-group">
					<label>Propinsi</label>
					{!! Form::text('propinsi', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form-group">
					<label>Kode Pos</label>
					{!! Form::text('kodepos', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-phone"></i>
						</div>
						<input name="kontak_telpon" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
					</div>
					<!-- /.input group -->
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-mobile"></i>
						</div>
						<input name="kontak_handphone" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
					</div>
					<!-- /.input group -->
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input name="kontak_email" type="email" class="form-control" placeholder="Email">
				</div>									
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<!-- text input -->
		<h4>Data Subyek [Terlapor]</h4>
		<div class="form-group">
			<label>Nama Lengkap</label>
			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- text input -->
		<div class="form-group">
			<label> Lembaga</label>
			{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
	</div>
</div>
<div class="box-body">
	<div class="rows"> 
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h4>Data Obyek</h4>
			<!-- Obyek Pidana -->
			<div class="form-group">
				<label>Obyek Pidana</label>
				{!! Form::text('obyek_pidana', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			</div>
			<div class="box-tools pull-right">
				<a href="rp1" class="btn btn-danger"> BATAL</a>
                {{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

@stop

@section('script')

	<!-- Form Kasus Posisi -->
	<script src='{{ asset('js/kasus_posisi.js') }}'></script>


@endsection
