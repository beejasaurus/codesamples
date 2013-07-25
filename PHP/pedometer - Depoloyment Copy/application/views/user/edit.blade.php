@layout('default')

@section('extraheader')
@endsection

@section('content')

<h1>Edit your profile</h1>

	{{ Form::open('edit', '', array('class','')) }}
		
	{{ Form::token() }}
	<table>
		<tr>
			<td>{{ Form::label('name','Name:') }}</td>
			<td>{{ Form::text('name', $thisuser->name) }}</td>
		</tr>
		<tr>
			<td>{{ Form::label('team','Team Name:') }}</td>
			<td>{{ Form::text('team', $thisuser->team) }}</td>
		</tr>
		<tr>
			<td>{{ Form::hidden('id', $thisuser->id) }}&nbsp;</td>
			<td>{{ Form::submit('Update Profile') }}</td>
		</tr>		
	</table>
		
	{{ Form::close() }}

@endsection

