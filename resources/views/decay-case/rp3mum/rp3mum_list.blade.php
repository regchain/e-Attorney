@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR PERKARA PENYIDIKAN UMUM [rp-3 mum]')

@section('content')

  <!-- /.box-header -->
  <div class="table-responsive no-padding">
    <table class="table table-striped">
      <tbody>
        <tr>
          <th width="75%">Kasus Posisi</th>
          <th width="25%">No & Tanggal Surat</th>
        </tr>
        @forelse ($cases as $case)
        <tr>
          <td colspan="2">
              @include('decay-case.partials._kasusrp3mum', ['case' => $case])
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="2">No data.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
    
@stop

@section('script')

@endsection