<?php $__env->startSection('content'); ?>

<a href="<?php echo e(url('/posts/create')); ?>">create</a>
<h1>Posts</h1>



<?php if(count($posts)> 0 ): ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="well">
    <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
     <small>Written on <?php echo e($post->created_at); ?></small>

     <p>post count:<?php echo e($post->count()); ?></p>

     <tr>
        <td><a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<p>No post found</p>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/posts/index.blade.php ENDPATH**/ ?>