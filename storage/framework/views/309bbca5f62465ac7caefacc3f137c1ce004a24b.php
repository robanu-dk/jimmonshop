<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px; padding-bottom: 6.6%">
        <div style="padding-bottom: 40px" align="center">
            <div class="title">
                Category <?php echo e($category->nama_kategori); ?>

            </div>
        </div>
        <div class="card">
            <div class="fs-2 text-left" style="padding: 20px; color: green; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><b>Product</b></div>
            <div class="card-body">
                <?php if($products->count()): ?>
                    <div class="row row-cols-1 row-cols-md-5 g-4" style="padding-bottom: 30px">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="\products\<?php echo e($product->slug); ?>" style="text-decoration: none; color: black;">
                            <div class="col" style="height: 100%">
                                <div class="card h-100" style="width: 100%;">
                                <img src=<?php echo e(asset($product->image)); ?> class="card-img-top" alt="gambar+produk+ <?php echo e(asset($product->slug)); ?>">
                                <div class="card-body">
                                    <h5 class="card-title" style="min-height: 60%"><?php echo e($product->nama_produk); ?></h5>
                                    <p class="card-text">
                                        <table style="width: 100%">
                                            <tr>
                                                <td>
                                                    <p class="text-danger" style="min-width: 50%">Rp <?php echo e($product->harga); ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-muted text-end">Tersisa <?php echo e($product->jumlah); ?></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </p>
                                </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                <h1 style="padding-bottom: 30px">There is no product</h1>
                <?php endif; ?>
                <a href="/products" class="btn btn-warning">Back to Products</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/category.blade.php ENDPATH**/ ?>