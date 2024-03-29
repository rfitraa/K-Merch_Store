<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>K-Merch Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description"> --}}

    <link rel="icon" type="image/png" href="/assets/img/KmerchLogo.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Libraries Stylesheet -->
    {{-- <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body style="margin: 0;">
    @if(Route::is('print'))
    @else
    @include('store.layouts.topbar')
    @include('store.layouts.navbar')
    @endif
    @yield('content')
    @if(Route::is('print'))
    @else
    @include('store.layouts.footer')
    @endif

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script src="lib/easing/easing.min.js"></script> --}}
    {{-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> --}}
    {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script> --}}
    {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script> --}}
    {{-- <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script> --}}

    <!-- Contact Javascript File -->
    {{-- <script src="mail/jqBootstrapValidation.min.js"></script> --}}
    {{-- <script src="mail/contact.js"></script> --}}

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
</body>

</html>
