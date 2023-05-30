<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend') }}/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css">

    {{-- toaster --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">



</head>

<body class="">

    <!-- [ navigation menu ] start -->
    @include('body.navbar')
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    @include('body.header')
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        @yield('admin')
    </div>


    <!-- Required Js -->
    <script src="{{ asset('backend') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('backend') }}/assets/js/plugins/apexcharts.min.js"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('backend') }}/assets/js/pages/dashboard-main.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
    </script>

</body>

</html>