<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $page_title }} </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('public/Admin/assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ url('public/Admin/assets/img/apple-touch-icon') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('public/Admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/assets/vendor/quill/quill.snow.cs') }}s" rel="stylesheet">
    <link href="{{ url('public/Admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/assets/vendor/simple-datatables/style.cs') }}s" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('public/Admin/assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ url('public/Admin/assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">Pharmacy M.S</span>
                                </a>
                            </div><!-- End Logo -->
                            @yield('content')


                        </div>

                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('public/Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('public/Admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public/Admin/assets/js/main.js') }}"></script>

</body>

</html>
