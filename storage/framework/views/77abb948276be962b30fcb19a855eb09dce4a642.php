<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px;">
        <div align='center'>
            <div class="mb-5">
                <h1 class="title"><?php echo e($title); ?> BUMJ JIMM FST Universitas Airlangga</h1>
            </div>
        </div>

        <div class="card text-center" style="width: 100%;">
            <div class="fs-2 text-left title-text"><b>Kategori</b></div>
            <div class="card-body" style="padding-left: 30px;">
              <p class="card-text">
                <?php if($categories->count()): ?>
                    <div class="card-group" style="padding-right: 15px">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <a href="\products\category\<?php echo e($category->slug); ?>" style="text-decoration: none; color: #000">
                                <img src=<?php echo e($category->image); ?> class="card-img-top" alt=gambar+ <?php echo e($category->slug); ?>>
                                <div class="card-body">
                                    <h5 class="card-title-center"><?php echo e($category->nama_kategori); ?></h5>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                <h1 style="text-align: left">There is no Category</h1>
                <?php endif; ?>
              </p>
            </div>
        </div>

        <div class="card">
            <div class="fs-2 text-left title-text"><b>Product</b></div>
            <div class="card-body">
                <?php if($products->count()): ?>
                    <div class="row row-cols-1 row-cols-md-5 g-4" style="padding-bottom: 20px">
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
                <h1>There is no product</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/products.blade.php ENDPATH**/ ?>