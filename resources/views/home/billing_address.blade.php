@extends('layouts.master_dashboard')

@section('content')

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


    <section class="content content-full">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="alert bg-indigo alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button>
					  Our app is not designed for users registering under composition scheme under GST law.
					</div>
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                     <!--<div class="alert alert-info alert-dismissible" id="6A_warning_alert" style="display:block;">                               
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button>
     Our app is not designed for users registering under composition scheme under GST law.</div>-->
                                    <h2>Billing Address</h2>
                                </div>
                                <div class="body">
                                    <div class="error-list"></div>
                                  <form action="{{Config::get('constant.ACTION_URL')}}" method="post" name="payuForm" id="payuForm"> 
                                      {{ csrf_field() }}
                                        <input type="hidden" name="key" id="key" value="{{config('constant.MERCHANT_KEY')}}" />
                                        <input type="hidden" name="hash" id="hash" value=""/>
                                        <input type="hidden" name="txnid" id="txnid" value="{{$txnid}}" />
                                        <!--Please change this parameter value with your success page absolute url like http://mywebsite.com/response.php. -->
                                        <input type="hidden" name="surl" value="{{url('/')}}/{{Config::get('constant.SURL')}}" />
                                        <!--Please change this parameter value with your failure page absolute url like http://mywebsite.com/response.php. -->   
                                        <input type="hidden" name="furl" value="{{url('/')}}/{{Config::get('constant.FURL')}}" />
                                        <input type="hidden" name="productinfo" id="productinfo" value="Licence Prucahse" />
                                        <input type="hidden" name="_token" value="{ { csrf_token() } }">
                                        <input type="hidden" name="amount" value="100" id="amount" />
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line focused">
                                                        <?php 
                                                        if(session()->get('userAuthDetail')){
                                                            $email=session()->get('userAuthDetail')->email;
                                                         
                                                            } else {
                                                             $email=''; 
                                                             
                                                            }  ?>
                                                        <input type="text" class="form-control"  id="email" name="email_user"  value="{{old('firstname',(isset($billing->email)?$billing->email:$email))}}" required  disabled/>
                                                          <input type="hidden" class="form-control"  id="email" name="email"  value="{{old('firstname',(isset($billing->email)?$billing->email:$email))}}" required />
                                                        <label class="form-label">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->firstName)){echo 'focused'; } @endphp">
                                                        <input type="text" class="form-control" name="firstname" value="{{old('firstname',(isset($billing->firstName)?$billing->firstName:''))}}" id="firstname" required />
                                                        <label class="form-label">First Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->lastName)){echo 'focused'; } @endphp">
                                                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{old('lastname',(isset($billing->lastName)?$billing->lastName:''))}}" />
                                                        <label class="form-label">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->address1)){echo 'focused'; } @endphp">
                                                        <textarea class="form-control" name="address1" id="address1">{{old('address1',(isset($billing->address1)?$billing->address1:''))}}</textarea>
                                                        <label class="form-label">Address 1</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->address2)){echo 'focused'; } @endphp">
                                                        <textarea class="form-control" name="address2" id="address2">{{old('address2',(isset($billing->address2)?$billing->address2:''))}}</textarea>
                                                        <label class="form-label">Address 2</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->city)){echo 'focused'; } @endphp">
                                                        <input type="text" class="form-control" value="{{old('city',(isset($billing->city)?$billing->city:''))}}" name="city" id="city">
                                                        <label class="form-label">City</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->state)){echo 'focused'; } @endphp">
                                                        <input type="text" value="{{old('state',(isset($billing->state)?$billing->state:''))}}" class="form-control"  name="state" id="state">
                                                        <label class="form-label">State</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->pinCode)){echo 'focused'; } @endphp">
                                                        <input type="text" value="{{old('zipcode',(isset($billing->pinCode)?$billing->pinCode:''))}}" class="form-control"  name="zipcode" id="zipcode">
                                                        <label class="form-label">Pin Code</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                       
                                                <div class="form-group form-float">
                                                    <div class="form-line @php if(isset($billing->phoneNumber)){echo 'focused'; } @endphp">
                                                        <input type="text" value="{{old('phone',(isset($billing->phoneNumber)?$billing->phoneNumber:''))}}" class="form-control" name="phone" id="phone" required>
                                                        <label class="form-label">Phone No.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>   
                        
                       <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

                            <div class="info-box hover-expand-effect" id="price1">
                                <div class="icon bg-orange">
                                    <i class="material-icons" >turned_in_not</i>
                                </div>
                                <div class="content">
                                    <div class="text">Packages 1-9</div>
                                    <div class="number-addon">Rs </div>
                                    <div class="number">
                                        <b class="count-to" data-from="0" data-to="100" data-speed="1000" data-fresh-interval="20"></b>/license
                                    </div>                            
                                </div>
                            </div>
                            <div class="info-box hover-expand-effect" id="price2">
                                <div class="icon bg-indigo">
                                    <i class="material-icons">star</i>
                                </div>
                                <div class="content">
                                    <div class="text">Packages 10-25</div>
                                    <div class="number-addon">Rs </div>
                                    <div class="number">
                                        <b class="count-to" data-from="0" data-to="95" data-speed="1000" data-fresh-interval="10"></b>/license
                                    </div> 
                                </div>
                            </div>
                            <div class="info-box hover-expand-effect" id="price3">
                                <div class="icon bg-green">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <div class="content">
                                    <div class="text">Packages 26-50</div>
                                    <div class="number-addon">Rs </div>
                                    <div class="number">
                                        <b class="count-to" data-from="0" data-to="90" data-speed="1000" data-fresh-interval="10"></b>/license
                                    </div> 
                                </div>
                            </div>

                            <div class="card">
                                <div class="body">
                                    <form class="form-horizontal">


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                                                <label class="control-label">No of licenses</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="input-group spinner" data-trigger="spinner">
                                                    <div class="form-line">
                                                        <input name="noOfLicence" type="text" class="form-control text-center" value="1" maxlength="3"  data-rule="quantity" id="noOfLicence" onkeyup="getAmount();" />
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <a href="javascript:;"  class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up" id="spin-up" ></i></a>
                                                        <a href="javascript:;"  class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down" id="spin-down"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                         </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                                                <label class="control-label">Total Price</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <h3 class="form-control-static text-right">Rs <span id="price">100</span></h3>                                                
                                            </div>
                                         </div>
                                        <div class="form-group text-right" id="button_span">
                                                <button type="button" class="btn btn-lg bg-pink" id="purchase">PURCHASE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>                            
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
@push('script')
 <script>var siteUrl = '<?php echo url('/'); ?>'; </script>
 
 <script>
     $(document).ready(function(){
           setTimeout(function() {
             
           getAmount();
               $('#payuForm input,textarea').each(function(){
                    var $this = $(this);
                     if ($this.is("input")&& $(this).val()) {
          var name=  $(this).attr('name');
       // alert($(this).attr('name'));
        $('input[name="'+name+'"]').parent('div').addClass('focused');
    } else if ($this.is("select")) {
        // <select> element.
        
    } else if ($(this).is("textarea") && $(this).val()) {
         var name=  $(this).attr('name');
      
       // alert($(this).attr('name'));
        $('textarea[name="'+name+'"]').parent('div').addClass('focused');
    }
    if($(this).val()){
   
    }
        
});
            }, 200);
        
   /*      $("form#payuForm :input").each(function(){
 var input = $(this); // This is the jquery object of the input, do what you will
 console.log(input);
});*/
        /* $("form").each(function(){
   console.log($(this).find(':input') ) ;
    //<-- Should return all input elements in that specific form.
});*/
         
       jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");

var $validator = $("#payuForm").validate({
        rules: {
            firstname: {
                required: true,
                lettersonly: true
            },
             lastname: {
                required: true,
              lettersonly: true
            },
             phone: {
      required: true,
      number: true,
      maxlength: 10,
    minlength:10
      
    }, city: {
                required: true,
                lettersonly: true
            },
            state: {
                required: true,
                lettersonly: true
            },address1: {
                required: true,
              
            },
      zipcode: {
      required: true,
      number: true,
      minlength: 6,
     maxlength:6
      
    }, noOfLicence: {
      required: true,
      number: true,
      maxlength: 50,
     
      
    }
    
  /*  city
    state
    address2
    address1*/
    
        },
        highlight: function(input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function(input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
            
        }
    });
   
    });
 </script>
 <script>
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#purchase').on('click', function(){ 
       var $valid = $("#payuForm").valid();
            if (!$valid) {
                $validator.focusInvalid();
                
                return false;
            }
    var key = $('#key').val();
    var txnid = $('#txnid').val();
    var amount = $('#amount').val();
    var productinfo = $('#productinfo').val();
    var phone = $('#phone').val();
    var email = $.trim($('#email').val());
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var address1= $('#address1').val();
    var city= $('#city').val();
    var state= $('#state').val();
    var zipcode= $('#zipcode').val();
    var phone= $('#phone').val();
    var noOfLicence= $('#noOfLicence').val();
   /* if(email == '' || firstname == '' || phone == '')
    {
        alert('Please fill Email, First and Phone');
        return false;
    }*/
    var dataString = 'key='+key+ '&txnid=' +txnid+'&amount=' +amount+
    '&productinfo=' +productinfo+'&firstname=' +firstname+'&email=' +email+'&phone=' +phone+'&lastname='
    +lastname+'&address1=' +address1+'&city=' +city+'&state=' +state+'&zipcode=' +zipcode+'&phone=' +phone+'&noOfLicence=' +noOfLicence;
   // $('#purchase').remove();
    $.ajax({ 
    url: siteUrl+"/getHash", 
    async: true,
    type: "POST", //The type which you want to use: GET/POST
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:dataString,
    dataType: "html", //Return data type (what we expect).
    //This is the function which will be called if ajax call is successful.
        success: function(data) 
        {                
            
            if(data == 'error')
            {
                alert("Error....!");
                $("#button_span").append('<button type="button" class="btn btn-lg bg-pink" id="purchase">PURCHASE</button>');
            }
            else
            {
                $('#hash').val(data);
                $('#payuForm').submit();
            }

        },
      error: function(data){
       
          console.log(data);
           $(".error-list").html(""); 
          errors = $.parseJSON(data.responseText);
                $("input[name='"+Object.keys(errors)[0]+"']").focus();
                var error_list='';
                $.each( errors , function( key, value ) {
                 error_list+=value+'<br>';
                  
                });
                 $('.error-list').html(error_list).css("color", "red");
        //  alert('error');
          /* $("#formSuccess").hide();
                $(".error-block").html(""); 
                errors = $.parseJSON(data.responseText);
                $("input[name='"+Object.keys(errors)[0]+"']").focus();
                var error_list='';
                $.each( errors , function( key, value ) {
                 error_list+=value+'<br>';
                  
                });
                 $('.error-list').html(error_list).css("color", "red");*/
      
      }
    });
})
 
