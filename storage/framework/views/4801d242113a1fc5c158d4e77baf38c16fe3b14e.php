<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit post
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>


  
<form  action="<?php echo e(route('posts.update',$post->id)); ?>" method="post" role="form">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_method" value="PUT">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group<?php echo e($errors->has('title')?'has-error':''); ?>">
    <strong>Title</strong>
    <input type="text" name="title" value="<?php echo e($post->title); ?>" class="form-control" placeholder="title">
    <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
    </div>        
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group<?php echo e($errors->has('body')?'has-error':''); ?>">
            <strong>Body</strong>
            <input type="text" name="body" value="<?php echo e($post->body); ?>" class="form-control" placeholder="body">
            <span class="text-danger"><?php echo e($errors->first('body')); ?></span>
</div>
<button type="submit" class="btn btn-primary">update</button>
</form>
   
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\biyela\resources\views/posts/edit.blade.php ENDPATH**/ ?>