@forelse ($case->subyeks as $subyek)
<tr>
	<td>
		<div class="medi col-md-12"> 
			<div class="btn-group-vertical btn-group-xs pull-right" role="group" aria-label="...">
				<a href='{{ url('/tahan', $subyek->id) }}' class="btn btn-danger">TAHAN &nbsp;<i class="glyphicon glyphicon-log-in"></i></a>
			</div>
			<div class="media-left">
				<a href="#"><img alt="64x64" class="media-object" data-src="holder.js/64x64" src="{{ asset('images/'. $subyek->foto) }}" data-holder-rendered="true" style="width: 64px; height: 64px;">
				</a>
			</div> 
			<div class="media-body">
				<strong class="media-heading">Tersangka: {{ $subyek->nama_terlapor }}</strong>,<br>
				Jabatan: <strong>{{ $subyek->jabatan_resmi }} &nbsp; /&nbsp;{{ $subyek->jabatan_lain }}</strong><br>
				Institusi: <strong>{{ $subyek->lembaga }}</strong><br>
				Kategori Subyek: <strong>{{ $subyek->kategori_subyek }}</strong>, Status: <strong>{{ $case->status_subyek[$subyek->status] }}, {{ $subyek->masa_tahanan }}</strong><br>
				Disposisi / Keterangan: <strong>{{ $case->disposisi }}</strong>
			</div> 
		</div>
	</td>
</tr>
@empty
<tr>
	<td> No Data</td>
</tr>

@endforelse