@extends('layouts.master_v_transfer')

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
    </div>-->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <section class="content content-main">
        <div class="container-fluid">  
                <div class="row">
                <div class="col-lg-3 col-lg-offset-4 col-md-4 col-md-offset-4">  
                <h1 class="animated fadeInUp">vTransfer</h1>
                <p class="animated fadeInUp" style="animation-delay: 0.8s;">Carry forward input tax credits into the new GST system with this simplified transition app</p>
                <h4 class="animated fadeInUp" style="animation-delay: 1.6s;">Select your business type to get started</h4>

                        <div class="info-box bg-teal hover-expand-effect animated fadeInLeft" style="animation-delay: 2s;" onclick="location.href = '{{url('/v-transfer-home')}}';">
                            <div class="icon">
                                <i class="material-icons">build</i>
                            </div>
                            <div class="content m-t-15">
                                <div class="number">Manufacturer</div>                        
                            </div>
                        </div>
                        <div class="info-box bg-green hover-expand-effect animated zoomIn" style="animation-delay: 2s;" onclick="location.href = 'vtransfer-service.html';">
                            <div class="icon">
                                <i class="material-icons">settings</i>
                            </div>
                            <div class="content m-t-15">
                                <div class="number">Service Provider</div>                        
                            </div>
                        </div>
                        <div class="info-box bg-light-green hover-expand-effect animated fadeInRight" style="animation-delay: 2s;" onclick="location.href = 'vtransfer-trader.html';">
                            <div class="icon">
                                <i class="material-icons">business</i>
                            </div>
                            <div class="content m-t-15">
                                <div class="number">Trader</div>                        
                            </div>
                        </div>
              </div>
                </div>
              </div>
        </section>
    @endsection