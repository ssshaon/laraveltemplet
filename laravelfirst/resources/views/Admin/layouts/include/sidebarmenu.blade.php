<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Victoria Baker</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="{{url('/admin')}}" ><i class="icon-home4"></i> <span>Dashboard</span></a></li>

                    <!-- /main -->


                    <!-- Page kits -->

                    <li>
                        <a href="#"><i class="icon-users"></i> <span>Users</span></a>
                        <ul>
                            <li class="@yield('user_add')"><a href="{{url('/admin/user/create')}}">Add New User</a></li>
                            <li><a href="error_404.html">Active User</a></li>
                            <li><a href="error_405.html">All User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-user"></i> <span>Settings</span></a>
                        <ul>
                            <li class="@yield('setting_user')"><a href="{{url('/admin/setting')}}">User Setting</a></li>

                        </ul>
                    </li>
                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>