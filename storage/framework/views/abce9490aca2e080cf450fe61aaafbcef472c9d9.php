<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px;">
        <div align='center'>
            <div class="mb-5">
                <h1 class="title"><?php echo e($title); ?> BUMJ JIMM FST Universitas Airlangga</h1>
            </div>
        </div>

        <?php if($events->count()): ?>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src=<?php echo e(asset($events[0]->image)); ?> class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="min-height: 90%;">
                            <h5 class="card-title fs-2"><?php echo e($events[0]->nama_event); ?></h5>
                            <p class="card-text">
                                <h4 style="padding-top: 20px">Pemateri: <?php echo e($events[0]->pemateri); ?></h4><br>
                                Pelaksanaan:<br>
                                Tanggal: <?php echo e($events[0]->tanggal); ?> <br>
                                Waktu: <?php echo e($events[0]->waktu); ?> <br>
                                Lokasi: <?php echo e($events[0]->location); ?> <br><br>
                                Benefit: <br>
                                <?php echo $events[0]->benefits; ?> <br>
                                Contact Person: <?php echo e($events[0]->admin->kontak); ?>(<?php echo e($events[0]->admin->name); ?>)
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated <?php echo e($events[0]->created_at->diffForHumans()); ?></small></p>
                        </div>
                        <div class="text-end" style="padding-right: 10px; padding-bottom: 10px">
                            <a href="" class="btn btn-success">Register</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php $__currentLoopData = $events->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3" style="width: 900px;">
            <div class="row g-0">
                <div class="col-md-4" style="width: 200px">
                    <img src=<?php echo e(asset($event->image)); ?> class="img-fluid rounded-start" alt="poster-kajian">
                </div>
                <div class="col-md-9">
                    <div class="card-body" style="min-height: 80%;">
                        <h5 class="card-title"><?php echo e($event->nama_event); ?></h5>
                        <p class="card-text">
                            <h5>Pemateri: <?php echo e($event->pemateri); ?></h5>
                            Tanggal: <?php echo e($event->tanggal); ?> <br>
                            Waktu: <?php echo e($event->waktu); ?>

                        </p>
                        <p class="card-text"><small class="text-muted">Last updated <?php echo e($event->created_at->diffForHumans()); ?></small></p>
                    </div>
                    <div class="text-end" style="padding-right: 10px; padding-bottom: 10px">
                        <a href="/events/<?php echo e($event->slug); ?>" class="btn btn-primary">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>
        <h1>Events not found!!!</h1>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/events.blade.php ENDPATH**/ ?>