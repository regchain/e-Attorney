<div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
	{!! Form::label('name', 'NIP', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nip', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('nama_jaksa') ? ' has-error' : '' }}">
	{!! Form::label('nama_jaksa', 'Nama Jaksa', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama_jaksa', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_jaksa', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('pangkat') ? ' has-error' : '' }}">
	{!! Form::label('pangkat', 'Pangkat', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pangkat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('pangkat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>