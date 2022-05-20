<?php $__env->startSection('content'); ?>
    <div class="content" style="padding-bottom: 40px">
        <div class="col-lg-8" style="padding-bottom: 10px">
            <form method="POST" action="/dashboard/products/<?php echo e($product->slug); ?>">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="<?php echo e(old('nama_produk',$product->nama_produk)); ?>">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" required value="<?php echo e(old('slug',$product->slug)); ?>">
                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <div class="invalid-feedback">
                       <?php echo e($message); ?>

                   </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Category</label> <br>
                    <select class="form-select" name="kategori_id" id="kategori_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('kategori_id') == $category->id): ?>
                                <option value=<?php echo e($category->id); ?> selected><?php echo e($category->nama_kategori); ?></option>
                            <?php else: ?>
                                <option value=<?php echo e($category->id); ?>><?php echo e($category->nama_kategori); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="admin_id" class="form-label">Admin</label> <br>
                    <select class="form-select" name="admin_id" id="admin_id">
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('admin_id') == $admin->id): ?>
                                <option value=<?php echo e($admin->id); ?> selected><?php echo e($admin->name); ?></option>
                            <?php else: ?>
                                <option value=<?php echo e($admin->id); ?>><?php echo e($admin->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" required value="<?php echo e(old('image',$product->image)); ?>">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required value="<?php echo e(old('jumlah',$product->jumlah)); ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Price</label>
                    <input type="number" class="form-control" id="harga" name="harga" required value="<?php echo e(old('harga',$product->harga)); ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description</label>
                    <input id="deskripsi" type="hidden" name="deskripsi" required value="<?php echo e(old('deskripsi',$product->deskripsi)); ?>">
                    <trix-editor input="deskripsi" style="background-color: white"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/products/edit.blade.php ENDPATH**/ ?>