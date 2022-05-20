<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px;" align="center">
        <div class="card" style="width: 70%;">
            <div class="text-center">
                <img src=<?php echo e(asset($content['image'])); ?> class="card-img-top" alt="Gambar <?php echo e($content['title']); ?>" style="width: 30rem">
            </div>
            <div class="card-body text-left">
                <h5 class="card-text"><strong><?php echo e($content['title']); ?></strong></h5>
                <p class="card-text"><?php echo e($content['description']); ?></p>
            </div>
            <div class=" text-left" style="padding: 10px;">
                <a href="/about+us" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/detailInformation.blade.php ENDPATH**/ ?>