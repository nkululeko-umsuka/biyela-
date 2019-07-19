<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
        <div class="pull-left">

            <h1>Posts</h1>

           
        </div>
        <div class="pull-right">
                
                <a href="<?php echo e(route('posts.create')); ?>"  class="btn btn-success">Create New Posts</a>
        </div>
    </div>
</div>
<?php if($message=Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($post->id); ?></td>
            
            <td><?php echo e($post->title); ?></td>
            <td><?php echo e($post->body); ?></td>
            <td>
            <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="post" role="form">
               
            <a href="<?php echo e(route('posts.show',$post->id)); ?>"  class="btn btn-info">Show</a>
            <a href="<?php echo e(route('posts.edit',$post->id)); ?>"  class="btn btn-primary">edit</a>
             

            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="btn btn-danger" type="submit">Delete</button>
        
            

          
            
           
            </form>
           
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
            
    </table>
</div>

<?php $__env->stopSection(); ?>






    

     
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/posts/index.blade.php ENDPATH**/ ?>