<?php $__env->startSection('content'); ?>
    <div class="table-responsive col-lg-11 caption-top" style="padding-bottom: 20px">
        <caption>List of events</caption>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Event</th>
                <th scope="col" style="width: 25%">Speaker</th>
                <th scope="col" style="width: 10%">Date</th>
                <th scope="col" style="width: 10%">Time</th>
                <th scope="col" style="width: 15%">Location</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($ev->nama_event); ?></td>
                        <td><?php echo e($ev->pemateri); ?></td>
                        <td><?php echo e($ev->tanggal); ?></td>
                        <td><?php echo e($ev->waktu); ?></td>
                        <td><?php echo e($ev->location); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="table-responsive col-lg-11 caption-top" style="padding-bottom: 20px">
        <caption>List of categories</caption>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 15%">Name of Category</th>
                <th scope="col" style="width: 20%">Admin</th>
                <th scope="col" style="width: 50%">Note</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($ca->nama_kategori); ?></td>
                        <td><?php echo e($ca->admin->name); ?></td>
                        <td><?php echo $ca->keterangan; ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>

    <div class="table-responsive col-lg-11 caption-top" style="padding-bottom: 40px">
        <caption>List of products</caption>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/index.blade.php ENDPATH**/ ?>