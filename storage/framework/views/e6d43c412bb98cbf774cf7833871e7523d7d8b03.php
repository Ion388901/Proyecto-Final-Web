<?php $__env->startSection('content'); ?>
<form class="form-signin" method="POST" action="<?php echo e(route('panel.user.login')); ?>">
    <?php echo csrf_field(); ?>
    <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="user[email]" id="inputEmail" class="form-control" placeholder="Email address" required>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="user[password]" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.unregistered', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>