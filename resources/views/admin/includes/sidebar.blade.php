<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-tags" aria-hidden="true"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-window-maximize" aria-hidden="true"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
