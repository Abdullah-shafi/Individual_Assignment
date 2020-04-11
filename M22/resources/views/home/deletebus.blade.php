<!DOCTYPE html>
<html>
<head>

	<title>Home page</title>
</head>
<body>	

	<center><h1>Delete Bus</h1></center>
	<a href="{{route('home.index')}}">Back</a> | 
	<a href="/logout">Logout</a> <br><br>

@foreach($buses as $bus)
	<form method="post" >
		{{csrf_field()}}
		<table>
			<tr>
				<td>Name: {{$bus->name}}</td>
				
			</tr>

			<tr>
				<td>Location: {{$bus->location}}</td>
				
			</tr>
			<tr>
				<td>Operator: {{$bus->operator}}</td>
				
			</tr>
			<tr>
				<td>Seat_Row: {{$bus->seat_row}}</td>
				
			</tr>
			<tr>
				<td>Seat_Column: {{$bus->seat_column}}</td>
				
			</tr>
			<tr>
				<td>Company: {{$bus->company}}</td>
				
			</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Confirm Delete"></td>
			</tr>
		</table>
	</form>
	@endforeach
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>