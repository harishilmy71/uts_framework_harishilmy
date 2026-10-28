
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Restoran')</title>

    <link href="{{ asset('landing-assets/img/favicon.ico') }}" rel="icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('landing-assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-assets/css/style.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <div class="container-xxl bg-white p-0">
        @yield('header')

        <main>
            @yield('content')
        </main>

        @yield('footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing-assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('landing-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('landing-assets/js/main.js') }}"></script>

    @yield('scripts')
</body>
</html>
