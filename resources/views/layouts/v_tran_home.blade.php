<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome To | GST Tran</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="_token" content="{!! csrf_token() !!}"/>
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

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('vtran/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{asset('vtran/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('vtran/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/print.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/themes/all-themes.css')}}" rel="stylesheet" />
    
	    <script> siteUrl = '<?php echo url('/'); ?>'; </script>
</head>

<body class="theme-orange">
        <!-- Page Loader -->
    <div class="page-loader-wrapper" id='pageLoader'>
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
    </div>
    <!-- #END# Page Loader -->
   <!-- Top Bar -->
<nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <!-- <a href="javascript:void(0);" class="bars"></a> -->
                <a class="navbar-brand" href="{{url('/')}}">GST<span class="text-uppercase">Tran</span></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">assignment</i> <span>Forms</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">FORMS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                         @php  $registeredPersonId = session()->get('gstnDetail'); @endphp
                                        <a href="{{url('/v-transfer-home')}}/{{$registeredPersonId['registeredPersonId']}}/{{$registeredPersonId['gstnId']}}/{{$registeredPersonId['legalName']}}">
                                           
                                            <h5>Tran 1</h5>
                                        </a>
                                    </li>
                                    <!--<li class="js-sweetalert">
                                        <button class="btn btn-link" type="button" data-type="basic">
                                            <h5>Tran 2</h5>
                                        </button>
                                    </li>-->
                                    <li>
                                        <a href="{{url('/tran-two')}}">
                                            <h5>Tran 2</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/tran-three')}}">
                                            <h5>Tran 3</h5>
                                        </a>
                                    </li>
                                 <!--   <li>
                                        <a href="{{url('/tran-three')}}">
                                            <h5>Tran 3</h5>
                                        </a>
                                    </li>-->
                                     <li>
                                      <a href="{{url('/tran-three-a')}}">
                                            <h5>Tran 3A</h5>
                                        </a>
                                    </li>
                                    <li>
                                      <a href="{{url('/tran-three-b')}}">
                                            <h5>Tran 3B</h5>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="vtransfer-home.html">
                            <i class="material-icons">exit_to_app</i> <span>Tran 2</span>
                        </a>
                    </li>-->
                    <li>
                        <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i> <span>Dashboard</span>
                        </a>
                    </li>
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

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('vtran/plugins/node-waves/waves.js')}}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{asset('vtran/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('vtran/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('vtran/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{asset('vtran/plugins/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('vtran/js/admin.js')}}"></script>
    @stack('script')
    <script src="{{asset('vtran/js/pages/ui/tooltips-popovers.js')}}"></script>
    <script src="{{asset('vtran/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('vtran/js/pages/ui/dialogs.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('vtran/js/demo.js')}}"></script>
  


</body>

</html>