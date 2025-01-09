<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
        <title>
            {{ trans('panel.site_title') }}
        </title>
        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS Files -->
        <!--@vite(['resources/sass/app.scss'])-->
        <link href="{{ asset('css/argon-dashboard.min.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>

    <body>
        @yield('content')

        <!--   Core JS Files   -->
        @vite(['resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.4/smooth-scrollbar.min.js" integrity="sha512-UOuvdHxPTS8D5IoOYOwLGAN05jYYXKhxFOZDe/24o53eOOf9ylws0uPfV+gRj/k1z17C0KtC7Vkt+5H7BLQxOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/argon-dashboard.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
