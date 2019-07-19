<?php $__env->startSection('content'); ?>
<a href="/comments" class="btn btn-default">Go Back</a>
<h1><?php echo e($comment->comment); ?></h1>

<small>Written on <?php echo e($comment->created_at); ?></small>
<div>
    <?php echo e($comment->comment); ?>

</div>




<form method="POST" action="<?php echo e(route('comments.store')); ?>">
    
    <div class="form-group">
        <label for="comment">Comment</label>
        <div>
            <textarea name="comment" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
</form>


<small>Written on <?php echo e($comment->created_at); ?></small>
<div>
    <?php echo e($comment->comment); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/comments/show.blade.php ENDPATH**/ ?>