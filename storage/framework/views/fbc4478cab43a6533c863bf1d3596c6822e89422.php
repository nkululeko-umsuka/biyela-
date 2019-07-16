<?php $__env->startSection('content'); ?>
<h1>Create Post</h1>

<a href="<?php echo e(url('/posts')); ?>">index</a>


<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><br />
<?php endif; ?>


<form method="POST" action="<?php echo e(route('posts.store')); ?>">
    <div class="form-group">
        <?php echo csrf_field(); ?>
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title"/>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <div>
            <textarea name="body" cols="60" rows="10"></textarea>
        </div>
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/posts/create.blade.php ENDPATH**/ ?>