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

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('vtran/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{asset('vtran/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('vtran/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/print.css')}}" rel="stylesheet">
    <link href="{{asset('vtran/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
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
    </div>
    <!-- #END# Page Loader -->
   <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">vTran</a>                
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">  
                    <li>
                        <a href="vtransfer-home.html">
                            <i class="material-icons">exit_to_app</i> <span>Tran 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.html">
                            <i class="material-icons">dashboard</i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="material-icons">person</i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <section class="content content-full">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="ribbon-title">Tran 1</div>
                        <div class="body">
                            <section id="wizard" class="steps-wizard">
                                <form id="commentForm" method="get" action="">
                                    <div id="rootwizard">
                                        <div class="navbar-steps nav-dots">
                                            <div class="navbar-inner">
                                                <div class="container">
                                                    <ul>
                                                        <li><a href="#tab0" data-toggle="tab"></a></li>
                                                        <li><a href="#tab1" data-toggle="tab"></a></li>
                                                        <li><a href="#tab2" data-toggle="tab"></a></li>
                                                        <li><a href="#tab3" data-toggle="tab"></a></li>
                                                        <li><a href="#tab4" data-toggle="tab"></a></li>
                                                        <li><a href="#tab5" data-toggle="tab"></a></li>
                                                        <li><a href="#tab6" data-toggle="tab"></a></li>
                                                        <li><a href="#tab7" data-toggle="tab"></a></li>
                                                        <li><a href="#tab8" data-toggle="tab"></a></li>
                                                        <li><a href="#tab9" data-toggle="tab"></a></li>
                                                        <li><a href="#tab10" data-toggle="tab"></a></li>
                                                        <li><a href="#tab11" data-toggle="tab"></a></li>
                                                        <li><a href="#tab12" data-toggle="tab"></a></li>
                                                        <li><a href="#tab13" data-toggle="tab"></a></li>
                                                        <li><a href="#tab14" data-toggle="tab"></a></li>
                                                        <li><a href="#tab15" data-toggle="tab"></a></li>
                                                        <li><a href="#tab16" data-toggle="tab"></a></li>
                                                        <li><a href="#tab17" data-toggle="tab"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="bar" class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab0">
                                                <h3 class="fancy-title">Instructions</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                            </div>
                                            <div class="tab-pane" id="tab1">
                                                <h3 class="fancy-title">Enter Business Info</h3>
                                                
                                                <fieldset>
                                                    <div class="row m-t-15">
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control">
                                                                    <label class="form-label">GSTIN</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control">
                                                                    <label class="form-label">Legal Name of the registered person</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control">
                                                                    <label class="form-label">Trade name, if any</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-4 col-lg-offset-1 col-md-6  m-t-5">
                                                            <div class="form-group" id="ques1">
                                                                <label class="form-label">What best describes your business?</label>
                                                                <br>
                                                                <input type="checkbox" id="Manufacturer" />
                                                                <label for="Manufacturer">Manufacturer</label>
                                                                <input type="checkbox" id="ServiceProvider" />
                                                                <label for="ServiceProvider">Service provider</label>
                                                                <input type="checkbox" id="Trader" />
                                                                <label for="Trader">Trader</label>
                                                            </div>
                                                            <div class="form-group" id="ques2">
                                                                <label class="form-label">Are you registered dealer under Composition scheme in GST?</label>
                                                                <br>
                                                                <input name="group2" type="radio" id="group2Yes" class="with-gap" />
                                                                <label for="group2Yes">Yes</label>
                                                                <input name="group2" type="radio" id="group2No" class="with-gap" />
                                                                <label for="group2No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques3" style="display:none;">
                                                                <label class="form-label">Select the Tax centers where you are currently registered</label>
                                                                <br>
                                                                <input type="checkbox" id="group3VAT" />
                                                                <label for="group3VAT">VAT</label>
                                                                <input type="checkbox" id="group3ServiceTax" />
                                                                <label for="group3ServiceTax">Service Tax</label>
                                                                <input type="checkbox" id="group3Excise" />
                                                                <label for="group3Excise">Excise</label>
                                                            </div>
                                                            <div class="form-group" id="ques4" style="display:none;">
                                                                <label class="form-label">Do you have unavailed credit on capital goods?</label>
                                                                <br>
                                                                <input name="group4" type="radio" id="group4Yes" class="with-gap" />
                                                                <label for="group4Yes">Yes</label>
                                                                <input name="group4" type="radio" id="group4No" class="with-gap" />
                                                                <label for="group4No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques5">
                                                                <label class="form-label">Do you have unclaimed ITC on goods & services, which were exempt earlier?</label>
                                                                <br>
                                                                <input name="group5" type="radio" id="group5Yes" class="with-gap" />
                                                                <label for="group5Yes">Yes</label>
                                                                <input name="group5" type="radio" id="group5No" class="with-gap" />
                                                                <label for="group5No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques6">
                                                                <label class="form-label">Do you have a centralised Registration?</label>
                                                                <br>
                                                                <input name="group6" type="radio" class="with-gap" id="group6Yes" />
                                                                <label for="group6Yes">Yes </label>
                                                                <input name="group6" type="radio" id="group6No" class="with-gap" />
                                                                <label for="group6No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques7">
                                                                <label class="form-label">Is any part of the manufacturing process undertaken by job worker?</label>
                                                                <br>
                                                                <input name="group7" type="radio" class="with-gap" id="group7Yes" />
                                                                <label for="group7Yes">Yes </label>
                                                                <input name="group7" type="radio" id="group7No" class="with-gap" />
                                                                <label for="group7No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques8">
                                                                <label class="form-label">Is registred person a Job worker?</label>
                                                                <br>
                                                                <input name="group8" type="radio" id="group8Yes" class="with-gap" />
                                                                <label for="group8Yes">Yes</label>
                                                                <input name="group8" type="radio" id="group8No" class="with-gap" />
                                                                <label for="group8No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques9">
                                                                <label class="form-label">Has the RP sent goods for Job work?</label>
                                                                <br>
                                                                <input name="group9" type="radio" id="group9Yes" class="with-gap" />
                                                                <label for="group9Yes">Yes</label>
                                                                <input name="group9" type="radio" id="group9No" class="with-gap" />
                                                                <label for="group9No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques10">
                                                                <label class="form-label">Is the registred person an Agent?</label>
                                                                <br>
                                                                <input name="group10" type="radio" id="group10Yes" class="with-gap" />
                                                                <label for="group10Yes">Yes</label>
                                                                <input name="group10" type="radio" id="group10No" class="with-gap" />
                                                                <label for="group10No">No</label>
                                                            </div>
                                                            <div class="form-group" id="ques11">
                                                                <label class="form-label">Does the RP transact via an agent?</label>
                                                                <br>
                                                                <input name="group11" type="radio" id="group11Yes" class="with-gap" />
                                                                <label for="group11Yes">Yes</label>
                                                                <input name="group11" type="radio" id="group11No" class="with-gap" />
                                                                <label for="group11No">No</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </fieldset>
                                            
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div>
                                                <div class="form-group" id="5AQ0">
                                                    <label class="form-label">Whether such tax credit amount is shown as carried forward in the return relating to the period ending with the day immediately preceding the appointed day?</label>
                                                    <br>
                                                    <input name="group5A1" type="radio" class="with-gap" id="group5A1Yes" />
                                                    <label for="group5A1Yes">Yes </label>
                                                    <input name="group5A1" type="radio" id="group5A1No" class="with-gap" />
                                                    <label for="group5A1No">No</label>
                                                </div>
                                                <div class="form-group" id="5AQ1" style="display:none;">
                                                    <label class="form-label">Whether it is admissible as ITC under GST Act?</label>
                                                    <br>
                                                    <input name="group5A2" type="radio" class="with-gap" id="group5A2Yes" />
                                                    <label for="group5A2Yes">Yes </label>
                                                    <input name="group5A2" type="radio" id="group5A2No" class="with-gap" />
                                                    <label for="group5A2No">No</label>
                                                </div>
                                                <div class="form-group" id="5AQ2" style="display:none;">
                                                    <label class="form-label">Whether you have furnished all the returns for preceding six months?</label>
                                                    <br>
                                                    <input name="group5A3" type="radio" class="with-gap" id="group5A3Yes" />
                                                    <label for="group5A3Yes">Yes </label>
                                                    <input name="group5A3" type="radio" id="group5A3No" class="with-gap" />
                                                    <label for="group5A3No">No</label>
                                                </div>
                                                <div class="form-group" id="5AQ3" style="display:none;">
                                                    <label class="form-label">Whether the said ITC relates to goods manufactured and cleared under such exemption notifications as are notified by the Government?</label>
                                                    <br>
                                                    <input name="group5A4" type="radio" class="with-gap" id="group5A4Yes" />
                                                    <label for="group5A4Yes">Yes </label>
                                                    <input name="group5A4" type="radio" id="group5A4No" class="with-gap" />
                                                    <label for="group5A4No">No</label>
                                                </div>
                                                <div class="alert alert-danger" id="5AQ4" style="display:none;">
                                                    You are not eligible to carry forward input tax credit under this section
                                                </div>
                                                </div>
                                                <div id="table5A" style="display:none;">                                                    
                                                    <table class="table table-bordered table-striped table-hover dataTable" id="5ATable">
                                                        <thead>
                                                            <tr>
                                                                <th>Registration No. under existing law 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Please enter your existing registration number under VAT, Service Tax, Excise - One in each row">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                                <th>Tax Period 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                                <th>Date of filling 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                                <th>Balance cenvat credit 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                                <th>Cenvat credit admissible 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                                <th><button type="button" class="btn bg-pink pull-right m-b-10" id="addRow5A">Add row</button></th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="3">Total</th>
                                                                <th>23</th>
                                                                <th>23</th>
                                                                <th></th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="datepicker form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="form-group">
                                                    Upload File
                                                    <input type="file" />
                                                </div>

                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>TIN of Issuer</th>
                                                            <th>Name of Issuer</th>
                                                            <th>Sr. No. of Form</th>
                                                            <th>Amount</th>
                                                            <th>Applicable VAT Rate</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="5">C-Form</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Total</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">F-Form</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Total</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">H/I-Form</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Total</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="tab-pane" id="tab4">

                                                <table class="table table-bordered table-striped table-hover dataTable" id="5CTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Registration No. 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                            <th rowspan="2">Balance of ITC of VAT 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                            <th colspan="2" class="text-center">C Forms</th>
                                                            <th colspan="2" class="text-center">F Forms</th>
                                                            <th rowspan="2">ITC Reversal 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                            <th colspan="2" class="text-center">H/I Forms 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                            <th rowspan="2">Transition ITC 2 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
                                                            <th rowspan="2">
                                                            <button type="button" class="btn bg-pink pull-right m-b-10" id="addRow5C">Add row</button>
                                                                </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Turnover</th>
                                                            <th>Difference Tax</th>
                                                            <th>Turnover</th>
                                                            <th>Tax Payable</th>
                                                            <th>Turnover</th>
                                                            <th>Tax Payable</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" />
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                <div>
                                                <div class="form-group" id="6AQ0">
                                                    <label class="form-label">Whether such tax credit amount is admissible under existing Laws?</label>
                                                    <br>
                                                    <input name="group6A1" type="radio" class="with-gap" id="group6A1Yes" />
                                                    <label for="group6A1Yes">Yes </label>
                                                    <input name="group6A1" type="radio" id="group6A1No" class="with-gap" />
                                                    <label for="group6A1No">No</label>
                                                </div>
                                                <div class="form-group" id="6AQ1" style="display:none;">
                                                    <label class="form-label">Whether such tax credit amount is admissible under GST?</label>
                                                    <br>
                                                    <input name="group6A2" type="radio" class="with-gap" id="group6A2Yes" />
                                                    <label for="group6A2Yes">Yes </label>
                                                    <input name="group6A2" type="radio" id="group6A2No" class="with-gap" />
                                                    <label for="group6A2No">No</label>
                                                </div>
                                                
                                                <div class="alert alert-danger" id="6AQ2" style="display:none;">
                                                    You are not eligible to carry forward input tax credit under this section
                                                </div>
                                                </div>
                                                <div id="table6A" style="display:none;">
                                                    <button type="button" class="btn bg-pink pull-right m-b-10" id="addRow6A">Add row</button>

                                                    <table class="table table-bordered table-striped table-hover dataTable" id="6ATable">
                                                        <thead>
                                                        <tr>
                                                            <th rowspan="3">Invoice/Document No.</th>
                                                            <th rowspan="3">Invoice/Document Date</th>
                                                            <th rowspan="3">Supplier Registration no. under existing law</th>
                                                            <th rowspan="3">Reciepients' Registration no. under existing law</th>
                                                            <th colspan="3">Details of capital goods on which credit has been partially availed</th>
                                                            <th rowspan="3">Total eligible cenvat credit under existing law</th>
                                                            <th rowspan="3">Total credit availed under existing law</th>
                                                            <th rowspan="3">Total credit unavailed under existing law</th>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">Values</td>
                                                            <td colspan="2">Duties and Taxes paid</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ED/CVD</td>
                                                            <td>SAD</td>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="2">Total</th>
                                                                <th>23</th>
                                                                <th>23</th>
                                                                <th>23</th>
                                                                <th colspan="2"></th>
                                                                <th>23</th>
                                                                <th>23</th>
                                                                <th>23</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        </tbody>
                                                        </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab6">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Invoice/Document no.</th>
                                                            <th rowspan="2">Invoice/Document Date</th>
                                                            <th rowspan="2">Supplier's registration no. under existing law</th>
                                                            <th rowspan="2">Recipients' registration no. under existing law</th>
                                                            <th colspan="2">Details regarding capital goods on which credit is not availed</th>
                                                            <th rowspan="2">Total eligible VAT [and ET] credit under existing law</th>
                                                            <th rowspan="2">Total VAT [and ET] credit availed under existing law</th>
                                                            <th rowspan="2">Total VAT [and ET] credit unavailed under existing law (acmissible as ITC of State/UT tax)(8-9)</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Value</th>
                                                            <th>Taxes paid VAT [and ET]</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="2">Total</th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="datepicker form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab7">
                                                <div>
                                                <div class="form-group" id="7AQ0">
                                                    <label class="form-label">Whether such goods are used or intended to be used for making taxable supplies under GST. For 7(a) Part ‐7A</label>
                                                    <br>
                                                    <input name="group7A1" type="radio" class="with-gap" id="group7A1Yes" />
                                                    <label for="group7A1Yes">Yes </label>
                                                    <input name="group7A1" type="radio" id="group7A1No" class="with-gap" />
                                                    <label for="group7A1No">No</label>
                                                </div>
                                                <div class="form-group" id="7AQ1" style="display:none;">
                                                    <label class="form-label">Whether such person is eligible for ITC on such inputs under GST.</label>
                                                    <br>
                                                    <input name="group7A2" type="radio" class="with-gap" id="group7A2Yes" />
                                                    <label for="group7A2Yes">Yes </label>
                                                    <input name="group7A2" type="radio" id="group7A2No" class="with-gap" />
                                                    <label for="group7A2No">No</label>
                                                </div>
                                                <div class="form-group" id="7AQ2" style="display:none;">
                                                    <label class="form-label">Whether such person is in possession of invoice or other prescribed documents issued not earlier than 12 months immediately preceding the appointed day.</label>
                                                    <br>
                                                    <input name="group7A3" type="radio" class="with-gap" id="group7A3Yes" />
                                                    <label for="group7A3Yes">Yes </label>
                                                    <input name="group7A3" type="radio" id="group7A3No" class="with-gap" />
                                                    <label for="group7A3No">No</label>
                                                </div>
                                                <div class="form-group" id="7AQ3" style="display:none;">
                                                    <label class="form-label">In case of supplier of services, whether such supply is eligible for any abatement under GST.</label>
                                                    <br>
                                                    <input name="group7A4" type="radio" class="with-gap" id="group7A4Yes" />
                                                    <label for="group7A4Yes">Yes </label>
                                                    <input name="group7A4" type="radio" id="group7A4No" class="with-gap" />
                                                    <label for="group7A4No">No</label>
                                                </div>
                                                <div class="alert alert-danger" id="7AQ4" style="display:none;">
                                                    You are not eligible to carry forward input tax credit under this section
                                                </div>
                                                </div>                                                
                                                <div id="table7A" style="display:none;">
                                                    <button type="button" class="btn bg-pink pull-right m-b-10" id="addRow7A">Add row</button>
                                                    <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7ATable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                        </tr>
                                                        <tr>
                                                            <th>HSN ( at 6 digit level)</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Eligible Duties paid on such inputs</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">7A Where duty paid invoices or any other document are available</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="5">Inputs</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5">Inputs contained in semi-finished and finished goods</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">7B Where duty paid invoices are not available (Applicable only for person other than manufacurer or service provider) – Credit in terms of Rule 1 (4)</th>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5">Inputs</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab8">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="5">Details of inputs in stock</th>
                                                            <th rowspan="2">Total input tax credit related to exempt sales not claimed under earlier law</th>
                                                            <th rowspan="2">Total input tax credit related to exempt sales not claimed under earlier law</th>
                                                            <th rowspan="2">Total Input tax credit admissible as SGST/UGST</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>VAT [ and Entry Tax ] paid</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8">Inputs</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8">Inputs contained in semi-finished and finished goods</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab9">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="5">Details of inputs in stock</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Tax paid</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab10">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab11">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab12">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab13">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab14">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab15">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab16">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab17">
                                                <h3 class="fancy-title">Upload to GSTN</h3>
                                                <h4>5A</h4>
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl. No.</th>
                                                            <th>Registration No. under existing law</th>
                                                            <th>Tax Period</th>
                                                            <th>Date of filling</th>
                                                            <th>Balance cenvat credit</th>
                                                            <th>Cenvat credit admissible</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="2">Total</th>
                                                            <th>33</th>
                                                            <th>33</th>
                                                            <th>33</th>
                                                            <th>33</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>5689</td>
                                                            <td>23</td>
                                                            <td>23</td>
                                                            <td>23</td>
                                                            <td>23</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>8956</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <h4>5B</h4>
                                                <table class="table table-bordered table-striped table-hover dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Registration No.</th>
                                                            <th rowspan="2">Balance of ITC of VAT</th>
                                                            <th colspan="2" class="text-center">C Forms</th>
                                                            <th colspan="2" class="text-center">F Forms</th>
                                                            <th rowspan="2">ITC Reversal</th>
                                                            <th colspan="2" class="text-center">H/I Forms</th>
                                                            <th rowspan="2">Transition ITC 2</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Turnover</th>
                                                            <th>Difference Tax</th>
                                                            <th>Turnover</th>
                                                            <th>Tax Payable</th>
                                                            <th>Turnover</th>
                                                            <th>Tax Payable</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>56</td>
                                                            <td>10</td>
                                                            <td>5</td>
                                                            <td>15</td>
                                                            <td>4</td>
                                                            <td>16</td>
                                                            <td>17</td>
                                                            <td>3</td>
                                                            <td>28</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>56</td>
                                                            <td>10</td>
                                                            <td>5</td>
                                                            <td>15</td>
                                                            <td>4</td>
                                                            <td>16</td>
                                                            <td>17</td>
                                                            <td>3</td>
                                                            <td>28</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <ul class="pager wizard">
                                                <li class="next">
                                                    <button type="button" class="btn bg-teal">Continue</button>
                                                </li>
                                                <li class="save js-sweetalert">
                                                    <button type="button" class="btn bg-teal" data-type="success">Save Draft</button>
                                                </li>
                                                <li class="finish js-sweetalert">
                                                    <button type="button" class="btn bg-deep-purple waves-effect" data-type="cancel">Upload to GSTN</button>
                                                </li>
                                                <li class="finish">
                                                    <button type="button" class="btn btn-warning" onclick="location.href = 'edit-table.html';">Edit</button>
                                                </li>
                                                <li class="finish">
                                                    <button type="button" class="btn bg-indigo" id="printMe">Print</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="{{asset('vtran/js/pages/ui/tooltips-popovers.js')}}"></script>
    <script src="{{asset('vtran/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('vtran/js/pages/ui/dialogs.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('vtran/js/demo.js')}}"></script>
    <script src="{{asset('vtran/js/vtransfer.js')}}"></script>


</body>

</html>