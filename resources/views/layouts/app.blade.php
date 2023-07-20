<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>@yield('title')</title>

        <meta name="description" content="Four Symmetrons">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.ico')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="{{ asset('assets_admin/js/plugins/datatables/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets_admin/css/codebase.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets_admin/js/plugins/select2/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets_admin/js/plugins/flatpickr/flatpickr.min.css')}}">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        @yield ('styles')
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <!-- Sidebar Content -->
                    @include('components.sidebar')                
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->                
                    @include('components.header')
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        @yield('breadcrumb')
                    </nav>
                    <div class="block block-rounded">
                        @yield('content')
                    </div>
                    <div class="content content-full" style="padding: 0px">
                        @yield('content2')
                    </div>
                </div>
                <!-- END Page Content -->

                @if($errors->any())
                @foreach($errors->all() as $error)
                    <div data-notify="container" class="col-xs-12 col-sm-4 alert alert-danger animated fadeIn" role="alert" data-notify-position="bottom-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1033; bottom: 20px; left: 0px; right: 0px; animation-iteration-count: 1;"> <span data-notify="message">{{$error}}</span></div>
                @endforeach
            @endif 
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
                @include('components.footer')
            <!-- END Footer -->
        </div>
        @include('sweetalert::alert')
        <!-- END Page Container -->

        <script src="{{ asset('assets_admin/js/codebase.core.min.js')}}"></script>
        <script src="{{ asset('assets_admin/js/codebase.app.min.js')}}"></script>

        <script src="{{ asset('assets_admin/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets_admin/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets_admin/js/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{ asset('assets_admin/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <script src="{{ asset('assets_admin/js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
        <script>jQuery(function(){ Codebase.helpers(['select2','flatpickr','table-tools']); });</script>
        <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        @yield('script2')
        @yield('script')
    </body>
</html>