<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Font -->

<link rel="shortcut icon" href="{{ asset('assets/images/logo_pendek.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<!-- Css Styles -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
@yield('styles-css')
<!-- Js Plugins -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</style>

@include('layouts.header')


<body>
@yield('content')
</body>

@yield('styles-js')
@include('layouts.footer')

</html>
