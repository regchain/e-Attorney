@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Surat Penetapan Tersangka')

@section('materi')




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
					<input type="text" class="form-control" placeholder="PRINT-XX/f.2/fD./MM/YYYY" disabled="disabled">
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<!-- Disposisi / Keterangan -->
				<div class="form-group">
					<label>Berdasarkan Disposisi / Keterangan:</label>
					<input type="text" class="form-control" placeholder="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident" disabled="disabled">
				</div>
			</div>

			</div>

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
			         <h4>DATA JAKSA</h4>
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
								<div class="box-tools pull-right">
					<a href="#" class="btn btn-danger"> BATAL</a>
					<a href="frp3sus" class="btn btn-success"> KIRIM</a>
				</div>
			
				</div>
		</div>
    






@stop

@section('script')

@endsection