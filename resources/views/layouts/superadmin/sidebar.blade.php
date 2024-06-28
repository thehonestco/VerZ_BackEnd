<div id="preload" class="preload-container">
    <div class="preloading">
        <span></span>
    </div>
</div>
<div class="section-menu-left">
    <div class="box-logo">
        <a href="" id="site-logo-inner">
            <img src="{{asset('images/logo/logo.png')}}">
        </a>
        <div class="button-show-hide">
            <i class="icon-menu-left"></i>
        </div>
    </div>
    <div class="center">
       <div class="center-item">
            <div class="center-heading">Main Home</div>
            <ul class="menu-list">
                <li class="menu-item {{request()->route()->getName() == 'superadmin.dashboard' ? 'active' : ''}}">
                    <a href="{{route('superadmin.dashboard')}}" class="menu-item-button">
                        <div class="icon"><i class="icon-grid"></i></div>
                        <div class="text">Dashboard</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="center-item">
            <ul class="menu-list">
              <li class="menu-item has-children {{request()->route()->getName() == 'superadmin.store' ? 'active' : ''}}">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Store Management</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{route('superadmin.store.index')}}" class="">
                                <div class="text">Stores</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{route('superadmin.store-admin.index')}}" class="">
                                <div class="text">Store Admin</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="product-list.html" class="">
                                <div class="text">Drivers</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Customers</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Orders</div>
                    </a>
                </li>

                <li class="menu-item has-children">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-layers"></i></div>
                        <div class="text">Products</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="category-list.html" class="">
                                <div class="text">Product Management</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="category-list.html" class="">
                                <div class="text">Categories Management</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="new-category.html" class="">
                                <div class="text">Offers & Discounts</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item has-children">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-box"></i></div>
                        <div class="text">Community</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="attributes.html" class="">
                                <div class="text">Community Management</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="add-attributes.html" class="">
                                <div class="text">Request Manager</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Reports</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
