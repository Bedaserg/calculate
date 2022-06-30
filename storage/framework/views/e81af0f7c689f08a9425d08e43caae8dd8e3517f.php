<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-5 m-5 d-flex flex-column">
  <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mt-5 d-flex flex-row">
      <span class="h-6 p-2">Пароль:</span>
      <input name="password" class="form-control">
      <button class="btn btn-success ms-2" type="submit">Войти</button>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adm/testing/resources/views/login.blade.php ENDPATH**/ ?>