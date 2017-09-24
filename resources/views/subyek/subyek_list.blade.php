@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR Tahanan')

@section('materi')

    <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Tersangka
        </td>
        <td width="33%">
          Kasus
        </td>
        <td width="33%">
          Obyek Pidana
        </td>
      </th>
      @forelse ($subyeks as $subyek)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tersangka', ['subyek' => $subyek])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
    {!! $subyeks->render() !!}

@stop

@section('script')

@endsection