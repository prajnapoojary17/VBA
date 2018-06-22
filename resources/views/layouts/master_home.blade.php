<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome To | GSTTran</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{asset('vtran/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('vtran/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('vtran/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('vtran/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('vtran/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{asset('vtran/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('vtran/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/landing.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/print.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/themes/all-themes.css')}}" rel="stylesheet" />


    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        siteUrl = '<?php echo url('/'); ?>';
    </script>
</head>

<body class="{{ Request::is('faq') ? 'profile-page' : 'landing-page' }}">

    @yield('content')
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#about">
							About Us
	                    </a>
                    </li>
                    <li>
                        <a href="#">
							Terms & Condition
	                    </a>
                    </li>
                    <li>
						<a href="{{asset('/faq')}}">
							Faq's
						</a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2017, made with <i class="fa fa-heart heart"></i> by Glowtouch
            </div>
        </div>
    </footer>

    </div>
    <!-- Jquery Core Js -->
    <script src="{{asset('vtran/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('vtran/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('vtran/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('vtran/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('vtran/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('vtran/js/pages/forms/form-validation.js')}}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{asset('vtran/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('vtran/plugins/node-waves/waves.js')}}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{asset('vtran/plugins/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('vtran/js/admin.js')}}"></script>
    <script src="{{asset('vtran/js/pages/ui/dialogs.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('vtran/js/demo.js')}}"></script>
    <script src="{{asset('vtran/js/home.js')}}"></script>
    @stack('script')
</body>

</html>