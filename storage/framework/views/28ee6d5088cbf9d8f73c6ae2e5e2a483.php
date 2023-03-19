

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo e($video->name); ?></h1>
            <video width="100%" controls>
                <source src="<?php echo e(Storage::url($video->path)); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <br><br>
            <a href="<?php echo e(route('videos.index')); ?>" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pavilion\video-streaming\resources\views/videos/show.blade.php ENDPATH**/ ?>