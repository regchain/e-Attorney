@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR PERKARA PENYIDIKAN UMUM [rp-3 mum]')

@section('materi')

  <!-- /.box-header -->
  <div class="table-responsive no-padding">
    <table class="table table-striped">
      <tbody>
        <tr>
          <th>Kasus</th>
        </tr>
        @forelse ($cases as $case)
        <tr>
          <td>
              @include('partials._kasusrp3mum', ['case' => $case])
          </td>
        </tr>
        @empty
        <tr>
          <td>No data.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
    
@stop

@section('script')

@endsection