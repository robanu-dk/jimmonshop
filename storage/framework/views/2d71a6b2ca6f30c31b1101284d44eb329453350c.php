<?php $__env->startSection('content'); ?>
<div class="content" style=" padding-bottom: 40px" align='center'>
    <div class="card mb-3" style="width: 80%;  text-align: left">
        <div align="left" style="padding: 10px">
            <a href="/dashboard/products" class="btn btn-success"><img src=<?php echo e(asset('feather/arrow-left.svg')); ?> alt="icon-back">Back to all products</a>
            <a href="/dashboard/products/<?php echo e($product->slug); ?>/edit" class="btn btn-warning"><img src=<?php echo e(asset('feather/edit.svg')); ?> alt="icon-edit">Edit</a>
            <form action="/dashboard/products/<?php echo e($product->slug); ?>" method="POST" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><img src=<?php echo e(asset('feather/x-circle.svg')); ?> alt="icon-delete">Delete</button>
            </form>
        </div>
        <div style="padding: 20px; font-size: 20px;"><b><?php echo e($product->nama_produk); ?></b></div>
        <div class="row g-1" style="height: 100%;">
            <div class="col-md-4" style="padding: 20px;">
                <img style="width: 100%; height: 100%;" src=<?php echo e(asset($product->image)); ?> class="img-fluid rounded-start" alt="Gambar <?php echo e($product->nama_produk); ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body" style="height: 100%;">
                    <table >
                        <tr>
                            <td>
                                <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                            </td>
                            <td>
                                <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                            </td>
                            <td>
                                <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                            </td>
                            <td>
                                <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                            </td>
                            <td>
                                <i class="bi bi-star-fill" style="color: gold; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></i>
                            </td>
                            <td style="font-size: 12px; padding-left: 5px;">
                                5.0
                            </td>
                        </tr>
                    </table>
                    <p class="card-title" style="font-size: 24px"><strong><?php echo e($product->nama_produk); ?></strong></p>
                    <p class="card-text" style="font-size: 20px">
                        <strong>Rp <?php echo e($product->harga); ?></strong>
                    </p>
                    <?php if($product->kategori->slug === 'fashion'): ?>
                        <p>
                            <strong>Color: </strong> Mustard
                        </p>
                        <table>
                            <tr>
                                <td style="background-color: #FFA8A8; width: 24px; height: 26px"></td>
                                <td style="width: 10px"></td>
                                <td style="background-color: #EBCD31; width: 24px; height: 26px"></td>
                                <td style="width: 10px"></td>
                                <td style="background-color: #891B1B; width: 24px; height: 26px"></td>
                                <td style="width: 10px"></td>
                                <td style="background-color: #7A21B1; width: 24px; height: 26px"></td>
                            </tr>
                        </table>
                        <p style="padding-top: 10px;">
                            <strong>Size</strong>
                        </p>
                        <button type="button" class="btn btn-outline-dark">Free Size</button>
                    <?php endif; ?>
                    <p style="padding-top: 10px;">
                        <strong>Quantity </strong>
                    </p>
                    <div style="width: 15%; padding-bottom: 15px">
                        <select class="form-select" name="subject" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <table style="width: 320px">
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <a href="#" class="btn btn-outline-success" style="background: #D9E5CF; width: 320px"><strong>Add to Chart</strong></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right; width: 50%; padding-right: 10px; padding-top: 5px;">
                                <a href="#" class="btn btn-outline-dark" style="width: 150px"><strong>Add to Wish List</strong></a>
                            </td>
                            <td style="padding-left: 10px; padding-top: 5px;">
                                <a href="#" class="btn btn-outline-dark" style="width: 150px"><strong>Check Out</strong></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-text" style="padding: 20px">
            <h4>Description</h4>
            <p>
                <?php echo $product->deskripsi; ?>

            </p>
        </div>
        <div class="text-end" style="padding: 20px">
            <a href="#" class="btn btn-primary disabled">Check History of Transaction</a>
        </div>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/products/show.blade.php ENDPATH**/ ?>