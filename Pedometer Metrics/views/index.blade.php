@layout('default')

@section('content')


<div class="container">
	<div class="hero-unit">
				<img src="img/evolution-man-computer.gif" />
	</div>
	<div class="row">
		<div class="span3 well">
			@if(Auth::user())
				<legend>You are logged in!</legend>
			@else
				<legend>Login / Quick Add</legend>
				{{ Form::open('loginadd') }}
				{{ Form::text('email','', array('class'=>'span3','placeholder'=>'Email')) }}
				{{ Form::password('password', array('class'=>'span3','placeholder'=>'Password')) }}
				{{ Form::text('steps','',array('class'=>'span3','placeholder'=>'Steps (Optional)' ))}}
				{{ Form::submit('Sign In And Add Steps', array('class' => 'span3 btn btn-success')) }}
				{{ Form::close() }}
			@endif
		</div>
		<div class="span3 well">
			<legend>Current Team Score</legend>
			@foreach($cumulative as $teammate)
				<?php $count = $count + $teammate->cumulative ?>
			@endforeach
			<table class="table table-striped table-bordered">
				<th>Team Name</th>
				<th>Steps</th>
				<tr>
					<td>Island of Misfit Toys: </td>
					<td>{{ $count }}</td>
				</tr>
			</table>
		</div>
		<div class="span3 well">
			<legend>Recent Entries</legend>
			<table class="table table-bordered table-striped">
				@foreach($topscores as $topscore)
				<tr>
					<td>{{ $topscore->email }}</td>
					<td>{{ $topscore->steps }}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
