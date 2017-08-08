@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR PERKARA PENYIDIKAN khusus [rp-3 sus]')

@section('materi')

  <div class="table-responsive no-padding">
    <table class="table table-striped">
      <tbody>
        <tr>
          <th>Berkas Perkara</th>
        </tr>
        @forelse ($cases as $case)
        <tr>
          <td>
            @include('partials._kasusrp3sus', ['case' => $case])
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

@stop

@section('script')
  <!-- Form Kasus Posisi -->
  <script src='{{ asset('js/kasus_posisi.js') }}'></script>

@endsection