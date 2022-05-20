<?php $__env->startSection('content'); ?>
    <div class="content" style=" padding-bottom: 40px" align='center'>
        <div class="card" style="width: 70%;  text-align: center">
            <div align="left" style="padding: 10px">
                <a href="/dashboard/events" class="btn btn-success"><img src=<?php echo e(asset('feather/arrow-left.svg')); ?> alt="icon-back">Back to all events</a>
                <a href="/dashboard/events/<?php echo e($event->slug); ?>/edit" class="btn btn-warning"><img src=<?php echo e(asset('feather/edit.svg')); ?> alt="icon-edit">Edit</a>
                <form action="/dashboard/events/<?php echo e($event->slug); ?>" method="POST" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><img src=<?php echo e(asset('feather/x-circle.svg')); ?> alt="icon-delete">Delete</button>
                </form>
            </div>
            <div style="padding-top: 20px; font-size: 20px"><b><?php echo e($event->nama_event); ?></b></div>
            <div class="image" style="text-align: center; padding-top: 30px">
                <img style="max-width: 450px;" src=<?php echo e(asset($event->image)); ?> class="card-img-top" alt="poster-kajian">
            </div>
            <div class="card-body" style="text-align: left">
              <p class="card-text">
                <h4 style="padding-top: 20px">Pemateri: <?php echo e($event->pemateri); ?></h4><br>
                Pelaksanaan:<br>
                Tanggal: <?php echo e($event->tanggal); ?> <br>
                Waktu: <?php echo e($event->waktu); ?> <br>
                Lokasi: <?php echo e($event->location); ?> <br><br>
                Benefit: <br>
                <?php echo $event->benefits; ?> <br>
                Admin: <?php echo e($event->admin->kontak); ?>(<?php echo e($event->admin->name); ?>)
              </p>
            </div>
            <div class="text-end" style="padding: 20px">
                <a href="#" class="btn btn-primary disabled">Check Partisipant</a>
            </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/events/show.blade.php ENDPATH**/ ?>