@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Barang Bukti')

@section('materi')

<div class="row">
 <div class="col-lg-4 col-md-4 col-sm-12">
   <!-- select -->
   <div class="form-group">
    <label>Jenis Surat</label>
    <select class="form-control">
      <option>PENGGELEDAHAN</option>
      <option>PENYITAAN</option>
      <option>PENITIPAN</option>
      <option selected="selected">Pilih jenis surat....</option>
    </select>
  </div>
  <!-- No. Surat -->
  <div class="form-group">
   <label> No. Surat</label>
   <input type="text" class="form-control" placeholder="PRINT-">
 </div>
 <!-- Tanggal Surat -->
 <div class="form-group">
   <label>Tanggal Surat</label>
   <div class="input-group date">
    <div class="input-group-addon">
     <i class="fa fa-calendar"></i>
   </div>
   <input type="date" class="form-control pull-right" id="datepicker" >
 </div>
 <!-- /.input group -->
</div>
<!-- /.form group -->
<div class="form-group">
  <label>Memerintahkan Kepada</label>
    <div align="center" class="thumbnail">
    @include('partials._timjaksa')
    </div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12">
<!-- Melakukan Tindakan -->
<div class="form-group">
  <label>  Tindakan</label>
  <input type="text" class="form-control" placeholder="...">
</div>

 <!-- Membuat Berita Acara -->
 <div class="form-group">
   <label> Keterangan</label>
   <form>
    <textarea-kasus id="editor1" name="editor" rows="3" cols="120">
      Benda Sitaan :
    </textarea-kasus> 
  </form>
</div>
<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">Rp.</span>
    <input type="int" class="form-control" aria-label="pemulihan aset">
    <span class="input-group-addon">Nilai Pemulihan Aset</span>
  </div>
</div>

<div class="box-tools pull-right">
 <a href="{{ route('rp3mum.index') }}" class="btn btn-danger"> BATAL</a>
 <a href="obyek" class="btn btn-success"> KIRIM</a>
</div>
</div>
</div>
      
@stop

@section('script')


            <!-- Form Kasus Posisi -->
            <script src='{{ asset('js/kasus_posisi.js') }}'></script>

@endsection