<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		{!! Form::label('name', 'Kategori Subyek') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Enter ...']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="form-group">
		{!! Form::submit('SIMPAN', ['class' => 'btn btn-primary']) !!}
		<a href="{{ route('kategori_subyek.index') }}" class="btn btn-danger">BATAL</a>
	</div>
</div>