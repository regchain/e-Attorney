
<!-- Single button -->
<div class="btn-group pull-right">
  <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tindakan <span class="caret"></span>
  </button>
  	<ul class="dropdown-menu">
  		<li><a href="{{ route('rp3mum.edit', $case->id) }}" class="text-right">Edit &nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></li>
  		<li><a href="{{ route('obyek.create', $case->id) }}" class="text-right">Barang Bukti &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
  		<li><a href="{{ url('/dikmum', $case->id) }}" class="text-right">Perpanjang SPRINT &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
  		<li><a href="{{ url('/dikmum', $case->id) }}" class="text-right">Ganti Jaksa &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
  		<li><a href="{{ route('subyek.create', $case->id) }}" class="btn btn-default text-warning">Tambah Subyek Baru &nbsp;&nbsp;<i class="glyphicon glyphicon-plus"></i></a></li>
  		<li><a href="{{ url('/tersangka', $case->id) }}" class="btn btn-default"><strong>PENYELESAIAN &nbsp;&nbsp;</strong><i class="glyphicon glyphicon-log-in"></i></a></li>
  	</ul>
</div><!-- end button group -->
<div class="panel-heading col-md-9" role="tab" id="headingOne"> 
	<p class="panel-title"> <a href="#collapse{{ $case->id }}" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse1" class="collapsed"> <i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp;{{ $case->judul_kasus }}</a> </p>
</div>
<div>{{ $case->no_surat_perkara }}<br /> {{ $case->tanggal_surat_perkara }}</div>
<div class="row col-md-12">
<div class="panel-collapse collapse" role="tabpanel" id="collapse{{ $case->id }}" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
	<div class="panel-body">
		<div class="col-lg-5 col-md-5 col-sm-12 text-justify">
			<!-- Custom Tabs (Pulled to the right) -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs pull-right">
					<li class="active"><a href="#tab_3a1-1{{ $case->id }}" data-toggle="tab" aria-expanded="true">Kasus</a></li>
					<li class=""><a href="#tab_3a2-2{{ $case->id }}" data-toggle="tab" aria-expanded="false">Benda Sitaan</a></li>
					<li class=""><a href="#tab_3a3-2{{ $case->id }}" data-toggle="tab" aria-expanded="false">Pemulihan Aset</a></li>
					<li class=""><a href="#tab_3a4-2{{ $case->id }}" data-toggle="tab" aria-expanded="false">Jaksa Penyidik</a></li>
					<li class="pull-left box">&nbsp;&nbsp;&nbsp;<i class="fa fa-balance-scale"></i> <label>Kasus Posisi</label></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_3a1-1{{ $case->id }}">
						<strong>{{ $case->kasus_posisi }}</strong> 
						<br>Kesimpulan: {{ $case->kesimpulan }}
						<br>Saran: {{ $case->saran }}
						<br>Disposisi: {{ $case->disposisi }}
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_3a2-2{{ $case->id }}">
						@forelse ($case->barang_sitaan as $sitaan)
						<p class="text-red">{{ $sitaan->barang_sitaan }} </p>
						@empty
				        <p class="text-red"> Tidak ada benda sitaan</p>
				        @endforelse
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_3a3-2{{ $case->id }}">
						@foreach ($case->obyeks as $obyek)
						Nilai Kontrak / Anggaran: <strong>Rp. {{ number_format($obyek->nilai_kontrak) }} ,-</strong> 
						<br>Kerugian Negara <strong>Rp. {{ number_format($obyek->kerugian_negara) }} ,-</strong> 
						<br>Pemulihan Aset: <strong>Rp. {{ number_format($obyek->pemulihan_aset) }} ,-</strong> 
						@endforeach
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_3a4-2{{ $case->id }}">
						@foreach ($case->jaksas as $jaksa)
						{{ $loop->iteration }}. <strong>{{ $jaksa->nama_jaksa }} </strong><br />
						@endforeach
					</div>
				</div>
				<!-- /.tab-content -->
			</div>
			<!-- nav-tabs-custom -->
		</div>
	<div class="col-lg-7 col-md-7 col-sm-12">
		<table class="table table-responsive table-striped">
			<tbody>
				@include('decay-case.partials._subyekrp3mum', ['case' => $case])				
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
