<?php $__env->startSection('content'); ?>

    <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create new Product</a>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Product</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 10%">Category</th>
                <th scope="col" style="width: 10%">Price</th>
                <th scope="col" style="width: 15%">Stock</th>
                <th scope="col" style="text-align: center; width: *">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($pr->nama_produk); ?></td>
                        <td><?php echo $pr->deskripsi; ?></td>
                        <td><?php echo e($pr->kategori->nama_kategori); ?></td>
                        <td><?php echo e($pr->harga); ?></td>
                        <td><?php echo e($pr->jumlah); ?></td>
                        <td>
                            <a href="/dashboard/products/<?php echo e($pr->slug); ?>" class="badge bg-info"><img src=<?php echo e(asset('feather/eye.svg')); ?> alt=""></a>
                            <a href="/dashboard/products/<?php echo e($pr->slug); ?>/edit" class="badge bg-warning"><img src=<?php echo e(asset('feather/edit.svg')); ?> alt=""></a>
                            <form action="/dashboard/products/<?php echo e($pr->slug); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><img src=<?php echo e(asset('feather/x-circle.svg')); ?> alt=""></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/products/index.blade.php ENDPATH**/ ?>