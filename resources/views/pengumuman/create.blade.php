@extends('layouts.penyidikan_template')

@section('title', 'Buat Pengumuman')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Ganti Judul Halaman')

@section('materi')

        <div class="row">
        	<<div class="col-md-8 col-md-offset-2">
        	<h3>Buat Pengumuman</h3>
        	<hr>
        		{!! Form::open(['route' => 'pengumuman.store']) !!}
    				{{ Form::label('judul', 'Judul')}}
    				{{ Form::text('title', null, array('class' => 'form-control'))}}

    				{{ Form::label('isi', 'Pengumuman')}}
    				{{ Form::textarea('isi', null, array('class' => 'form-control'))}}

    				{{ Form::submit('Kirim', array('class' => 'btn btn-success btn-lg btn-block'))}}
				{!! Form::close() !!}
        	</div>
        </div>
      
@stop

@section('script')

@endsection
