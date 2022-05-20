<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/dashboard" class="nav-link <?php echo e(Request::is('dashboard')? 'active' : ''); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/dashboard/categories" class="nav-link <?php echo e(Request::is('dashboard/categories*')? 'active' : ''); ?>">
          <i class="nav-icon bi bi-box2-fill"></i>
          <p>Categories</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/dashboard/products" class="nav-link <?php echo e(Request::is('dashboard/products')? 'active' : ''); ?>">
          <i class="nav-icon bi bi-bag-fill"></i>
          <p>Products</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/dashboard/events" class="nav-link <?php echo e(Request::is('dashboard/events*')? 'active' : ''); ?>">
          <i class="nav-icon bi bi-clipboard2-fill"></i>
          <p>Events</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link" style="color: red">
            <i class="nav-icon bi bi-x-square-fill">
                <p>Close Dashboard</p>
            </i>
        </a>
      </li>
    </ul>
</nav>
<?php /**PATH C:\Users\ROBANU DAKHAYIN\Documents\ApplicationWeb\jimmonshop\resources\views/dashboard/partials/sidebar.blade.php ENDPATH**/ ?>