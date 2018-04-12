@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Barang Bukti')

@section('content')

{!! Form::open(['url' => route('obyek.store', $kasus_id), 'method' => 'post']) !!}
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="form-group">
      <label>Jenis Surat</label>
      {!! Form::select('tipe_surat', ['PENGGELEDAHAN' => 'PENGGELEDAHAN', 'PENYITAAN' => 'PENYITAAN', 'PENITIPAN' => 'PENITIPAN'], 0, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    
    <!-- No. Surat -->
    <div class="form-group">
      <label> No. Surat</label>
      {!! Form::text('no_surat_perkara', null, ['class' => 'form-control', 'placeholder' => 'PRINT-', 'required' => 'required']) !!}
    </div>
 
    <!-- Tanggal Surat -->
    <div class="form-group">
      <label>Tanggal Surat</label>
      <div class="input-group date">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        {!! Form::date('tanggal_surat_perkara', null, ['class' => 'form-control pull-right', 'placeholder' => '', 'required' => 'required', 'id' => 'datepicker']) !!}
      </div>
    </div>

    <div class="form-group">
      <label>Memerintahkan Kepada</label>
      {!! Form::select('jaksa_id[]', $jaksas, 0, ['class'=>'form-control', 'placeholder' => 'Pilih Jaksa', 'multiple' => 'multiple', 'size' => '10']) !!}
    </div>
  </div>
  <div class="col-lg-8 col-md-8 col-sm-12">
    <div class="form-group">
      <label>Tindakan</label>
      {!! Form::text('tindakan', null, ['class' => 'form-control', 'placeholder' => '...']) !!}
    </div>

    <!-- Membuat Berita Acara -->
    <div class="form-group">
      <label>Keterangan</label>
      {!! Form::textarea('barang_sitaan', null, ['class' => 'form-control', 'size' => '120x10' ,'placeholder' => '(Isi Keterangan)']) !!}
    </div>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">Rp.</span>
        {!! Form::number('nilai_pemulihan_aset', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'step' => 'any']) !!}
        <span class="input-group-addon">,-</span>
        <span class="input-group-addon">Nilai Pemulihan Aset</span>
        {!! Form::hidden('obyek_id', $obyek_id) !!}
      </div>
    </div>

    <div class="box-tools pull-right">
      <a href="{{ route('rp3mum.index') }}" class="btn btn-danger"> BATAL</a>
      {{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
    </div>
  </div>
</div>
{!! Form::close() !!}
      
@stop

@section('script')

@endsection