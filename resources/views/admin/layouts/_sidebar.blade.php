<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link
            @if (Request::segment(2) == 'dashboard') @else collapsed @endif"
                href="{{ url('admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'customers') @else collapsed @endif"
                href="{{ url('admin/customers') }}">
                <i class="bi bi-person"></i>
                <span>Customers</span>
            </a>
        </li><!-- End customers  Nav -->
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'medicines') @else collapsed @endif"
                href="{{ url('admin/medicines') }}">
               <i class="bi bi-shop"></i>
                <span>Medicines</span>
            </a>
        </li>
        <!-- End medicines  Nav -->
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'medicines_stock') @else collapsed @endif"
                href="{{ url('admin/medicines_stock') }}">
               <i class="bi bi-archive"></i>
                <span>Medicines Stock</span>
            </a>
        </li>
        <!-- End medicines stock Nav -->

        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'suppliers') @else collapsed @endif"
                href="{{ url('admin/suppliers') }}">
               <i class="bi bi-archive"></i>
                <span>Suppliers</span>
            </a>
        </li>
        <!-- End medicines stock Nav -->

    </ul>

</aside>
