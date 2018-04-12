@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Surat Perintah Penyerahan Tanggungjawab Tersangka dan Barang Buktinya [p-15a]')

@section('content')

{!! Form::model($case, ['url' => url('/p15a', $spt->id), 'method' => 'put']) !!}
<div class="box-body">
				<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12">				
						<div class="form-group">
							<label>No. Surat P-15a</label>
							{!! Form::text('no_p15', $no_p15a, ['class' => 'form-control', 'placeholder' => 'PRINT-', 'required']) !!}
						{!! Form::hidden('p15a_id', $p15a_id) !!}
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Tanggal</label>
							<div class="input-group date">
								<div class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</div>
								{!! Form::date('tanggal_p15', $tanggal_p15a, ['class' => 'form-control pull-right', 'id' => 'datepicker', 'required']) !!}
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-xs-12">
					<p>
						<label>Berkas Perkara Berdasarkan:</label><br>
						<div class="checkbox">
						  <label>
						    <input type="checkbox" value="" checked="checked">
						    <strong class="text-green">Nota Dinas Direktur Penuntutan&mdash;Berkas dinyatakan lengkap [P-21]</strong>
						  </label>
						</div>
						@foreach ($kasus_surat as $surat)
						<li>No. Surat {{ $surat["tipe_surat"] }} <span class="label label-success">{{ $surat["no_surat_perkara"] }}</span> Tgl. {{ $surat["tanggal_surat_perkara"] }}</li>
						@endforeach
						<li>Penetapan Tersangka. <span class="label label-success">{{ $spt->no_spt }}</span> Tgl. {{ $spt->tanggal_spt }}</li>
					</p>
					</div>
					<div class="col-lg-12 col-md-12 col-xs-12">
						<label>Pasal Disangkakan</label>
						<div class="form-group">
							@include('decay-case.partials._pasalp15', ['surat_pasal' => $surat_pasal])
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
						<a href="{{ route('rp3sus.index') }}" class="btn btn-danger"> BATAL</a>
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