@forelse ($case->subyeks as $subyek)
<tr>
	<td>
		<div class="medi col-md-12">
			<div class="media-left">
				<a href="#">
				<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="{{ asset('images/subyek.jpg') }}" data-holder-rendered="true" style="width: 64px; height: 64px;">
				</a>
			</div> 
			<div class="media-body">
				Terduga <strong class="media-heading">{{ $subyek->nama_terlapor }}</strong>, 
				Jabatan: <strong>{{ $subyek->jabatan_resmi }} / {{ $subyek->jabatan_lain }}</strong>. 
				Lembaga/Institusi: <strong>{{ $subyek->lembaga }}</strong>
				<br>
				Kategori Subyek: <strong>{{ $subyek->kategori_subyek }}</strong>, 
				Status: <strong>{{ $subyek->status }}, {{ $subyek->masa_tahanan }}</strong><i class="text-red"> (.. belum ada)</i><br>
			</div>
		</div>
	</td>
</tr>

@empty
<tr>
	<td> No Data</td>
</tr>

@endforelse