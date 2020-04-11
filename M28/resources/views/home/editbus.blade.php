<!DOCTYPE html>
<html>
<head>

	<title>Home page</title>
</head>
<body>	

	<center><h1>Edit Bus</h1></center>
	<a href="{{route('home.index')}}">Back</a> | 
	<a href="/logout">Logout</a> <br><br>

@foreach($buses as $bus)
	<form method="post" >
		{{csrf_field()}}
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$bus->name}}"></td>
			</tr>

			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="{{$bus->location}}"></td>
			</tr>
			<tr>
				<td>Operator</td>
				<td><input type="text" name="operator" value="{{$bus->operator}}"></td>
			</tr>
			<tr>
				<td>Seat_Row</td>
				<td><input type="number" name="seat_row" value="{{$bus->seat_row}}"></td>
			</tr>
			<tr>
				<td>Seat_Column</td>
				<td><input type="number" name="seat_column" value="{{$bus->seat_column}}"></td>
			</tr>
			<tr>
				<td>Company</td>
				<td><input type="text" name="company" value="{{$bus->company}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Edit"></td>
			</tr>
		</table>
	</form>
	@endforeach
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>