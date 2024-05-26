<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.layouts._head-scripts')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.layouts._header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.layouts._sidebar')
  <!-- End Sidebar-->
<!--====Main=====-->
<main id="main" class="main" style="min-height: 100vh">
  @yield('content')
  <!-- End #main -->
</main>
  <!-- ======= Footer ======= -->
  @include('admin.layouts._footer')
  <!-- End Footer -->

  {{--  script  --}}
  @include('admin.layouts._bottom-scripts')
  {{--  end of script  --}}
</body>

</html>
