<!DOCTYPE html>
<html>
<head>

	<title>Home page</title>
</head>
<body>	

	<center><h1>Add Bus</h1></center>
	<a href="{{route('home.index')}}">Back</a> | 
	<a href="/logout">Logout</a> <br><br>


	<form method="post" >
		{{csrf_field()}}
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>

			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="{{old('location')}}"></td>
			</tr>
			<tr>
				<td>Operator</td>
				<td><input type="text" name="operator" value="{{old('operator')}}"></td>
			</tr>
			<tr>
				<td>Seat_Row</td>
				<td><input type="number" name="seat_row" value="{{old('seat_row')}}"></td>
			</tr>
			<tr>
				<td>Seat_Column</td>
				<td><input type="number" name="seat_column" value="{{old('seat_column')}}"></td>
			</tr>
			<tr>
				<td>Company</td>
				<td><input type="text" name="company" value="{{old('company')}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>