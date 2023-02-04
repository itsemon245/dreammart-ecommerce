<div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="{{route('admin.dashboard')}}" class="app-brand-link">
              <img src="../assets/DreamMart.svg" class="app-brand-logo demo" />
          </a>
        </div>
    
        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
          </li>
      
            <!-- Products -->
          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Products">Products</div>
              </a>
      
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('product.add')}}" class="menu-link">
                      <div data-i18n="Add Product">Add Product</div>
                    </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('product.view')}}" class="menu-link">
                      <div data-i18n="View Product">View Product</div>
                    </a>
                </li>
              </ul>
          </li>
          <!-- Categories -->
          <li class="menu-item">
            <a href="{{route('product.categories')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
          </li>
      
          <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
          </li>
        </ul>
      </aside>
</div>