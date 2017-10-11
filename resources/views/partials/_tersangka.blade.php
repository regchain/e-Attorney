<div class="medi col-md-12a"> 
	<div class="btn-group-vertical btn-group-xs pull-right" role="group" aria-label="...">
  		<a href='{{ route('subyek.edit', [0, $tersangka->id]) }}' class="btn btn-primary"> EDIT &nbsp;
  			<i class="glyphicon glyphicon-edit"></i>
  		</a>
  		<a href='{{ url('/tahan', $tersangka->id) }}' class="btn btn-danger"> TAHAN &nbsp;
  			<i class="glyphicon glyphicon-log-in"></i>
  		</a>
	</div>
</div>
<div class="media-left">
	<a href="#"><img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/{{ $tersangka->foto }}" data-holder-rendered="true" style="width: 64px; height: 64px;"></a>
</div>
<div class="media-body">
	<strong class="media-heading">{{ $tersangka->nama_terlapor }}</strong> {{ $tersangka->lembaga }}. 
</div> 
</div>