function getTotalAmount(getVal)
{
    var amount = 0;
    //Value Between 1 - 3
    if(getVal > 0 && getVal < 10)
    {
         amount = getVal * 100;
    }
    else if(getVal > 9 && getVal < 26)
    {
         amount = getVal * 95;
    }
    else if(getVal > 25 && getVal < 1000) 
    {
        amount = getVal * 90;
    }else{
        return false;
    }
    return amount;
    
}
$('#spin-up').on('click', function(){
    
    var getVal = parseInt($('#noOfLicence').val());
    
    if(getVal>50){
        
    }
  
    getVal = getVal + 1;
    highlight(getVal);
    var amount = getTotalAmount(getVal);
    if(amount != 0)
    {
        $('#price').html(amount);
        $('#amount').val(amount);
    }
});

$('#spin-down').on('click', function(){
    var getVal = parseInt($('#noOfLicence').val());
   
    getVal = getVal - 1;
     highlight(getVal);
    var amount = getTotalAmount(getVal);
    if(amount != 0)
    {
        $('#price').html(amount);
        $('#amount').val(amount);
    }
});

function getAmount()
{
    var getVal = parseInt($('#noOfLicence').val());
      
    highlight(getVal);
    var amount = 0;
    //Value Between 1 - 3
    if(getVal > 0 && getVal < 10)
    {
         amount = getVal * 100;
    }
    else if(getVal > 9 && getVal < 26)
    {
         amount = getVal * 95;
    }
    else if(getVal > 25) 
    {
        amount = getVal * 90;
    }
    if(amount != 0)
    {
        $('#price').html(amount);
        $('#amount').val(amount);
    }
}



 </script>
 <script>         
    $('#noOfLicence').on('keyup change click',function() {
    getAmount();
    });
    
    function highlight(getVal){
       
          if((getVal<=9)){
        $('#price1').addClass('bg-orange');
        }else{
        $('#price1').removeClass('bg-orange');
        }
        if((getVal>=10) && getVal<=25){
        $('#price2').addClass('bg-indigo');
        }else{
        $('#price2').removeClass('bg-indigo');
        }
        if((getVal>=26)){
        $('#price3').addClass('bg-green');
        }else{
        $('#price3').removeClass('bg-green');
        }
    }

$(document).ready(function(){
   getVal= $('#noOfLicence').val();
    highlight(getVal) 
});
    </script>
@endpush
@endsection