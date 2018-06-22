@extends('layouts.v_tran_home')

@section('content')

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
    </div> -->
    <!-- #END# Page Loader -->
   <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{url('/')}}">GST TRAN</a>                
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

    <section class="content content-full">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">
                            <h2>License</h2>
                        </div>
                        <div class="body">
                            <table class="table table-striped table-hover">
                              
                                <tr>
                                    <th>GSTNId</th>
                                    <td>{{$licenseDetail->gstnId}}</td>
                                </tr>
                                <tr>
                                    <th>Legal Entity</th>
                                    <td>{{$licenseDetail->legalName}}</td>
                                </tr>
                                <tr>
                                    <th>Trade Name</th>
                                    <td>{{$licenseDetail->tradeName}}</td>
                                </tr>
                            </table>
                          
                            <button type="button" class="btn btn-lg bg-green pull-right" onclick="location.href = '{{url('/v-transfer-home')}}/{{$licenseDetail->registeredPersonId}}/{{$licenseDetail->gstnId}}/{{$licenseDetail->legalName}}';">Go To vTransfer</button>
                            <button type="button" class="btn btn-lg bg-green" onclick="location.href = '{{url('/billing-address')}}';">Purchase additional licences</button>
                        </div>
                    </div>
                 </div>
             <!---   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GST Tran Returns</h2>
                        </div>
                        <div class="body">
                           <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <span class="badge bg-pink"><i class="material-icons">access_time</i> Draft last updated - 15/06/2017</span>
                                    <span class="badge bg-cyan"><i class="material-icons">access_time</i> Last Date of Filing – 31/12/2017</span>
                                     Tran1
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge bg-teal"><i class="material-icons">access_time</i>  Submitted - 10/07/2017</span>
                                     Tran2
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge bg-orange"><i class="material-icons">access_time</i>  Submitted - 12/08/2017</span>
                                     Tran2
                                </a>
                                <a href="#" class="list-group-item">
                                    <span class="badge bg-purple"><i class="material-icons">access_time</i>  Draft last updated - 05/09/2017</span>
                                     Tran2
                                </a>
                            </div>

                        </div>
                    </div>
                </div>--->
            </div>
        </div>
    </section>
@endsection