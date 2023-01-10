<!doctype html>
<html lang="en">
@include("layouts.admin.head-css")

<body data-layout="horizontal" data-topbar="dark">

<!-- Begin page -->
<div id="layout-wrapper">
@yield('content')
<!-- End Page-content -->

{{--@include("layouts.admin.footer")--}}
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include("layouts.admin.vendor-scripts")

<!-- JAVASCRIPT -->
    @yield('page-scripts')


    </body>

</html>
