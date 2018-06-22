<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | GST Admin Panel</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

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
    <link href="{{asset('vtran/css/print.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="main-page">
    <!-- Page Loader 
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>-->
    <!-- #END# Page Loader -->
    <section class="thankyou-page">
        <div class="container-fluid"> 
            <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1>Thank you for your vTransfer purchase.</h1>
                        <h2>You can manage licenses in your login. </h2>
                        <h3>Assign licenses to GSTIN Ids to file Tran1 & Tran2 returns.</h3>
                        <a href="{{url('/get-started')}}" class="btn btn-lg bg-pink waves-effect">Get Started</a>
                    </div>

            </div>
        </div>
        <div class="copy-text">Copyright &copy; 2017 vTran. <a href="#">Terms & Condition</a></div>
    </section>
    
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


</body>

</html>