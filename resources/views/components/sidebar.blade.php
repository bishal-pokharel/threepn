<div class="sidebar-content">
    <!-- Side Header -->
    <div class="content-header content-header-fullrow px-15">
        <!-- Mini Mode -->
        <div class="content-header-section sidebar-mini-visible-b">
            <!-- Logo -->
            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">f</span><span class="text-primary">s</span>
            </span>
            <!-- END Logo -->
        </div>
        <!-- END Mini Mode -->

        <!-- Normal Mode -->
        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Sidebar -->

            <!-- Logo -->
            <div class="content-header-item">
                <a class="link-effect font-w700" href="{{route('home')}}">
                    <img src="{{ asset('assets_admin/images/favicon.ico')}}" height="35px" width="35px">
                        <span class="font-size-xl" style="color: #0172aa">Three</span><span class="font-size-xl warning" style="color: #e15d3a;">Pn</span>
                </a>
            </div>
            <!-- END Logo -->
        </div>
        <!-- END Normal Mode -->
    </div>
    <!-- END Side Header -->


    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li>
                <a class="<?php echo ((Request::routeIs('admin.home'))? 'active open': '') ?>" href="{{route('admin.home')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
            </li>
            <li>
                <a class="<?php echo ((Request::routeIs('admin.enquires'))? 'active open': '') ?>" href="{{route('admin.enquires')}}"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Enquires</span></a>
            </li>
            <li>
                <a class="<?php echo ((Request::routeIs('admin.users.index')||Request::routeIs('admin.users.create')||Request::routeIs('admin.users.update'))? 'active': '') ?>" href="{{route('admin.users.index')}}"><i class="si si-users"></i><span class="sidebar-mini-hide">Users</a>
            </li>            
        </ul>
    </div>
    <!-- END Side Navigation -->
</div>