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
      <td width="60%">KASUS POSISI</td>
      <td width="30%">KETERANGAN</td>
      <td width="10%" align="right"><a href="{{ route('rp1.create') }}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-plus"></i> &nbsp; Kasus Baru </a></td>
  </thead>
  <tbody>
    @forelse ($cases as $case)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td><strong> {{$case->judul_kasus}} </strong>, {{ $case->kasus_posisi }}</td>
        <td>Lokasi Kejadian: {{ $case->lokasi_kejadian }}<br>
        Tanggal Kejadian: {{ $case->tanggal_kejadian }}<br>
        Pelapor: {{ $case->nama_lengkap }}<br>
        </td>
        <td>
            <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                @if ($case->status_rp1  == 1)
                <a href="{{ route('rp1.edit', $case->id) }}" class="btn btn-default btn-xs">Edit &nbsp;<i class="glyphicon glyphicon-pencil"></i></a>
                <a href="{{ route('lidik.edit', $case->id) }}" class="btn btn-success btn-xs">Sprint Lidik &nbsp;<span class="glyphicon glyphicon-log-in"></span></a>
                @endif
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
{!! $cases->render() !!}
</div>

@stop

@section('script')

@endsection
