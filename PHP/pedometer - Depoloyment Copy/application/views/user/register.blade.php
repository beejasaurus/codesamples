@layout('default')
@section('content')

<div class="row">
	<div class='span4 offset4'>
		<div class='well'>
			<legend>Please Register</legend>
			{{ Form::open('register') }}
			{{ Form::text('email', '', array('class' => 'span3', 'placeholder' =>'Email')) }}
			{{ Form::text('name', '', array('class' => 'span3', 'placeholder' =>'Name')) }}
			{{ Form::hidden('team', 'Island of Misfit Toys', array('class' => 'span3')) }}
			{{ Form::password('password', array('class' => 'span3', 'placeholder' => 'Password')) }}
			{{ Form::submit('register', array('class'=>'btn btn-warning')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>

@endsection
