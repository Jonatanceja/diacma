<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="/css/animate.css">
    @stack('styles')
    <script src="/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');

        h1, h2, h3, h4, h5, h6, li, p {
        font-family: Montserrat;
        }

        .swiper-button-prev, .swiper-button-next  {
        color: white;
        }

        .swiper-pagination-bullet-active {
        background: rgba(245, 158, 11);
        }

        .swiper-pagination-bullet-inactive {
        background: rgba(255, 255, 255);
        }
    </style>

</head>
@include('partials.nav')
<body>
@yield('content')
@include('partials.footer')
@stack('scripts')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
