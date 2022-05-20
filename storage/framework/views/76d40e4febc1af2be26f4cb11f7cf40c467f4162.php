<?php $__env->startSection('container'); ?>
    <div class="container" style="padding-top: 100px; padding-bottom: 100px;" align="center">

        <div class="card" style="max-width: 600px;">

            <?php if(session()->has('success')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php elseif(session()->has('loginError')): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('loginError')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <div class="card-body" align="center">
                <main class="form-signin">
                    <form action='/sign+in' method="POST">
                        <?php echo csrf_field(); ?>
                      <h1 class="h3 mb-3 fw-normal title-text text-center" style="font-size: 36px; padding-bottom: 80px;"><strong><?php echo e($title); ?></strong></h1>
                      <div class="form-floating" style="padding-bottom: 30px">
                        <input type="email" name="email" class="form-control rounded <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                        <label for="email">Email address</label>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback" style="text-align: left">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-floating" style="padding-bottom: 50px">
                        <input type="password" name="password" class="form-control rounded" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                      </div>
                      <div style="padding-bottom: 10px;">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                      </div>
                    </form>
                    <small>Don't have account? <a href="/registration">Create account</a></small>
                </main>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/signin/index.blade.php ENDPATH**/ ?>