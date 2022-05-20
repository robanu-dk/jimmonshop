<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px; padding-bottom: 40px;" align="center">
        <div class="card" style="width: 70%;">
            <div class="fs-2" style="padding-top: 20px"><b><?php echo e($event->nama_event); ?></b></div>
            <div class="image" style="text-align: center; padding-top: 30px;">
                <img style="max-width: 450px;" src=<?php echo e(asset($event->image)); ?> class="card-img-top" alt="poster-kajian">
            </div>
            <div class="card-body text-left" style="padding-left: 30px">
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
            <table>
                <tr>
                    <td class="text-left" style="width: 50%; padding-left: 20px; padding-bottom: 20px">
                        <a href="/events" class="btn btn-danger">Back</a>
                    </td>
                    <td class="text-right" style="width: auto; padding-right: 20px; padding-bottom: 20px">
                        <a href="" class="btn btn-success">Register</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/event.blade.php ENDPATH**/ ?>