@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR Subyek Hukum')

@section('materi')

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#terlapor">Terlapor</a></li>
    <li><a data-toggle="tab" href="#tersangka">Tersangka</a></li>
    <li><a data-toggle="tab" href="#tahanan">Tahanan</a></li>
  </ul>

  <div class="tab-content">
    <div id="terlapor" class="tab-pane fade in active">
      <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Terlapor
        </td>
        <td width="33%">
          Lembaga
        </td>
      </th>
      @forelse ($terlapors as $terlapor)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._terlapor', ['terlapor' => $terlapor])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
    </div>
    <div id="tersangka" class="tab-pane fade">
      <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Tersangka
        </td>
        <td width="33%">
          Lembaga
        </td>
      </th>
      @forelse ($tersangkas as $tersangka)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tersangka', ['tersangka' => $tersangka])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
  </div>
    <div id="tahanan" class="tab-pane fade">
      <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Tahanan
        </td>
        <td width="33%">
          Lembaga
        </td>
      </th>
      @forelse ($tahanans as $tahanan)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tahanan', ['tahanan' => $tahanan])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
    </div>
  </div>

@stop

@section('script')

@endsection