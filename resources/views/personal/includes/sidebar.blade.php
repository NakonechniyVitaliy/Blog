<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('personal.profile.edit', auth()->user()->id) }}" class="nav-link">
                    <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                    <p>
                        Profile
                    </p>
                </a>
            </li>
            <li class="nav-item mt-3">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                    <p>
                        Main
                    </p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('personal.like.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-heart" aria-hidden="true"></i>
                    <p>
                        Likes
                    </p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-3">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-comment-o" aria-hidden="true"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
