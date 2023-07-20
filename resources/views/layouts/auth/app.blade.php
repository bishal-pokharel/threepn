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
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('admin/css/codebase.min.css')}}">
        @yield ('styles')
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                @yield('content')
                
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <script src="{{ asset('admin/js/codebase.core.min.js')}}"></script>

        <script src="{{ asset('admin/js/codebase.app.min.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{ asset('admin/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('admin/js/pages/op_auth_signin.min.js')}}"></script>
        @yield ('scripts')

    </body>
</html>