<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="" href="{{route('dashboard')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li><a href="{{route('companies.index')}}">Company <i class="icon-calender"></i></a></li>

                <li><a href="{{route('employees.index')}}">Employee <i class="ti-user"></i></a></li>

                <li><a href="{{route('users.index')}}">User <i class="ti-user"></i></a></li>

                <li><a href="{{route('permissions.index')}}">Permissions <i class="ti-comment"></i></a></li>

                <li><a href="{{route('roles.index')}}">Roles<i class="ti-support"></i></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
