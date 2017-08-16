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
                <tbody><tr>
                    <th width="60%">Kasus Posisi</th>
                    <th width="40%">No. & Tanggal Surat</th>
                </tr>
                <tr>
                  <td colspan="2">
                  @include('partials._kasusrp3muma')
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  @include('partials._kasusrp3mumb')
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  @include('partials._kasusrp3mumc')
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  @include('partials._kasusrp3mumd')
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
    






@stop

@section('script')

@endsection