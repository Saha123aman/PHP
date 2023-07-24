<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
    <style>
      form{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        padding:3rem;

      }
      form input{
        width:20rem;
        height:2rem;
      }
      </style>
</head>
<body>
    <form action="<?php echo e(Route('userlogin')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <?php if(Session::has('success')): ?>
          <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
      
      <?php endif; ?>
      <?php if(Session::has('fail')): ?>
          <div class="alert alert-success"><?php echo e(Session::get('fail')); ?></div>
      
      <?php endif; ?>
      <label>Email</label><input type="email" name="email" value="<?php echo e(old('email')); ?>"><span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br><br> 
      <label>password</label><input type="password" name="password" ><span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br><br>

      <input type="submit" value="login" name="login">
      <h4> No acccount? <a href="<?php echo e(url('/')); ?>">Register</a></h4>
     

    </form>
</body>
</html><?php /**PATH C:\myxamp\htdocs\project14\resources\views/login.blade.php ENDPATH**/ ?>