<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="form-group{{ $errors->has('undang_undang') ? ' has-error' : '' }}">
		{!! Form::label('undang_undang', 'Undang Undang') !!}
		{!! Form::text('undang_undang', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI', ['class'=>'form-control', 'placeholder' => 'Enter ...', 'readonly' => '']) !!}
        {!! $errors->first('undang_undang', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12">
	<div class="form-group{{ $errors->has('kategori_pasal') ? ' has-error' : '' }}">
		{!! Form::label('kategori_pasal', 'Kategori Pasal') !!}
		{!! Form::text('kategori_pasal', null, ['class'=>'form-control', 'placeholder' => 'Enter ...', 'required' => '']) !!}
		{!! $errors->first('kategori_pasal', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('pasal') ? ' has-error' : '' }}">
		{!! Form::label('pasal', 'Pasal') !!}
		{!! Form::number('pasal', null, ['class'=>'form-control', 'placeholder' => 'Enter ...', 'required' => '']) !!}
		{!! $errors->first('pasal', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('ayat') ? ' has-error' : '' }}">
		{!! Form::label('ayat', 'Ayat') !!}
		{!! Form::number('ayat', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		{!! $errors->first('ayat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('huruf') ? ' has-error' : '' }}">
		{!! Form::label('huruf', 'Huruf') !!}
		{!! Form::text('huruf', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		{!! $errors->first('huruf', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('masa_hukuman_min') ? ' has-error' : '' }}">
		{!! Form::label('masa_hukuman_min', 'Masa Hukuman Minimal') !!}
		<div class="input-group">
			{!! Form::number('masa_hukuman_min', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
			<span class="input-group-addon">Tahun</span>
		</div>
		{!! $errors->first('masa_hukuman_min', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('masa_hukuman_max') ? ' has-error' : '' }}">
		{!! Form::label('masa_hukuman_max', 'Masa Hukuman Maksimal') !!}
		<div class="input-group">
			{!! Form::number('masa_hukuman_max', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
			<span class="input-group-addon">Tahun</span>
		</div>
		{!! $errors->first('masa_hukuman_max', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('denda_min') ? ' has-error' : '' }}">
		{!! Form::label('denda_min', 'Denda Minimal') !!}
		<div class="input-group">
			<span class="input-group-addon">Rp</span>
			{!! Form::number('denda_min', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		{!! $errors->first('denda_min', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
	<div class="form-group{{ $errors->has('denda_max') ? ' has-error' : '' }}">
		{!! Form::label('denda_max', 'Denda Maksimal') !!}
		<div class="input-group">
			<span class="input-group-addon">Rp</span>
			{!! Form::number('denda_max', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		</div>
		{!! $errors->first('denda_max', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
		{!! Form::label('keterangan', 'Keterangan') !!}
		{!! Form::textarea('keterangan', null, ['class'=>'form-control', 'placeholder' => 'Enter ...', 'size' => '5x4']) !!}
		{!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group">
		{!! Form::submit('SIMPAN', ['class' => 'btn btn-primary']) !!}
		<a href="{{ route('pasal.index') }}" class="btn btn-danger">BATAL</a>
	</div>
</div>