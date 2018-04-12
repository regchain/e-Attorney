
<!-- Single button -->
<div class="btn-group pull-right">
	@if ($case->status_rp2  == 1)
  	<button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tindakan <span class="caret"></span>
  	</button>
  	<ul class="dropdown-menu">
  		<li><a href="{{ route('rp2.edit', $case->id) }}" class="text-right">Edit &nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></li>
  		<li><a href="{{ url('/dikmum', $case->id) }}" class="text-right"><strong>PENYELESAIAN</strong> &nbsp;&nbsp;<i class="glyphicon glyphicon-log-in text-red"></i></a></li>
  	</ul>
  	@endif
</div><!-- end button group -->
<div class="panel-heading col-md-9" role="tab" id="headingOne">
	<p class="panel-title"> <a href="#collapse{{ $case->id }}" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse1" class="collapsed"> <i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp; {{ $case->judul_kasus }} </a> </p>
</div>
<div>{{ $case->no_surat_perkara }}<br /> {{ $case->tanggal_surat_perkara }}</div>
<div class="row col-md-12">
<div class="panel-collapse collapse" role="tabpanel" id="collapse{{ $case->id }}" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
	<div class="panel-body">
		<div class="col-lg-4 col-md-4 col-sm-12 text-justify">
			<label>Kasus Posisi:</label>
			{{ $case->kasus_posisi }}. 
			<br>Disposisi: {{ $case->disposisi }}
			@forelse ($case->obyeks as $obyek)
			<br>Nilai Anggaran:Rp. <strong>{{ number_format($obyek->nilai_kontrak) }} ,-</strong> 
			<br>Kerugian Negara:Rp. <strong>{{ number_format($obyek->kerugian_negara) }} ,-</strong> 
			<br>Pemulihan Aset:Rp. <strong>{{ number_format($obyek->pemulihan_aset) }} ,-</strong>
			@empty
			@endforelse
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12">
			<table class="table table-responsive table-striped">
				<tbody>
					@include('decay-case.partials._subyekrp2')				
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>