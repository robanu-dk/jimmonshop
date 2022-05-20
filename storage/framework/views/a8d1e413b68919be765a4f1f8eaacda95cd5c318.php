<?php $__env->startSection('content'); ?>

    <?php if(session()->has('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

      </div>
    <?php endif; ?>

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/events/create" class="btn btn-primary mb-3">Create new event</a>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col" style="width: 25%">Name of Event</th>
                <th scope="col" style="width: 25%">Speaker</th>
                <th scope="col" style="width: 10%">Date</th>
                <th scope="col" style="width: 10%">Time</th>
                <th scope="col" style="width: 15%">Location</th>
                <th scope="col" style="text-align: center; width: *">Action</th>
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
                        <td>
                            <a href="/dashboard/events/<?php echo e($ev->slug); ?>" class="badge bg-info"><img src=<?php echo e(asset('feather/eye.svg')); ?> alt=""></a>
                            <a href="/dashboard/events/<?php echo e($ev->slug); ?>/edit" class="badge bg-warning"><img src=<?php echo e(asset('feather/edit.svg')); ?> alt=""></a>
                            <form action="/dashboard/events/<?php echo e($ev->slug); ?>" method="POST" class="d-inline">
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

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/events/index.blade.php ENDPATH**/ ?>