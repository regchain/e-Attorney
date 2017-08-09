@forelse ($case->subyeks as $subyek)
<tr>
	<td>
		<div class="medi col-md-12a">
			<div class="media-left">
				<a href="#">
					<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="dist/img/subyek/nancy.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;">
				</a>
			</div> 
			<div class="media-body">
				<strong class="media-heading">Tersangka: [{{ $subyek->nama_terlapor }}]</strong>, 
				Jabatan: <strong>[{{ $subyek->jabatan_resmi }}] / [{{ $subyek->jabatan_lain }}]</strong>. 
				Lembaga/Institusi: <strong>[{{ $subyek->lembaga }}]</strong>
				<br>
				Kategori Subyek: <strong>[{{ $subyek->kategori_subyek }}]</strong>, 
				Status: <strong>[{{ $subyek->status_subyek }}], [{{ $subyek->masa_tahanan }}]</strong><i class="text-red"> (.. belum ada)</i><br>
				Disposisi / Keterangan: <strong>[{{ $case->disposisi }}]</strong>
		</div> 
		</div>
	</td>
</tr>
@empty
<tr>
	<td> No Data</td>
</tr>

@endforelse