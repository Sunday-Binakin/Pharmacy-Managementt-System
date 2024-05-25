<!DOCTYPE html>
<html lang="en">

<head>
  @yield('head_script')
</head>

<body>

  <!-- ======= Header ======= -->
 @yield('header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @yield('sidebar')
  <!-- End Sidebar-->
<!--====Main=====-->
  @yield('main')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
 @yield('footer')
  <!-- End Footer -->

  {{--  script  --}}
  @include('foot_script')
  {{--  end of script  --}}
</body>

</html>
