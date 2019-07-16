<h1>Lastest posts about Nkululeko Biyela</h1>
<hr>


  <a href="<?php echo e(url('/home')); ?>">Home</a>
<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($blog->data); ?></h1>

<p><?php echo e($blog->body); ?><p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\biyela\resources\views/blog/index.blade.php ENDPATH**/ ?>