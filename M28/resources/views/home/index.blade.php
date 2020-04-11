<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<title>Home page</title>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
   
    $( "#tags" ).autocomplete({
      source: 'http://localhost:8000/system/search'
    });
  } );
  </script>


</head>
<body>	

	<h1>Welcome Home!</h1>
	<a href="{{route('home.addbus')}}">Add</a> | 
	<a href="{{route('schedule.index')}}">Schedule</a> | 
	<a href="/logout">Logout</a> <br><br>


<div class="ui-widget">
	<form method="post">
		{{csrf_field()}}

  <input type="text"id="tags" name="name"><button>Search</button>
  </form>
</div>

<br>

	<table border="1">
		<tr>
			<th>Name</th>
			<th>Operator</th>
			<th>Manager</th>
			<th>Location</th>
			<th>Seat_row</th>
			<th>Seat_column</th>
			<th>ACTION</th>
		</tr>
		
		@foreach($buses as $bus)
		<tr>
			<td>{{$bus->name}}</td>
			<td>{{$bus->operator}}</td>
			<td>{{$bus->u_name}}</td>
			<td>{{$bus->location}}</td>
			<td>{{$bus->seat_row}}</td>
			<td>{{$bus->seat_column}}</td>
			<td>
				<a href="{{route('home.editbus',$bus->id)}}">Edit</a> | 
				<a href="{{route('home.deletebus',$bus->id)}}">Delete</a> 
				
			</td>
		</tr>
		@endforeach
	</table>



</body>
</html>