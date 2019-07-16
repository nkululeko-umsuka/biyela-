<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route("comments.create")); ?>">create</a>
<h1>Comments</h1>


<?php if(count($comments)> 0 ): ?>

<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="well">
    <h3><a href="/comments/<?php echo e($comment->id); ?>"><?php echo e($comment->comment); ?></a></h3>
     <small>Written on <?php echo e($comment->created_at); ?></small>

     

     <tr>
        <td><a href="<?php echo e(route('comments.edit',$comment->id)); ?>" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="<?php echo e(route('comments.destroy', $comment->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<p>No Comment found</p>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/comments/index.blade.php ENDPATH**/ ?>