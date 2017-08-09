
<!-- Single button -->
<div class="btn-group pull-right">
  <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tindakan <span class="caret"></span>
  </button>
  	<ul class="dropdown-menu">
  		<li><a href="{{ route('rp3mum.edit', $case->id) }}" class="text-right">Edit &nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></li>
  		<li><a href="{{ route('obyek.create', $case->id) }}" class="text-right">Barang Bukti &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
  		<li><a href="frp3mum" class="text-right">Sprint Dik Baru &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
  		<li><a href="frp3mum" class="text-right">Ganti / Jaksa &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
  		<li><a href="{{ route('subyek.create', $case->id) }}" class="btn btn-default text-warning">Tambah Subyek Baru &nbsp;&nbsp;<i class="glyphicon glyphicon-plus"></i></a></li>
  		<li><a href="{{ url('/tersangka', $case->id) }}" class="btn btn-default"><strong>Penetapan Tersangka &nbsp;&nbsp;</strong><i class="glyphicon glyphicon-log-in"></i></a></li>
  	</ul>
</div><!-- end button group -->
<div class="panel-heading" role="tab" id="headingOne"> 
	<p class="panel-title"> <a href="#collapse1" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse1" class="collapsed"> <i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp;[{{ $case->judul_kasus }}]</a> </p>
</div>

<div class="panel-collapse collapse" role="tabpanel" id="collapse1" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
	<div class="panel-body">
		<div class="col-lg-4 col-md-4 col-sm-12 text-justify">
			<!-- Custom Tabs (Pulled to the right) -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs pull-right">
					<li class="active"><a href="#tab_3a1-1" data-toggle="tab" aria-expanded="true">Kasus</a></li>
					<li class=""><a href="#tab_3a2-2" data-toggle="tab" aria-expanded="false">Benda Sitaan</a></li>
					<li class=""><a href="#tab_3a3-2" data-toggle="tab" aria-expanded="false">Pemulihan Aset</a></li>
					<li class="pull-left box">&nbsp;&nbsp;&nbsp;<i class="fa fa-balance-scale"></i> <label>Kasus Posisi:</label></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_3a1-1">						
						<strong>[{{ $case->kasus_posisi }}]</strong> 
						<br>Kesimpulan: [{{ $case->kesimpulan }}]
						<br>Saran: [{{ $case->saran }}]
						<br>Disposisi: [{{ $case->disposisi }}]
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_3a2-2">
						<p class="text-red">...Cantumkan list benda sitaan (tanpa nilai)</p>
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_3a3-2">
						Nilai Kontrak / Anggaran: <strong>[{{ $case->nilai_kontrak }}] M.</strong> 
						<br>Kerugian Negara <strong>[{{ $case->kerugian_negara }}] M.</strong> 
						<br>Pemulihan Aset: <strong>[{{ $case->pemulihan_aset }}] M.</strong> 
					</div>
					<!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			</div>
			<!-- nav-tabs-custom -->
		</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<table class="table table-responsive table-striped">
			<tbody>
				@include('partials._subyekrp3mum', ['case' => $case])				
			</tbody>
		</table>
	</div>
</div>
