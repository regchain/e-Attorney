@forelse ($case->subyeks as $subyek)
<tr>
	<td>
		<div class="medi col-md-12">
			<div class="btn-group-vertical btn-group-xs pull-right" role="group" aria-label="...">
				<a href='{{ route('subyek.edit', [$case->id, $subyek->id]) }}' class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
				{!! Form::model($subyek, ['url' => route('subyek.destroy', [$case->id, $subyek->id]), 'method' => 'delete']) !!}
					{!! Form::button('<i class="glyphicon glyphicon-trash"></i> ', array('type' => 'submit', 'class' => 'btn btn-xs btn-danger')) !!}
				{!! Form::close() !!}
			</div>
			<div class="media-left">
				<a href="#">
				<img alt="64x64" class="media-object" data-src="holder.js/64x64" src="{{ asset('images/'.$subyek->foto) }}" data-holder-rendered="true" style="width: 64px; height: 64px;">
				</a>
			</div> 
			<div class="media-body">
				Terduga <strong class="media-heading">{{ $subyek->nama_terlapor }}</strong>,<br> 
				Jabatan: <strong>{{ $subyek->jabatan_resmi }}&nbsp;/&nbsp;{{ $subyek->jabatan_lain }}</strong>. <br>
				Institusi: <strong>{{ $subyek->lembaga }}</strong>
				<br>
				Kategori Subyek: <strong>{{ $subyek->kategori_subyek }}</strong>, 
				Status: <strong>{{ $case->status_subyek[$subyek->status] }}, {{ $subyek->masa_tahanan }}</strong></i><br>
			</div>
		</div>
	</td>
</tr>

@empty
<tr>
	<td> No Data</td>
</tr>

@endforelse