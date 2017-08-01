{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
	<a class="btn btn-info btn-xs" href="{{ $edit_url }}">
		<i class="glyphicon glyphicon-edit"></i> Edit
	</a> | 	
	{!! Form::button('<i class="glyphicon glyphicon-trash"></i> Hapus', array('type' => 'submit', 'class' => 'btn btn-xs btn-danger')) !!}
{!! Form::close() !!}