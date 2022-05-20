<?php $__env->startSection('content'); ?>
<div class="content" style=" padding-bottom: 40px" align='center'>
    <div class="card" style="width: 70%;  text-align: center">
        <div align="left" style="padding: 10px">
            <a href="/dashboard/categories" class="btn btn-success"><img src=<?php echo e(asset('feather/arrow-left.svg')); ?> alt="icon-back">Back to all categorys</a>
            <a href="/dashboard/categories/<?php echo e($category->slug); ?>/edit" class="btn btn-warning"><img src=<?php echo e(asset('feather/edit.svg')); ?> alt="icon-edit">Edit</a>
            <form action="/dashboard/categories/<?php echo e($category->slug); ?>" method="POST" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><img src=<?php echo e(asset('feather/x-circle.svg')); ?> alt="icon-delete">Delete</button>
            </form>
        </div>
        <div style="padding-top: 20px; font-size: 20px"><b><?php echo e($category->nama_kategori); ?></b></div>
        <div class="image" style="text-align: center; padding-top: 30px">
            <img style="max-width: 450px;" src=<?php echo e(asset($category->image)); ?> class="card-img-top" alt="poster-category">
        </div>
        <div class="card-body" style="text-align: left">
          <p class="card-text">
            <strong>Note:</strong> <br>
            <?php echo $category->keterangan; ?>

          </p>
          <strong>List of products</strong><br>
          <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Product</th>
                <th scope="col" style="width: 25%">Description</th>
                <th scope="col" style="width: 10%">Category</th>
                <th scope="col" style="width: 10%">Price</th>
                <th scope="col" style="width: 15%">Stock</th>
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
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/categories/show.blade.php ENDPATH**/ ?>