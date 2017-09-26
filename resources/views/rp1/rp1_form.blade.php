<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-group">
		<h4>Data Subyek [Terlapor]</h4>
			<label>Nama Lengkap</label>
			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Jika ada ...']) !!}
			{!! Form::hidden('subyek_id', null) !!}
		</div>
		<!-- text input -->
		<div class="form-group{{ $errors->has('lembaga') ? ' has-error' : '' }}">
			<label class="text-red">* Lembaga</label>
			{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Lembaga / Instansi yang terkait TPK ...']) !!}
			{!! $errors->first('lembaga', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Obyek</h4>
		<!-- Obyek Pidana -->
		<div class="form-group{{ $errors->has('obyek_pidana') ? ' has-error' : '' }}">
			<label class="text-red">* Obyek Pidana</label>
			{!! Form::text('obyek_pidana', null, ['class' => 'form-control', 'placeholder' => 'Isi dengan kegiatan / obyek TPK ...']) !!}
			{!! $errors->first('obyek_pidana', '<p class="help-block">:message</p>') !!}
			{!! Form::hidden('obyek_id', null) !!}
		</div>	
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>Data Kasus</h4>
		<!-- Judul Kasus -->
		<div class="form-group{{ $errors->has('judul_kasus') ? ' has-error' : '' }}">
			<label class="text-red">* Judul Kasus</label>
			{!! Form::text('judul_kasus', null, ['class' => 'form-control', 'placeholder' => 'Harus ada Perbuatan, Subyek dan Obyek hukum']) !!}
			{!! $errors->first('judul_kasus', '<p class="help-block">:message</p>') !!}
		</div>
		<label class="text-red">* Kasus Posisi</label>
        <br>
        {!! Form::textarea('kasus_posisi', null, ['class'=>'form-control', 'placeholder' => '(Jelaskan kasus secara singkat)']) !!}
	</div>
</div>
<div class="rows"> 
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Pelapor</h4>
		<!-- Nama Lengkap -->
		<div class="form-group">
			<label>Nama Lengkap</label>
			{!! Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<!-- Alamat -->
		<div class="form-group">
			<label>Alamat</label>
			{!! Form::textarea('alamat', null, ['class'=>'form-control', 'placeholder' => 'Enter ...', 'size' => '0x3']) !!}
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
						{!! Form::number('kontak_telpon', null, ['class'=>'form-control', 'data-inputmask' => '&quot;mask&quot;: &quot;(999) 999-9999&quot;', 'data-mask' => '']) !!}
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
						{!! Form::number('kontak_handphone', null, ['class'=>'form-control', 'data-inputmask' => '&quot;mask&quot;: &quot;(999) 999-9999&quot;', 'data-mask' => '']) !!}
					</div>
					<!-- /.input group -->
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					{!! Form::text('kontak_email', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>									
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<!-- text input -->
		<!-- Asal Surat -->
				<div class="form-group{{ $errors->has('asal_surat') ? ' has-error' : '' }}">
					<label>Asal Surat</label>
		            {!! Form::text('asal_surat', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		            {!! $errors->first('asal_surat', '<p class="help-block">:message</p>') !!}
				</div>
	</div>
</div>
<div class="box-body">
	<div class="rows"> 
		<div class="col-lg-6 col-md-6 col-sm-12">
			<!-- No. Surat -->
			<div class="form-group{{ $errors->has('no_surat') ? ' has-error' : '' }}">
				<label>No. Surat</label>
				{!! Form::text('no_surat', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			</div>
			<!-- Tanggal Surat-->
			<div class="form-group{{ $errors->has('tanggal_surat_pelapor') ? ' has-error' : '' }}">
				<label>Tanggal Surat</label>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					{!! Form::date('tanggal_surat_pelapor', \Carbon\Carbon::now(), ['class' => 'form-control pull-right', 'id' => 'datepicker']) !!}
				</div>
				{!! $errors->first('tanggal_surat_pelapor', '<p class="help-block">:message</p>') !!}
				<!-- /.input group -->
				<!-- Diterima Tanggal-->
				<div class="form-group">
					<label>Diterima Tanggal</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						{!! Form::date('tanggal_surat_diterima', \Carbon\Carbon::now(), ['class' => 'form-control pull-right', 'id' => 'datepicker']) !!}
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

			<div class="box-tools pull-right">
				<a href="{{ route('rp1.index') }}" class="btn btn-danger"> BATAL</a>
                {{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
			</div>
		</div>
	</div>
</div>