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
	<a href="/logout">Logout</a> <br>


<div class="ui-widget">
	<form method="post">
		<?php echo e(csrf_field()); ?>

  <label for="tags">Name: </label>
  <input type="text"id="tags" name="name"><button>Search</button>
  </form>
</div>
	

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>COMPANY</th>
			<th>REGISTERED</th>
			<th>ACTION</th>
		</tr>
		
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($user['id']); ?></td>
			<td><?php echo e($user['name']); ?></td>
			<td><?php echo e($user['email']); ?></td>
			<td><?php echo e($user['company']); ?></td>
			<td><?php echo e($user['registered']); ?></td>
			<td>
				<a href="">Edit</a> | 
				<a href="">Delete</a> 
				
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>



</body>
</html><?php /**PATH H:\Aweb\Assignment\A\laratest\resources\views/home/index.blade.php ENDPATH**/ ?>