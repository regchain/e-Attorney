<div class="form-group{{ $errors->has('undang_undang') ? ' has-error' : '' }}">
	{!! Form::label('undang_undang', 'Undang Undang', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('undang_undang', null, ['class'=>'form-control']) !!}
		{!! $errors->first('undang_undang', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('pasal') ? ' has-error' : '' }}">
	{!! Form::label('pasal', 'Pasal', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pasal', null, ['class'=>'form-control']) !!}
		{!! $errors->first('pasal', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('ayat') ? ' has-error' : '' }}">
	{!! Form::label('ayat', 'Ayat', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('ayat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('ayat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
	{!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::textarea('keterangan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('masa_hukuman') ? ' has-error' : '' }}">
	{!! Form::label('masa_hukuman', 'Masa Hukuman', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('masa_hukuman', null, ['class'=>'form-control']) !!}
		{!! $errors->first('masa_hukuman', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>