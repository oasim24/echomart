<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-2.1.8/r-3.0.2/datatables.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/css/admin/heder.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin/customdatatable.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin/model.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    @include('admin.layouts.partials.sidebar')

    <div class="content flex-grow-1">
        @include('admin.layouts.partials.top-header')

        <div class="mt-4">
            @yield('content')
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


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/r-3.0.2/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.min.js"></script>





    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>






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



            $('#short_description').summernote({
                placeholder: 'Enter short description',
                height: 100,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            $('#long_description').summernote({
                placeholder: 'Enter long description',
                height: 100,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });


// Laravel route stored in a JS variable
    let createProductUrl = "{{ route('products.create') }}";

    function addProduct() {
        $.ajax({
            url: createProductUrl,   // Use the hardcoded route
            type: 'GET',
            dataType: 'json',        // Expect JSON response
            success: function(response) {
                $('#modelcontent').html(response.html);
                $('#model').css('transform', 'scale(1)'); // Show modal
            },
            error: function(xhr, status, error) {
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
