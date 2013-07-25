@layout('default')

@section('content')
<h1>{{ $thisuser->team }} </h1>

<table border=1>
<th>Members</th>
<th>Cumulative Steps</th>
@foreach($team as $teammate)
	<tr>
		<td>{{ $teammate->name }}</td>
		<td>{{ $teammate->cumulative }}</td>
	</tr>
@endforeach
</table>

@endsection
