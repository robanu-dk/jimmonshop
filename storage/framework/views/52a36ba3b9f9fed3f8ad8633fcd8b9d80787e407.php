<!doctype html>
<html lang="en">
  <head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/fontawesome-free/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

    <!-- Trix-Editor -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('trix.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('trix.js')); ?>"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <title>JIMM ON SHOP | <?php echo e($title); ?></title>
  </head>
  <body>

    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('container'); ?>

    <div class="footer" style="padding-top: 6.7%">
        <div class="container-expand" style="background-color: #BDC2B1;">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
              <p class="col-md-4 mb-0" style="padding-left: 7%; width: 50%">
                <strong>Copyright &copy; 2022 <a href="https://www.instagram.com/jimmonshop_/">BUMJ JIMM FST Universitas Airlangga</a></strong>
              </p>

              <div class="nav col-md-4 justify-content-end mb-0" style="padding-right: 7%">
                <span style="padding-right: 1%"><b>Version</b></span> 0.0.2
              </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

  <!-- jQuery -->
  <script src="<?php echo e(asset('template')); ?>/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="<?php echo e(asset('template')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('template')); ?>/dist/js/adminlte.min.js"></script>

</html>
<?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/layouts/main.blade.php ENDPATH**/ ?>