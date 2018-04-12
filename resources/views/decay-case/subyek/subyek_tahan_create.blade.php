@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')
<title id='Description'>This demo demonstrates the jqxCalendar's range selection mode. Click on a date to select the start date and then click on another cell to select the end date.</title>
    <link rel="stylesheet" href="plugins/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script src="plugins/scripts/demos.js"></script>
    <script src="plugins/jqwidgets/jqxcore.js"></script>
    <script src="plugins/jqwidgets/jqxdatetimeinput.js"></script>
    <script src="plugins/jqwidgets/jqxcalendar.js"></script>
    <script src="plugins/jqwidgets/jqxtooltip.js"></script>
    <script src="plugins/jqwidgets/globalization/globalize.js"></script>


@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Surat Perintah Penahanan')

@section('content')

{!! Form::model($subyek, ['url' => url('/tahan', $subyek->id), 'method' => 'put']) !!}
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-12">
		<div class="form-group">
			<label class="text-red">* No.Surat</label>
			{!! Form::text('no_spt', $no_spt, ['class' => 'form-control', 'placeholder' => 'PRINT-', 'required']) !!}
			{!! Form::hidden('spt_id', $spt_id) !!}
			{!! Form::hidden('kasus_id', $surat_dikmum->kasus_id) !!}
			{!! Form::hidden('surat_id', $surat_dikmum->surat_id) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12">
		<div class="form-group">
            <label class="text-red">* Tanggal Surat</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::date('tanggal_spt', $tanggal_spt, ['class' => 'form-control pull-right', 'id' => 'datepicker', 'required']) !!}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
		<div class="form-group">
            <label class="text-red">* Mulai Tanggal</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::date('masa_hukuman_dari', null, ['class' => 'form-control pull-right', 'id' => 'datepicker', 'required']) !!}
            </div>
        </div>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-12">
		<div class="form-group">
            <label class="text-red">* Sampai Tanggal</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::date('masa_hukuman_ke', null, ['class' => 'form-control pull-right', 'id' => 'datepicker', 'required']) !!}
            </div>
        </div>
    </div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-group">
			<label>Berdasarkan Sprint Penyidikan Umum:</label>
			{!! Form::text('no_surat_perkara', $surat_dikmum->no_surat_perkara, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'disabled']) !!}
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-group">
			<label>Berdasarkan Disposisi / Keterangan:</label>
			{!! Form::text('kasus_posisi', $surat_dikmum->kasus_posisi, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'disabled']) !!}
		</div>
	</div>
</div>
<div class="rows"> 
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Tersangka</h4>
		<div class="form-group">
			<label>Nama Lengkap</label>
			{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'required' => 'required']) !!}
		</div>
		<div class="form-group">
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
				<div class="form-group">
					<label>Tempat Lahir</label>
					{!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<label>Tanggal Lahir</label>
					{!! Form::date('tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<label>Kebangsaan / Kewarganegaraan</label>
					{!! Form::text('kewarganegaraan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<label>Agama</label>
					{!! Form::text('agama', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<h4>Data Pekerjaan</h4>
		<div class="form-group">
			<label>Pekerjaan</label>
			{!! Form::text('pekerjaan', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<div class="form-group">
			<label>Institusi / Lembaga</label>
			{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'required' => 'required']) !!}
		</div>
		<div class="form-group">
			<label>Jabatan Resmi</label>
			{!! Form::text('jabatan_resmi', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<div class="form-group">
			<label>Jabatan Lain</label>
			{!! Form::text('jabatan_lain', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		<div class="form-group">
			<label class="text-red"><strong>*Kategori Subyek</strong></label>
			{!! Form::select('kategori_subyek_id', $kategori_subyek, null, ['class'=>'form-control', 'placeholder' => '']) !!}
		</div>
		<div class="box-tools pull-right">
			<a href="{{ url('/subyek') }}" class="btn btn-danger"> BATAL</a>
			{{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
		</div>
	</div>
</div>
{!! Form::close() !!}

@stop

@section('script')

@endsection