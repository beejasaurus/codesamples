@layout('default')

@section('extraheader')

<!-- Display bar graph -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
   
   <!-- Use For loop to feed data into JavaScript -->
	 var data = google.visualization.arrayToDataTable([
      ['Date', 'Steps'],@foreach($data as $item)["{{ $item["updated_at"]}} ", {{ $item["steps"] }}],@endforeach
    ]);


    var options = {
      title: 'Personal Metrics',
      hAxis: {title: 'Date', titleTextStyle: {color: 'red'}}
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
@endsection

@section('content')

<div class="row">
	<h1>{{ $title }} <small>({{ HTML::link('edit', 'edit') }})</small></h1>
	<!-- Add up everyone on your team's steps to get team amount -->
	@foreach($team as $teammate)
			<?php $count += $teammate->cumulative; ?>
	@endforeach
	
	<div class="span6 well">
		<table class="table table-bordered table-striped">
			<tr>
				<td>Your current step count is:</td>
				<td>{{ $cumulative }}</td>
			</tr>
			<tr>
				<td>Your team's current step count is:</td>
				<td>{{ $count }}</td>
			</tr>
		</table>
		
		 <br />
		 <!-- Form for adding steps -->
		<h3>Add Steps</h3>
		{{ Form::open('addsteps', '', array('class'=>'form-search')) }}
		{{ Form::text('steps', '', array('class' => 'input-medium search-query', 'placeholder' => 'Number of Steps'))}}
		{{ Form::submit('Add')}}
		{{ Form::close() }}
	</div>
</div>

<!-- Table for each day's steps -->
<div>
<p><h2>Daily Metrics</h2></p>

<div id="chart_div" style="width: 900px; height: 400px;"></div>
	<table border=1>
		<th>Date of Entry:</th>
		<th>Number of Steps:</th>
		
	@foreach($usermetrics as $metric)
		<tr>
		<td>{{ $metric->updated_at }}</td>
		<td>{{ $metric->steps }}</td>
		<td><!-- Form to pass along the primary key ID to delete metric -->
			{{ Form::open('delete', '', array('style'=>'display: inline;')) }}
			{{ Form::hidden('id', $metric->id) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</td>
		
	</tr>
	@endforeach
	</table>
</div>
<br />
<p>{{ HTML::link('team', 'View Team') }}</p>

<br />
<br />

@endsection
