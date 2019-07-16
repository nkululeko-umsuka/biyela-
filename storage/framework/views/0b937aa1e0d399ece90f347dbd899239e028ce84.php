<?php $__env->startSection('content'); ?>
<h1>Create Comment</h1>

<a href="<?php echo e(url('/comments')); ?>">index</a>


<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><br />
<?php endif; ?>

  

<form method="POST" action="<?php echo e(route('comments.store')); ?>">
    <div class="form-group">
            <?php echo csrf_field(); ?>
            
        <label for="comment">Comment</label>
        <div>
            <textarea name="comment" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/comments/create.blade.php ENDPATH**/ ?>