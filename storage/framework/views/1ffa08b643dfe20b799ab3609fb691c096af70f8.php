<?php $__env->startSection('content'); ?>
<a href="/posts" class="btn btn-default">Go Back</a>
<h1><?php echo e($post->title); ?></h1>

<small>Written on <?php echo e($post->created_at); ?></small>
<div>
    <?php echo e($post->body); ?>

</div>

<form method="POST" action="<?php echo e(route('post.comment', $post->id)); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <?php echo csrf_field(); ?>
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"/>
        </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <div>
            <textarea name="comment" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>

 </form> 

<small>Written on <?php echo e($post->created_at); ?></small>



<h3>List Of Comment on a Post:</h3>
 



    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($post->id == $c->post_id): ?>
        
      <p>post id :<?php echo e($c->post_id); ?></p>
            <p>comment:  <?php echo e($c->comment); ?></p><br>
            
        <?php endif; ?>
        
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/posts/show.blade.php ENDPATH**/ ?>