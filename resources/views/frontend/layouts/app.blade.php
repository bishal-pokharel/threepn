<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <title>ThreePN | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.ico')}}">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

        @yield ('styles')
        <!-- END Stylesheets -->
    </head>
    <body>
        <section>
            @include('frontend.components.header')
        </section>
        <section>
            @yield('content')
        </section>
        <section>
            @include('frontend.components.footer')
        </section>
        @include('sweetalert::alert')
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    @yield('script')

</html>