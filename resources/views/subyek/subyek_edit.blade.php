@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Update Data Tersangka')

@section('materi')

<div class="rows"> 
	<div class="col-lg-6 col-md-6 col-sm-12">
		<!-- Print Lid -->
		<h4>Data Tersangka</h4>
		<!-- Nama Lengkap -->
		<div class="form-group">
			<label>Nama Lengkap</label>
			<textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
		</div>
		<!-- Tempat Tinggal -->
		<div class="form-group">
			<label>Tempat Tinggal</label>
			<textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
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
			<input type="text" class="form-control" placeholder="Enter ...">
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Tempat Lahir -->
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Tanggal Lahir -->
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="date" class="form-control" placeholder="Enter ...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Kebangsaan / Kewarganegaraan -->
				<div class="form-group">
					<label>Kebangsaan / Kewarganegaraan</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Agama -->
				<div class="form-group">
					<label>Agama</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>

			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<!-- text input -->
		<h4>Data Pekerjaan</h4>
		<!-- Pekerjaan -->
		<div class="form-group">
			<label>Pekerjaan</label>
			<input type="text" class="form-control" placeholder="Enter ...">
		</div>
		<!-- Institusi / Lembaga -->
		<div class="form-group">
			<label>Institusi / Lembaga</label>
			<input type="text" class="form-control" placeholder="Lembaga" disabled="disabled">
		</div>
		<!-- Jabatan Resmi -->
		<div class="form-group">
			<label>Jabatan Resmi</label>
			<input type="text" class="form-control" placeholder="Enter ...">
		</div>
		<!-- Jabatan Lain -->
		<div class="form-group">
			<label>Jabatan Lain</label>
			<input type="text" class="form-control" placeholder="Enter ...">
		</div>
		<div class="box-tools pull-right">
			<a href="#" class="btn btn-danger"> BATAL</a>
			<a href="rp3mum" class="btn btn-success"> KIRIM</a>
		</div>

	</div>
</div>      
@stop

@section('script')

@endsection
