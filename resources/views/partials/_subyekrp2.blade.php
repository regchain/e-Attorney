@forelse ($case->subyeks as $subyek)
<tr>
	<td>
		<div class="medi col-md-12a">
			<div class="media-left">
				<a href="#">
					<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="{{ asset('images/'. $subyek->foto) }}" data-holder-rendered="true" style="width: 64px; height: 64px;">
				</a>
			</div> 
			<div class="media-body">
				<strong class="media-heading">Terduga: {{ $subyek->nama_terlapor }}</strong><br> 
				{{-- Jabatan: <strong>{{ $subyek->jabatan_resmi }}&nbsp;/&nbsp;{{ $subyek->jabatan_lain }}</strong><br>  --}}
				Institusi: <strong>{{ $subyek->lembaga }}</strong><br>
				Kategori Subyek: <strong>{{ $subyek->kategori_subyek }}</strong>,&nbsp; 
				{{-- Status: <strong>{{ $subyek->status_subyek }}, {{ $subyek->masa_tahanan }}</strong><br> --}}<br>
				Disposisi / Keterangan: <strong>{{ $case->disposisi }}</strong>
			</div>
			<div>
				<h5>Jaksa Penyidik</h5>
				@forelse ($case->jaksas as $jaksa)
					{{ $loop->iteration }}. <strong>{{ $jaksa->nama_jaksa }}</strong><br />
				@empty
					No Data
				@endforelse
			</div>
		</div>
	</td>	
</tr>
@empty
<tr>
	<td> No Data</td>
</tr>

@endforelse

