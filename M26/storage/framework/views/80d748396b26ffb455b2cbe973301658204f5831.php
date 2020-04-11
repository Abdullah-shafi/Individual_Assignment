<!DOCTYPE html>
<html>
<head>

	<title>Home page</title>
</head>
<body>	

	<center><h1>Delete Bus</h1></center>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> | 
	<a href="/logout">Logout</a> <br><br>

<?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form method="post" >
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Name: <?php echo e($bus->name); ?></td>
				
			</tr>

			<tr>
				<td>Location: <?php echo e($bus->location); ?></td>
				
			</tr>
			<tr>
				<td>Operator: <?php echo e($bus->operator); ?></td>
				
			</tr>
			<tr>
				<td>Seat_Row: <?php echo e($bus->seat_row); ?></td>
				
			</tr>
			<tr>
				<td>Seat_Column: <?php echo e($bus->seat_column); ?></td>
				
			</tr>
			<tr>
				<td>Company: <?php echo e($bus->company); ?></td>
				
			</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Confirm Delete"></td>
			</tr>
		</table>
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH H:\Aweb\A\laratest\resources\views/home/deletebus.blade.php ENDPATH**/ ?>