<div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
                <img src="{{ asset('backend/assets/DreamMart.svg') }}" class="app-brand-logo demo" />
            </a>
        </div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            @hasanyrole('editor|admin')
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">management</span>
                </li>
                <!-- Products -->
                <li
                    class="menu-item {{ request()->routeIs('product.add') || request()->routeIs('product.view') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-box"></i>
                        <div data-i18n="Products">Products</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->routeIs('product.add') ? 'active' : '' }}">
                            <a href="{{ route('product.add') }}" class="menu-link">
                                <div data-i18n="Add Product">Add Product</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('product.view') ? 'active' : '' }}">
                            <a href="{{ route('product.view') }}" class="menu-link">
                                <div data-i18n="View Product">View Product</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Categories & Brands -->
                <li class="menu-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-category-alt"></i>
                        <div data-i18n="Categories & Brands">Categories & Brands</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->routeIs('categories.view') ? 'active' : '' }}">
                            <a href="{{ route('categories.view') }}" class="menu-link">
                                <div data-i18n="View Categories">View Categories</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('categories.viewBrands') ? 'active' : '' }}">
                            <a href="{{ route('categories.viewBrands') }}" class="menu-link">
                                <div data-i18n="View Brands">View Brands</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Orders -->
                <li class="menu-item {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-package"></i>
                        <div data-i18n="Categories & Brands">View Orders</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->routeIs('admin.orders.view') ? 'active' : '' }}">
                            <a href="{{ route('admin.orders.view') }}" class="menu-link">
                                <div data-i18n="View pending">Pending Orders</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('admin.orders.viewCompleted') ? 'active' : '' }}">
                            <a href="{{ route('admin.orders.viewCompleted') }}" class="menu-link">
                                <div data-i18n="View completed">Completed Orders</div>
                            </a>
                        </li>
                    </ul>
                </li>
            @endhasanyrole


            @hasanyrole('admin')
                <!-- Role Managment -->
                <li class="menu-item {{ request()->routeIs('role.add') ? 'active' : '' }}">
                    <a href="{{ route('role.add') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user-check"></i>
                        <div data-i18n="Analytics">Role Management</div>
                    </a>
                </li>
                <!-- User Managment -->
                <li class="menu-item {{ request()->routeIs('role.view') ? 'active' : '' }}">
                    <a href="{{ route('role.view') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-group"></i>
                        <div data-i18n="Analytics">User Management</div>
                    </a>
                </li>
            @endhasanyrole





        </ul>

    </aside>
</div>
