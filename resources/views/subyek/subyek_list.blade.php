@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR Tahanan')

@section('materi')





    <table class="table table-striped">
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
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk1')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk2')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk3')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk4')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk5')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk6')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk7')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk8')</div>
        </td>
      </tr>
      <tr>
        <td width="100%" colspan="4">
          <div>@include('partials._tsk9')</div>
        </td>
      </tr>

    </table>
    
    





@stop

@section('script')

@endsection