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
      source: 'http://localhost:8000/system/searchbus'
    });
  } );
  </script>


</head>
<body>	

	<h1>Welcome Home!</h1>
	 
	<a href="/logout">Logout</a> <br><br>

<div class="ui-widget">
	<form method="post">
		{{csrf_field()}}

  <input type="text"id="tags" name="name"><button>Search</button>
  </form>
</div>

  </form>
</div>

<br>

	<table border="1">
		<tr>
			<th>Name</th>
			<th>Operator</th>
			<th>Manager</th>
			<th>Location</th>
			<th>Route</th>
			<th>Fare</th>
			<th>Departure</th>
			<th>Arrival</th>
			<th>ACTION</th>
		</tr>
		
		@foreach($buses as $bus)
		<tr>
			<td>{{$bus->name}}</td>
			<td>{{$bus->operator}}</td>
			<td>{{$bus->u_name}}</td>
			<td>{{$bus->location}}</td>
			<td>{{$bus->route}}</td>
			<td>{{$bus->fare}}</td>
			<td>{{$bus->departure}}</td>
			<td>{{$bus->arrival}}</td>
			<td>
				<a href="#">Edit</a> | 
				<a href="#">Delete</a> 
				
			</td>
		</tr>
		@endforeach
	</table>



</body>
</html>