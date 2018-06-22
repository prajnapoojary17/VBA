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
</div>-->
<!-- #END# Page Loader -->
<!-- Top Bar-->
<nav class="navbar" style="    background-color: #4CAF50;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{url('/')}}">GSTTran</a>                
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">  
                <li>
                    <a href="{{url('logout')}}">
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
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>License</h2>
                    </div>
                    <div class="body">
                        <div class="license-error-block"></div>
                        <form  method="POST" action="{{url('/submit-license')}}" id="license-form">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="gstnId">
                                    <label class="form-label">GSTNId</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="legalName">
                                    <label class="form-label">Legal Entity</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tradeName">
                                    <label class="form-label">Trade Name </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <button class="btn bg-pink waves-effect pull-right" type="submit" id="submit-license">ADD LICENSE</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha384-tIwI8+qJdZBtYYCKwRkjxBGQVZS3gGozr3CtI+5JF/oL1JmPEHzCEnIKbDbLTCer" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
    jQuery.validator.addMethod("alphanumeric", function (value, element) {
    return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }, "Only alphanumberic is allowed");
    jQuery.validator.addMethod("gstformat", function (value, element) {
        return this.optional(element) || /^[0-9]{2}[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[0-9]{1}['Z']{1}[0-9]{1}$/.test(value);
    }, "Plz provide valid format");
    $validator = $("#license-form").validate({
        rules: {
            gstnId: {
                required: true,
                minlength: 15,
                gstformat:true   
            },
            legalName: {
                required: true,
                lettersonly: true
            },
            tradeName: {
                required: true,
                lettersonly: true
            },
            highlight: function (input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function (input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);

            }
        }
    });
});

$('#submit-license').on("click", function (e) {
    $valid = $("#license-form").valid();
    if (!$valid) {
        $validator.focusInvalid();
        return false;
    }
    e.preventDefault();
    var formDataValues = document.forms.namedItem("license-form");
    var formValues = new FormData(formDataValues);
    $.ajax({
    type: 'POST',
    url: siteUrl + '/submit-license',
    processData: false,
    contentType: false,
    // dataType: 'json',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: formValues,
    success: function (data) {
        $('.license-error-block').html('');

        if (data.status == 'success' && data.redirect == 'license-detail') {
            location.href = siteUrl + '/license-detail';            
        }
    },
    error: function (data) {
        errors = $.parseJSON(data.responseText);
        $('.license-error-block').html('');
        $("input[name='" + Object.keys(errors)[0] + "']").focus();
        var error_list = '';
        $.each(errors, function (key, value) {
            error_list += value + '<br>';
        });
        $('.license-error-block').html(error_list).css("color", "red");
    }
    });
});
</script>
@endpush
@endsection