<!DOCTYPE html>
<html lang="en">

<head>
@include('include.css')
</head>

<!-- body start -->
<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
     @include('body.header')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('body.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        @yield('admin')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
@include('include.script')
</body>
</html>
