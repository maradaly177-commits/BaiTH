{{-- 

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
    <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}"
         class="brand-image img-circle elevation-3">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
       <li class="nav-item">
  <a href="{{ url('/products') }}"
     class="nav-link {{ request()->is('products') ? 'active' : '' }}">
    <i class="nav-icon fas fa-box"></i>
    <p>Products</p>
  </a>
</li>

      </ul>
    </nav>
  </div>
</aside>
--}}

{{-- 
<a href="{{ route('admin.dashboard') }}" class="nav-link active"></a>

--}}

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>
            Quản lý Danh mục
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
                <p>Xem danh sách</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('categories.create') }}" class="nav-link">
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>
