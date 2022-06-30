<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('content'); ?>
<div class="mt-3 d-flex flex-column">
  <?php echo $__env->make('includes.calculator.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('includes.calculator.indexs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adm/testing/resources/views/calculator.blade.php ENDPATH**/ ?>