<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           {{-- Admin's Sidebar --}}
        @auth('admin')
        <li class="nav-item">
         <a href="/dashboard" class="nav-link {{ Request::is('dashboard')? 'active' : '' }}">
             <i class="bi bi-person-fill"></i>
             <p>Profile</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="/dashboard/categories" class="nav-link {{ Request::is('dashboard/categories*')? 'active' : '' }}">
           <i class="nav-icon bi bi-box2-fill"></i>
           <p>Categories</p>
         </a>
       </li>
       <li class="nav-item">
         <a href="/dashboard/products" class="nav-link {{ Request::is('dashboard/products*')? 'active' : '' }}">
           <i class="nav-icon bi bi-bag-fill"></i>
           <p>Products</p>
         </a>
       </li>
       <li class="nav-item">
        <a href="/dashboard/orders" class="nav-link {{ Request::is('dashboard/orders*')? 'active' : '' }}">
          <i class="nav-icon bi bi-bag-fill"></i>
          <p>Order</p>
        </a>
      </li>
       <li class="nav-item">
         <a href="/dashboard/events" class="nav-link {{Request::is('dashboard/events*')? 'active' : '' }}">
           <i class="nav-icon bi bi-clipboard2-fill"></i>
           <p>Events</p>
         </a>
       </li>
       @else

       {{-- User's Sidebar --}}
         @auth
         <li class="nav-item">
            <a href="/dashboard/my/profile" class="nav-link {{ Request::is('dashboard/my/profile')? 'active' : '' }}">
                <i class="bi bi-person-fill"></i>
                <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/my/register_event" class="nav-link {{ Request::is('dashboard/my/register_event')? 'active' : '' }}">
              <i class="nav-icon bi bi-clipboard2-fill"></i>
              <p>Register Event</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/my/purchase" class="nav-link {{ Request::is('dashboard/my/purchase')? 'active' : '' }}">
              <i class="nav-icon bi bi-bag-fill"></i>
              <p>Purchase</p>
            </a>
          </li>
         @endauth
       @endauth
      <li class="nav-item">
        <a href="/" class="nav-link" style="color: red">
            <i class="nav-icon bi bi-x-square-fill">
                <p>Close Dashboard</p>
            </i>
        </a>
      </li>
    </ul>
</nav>
