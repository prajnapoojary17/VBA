<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome To | GST<span class="text-uppercase">Tran</span></title>
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

    <!-- JQuery DataTable Css -->
    <link href="{{asset('vtran/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('vtran/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset('vtran/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{asset('vtran/plugins/sweetalert/sweetalert.css" rel="stylesheet')}}" />

    <!-- Custom Css -->
    <link href="{{asset('vtran/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/print.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/themes/all-themes.css')}}" rel="stylesheet" />
    
      <script> siteUrl = '<?php echo url('/'); ?>'; </script>
</head>

<body class="theme-orange">
    
       <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{url('/')}}">GST<span class="text-uppercase">Tran</span></a>          
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right"> 
                    <li>
                        <a href="{{url('/logout')}}">
                            <i class="material-icons">person</i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
      @yield('content')
    
 <!-- Jquery Core Js -->
 <!--<script  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>-->
    <script src="{{asset('vtran/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('vtran/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('vtran/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('vtran/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('vtran/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Bootstrap Wizzard -->
    <script src="{{asset('vtran/plugins/bootstrap-wizzard/jquery.bootstrap.wizard.js')}}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{asset('vtran/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{asset('vtran/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('vtran/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('vtran/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('vtran/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vtran/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{asset('vtran/plugins/sweetalert/sweetalert.min.js')}}"></script>
    
     <script src="{{asset('vtran/plugins/chartjs/Chart.min.js')}}"></script>
    
    <!-- Custom Js -->
    <script src="{{asset('vtran/js/admin.js')}}"></script>    
      <script src="{{asset('vtran/js/pages/charts/chartjs.js')}}"></script>
@stack('script')

    <script src="{{asset('vtran/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{asset('vtran/js/pages/ui/tooltips-popovers.js')}}"></script>
    <script src="{{asset('vtran/js/pages/index.js')}}"></script>
    <script src="{{asset('vtran/js/pages/ui/dialogs.js')}}"></script>

     <script src="{{asset('vtran/js/pages/forms/basic-form-elements.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{asset('vtran/js/demo.js')}}"></script>
    <script src="{{asset('vtran/js/vtransfer.js')}}"></script>
  
</body>

</html>