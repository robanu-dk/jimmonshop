<nav class="navbar fixed-top navbar-expand-lg navbar-bg navbar-light">
    <div class="container flex-wrap flex-md-nowwrap" style="height: auto">
      <a href="/" class="logo"><img src=<?php echo e(asset('Logo-jimm-on-shop.png')); ?> alt="logo BUMJ" style="width: 50px; padding-right: 5px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('events*')? 'active' : ''); ?>" href="/events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('products*')? 'active' : ''); ?>" aria-expanded="true" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('about+us*')? 'active' : ''); ?>" aria-expanded="true" href="/about+us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('contact+us')? 'active' : ''); ?>" href="/contact+us">Contact Us</a>
          </li>
          <li class="nav-item">
            <form action="<?php echo e(Request::path()); ?>" class="form-inline">
                <div class="input-group">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search..." aria-label="Search" style="background-color: #fff" name="search" value="<?php echo e(request('search')); ?>">
                    <button class="btn" type="submit" style="background-color: #434343;">
                        <i class="bi bi-search" style="color: #fff;"></i>
                    </button>
                </div>
            </form>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, <?php echo e(auth()->user()->name); ?>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item bi bi-layout-text-sidebar-reverse" href="/dashboard">My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right">
                                    Logout
                                </i>
                            </button>
                        </form>
                    </ul>
                </li>
              <?php else: ?>
                <li class="nav-item <?php echo e(Request::is('sign+in*')? 'active' : ''); ?>">
                    <a class="signin bi bi-box-arrow-in-right" href="/sign+in">Sign In</a>
                </li>
              <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/partials/navbar.blade.php ENDPATH**/ ?>