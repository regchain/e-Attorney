@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Register Perkara Penyidikan Khusus')

@section('content')

{!! Form::model($case, ['url' => route('rp3sus.store'), 'method' => 'post']) !!}
<div class="box-body">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">				
					<!-- No. Surat -->
					<div class="form-group">
						<label>No. Surat</label>
						{!! Form::text('no_surat_perkara', null, ['class' => 'form-control', 'placeholder' => 'PRINT-', 'required']) !!}
						{!! Form::hidden('id', null) !!}
						{!! Form::hidden('spt_id', $spt_id) !!}
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!-- Tanggal Surat -->
					<div class="form-group">
						<label>Tanggal</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							{!! Form::date('tanggal_surat_perkara', \Carbon\Carbon::now(), ['class' => 'form-control pull-right', 'id' => 'datepicker', 'required']) !!}
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<label>Status</label>
					<div class="input-group">
						{!! Form::select('status_rp3mum', ['3' => 'DITERUSKAN', '2' => 'DIALIHKAN', '4' => 'DIHENTIKAN'], 3, ['class' => 'form-control', 'style' => 'width: 295px;', 'size' => '4', 'required']) !!}
					</div>
				</div>				
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Pasal Disangkakan</label>
						{!! Form::select('pasal_id[]', $pasals, 0, ['class' => 'form-control', 'multiple' => 'multiple', 'size' => '4']) !!}
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Disposisi / Petunjuk</label>
						{!! Form::textarea('disposisi', null, ['class' => 'form-control', 'size' => '0x8']) !!}
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<label>Data Jaksa</label>
					<div align="center" class="thumbnail">
						{!! Form::select('jaksa_id[]', $jaksas, 0, ['class'=>'form-control', 'multiple' => 'multiple', 'size' => '8']) !!}
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Judul Kasus : {{ $case->judul_kasus }}</h3>
				</div>
				<div class="panel-body">
					<strong>Kasus Posisis: </strong> {{ $case->kasus_posisi }}
				</div>
			</div>
			<div class="list-group">
				<a href="#" class="list-group-item">
					<strong>PEMULIHAN ASET</strong>
				</a>
				<a href="#" class="list-group-item">Nilai Anggaran <div class="pull-right">
					Rp. {{ number_format($case->nilai_kontrak) }} ,-
				</div></a>
				<a href="#" class="list-group-item">Kerugian Negara<div class="pull-right">
					Rp. {{ number_format($case->kerugian_negara) }} ,-
				</div></a>
				<a href="#" class="list-group-item">Pemulihan Aset<div class="pull-right">
					Rp. {{ number_format($case->pemulihan_aset) }} ,-	
				</div></a>
			</div>
		</div>
		
		<div class="col-lg-6 col-md-6 col-xs-12">
			@foreach ($spt_subyek as $tersangka)
			<div class="box box-widget widget-user-2 bg-gray">
				<div class="widget-user-header">
					<div class="widget-user-image">
						<img class="img-circle" src="{{ asset('images/'. $tersangka->foto) }}" alt="User Avatar">
					</div>
					<h3 class="widget-user-username">{{ $tersangka->nama_terlapor }}</h3>
					<h5 class="widget-user-desc">TERSANGKA</h5>
				</div>
				<div class="box-footer no-padding">
					<ul class="nav nav-stacked">
						<li><a href="#">Surat Penetapan Tersangka <strong class="pull-right">{{ $tersangka->no_spt }}</strong></a></li>
						<li><a href="#">Institusi / Lembaga <span class="pull-right">{{ $tersangka->lembaga }}</span></a></li>
						<li><a href="#">Jabatan Resmi <span class="pull-right">{{ $tersangka->jabatan_resmi }}</span></a></li>
						<li><a href="#">Jabatan Lain <span class="pull-right">{{ $tersangka->jabatan_lain }}</span></a></li>
					</ul>
				</div>
			</div>
			@endforeach

			<div class="box-tools pull-right">
				<a href="{{ route('rp3mum.index') }}" class="btn btn-danger"> BATAL</a>
				{{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

@stop

@section('script')
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>
@endsection