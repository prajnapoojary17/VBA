@extends('layouts.v_tran_home')

@section('content')
  <!-- Page Loader-->
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
                <a class="navbar-brand" href="{{url('/')}}">vTran</a>                
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
                        <a href="{{url('/logout')}}">
                            <i class="material-icons">person</i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <section class="content content-full" id="wizard">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="ribbon-title">Tran 1</div>
                        <div class="body steps-wizard">                            
                            <ul class="nav nav-tabs tab-nav-right  tab-col-pink" role="tablist">
                                <li role="presentation" class="active"><a href="#5A" data-toggle="tab">5a</a>
                                </li>
                                <li role="presentation"><a href="#5B" data-toggle="tab">5b</a>
                                </li>
                                <li role="presentation"><a href="#5C" data-toggle="tab">5c</a>
                                </li>
                                <li role="presentation"><a href="#6A" data-toggle="tab">6a</a>
                                </li>
                                <li role="presentation"><a href="#6B" data-toggle="tab">6b</a>
                                </li>
                                <li role="presentation"><a href="#7A7A" data-toggle="tab">7aA</a>
                                </li>
                                  <li role="presentation"><a href="#7A7B" data-toggle="tab">7aB</a>
                                </li>
                                <li role="presentation"><a href="#7B" data-toggle="tab">7b</a>
                                </li>
                                <li role="presentation"><a href="#7C" data-toggle="tab">7c</a>
                                </li>
                                <li role="presentation"><a href="#8" data-toggle="tab">8</a>
                                </li>
                                <li role="presentation"><a href="#9A" data-toggle="tab">9a</a>
                                </li>
                                <li role="presentation"><a href="#9B" data-toggle="tab">9b</a>
                                </li>
                                <li role="presentation"><a href="#10A" data-toggle="tab">10a</a>
                                </li>
                                <li role="presentation"><a href="#10B" data-toggle="tab">10b</a>
                                </li>
                                <li role="presentation"><a href="#11" data-toggle="tab">11</a>
                                </li>
                                <li role="presentation"><a href="#12" data-toggle="tab">12</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="5A">
                                @include('editvtransfer.5a_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="5B">
                                    @include('editvtransfer.5b_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="5C">
                                   @include('editvtransfer.5c_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="6A">
                                       @include('editvtransfer.6a_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="6B">
                                    @include('editvtransfer.6b_edit')
                                </div>
                             
                                   <div role="tabpanel" class="tab-pane fade" id="7A7A">
                                         @include('editvtransfer.7a7a_edit')
                                </div>
                                 <div role="tabpanel" class="tab-pane fade" id="7A7B">
                                         @include('editvtransfer.7a7b_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="7B">
                                    @include('editvtransfer.7b_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="7C">
                                    @include('editvtransfer.7c_edit')
                                </div>
                                  <div role="tabpanel" class="tab-pane fade" id="8">
                                    @include('editvtransfer.8_edit')
                                </div>
                                 <div role="tabpanel" class="tab-pane fade" id="9A">
                                     @include('editvtransfer.9a_edit')
                                 </div>
                                <div role="tabpanel" class="tab-pane fade" id="9B">
                                     @include('editvtransfer.9b_edit')
                                </div>
                              <div role="tabpanel" class="tab-pane fade" id="10A">
                                  @include('editvtransfer.10a_edit')
                                </div>
                                 <div role="tabpanel" class="tab-pane fade" id="10B">
                                  @include('editvtransfer.10b_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="11">
                                   @include('editvtransfer.11_edit')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="12">
                                   @include('editvtransfer.12_edit')
                                </div>
                                
                                <ul class="pager">
                                    <li>
                                       
                                        <a href=" {{url('/v-transfer-home')}}/{{Request::segment(2)}}/{{Request::segment(3)}}/{{Request::segment(4)}}?tabId=18"  class="btn bg-teal pull-right">Preview</a>
                                       
                                    </li>
                                    <li class="save ">
                                        <button type="button" class="btn bg-teal" data-type="success" id="save_return_draft">Save Draft</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
    
  <script src="{{asset('vtran/js/edit_v_transfer.js')}}"></script>
  <script src="{{asset('/js/printThis.js')}}"></script>
    <script>
        
        
      $('.datepicker').bootstrapMaterialDatePicker({
          // format: 'dddd DD MMMM YYYY',
           format : 'DD/MM/YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
        });
 </script>
  <script>
      $(document).on('change', 'table', function() {
   //alert('yes');
});
        $(document).ready(function () {
            //grabs the hash tag from the url
            var hash = window.location.hash;
            //checks whether or not the hash tag is set
            if (hash != "") {
                $('#bar').addClass('hide');
                $('#rootwizard .nav-dots').addClass('hide');
                $('.next, .save').addClass('hide');
                $('.finish').removeClass('hidden');
                //removes all active classes from tabs
                $('#tabs li').each(function () {
                    $(this).removeClass('active');
                });
                $('#myTabContent div').each(function () {
                    $(this).removeClass('in active');
                });
                //this will add the active class on the hashtagged value
                var link = "";
                $('#tabs li').each(function () {
                    link = $(this).find('a').attr('href');
                    if (link == hash) {
                        $(this).addClass('active');
                    }
                });
                $('#myTabContent div').each(function () {

                    link = $(this).attr('id');
                    if ('#' + link == hash) {

                        $(this).addClass('in active');
                    }
                });
            }
        });
         /* Questions Initial */
    $("#group3VAT").on("click",function() {
        $("#group3VATAns").toggle(this.checked);
    });
    $("#group3ServiceTax").on("click",function() {
        $("#group3ServiceTaxAns").toggle(this.checked);
    });
    $("#group3Excise").on("click",function() {
        $("#group3ExciseAns").toggle(this.checked);
    });
    
    $('input[name=group2]').click(function() {
        if (this.id == "group2No") {
            $("#ques3, #ques4").slideDown('slow');
           // $("#ques5").slideUp('slow');
        } else {
            $("#ques3, #ques4").slideUp('slow');
            //$("#ques5").slideDown('slow');
        }
    });
    </script>
    @endpush
@endsection