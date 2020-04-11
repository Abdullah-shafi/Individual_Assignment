<!DOCTYPE html>
<html>
<head>

	<title>Home page</title>
</head>
<body>	

	<center><h1>Add Bus</h1></center>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> | 
	<a href="/logout">Logout</a> <br><br>


	<form method="post" >
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
			</tr>

			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="<?php echo e(old('location')); ?>"></td>
			</tr>
			<tr>
				<td>Operator</td>
				<td><input type="text" name="operator" value="<?php echo e(old('operator')); ?>"></td>
			</tr>
			<tr>
				<td>Seat_Row</td>
				<td><input type="number" name="seat_row" value="<?php echo e(old('seat_row')); ?>"></td>
			</tr>
			<tr>
				<td>Seat_Column</td>
				<td><input type="number" name="seat_column" value="<?php echo e(old('seat_column')); ?>"></td>
			</tr>
			<tr>
				<td>Company</td>
				<td><input type="text" name="company" value="<?php echo e(old('company')); ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH H:\Aweb\A\laratest\resources\views/home/addbus.blade.php ENDPATH**/ ?>