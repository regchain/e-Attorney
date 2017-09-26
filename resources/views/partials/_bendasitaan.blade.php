<div class="bs-example" data-example-id="collapse-accordion">
	<div class="panel-group" role="tablist" id="accordion" aria-multiselectable="true">
  @foreach ($cases as $case)
		<div class="panel panel-default">    
			<div class="panel-heading" role="tab" id="headingOne"> 
				<h4 class="panel-title">
          <a href="#collapseOne{{ $case->id }}" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseOne" class="collapsed"><i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp; {{ $case->judul_kasus }}</a>
          <div class="pull-right"> Pemulihan Aset: Rp. {{ number_format($case->pemulihan_aset) }} ,-</div>
        </h4>
			</div>
			<div class="panel-collapse collapse" role="tabpanel" id="collapseOne{{ $case->id }}" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"> 
				<div class="panel-body"> 
				  <table class="table table-hover">
            <tbody>
              <tr>
                <th>No.</th>
                <th>SP No.</th>
                <th>Tanggal</th>
                <th>Tindakan</th>
                <th>Keterangan</th>
                <th><a href="{{ route('obyek.create', $case->id) }}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-plus"> </i>&nbsp;SP Geledah</a></th>
              </tr>
              @forelse ($case->surats as $surat)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat->no_surat_perkara }}</td>
                <td>{{ $surat->tanggal_surat_perkara }}</td>
                <td>{{ $surat->tindakan }}</td>
                <td>{{ $surat->barang_sitaan }}</td>
                <td><a href="{{ route('obyek.edit', [$case->id, $surat->id]) }}" class="btn btn-success btn-xs"> <i class="fa fa-edit"> &nbsp; </i> Edit</a><p> Rp. {{ number_format($surat->nilai_pemulihan_aset) }} ,-</p></td>
              </tr>
              @empty
              <tr>
                <td colspan="6">No Data</td>
              </tr>
              @endforelse
              </tbody></table>
              </div>
			</div>      
		</div>
  @endforeach
</div>
</div>