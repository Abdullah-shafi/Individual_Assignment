<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post" >
		<?php echo csrf_field(); ?>
<!-- 		<?php echo e(csrf_field()); ?> -->		
<!-- 		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
		Email: <input type="email" name="email" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="Submit" >
	</form>

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH H:\Aweb\Assignment\A\laratest\resources\views/login/index.blade.php ENDPATH**/ ?>