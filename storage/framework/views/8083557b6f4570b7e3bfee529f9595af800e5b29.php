<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row" style="padding-top: 100px; width: 900px;">
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3><?php echo e($content['title']); ?></h3>
                        </div>
                        <div class="image" style="text-align: center">
                            <img src=<?php echo e(asset($content['image'])); ?> alt="Gambar <?php echo e($content['title']); ?>" style="width: 200px; height: 200px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo e($content['name']); ?></strong></h5>
                            <p class="card-text"><?php echo e($content['excerpt']); ?></p>
                        </div>
                        <div class=" text-right" style="padding: 10px;">
                            <a href="/about+us/<?php echo e($content['slug']); ?>" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/aboutUs.blade.php ENDPATH**/ ?>