<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
		{!! Form::label('nip', 'NIP') !!}
        {!! Form::text('nip', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		{!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group{{ $errors->has('nama_jaksa') ? ' has-error' : '' }}">
		{!! Form::label('nama_jaksa', 'Nama Jaksa') !!}
        {!! Form::text('nama_jaksa', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		{!! $errors->first('nama_jaksa', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group{{ $errors->has('pangkat') ? ' has-error' : '' }}">
		{!! Form::label('pangkat', 'Pangkat') !!}
        {!! Form::text('pangkat', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		{!! $errors->first('pangkat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
		{!! Form::label('telepon', 'No Telepon / HP') !!}
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-mobile"></i>
			</div>
			{!! Form::text('telepon', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
			{!! $errors->first('telepon', '<p class="help-block">:message</p>') !!}
		</div>        
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group">
		{!! Form::submit('SIMPAN', ['class' => 'btn btn-primary']) !!}
		<a href="{{ route('jaksa.index') }}" class="btn btn-danger">BATAL</a>
	</div>
</div>