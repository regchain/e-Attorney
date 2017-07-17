@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Daftar Kasus Baru')

@section('materi')





<div class="table table-responsive">
<table class="table table-striped">
  <thead>
      <td>ID</td>
      <td width="70%">KASUS POSISI</td>
      <td width="20%">KETERANGAN</td>
      <td width="10%" align="right"><a href='frp1' class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-plus"></i> &nbsp; Kasus Baru </a></td>
  </thead>
  <tbody>
    @forelse ($cases as $case)
    <tr>
        <td>{{ $case->id }}</td>
        <td><strong> {{$case->judul_kasus}} </strong>, {{ $case->kasus_posisi }}</td>
        <td></td>
        <td>
            <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                <a href='erp1' class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href='#' class="btn btn-default btn-xs"><i class="glyphicon glyphicon-minus-sign"></i></a>
                <a href='rp1/{{$case->id}}/lidik' class="btn btn-success btn-xs"><span class="glyphicon glyphicon-share-alt"></span> Lidik</a>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td>No Data</td>
    </tr>
@endforelse
  </tbody>
</table>
</div>


@stop

@section('script')

@endsection
