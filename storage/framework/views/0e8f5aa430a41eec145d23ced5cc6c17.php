<?php $__env->startSection("content"); ?>
<div class="container custom-login">
    <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form action="register" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jay/Documents/ecomm-php/resources/views/register.blade.php ENDPATH**/ ?>