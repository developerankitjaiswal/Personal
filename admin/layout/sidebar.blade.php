<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content find-link" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <div class="menu-icon"> <i class="fa fa-home"></i> </div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>

            <div class="menu-item">
                <a href="{{ route('banner.index') }}" class="menu-link">
                    <div class="menu-icon"> <i class="fa fa-image"></i> </div>
                    <div class="menu-text">Manage Banner</div>
                </a>
            </div>

            <div class="menu-item has-sub"> 
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Manage Product Filters</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('category.index') }}" class="menu-link">
                            <div class="menu-text">Manage Category</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('subcategory.index') }}" class="menu-link">
                            <div class="menu-text">Manage Subcategory</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('brand.index') }}" class="menu-link">
                            <div class="menu-text">Manage Brands</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item has-sub"> 
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon"> <i class="fas fa-list"></i> </div>
                    <div class="menu-text">Manage Product</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{ route('products.create') }}" class="menu-link">
                            <div class="menu-text">Add New Product</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('products.index') }}" class="menu-link">
                            <div class="menu-text">Products List</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <a href="{{ route('user.index') }}" class="menu-link">
                    <div class="menu-icon"> <i class="fa fa-user"></i> </div>
                    <div class="menu-text">User Management</div>
                </a>
            </div>
 
            <div class="menu-item d-flex"> <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a> </div>
        </div>
    </div>
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
</div>
