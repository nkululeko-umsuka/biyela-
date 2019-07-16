<?php $__env->startSection('content'); ?>
<a href="/posts" class="btn btn-default">Go Back</a>
<h1><?php echo e($post->title); ?></h1>

<small>Written on <?php echo e($post->created_at); ?></small>
<div>
    <?php echo e($post->body); ?>

</div>




<form method="POST" action="<?php echo e(route('post.comment')); ?>">
        <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="body">Comment</label>
        <div>
            <textarea name="body" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
    
</form>


<small>Written on <?php echo e($post->created_at); ?></small>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/posts/show.blade.php ENDPATH**/ ?>