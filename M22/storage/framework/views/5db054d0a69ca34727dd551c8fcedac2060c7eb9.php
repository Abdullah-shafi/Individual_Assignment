<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<title>Add page</title>

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

	<center><h1>Add Schedule</h1></center>
	<a href="/system/busesschedule">Back</a> | 
	<a href="/logout">Logout</a> <br><br>


	<form method="post" >
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Name</td>
				<td>
                    <div class="ui-widget">
                       <input type="text"id="tags" name="b_name">
                   </div>
                </td>
			</tr>

			<tr>
				<td>Route</td>
				<td>
                   <div class="ui-widget">
					<input type="text" name="route" value=""></div>
				</td>
				
			</tr>
			<tr>
				<td>Fare</td>
				<td>
					<div class="ui-widget">
						<input type="text" name="fare" value=""></div></td>
			</tr>
			<tr>
				<td>Deparature</td>
				<td>
					<div class="ui-widget">
						<input type="text" name="deparature" value=""></div>
					</td>
			</tr>
			<tr>
				<td>Arrival</td>
				<td><div class="ui-widget">
					<input type="text" name="arrival" value="">
				</div>
			</td>
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
</html><?php /**PATH H:\Aweb\A\laratest\resources\views/schedule/add.blade.php ENDPATH**/ ?>