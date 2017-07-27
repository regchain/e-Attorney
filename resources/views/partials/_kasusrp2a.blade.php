
<!-- Single button -->
<div class="btn-group pull-right">
  <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tindakan <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  		<li><a href="erp2" class="text-right">Edit &nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></li>
  		<li><a href="frp3mum" class="text-right"><strong>NAIK DIK MUM</strong> &nbsp;&nbsp;<i class="glyphicon glyphicon-log-in text-red"></i></a></li>
  	</ul>
</div><!-- end button group -->
<div class="panel-heading" role="tab" id="headingOne"> 
	<p class="panel-title"> <a href="#collapse1" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse1" class="collapsed"> <i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp;[judul_kasus] </a> </p>
</div>


<div class="panel-collapse collapse" role="tabpanel" id="collapse1" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
	<div class="panel-body">
	<div class="col-lg-4 col-md-4 col-sm-12 text-justify">
		<label>Kasus Posisi:</label>
		[kasus_posisi]. 
		<br>Kesimpulan: [kesimpulan]
		<br>Saran: [saran]
		<br>Disposisi: [disposisi]
		<br>Nilai Kontrak / Anggaran: <strong>[nilai_kontrak] M.</strong> 
		<br>Kerugian Negara <strong>[kerugian_negara] M.</strong> 
		<br>Pemulihan Aset: <strong>[pemulihan _aset] M.</strong> 
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<table class="table table-responsive table-striped">
			<tbody>
				<tr>
					<td>@include('partials._tsk4')</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
