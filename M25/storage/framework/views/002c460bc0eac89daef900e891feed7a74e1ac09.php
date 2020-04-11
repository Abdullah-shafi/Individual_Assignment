<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<title>Home page</title>



</head>
<body>	

	<h1>Welcome Home!</h1>
	 
	<a href="/logout">Logout</a> <br><br>



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
		
		<?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($bus->name); ?></td>
			<td><?php echo e($bus->operator); ?></td>
			<td><?php echo e($bus->u_name); ?></td>
			<td><?php echo e($bus->location); ?></td>
			<td><?php echo e($bus->route); ?></td>
			<td><?php echo e($bus->fare); ?></td>
			<td><?php echo e($bus->departure); ?></td>
			<td><?php echo e($bus->arrival); ?></td>
			<td>
				<a href="#">Edit</a> | 
				<a href="#">Delete</a> 
				
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>



</body>
</html><?php /**PATH H:\Aweb\A\laratest\resources\views/schedule/index.blade.php ENDPATH**/ ?>