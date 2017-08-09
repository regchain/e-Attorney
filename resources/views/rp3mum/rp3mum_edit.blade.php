@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Perkara Penyidikan Umum')

@section('materi')

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- Judul Surat -->
		<div class="form-group">
			<label>Judul Kasus: </label>
			<input type="text" class="form-control" placeholder="ANIM PARIATUR CLICHE REPREHENDERIT">
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
				<input type="date" class="form-control pull-right" id="datepicker">
			</div>
			<!-- /.input group -->
		</div>
		<!-- /.form group -->
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- No. Surat -->
		<div class="form-group">
			<label> No. Surat</label>
			<input type="text" class="form-control" placeholder="PRINT-">
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<label>Kasus Posisi</label>
		<form>
			<textarea-kasus id="editor1" name="editor" rows="10" cols="120">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			</textarea-kasus>
		</form>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<label>Status</label>
		<div class="input-group">
			<div class="input-group-btn"> 
				<button type="button" class="btn btn-default" aria-label="stop" title="DIHENTIKAN"><span class="glyphicon glyphicon-minus-sign"></span> </button>
				<button type="button" class="btn btn-default" aria-label="transfer" title="DIALIHKAN"><span class="glyphicon glyphicon-transfer"></span></button> </div> 
				<input class="form-control" aria-label="Text input with multiple buttons" placeholder="Keterangan Status...">
			</div>

			<!-- Disposisi / Petunjuk -->
			<div class="form-group">
				<label>Disposisi / Petunjuk</label>
				<textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
			</div>
		</div>
	</div>
	<div class="rows"> 
		<div class="col-lg-6 col-md-6 col-sm-12">
			<!-- Print Lid -->
			<h4>Data Terlapor</h4>
			<!-- Institusi / Lembaga -->
			<div class="form-group">
				<label>Institusi / Lembaga</label>
				<input type="text" class="form-control" placeholder="Enter ...">
			</div>
			<!-- Nama Lengkap -->
			<div class="form-group">
				<label>Nama Lengkap</label>
				<textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
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
		<!-- 
						Pendidikan
						<div class="form-group">
							<label>Pendidikan</label>
							<input type="text" class="form-control" placeholder="Enter ...">
						</div>
					-->
					<!-- Kategori Subyek -->
					<div class="form-group">
						<label>Kategori Subyek</label>
						<select class="form-control" >
							<option selected="selected">SWASTA</option>
							<option>PNS</option>
							<option>Hakim</option>
							<option>Pengacara</option>
							<option>Jaksa</option>
							<option>Gubernur</option>
							<option>Walikota</option>
						</select>
					</div>
		<!-- 
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
						Tempat Lahir
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" class="form-control" placeholder="Enter ...">
						</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
						Tanggal Lahir
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" placeholder="Enter ...">
						</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
						Kebangsaan / Kewarganegaraan
						<div class="form-group">
							<label>Kebangsaan / Kewarganegaraan</label>
							<input type="text" class="form-control" placeholder="Enter ...">
						</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
						Agama
						<div class="form-group">
							<label>Agama</label>
							<input type="text" class="form-control" placeholder="Enter ...">
						</div>
						
						</div>
						</div>


						Tempat Tinggal
						<div class="form-group">
							<label>Tempat Tinggal</label>
							<textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
						</div>
					-->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<!-- text input -->
					<h4>Data Obyek</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label>Obyek Pidana</label>
								<input type="text" class="form-control" placeholder=" ">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<!-- Nilai Anggaran / Kontrak -->
							<div class="form-group">
								<label>Nilai Anggaran</label>
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="INT" class="form-control" aria-label="dalam Miliar">
									<span class="input-group-addon">miliar</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<!-- Kerugian Negarak -->
							<div class="form-group">
								<label>Kerugian Negara</label>
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="INT" class="form-control" aria-label="dalam Miliar">
									<span class="input-group-addon">miliar</span>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<!-- Pemulihan Aset -->
							<div class="form-group">
								<label>Pemulihan Aset</label>
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="int" class="form-control" aria-label="dalam Miliar">
									<span class="input-group-addon">miliar</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h4>Data Jaksa</h4>
		<div align="center" class="thumbnail">
		@include('partials._timjaksa')
		</div>

		<div class="box-tools pull-right">
			<a href="rp1" class="btn btn-danger"> BATAL</a>
			<a href="rp2" class="btn btn-success"> KIRIM</a>
		</div>
	</div>
</div>  
			
</div>  
@stop

@section('script')

	<!-- Form Kasus Posisi -->
	<script src='{{ asset('js/kasus_posisi.js') }}'></script>

@endsection
