@extends('layouts.v_tran_home')

@section('content')
<?php

/*echo "<pre>";
print_r($registeredPersonDetail);
exit();*/
?>
  <style type="text/css" media="print">
    @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
        border: solid 1px blue ;
        margin: 10mm 15mm 10mm 15mm; /* margin you want for the content */
    }
    @media print {
    #Header, #Footer { display: none !important; }
}
.registrationNumberFormat{
    text-transform: uppercase;
}

    </style>
<style>
    .bootstrap-select dropup{
        width:100%;
    }
    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 100%;
}
input[type="text"] {
    text-align: left;
}
input[type="number"] {
        text-align: right;
}
.tabTableColumnHeading  th,.tabTableColumnHeading  td{
       text-align: center;
}
.totalFooter th{
        text-align: right;
    padding-right: 34px;
}
    </style>


    <section class="content content-full">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="ribbon-title">Tran 1</div>
                        <div class="body">
                            <section id="wizard" class="steps-wizard">
                         <!---<form id="wizardForm" > -->
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
                                                        <li><a href="#tab18" data-toggle="tab"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="bar" class="progress">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab0">
                                                <h3 class="fancy-title">GST Transition Preparedness</h3>
                                                <ol class="fancty-list">
                                                    <li>Ensure prior six months returns are filed under existing laws</li>
                                                    <li> Details of stock in hand as on 30.6.2017</li>
                                                    <li> Details of stock with Job workers.</li>
                                                    <li> Details of Capital Goods in hand.</li>
                                                    <li> Details of Capital Goods with Job workers.</li>
                                                    <li>Get the account statement from your Suppliers / Creditors for the year
                                                        ended 31/3/2017 & reconcile them from your books.</li>
                                                    <li> Rectify Mismatch Reports of Purchases, if persists.</li>
                                                    <li> Revise your Vat Returns , if applicable</li>
                                                    <li> Make strict follow-up to collect all the C forms/H Form/ I form. </li>
                                                    <li> Get your Books Finalised for FY 2016-17 </li>
                                                    <li>Make a separate file of those items which are shown in your unsold stock
                                                        as on 30.6.2017 e.g. Purchase Bills/ Bill of Entry/ Excise Paying Documents etc.</li>                                                    
                                                    <li> Stock ageing be made to ascertain if any stock is more than one year
                                                        old.  </li>
                                                    <li> Classify stock tax rate wise, purchased locally to get ITC into SGST.</li>
                                                    <li> Classify stock purchased on invoices bearing Duty Payment & non duty
                                                        payments to get ITC transferred to CGST. </li>
                                                </ol>
                                            </div>
                                            <div class="tab-pane" id="tab1">
                                                @include('vtransfertab.general_tab')
                                       </div>
                                            <div class="tab-pane" id="tab2">    
                                                 @include('vtransfertab.5a_tab')
                                            </div>
                                            <div class="tab-pane" id="tab3">  
                                                @include('vtransfertab.5b_tab')

                                            </div>
                                            <div class="tab-pane" id="tab4">
                                              @include('vtransfertab.5c_tab')
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                            @include('vtransfertab.6a_tab')
                                            </div>
                                            <div class="tab-pane" id="tab6">
                                               @include('vtransfertab.6b_tab')
                                            </div>
                                            <div class="tab-pane" id="tab7">
                                                 @include('vtransfertab.7a7a_tab')
                                            </div>
                                            <div class="tab-pane" id="tab8">
                                                @include('vtransfertab.7a7b_tab')
                                            </div>                                            
                                            <div class="tab-pane" id="tab9">
                                                   @include('vtransfertab.7b_tab')
                                            </div>
                                            <div class="tab-pane" id="tab10">
                                                         @include('vtransfertab.7c_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab11">
                                                 @include('vtransfertab.8_tab') 
                                            </div>                                   
                                          
                                            <div class="tab-pane" id="tab12">
                                               @include('vtransfertab.9a_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab13">
                                                 @include('vtransfertab.9b_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab14">
                                                 @include('vtransfertab.10a_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab15">
                                                    @include('vtransfertab.10b_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab16">
                                                    @include('vtransfertab.11_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab17">
                                                  @include('vtransfertab.12_tab') 
                                            </div>
                                            <div class="tab-pane" id="tab18">
                                                @include('vtransfertab.tab_preview')
                                             
                                            </div>
                                          
                                              <ul class="pager wizard">                                                
                                                <li class="next">
                                                    <button type="button" id="continue" class="btn bg-green">Continue</button>
                                                </li>
                                                <li class="save">
                                                    <button type="button" class="btn bg-green" data-type="success" id="save_return_draft" style="{{($last_tab_id    ==  0) ? 'display:none':''}}">Save Draft</button>
                                                    <button type="button" class="btn bg-green" data-type="success" style="{{($last_tab_id    ==  0) ? 'display:none':''}}">Save Draft</button>
                                                </li>
                                                <li  class="save">
                                                     <button id="preview" type="button" class="btn bg-green" data-type="success" style="display:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preview&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                </li>
                                                <li class="next">
                                                    <button id="commonBack" type="button" class="btn bg-green" data-type="success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                 <!--   <button type="button" class="btn bg-green" data-type="success" id="5cBack" style="display: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                    <button type="button" class="btn bg-green" data-type="success" id="5bBack" style="display: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> -->
                                                </li>
                                                <li class="finish js-sweetalert">
                                                    <button type="button" class="btn bg-deep-purple waves-effect" data-type="cancel">Upload to GSTN</button>
                                                </li>
                                                <li class="finish">
                                                    
                                                    <a href="{{url('/v-transfer-edit')}}/{{Request::segment(2)}}/{{Request::segment(3)}}/{{Request::segment(4)}}" class="btn btn-warning" >Edit</a>
                                                   
                                                </li>
                                                <li class="finish">
                                                    <button class="btn bg-indigo" id="printGsthtml"  >Print</button>
                                                  
                                                </li>
                                                <li class="finish">
                                                    <button callUrl="{{url('/v-transfer-edit')}}" regId="{{Request::segment(2)}}" gstnId="{{Request::segment(3)}}" licence="{{Request::segment(4)}}" type="button" class="btn bg-indigo" id="printGst" >Export to PDF</button>
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                        <input type="hidden" name="last_tab_id" id="last_tab_id" value="{{$last_tab_id}}">
                                         <input type="hidden" name="save_draft_date" id="save_draft_date" value="{{ date('Y-m-d')}}">
                       <!-- </form> -->
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php 
     $registeredPersonId = session()->get('registeredPersonDetail');
  
    @endphp
    
    <input type="hidden" name="last_tab_id" id="last_tab_id" value="{{$last_tab_id}}">
     <input type="hidden" name="vatRegNo" id="vatRegNo" value="{{$registeredPersonId->vatRegNo}}">
     <input type="hidden" name="serviceTaxRegNo" id="serviceTaxRegNo" value="{{$registeredPersonId->serviceTaxRegNo}}">
      <input type="hidden" name="exciseRegNo" id="exciseRegNo" value="{{$registeredPersonId->exciseRegNo}}">
         <input type="hidden" name="sessionTabId" id="sessionTabId" value="{{session()->get('registeredPersonDetail')->tabId}}">
       <input type="hidden" name="sessionBackButtonArray" id="sessionBackButtonArray" value="{{session()->get('registeredPersonDetail')->saveBackButton}}">
    @push('script')
    <script> var siteUrl = '<?php echo url('/'); ?>'; </script>
      <script src="{{asset('vtran/js/vtransfer.js')}}"></script>
      <script src="{{asset('/js/printThis.js')}}"></script>
    <script>
       $('body').on('keyup', '.registrationNumberFormat', function(ev){
             this.value = this.value.toUpperCase();
       });
       
       
        $(function() {
            savedTabArray= $.parseJSON($('#sessionBackButtonArray').val());
  if($('#sessionTabId').val()!='' &&getParameterByName('tabId')==null){
      
      var tabId=$('#sessionTabId').val();
     // alert("tabId="+tabId);
     if(tabId==17){ tabId=17+1; }
   $('#rootwizard').bootstrapWizard('show', tabId);
     
     $('#save_return_draft').show();
  }
        
$('input[name="registration_no_5C"]').val($('#vatRegNo').val());
    
  $(document).on('change','.nature_of_itc_5A', function(){
    rowIndex = $(this).closest('tr').prevAll().length;
    $('input[name="registration_number_5A"]').eq(rowIndex).val('');
   if(this.value=='service_tax'){
      setTimeout(function () {
          if($('#serviceTaxRegNo').val()){
            $('input[name="registration_number_5A"]').eq(rowIndex).val($('#serviceTaxRegNo').val());
          }
    }, 500);
   } else if(this.value=='cental_excise'){
        setTimeout(function () {
            if($('#exciseRegNo').val()){
                $('input[name="registration_number_5A"]').eq(rowIndex).val($('#exciseRegNo').val());
            }
         }, 500);
   }
    
  });
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
     
  $(document).on('change','.itc_carried_forward_6A', function(){
        rowIndex = $(this).closest('tr').prevAll().length;
        $('input[name="recipient_regno_6A"]').eq(rowIndex).attr('value','');
        if(this.value=='central_excise'){
            setTimeout(function () {
                if($('#exciseRegNo').val()){
                $('input[name="recipient_regno_6A"]').eq(rowIndex).attr('value',$('#exciseRegNo').val());
                }
                }, 200);
            }
});

  //8th tab
    $('#table8tbody').on('change','select[name="type_of_tax_8"]', function(event){
        event.preventDefault();
        rowIndex = $(this).closest('tr').prevAll().length;
 
        $('input[name="register_no_8"]').eq(rowIndex).attr('value','');
        $('input[name="cenvat_credit_8"]').eq(rowIndex).attr('value','');

        if(this.value=='excise'){
            setTimeout(function () {
                if($('#exciseRegNo').val()){
                    $('input[name="register_no_8"]').eq(rowIndex).attr('value',$('#exciseRegNo').val());
                }
                if($('#TinNoInStateEntryTax').val()){
                    $('input[name="cenvat_credit_8"]').eq(rowIndex).attr('value',$('#TinNoInStateEntryTax').val());
                }
            }, 200);
        }
  
   if(this.value=='service_tax'){
  
      setTimeout(function () {
          if($('#serviceTaxRegNo').val()){
 $('input[name="register_no_8"]').eq(rowIndex).attr('value',$('#serviceTaxRegNo').val());
          }
          if($('#TinNoInStateEntryTax').val()){
               $('input[name="cenvat_credit_8"]').eq(rowIndex).attr('value',$('#AmountVatCarriedForward').val());
          } 
          
    }, 200);
   }
});
  
});

$(document).on('change','.type_of_tax_11', function(){
   var rowIndex = $(this).closest('tr').prevAll().length;
    
     $('input[name="registration_no_11"]').eq(rowIndex).attr('value','');
      if(this.value=='vat'){
      setTimeout(function () {
          if($('#vatRegNo').val()){
 $('input[name="registration_no_11"]').eq(rowIndex).attr('value',$('#vatRegNo').val());
          }
    }, 200);
   }
    if(this.value=='service_tax'){
      setTimeout(function () {
          if($('#serviceTaxRegNo').val()){
 $('input[name="registration_no_11"]').eq(rowIndex).attr('value',$('#serviceTaxRegNo').val());
          }
    }, 200);
   }
});

    </script>
    
    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        
        var siteUrl = '<?php echo url("/"); ?>';
        $('#printGst').on('click',function()
        {
            var regId   =   $('#printGst').attr('regId');
            var gstnId  =   $('#printGst').attr('gstnId');
            var licence =   $('#printGst').attr('licence');
            window.location.href = siteUrl + '/printPreview/'+regId+'/'+gstnId+'/'+licence;
        });
      
        
          /*PRINT RETURN */
    $(function() {
        var printValue = getParameterByName('print');;
        if(printValue == '1')
        {
            $('#printInNewTab').val('0');
            $('.fancy-title').hide();
            $('#tab18').printThis(
               {
                  header: null, 
                  footer: null,  
               });
        }        
        $('#printGsthtml').on('click',function()
        {
            var url      = window.location.href; 
            $('#printInNewTab').val('1');
            window.open(url+'&print=1', '_blank');
            return false;             
        });
        
        
    });
    function getParameterByName(name, url) 
    {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    function printPage(){
         var html = $("<div />").append($("#tab18").clone()).html();
            var contents = $(".print-page").html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({
                "position": "absolute",
                "top": "-1000000px"
            });
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
           
            //Create a new HTML document.
            frameDoc.document.write(html);
             frameDoc.document.open();
             // frameDoc.document.open('', '', 'width=700,height=400,_blank');
           // frameDoc.document.write('</head><body>');
            //Append the external CSS file.
           // frameDoc.document.write('<link href="css/print.css" rel="stylesheet" type="text/css" />');
            //Append the DIV contents.
           // frameDoc.document.write(contents);
         //   frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function() {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
    }
    </script>
    <script>
      $('.datepicker').bootstrapMaterialDatePicker({
          // format: 'dddd DD MMMM YYYY',
           format : 'DD/MM/YYYY',
            clearButton: true,
            weekStart: 1,
            time: false,
        });
        
        $('.invoiceDatepicker').bootstrapMaterialDatePicker({
          // format: 'dddd DD MMMM YYYY',
           format : 'DD/MM/YYYY',
            clearButton: true,
            weekStart: 1,
            time: false,
            maxDate :'30/06/2017',
        }).on('change', function (e, date) {
         
            var selectedDate = process(e.target.value);
            var maxDate = process("30/06/2017");
            
            if (selectedDate >= maxDate){
                $('.invoiceDatepicker').val('30/06/2017');
            }   
            console.log(e);
        });
        
        function process(date){
                var parts = date.split("/");
                return new Date(parts[2], parts[1] - 1, parts[0]);
        }
 </script>
 
 <script>
 $(document).ready(function(){
      @if($registeredPersonDetail->taxCredit=='Yes')
              setTimeout(function () {
                   $('#groupG5Yes').click();
                       }, 300);
        @else
             setTimeout(function () {
                   $('#groupG5No').click();
                       }, 300);
       @endif
       
       
     @if($registeredPersonDetail->exciseRegNo||$registeredPersonDetail->vatRegNo||$registeredPersonDetail->serviceTaxRegNo
             ||$registeredPersonDetail->tinNoInState||$registeredPersonDetail->amountVatCarriedForward||$registeredPersonDetail->tinNoInEntryTax||$registeredPersonDetail->entryTaxCarriedForward
                )
    setTimeout(function () {
       
      $("#group2Yes").click();
      //vat
      @if($registeredPersonDetail->vatRegNo)
            $('#group3VAT').click();
            $('input[name="vat_reg_GQ"]').parent('div').addClass('focused');
      @endif 
      @if($registeredPersonDetail->tinNoInState)
          $('#vatchoiceYes').click();
           $('input[name="tin_no_in_state"]').parent('div').addClass('focused');
           @else
                  $('#vatchoiceNo').click();
       @endif
       
     //excise detail 
    @if($registeredPersonDetail->exciseRegNo) 
        $('#group3Excise').click();
        $('input[name="excise_reg_no_GQ"]').parent('div').addClass('focused');
      
      @endif
      
      @if($registeredPersonDetail->tinNoInEntryTax)
        $('#excisechoiceYes').click();
        $('input[name="entry_tax_tin_no"]').parent('div').addClass('focused');
    @else
         $('#excisechoiceNo').click();
     @endif
      
      
      //service detail 
      @if($registeredPersonDetail->serviceTaxRegNo)
          $('#group3ServiceTax').click();
        $('input[name="service_tax_GQ"]').parent('div').addClass('focused');
        
      @endif
      
        @if($registeredPersonDetail->amountVatCarriedForward)
        $('#servicechoiceYes').click();
        $('input[name="amount_vat_caarried_forward"]').parent('div').addClass('focused');
    @else
         $('#servicechoiceNo').click();
     @endif
      //entry detail 
       @if($registeredPersonDetail->entryTax)
          $('#group3EntryTax').click();
        $('input[name="entry_tax_GQ"]').parent('div').addClass('focused');
     
      
      @endif
      
        @if($registeredPersonDetail->entryTaxCarriedForward)
        $('#entrytaxchoiceYes').click();
          $('input[name="amount_entry_caarried_forward"]').parent('div').addClass('focused');
    @else
         $('#entrytaxchoiceNo').click();
     @endif
     }, 300);
      
       
     @endif 
     
    setTimeout(function () {
     
 @if($registeredPersonDetail->isManufacturer==1)
      $("#chkBoxG1Manufacturer").click();
    
   @endif 
  @if($registeredPersonDetail->isServiceProvider==1)
      $("#chkBoxG1ServiceProvider").click();
    
   @endif 
  @if($registeredPersonDetail->isTrader==1)
      $("#chkBoxG1Trader").click();
   @endif 
      }, 300);
 });
     
 </script>
  <script>
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
         //$("#group3VATOneAns").toggle(this.checked);
        $("#group3Choice").toggle(this.checked);
    });
    
   
    $('.vatchoice').click(function(){
        if(this.value=='normal_registration'){
            $("#group3VATOneAns").show();
        }else{
            $("#group3VATOneAns").hide();
        }
    });
    
    
    $("#group3ServiceTax").on("click",function() {
        $("#group3ServiceTaxAns").toggle(this.checked);
        //$("#group3ServiceTaxOneAns").toggle(this.checked);
        $("#group3ServiceChoice").toggle(this.checked);
    });
    
     
    $('.servicechoice').click(function(){
        if(this.value=='normal_registration'){
            $("#group3ServiceTaxOneAns").show();
        }else{
            $("#group3ServiceTaxOneAns").hide();
        }
    });
    
    $("#group3Excise").on("click",function() {
        $("#group3ExciseAns").toggle(this.checked);
        //  $("#group3ExciseOneAns").toggle(this.checked);
           $("#group3ExciseChoice").toggle(this.checked);
    });
    
     
    $('.excisechoice').click(function(){
        if(this.value=='normal_registration'){
            $("#group3ExciseOneAns").show();
        }else{
            $("#group3ExciseOneAns").hide();
        }
    });
    
    $("#group3EntryTax").on("click",function() {
        $("#group3EntryTaxAns").toggle(this.checked);
       //  $("#group3EntryTaxOneAns").toggle(this.checked);
       $("#group3EntryChoice").toggle(this.checked);
    });
     
    $('.entrytaxchoice').click(function(){
        if(this.value=='normal_registration'){
            $("#group3EntryTaxOneAns").show();
        }else{
            $("#group3EntryTaxOneAns").hide();
        }
    });
   
 
    </script>
    
    @endpush
@endsection