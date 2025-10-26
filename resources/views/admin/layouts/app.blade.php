<!DOCTYPE html>
<html lang="en" data-layout-mode="light_mode">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Mart </title>

    <script src="{{ asset('assets/js/theme-script.js') }}" type="text/javascript"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/quill/quill.snow.css') }}">

    <!-- Daterangepicker CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tabler-icons/tabler-icons.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>
    <div class="main-wrapper">

        @include('admin.layouts.partials.sidebar')

        @include('admin.layouts.partials.top-header')

        <div class="page-wrapper">
            <div class="content">
                @yield('content')
            </div>
            <div class="copyright-footer d-flex align-items-center justify-content-between border-top bg-white gap-3 flex-wrap">
				<p class="fs-13 text-gray-9 mb-0">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
				<p>Designed & Developed By <a href="javascript:void(0);" class="link-primary">Dreams</a></p>
			</div>
        </div>
    </div>










    <div id="model" class="model">
        <div class="model-body p-3">
            <div class="d-flex align-items-center justify-content-between p-0 m-0">
                <h4>Title</h4>
                <button id="modelclose"><i class="bi bi-x-square"></i></button>
            </div>
            <hr class="my-0">
            <div id=modelcontent>


            </div>



        </div>


    </div>


   <!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('assets/js/feather.min.js') }}" type="text/javascript"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}" type="text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

<!-- ApexChart JS -->
<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}" type="text/javascript"></script>

<!-- Chart JS -->
<script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/chartjs/chart-data.js') }}" type="-text/javascript"></script>

<!-- Daterangepicker JS -->
<script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>

<!-- Select2 JS -->
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/quill/quill.min.js') }}" type="text/javascript"></script>

<!-- Color Picker JS -->
<script src="{{ asset('assets/plugins/@simonwep/pickr/pickr.es5.min.js') }}" type="text/javascript"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/theme-colorpicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>

<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="42ec46a6c27dbe3bf4526e22-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>




    <script>
        $(document).ready(function () {
            $('#comonTable').DataTable({
                responsive: true,
                pageLength: 10,
                lengthChange: true,
                autoWidth: false,
                language: {
                    searchPlaceholder: "Search...",
                    search: "",
                }
            });
        });

    </script>

    <script>
        $(document).ready(function () {


            $('.menu-link.d-flex').on('click', function (e) {
                const submenu = $(this).next('.submenu');
                if (submenu.length) {
                    e.preventDefault();
                    submenu.toggleClass('show');
                    $(this).parent().toggleClass('open');
                }
            });


            $('#toggleSidebar').on('click', function () {
                $('#sidebar').addClass('open');
                $('#sideback').show();
            });

            $('#sideback').on('click', function () {
                $('#sidebar').removeClass('open');
                $(this).hide();
            });


            // $('#modelopen').on('click', function () {
            //     $('#model').css('transform', 'scale(1)');
            // });

            $('#modelclose').on('click', function () {
                $('#model').css('transform', 'scale(0)');
            });



           

            // Laravel route stored in a JS variable
            let createProductUrl = "{{ route('products.create') }}";

            function addProduct() {
                $.ajax({
                    url: createProductUrl, // Use the hardcoded route
                    type: 'GET',
                    dataType: 'json', // Expect JSON response
                    success: function (response) {
                        $('#modelcontent').html(response.html);
                        $('#model').css('transform', 'scale(1)'); // Show modal
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                        alert('Something went wrong while loading the form.');
                    }
                });
            }




        });

    </script>
    @stack('scripts')
</body>

</html>
