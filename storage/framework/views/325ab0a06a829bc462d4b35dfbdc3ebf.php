
    <!doctype html>
    <html lang="en">
      <head>
        <title>Registrations Page</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        
    

<body>
  
   
    
  
    <form action="<?php echo e(Route('register')); ?>" method="post">
    
      <?php echo csrf_field(); ?>
      <?php if(Session::has('success')): ?>
          <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
      
      <?php endif; ?>
      <?php if(Session::has('fail')): ?>
          <div class="alert alert-success"><?php echo e(Session::get('fail')); ?></div>
      
      <?php endif; ?>
      
      <label>Name</label>  <input type="text" value="<?php echo e(old('name')); ?>" name="name"> <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </span><br><br>
     
    
      
    <label>Email</label><input type="email" value="<?php echo e(old('email')); ?>" name="email"><span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </span> <br><br> 
    
      <label>password</label><input type="password" name="password"><span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </span><br><br> 
    

      <input type="submit" value="register" name="register">
      <h4>Already have an acccount? <a href="<?php echo e(Route('login')); ?>">Login</a></h4>

    </form>
    <a href="<?php echo e(route('display')); ?>"><button class="btn btn-danger">Show</button></a>
   
   
</body>
</html><?php /**PATH C:\myxamp\htdocs\project14\resources\views/registration.blade.php ENDPATH**/ ?>