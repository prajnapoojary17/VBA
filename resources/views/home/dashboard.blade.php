@extends('layouts.master_dashboard')
@section('content')
<style>
    .highlight_row{
    background: #3f51b5;
    color: #ffffff;
    }
</style>
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
  <section class="content content-full">
        <div class="container-fluid">
		
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card card-condensed">
					<div class="body">
						<div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="block-box bg-indigo">
									<div class="icon">
										<i class="material-icons">recent_actors</i>
									</div>
								</div>
							</div>
                            <div class="col-lg-4 col-md-8 col-sm-6 col-xs-12">
								<h4>Total licenses</h4>
								<h2><div class="number count-to" data-from="0" data-to="{{$gstnDetail['totalLicense']}}" data-speed="1000" data-fresh-interval="1"></div></h2>
							</div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<a href="{{url('/billing-address')}}" class="btn btn-lg bg-indigo waves-effect">Purchase Additional Licenses</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card card-condensed">
					<div class="body">
						<div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="block-box bg-green">
									<div class="icon">
										<i class="material-icons">receipt</i>
									</div>
								</div>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h4>Licenses in Use</h4>
								<h2><div class="number count-to" data-from="0" data-to="{{$gstnDetail['licenseInUse']}}" data-speed="1000" data-fresh-interval="201"></div></h2>
							</div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                 @if($gstnDetail['licenseInUse']<$gstnDetail['totalLicense'])
                                <a href="#" class="btn bg-green waves-effect" data-toggle="modal" data-target="#AssignLicense">Assign License</a>
                                @else
                                <a href="#" class="btn bg-green waves-effect" disabled>Assign License</a>
                                @endif
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					
		
		    <!-- Assign License -->
                        <div class="modal fade" id="AssignLicense" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="license-error-block"></div>
                                    <form  method="POST" action="{{url('/submit-license')}}" id="license-form">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="AssignLicenseLabel">New License</h4>
                                        </div>
                                        <div class="modal-body">
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
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link waves-effect"  id="submit-license">ASSIGN LICENSE</button>
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Widgets -->
                        <!--edt gstn Details-->
                        <div class="modal fade" id="updateGstn" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" id="gstnModalBody">

                                </div>
                            </div> </div>
                        <!--end of gstn-->
		
		
            <div class="row clearfix"> 
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                           <table class="table table-bordered table-striped table-hover dataTable basic-datatable" id="multi-license-table">
                            <thead>
                                <tr>
                                    <th>GSTNId</th>
                                    <th>Legal Entity Name</th>
                                    <th>Trade Name</th>
                                    <th style="display:none">Tab Id</th>
                                     <th style="display:none">Save Draft Date</th>
                                    <th class="no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody id="multple_license_tbody">
                            </tbody>
                        </table>

               
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tab-content tab-chart">

                    <div class="card tab-pane active" role="tabpanel" id="tab2">
                        <div class="body">
							<div class="row">
								<div class="col-md-6">
									<h4 s>Tran 1</h4>
									 <canvas id="chartTran3"></canvas>
								</div>
								<div class="col-md-6">
									<h4>Tran 2</h4>
									 <canvas id="chartTran4"></canvas>
								</div>
							</div>
						</div>
                    </div>
					
                    <div class="card tab-pane active" role="tabpanel"  id="tab1">
                        <div class="body">
							<div class="row">
								<div class="col-md-6">
									<h4 style="text-align: center;" id="tranTitle"></h4>
									 <canvas id="chartTran1"></canvas>
								</div>
								<div class="col-md-6">
									<h4 style="text-align: center;">Tran 2</h4>
									 <canvas id="chartTran2"></canvas>
								</div>
							</div>
						</div>
                    </div>
                </div>
				
				
            </div>
        </div>
    </section>
	 
@push('script')
<script>
</script>
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

    $validatorUpdateGstnForm = $("#updateGstnForm").validate({
        rules: {
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
$(document).on('click', "#updateLicense", function (e) {
    $valid = $("#updateGstnForm").valid();
    if (!$valid) {
        $validatorUpdateGstnForm.focusInvalid();
        return false;
    }
    e.preventDefault();
    var formDataValues = document.forms.namedItem("updateGstnForm");
    var formValues = new FormData(formDataValues);
    $.ajax({
        type: 'POST',
        url: siteUrl + '/update-license-detail',
        processData: false,
        contentType: false,
        // dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: formValues,
        success: function (data) {
            if (data.status == 'success') {
                $('#updateGstn').modal('toggle');
                licenseDataTable.draw(false);
            }
        },
        error: function (data) {
            console.log(data);
        }
    });
});
function editGstn(id) {
    $.ajax({
        type: 'GET',
        url: siteUrl + '/get-gstn-detail/' + id,
        success: function (data) {
            $('#gstnModalBody').html(data);
            $('#updateGstn').modal({
                backdrop: 'static',
                keyboard: false
            });
            if ($('input[name="legalName"]').val()) {
                alert();
                $('input[name="legalName"]').parent('div').addClass('focused');
            }           
            // showSuccessMessage();
        },
        error: function () {
            return false;
        }
    });
}
$('#submit-license').on("click", function (e) {
    e.preventDefault();
    var $valid = $("#license-form").valid();
    if (!$valid) {
        $validator.focusInvalid();
        return false;
    }
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
                $("body").load(location.href + "#container-fluid");
                // location.href=siteUrl+'/license-detail';                
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

$(document).ready(function () {
    $.extend($.fn.dataTable.defaults, {
        language: {
            "processing": "lease wait..."
        }
    });
    //$.fn.dataTable.ext.errMode = 'none';
    licenseDataTable = $('#multi-license-table').DataTable({
        processing: true,
        serverSide: true,
        //   autoWidth: true,
        //  fixedColumns: false,
        // scrollY:800,
        destroy: true,
        // pageLength: 10,
        ajax: {
            url: siteUrl + '/license-details',
            type: 'GET'
        },
        columns: [
            {data: 'gstnId', name: 'gstnId'},
            {data: 'legalName', name: 'legalName'},
            {data: 'tradeName', name: 'tradeName'},
            {data: 'tabId', name: 'tabId',
                render:function (data, type, full, meta) {
                    return '<input type="hidden" name="tab_id" value="'+data+'" />';
              }
              
            },
            {data: 'saveDraftDate', name: 'saveDraftDate',
                render:function (data, type, full, meta) {
                    return '<input type="hidden" name="save_draft_date" value="'+data+'" />';
              }
              
            },
                
            {data: 'action', name: 'action'}],
           /*"columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            }
        ]*/
        createdRow: function ( row, data, index ) {
                        $('td', row).eq(3).css({'display':'none'});
                      $('td', row).eq(4).css({'display':'none'});
                    },
        
    });
    
    vtranSubmtittedDate='';


    setTimeout(function(){
    
        $('#tranTitle').html($('#multple_license_tbody tr td:first-child').eq(0).text());
        vtranSubmtittedDate=$('input[name="save_draft_date"]').eq(0).val();
        var tab_id=$('input[name="tab_id"]').eq(0).val();
        var  total=1+parseInt(tab_id);
        var  vTranPiChartPercentage=(total*100)/18;
        var totalPercentage=Math.ceil(vTranPiChartPercentage);
        var remainingPercentage=100-Math.ceil(vTranPiChartPercentage);
   
    
  var vTranOne = [{ 
	value: remainingPercentage,
	color: "#DDDDDD"
},{
	value: totalPercentage,
	color: "#ff9600"
}];
var DoughnutTextInsideChart = new Chart($('#chartTran1')[0].getContext('2d')).TranOneChart(vTranOne, {
	responsive: true
});
    },500);
    
    
  //  vtranSubmtittedDate
});

$('#multi-license-table').on('click','#multple_license_tbody tr',function(index){
     $('#multple_license_tbody tr').removeClass('highlight_row');
       rowIndex = $(this).closest('tr') .prevAll().length;
    
        var tabId=$('input[name="tab_id"]').eq(rowIndex).val();
         vtranSubmtittedDate=$('input[name="save_draft_date"]').eq(rowIndex).val();
         $('#tranTitle').html($('#multple_license_tbody tr td:first-child').eq(rowIndex).text());
        var total=1+parseInt(tabId);
        var vTranPiChartPercentage=(total*100)/18;
        var totalPercentage=Math.ceil(vTranPiChartPercentage);
        if(totalPercentage){
        var remainingPercentage=100-Math.ceil(vTranPiChartPercentage);
    } else{
         var totalPercentage=0;
          var remainingPercentage=100;
         
    }
     
    // alert("tabId="+tabId+'=totapercenta='+totalPercentage+'=remainingPercentage='+remainingPercentage);
   var vTranOne = [{ 
	value: remainingPercentage,
	color: "#DDDDDD"
},{
	value: totalPercentage,
	color: "#ff9600"
}];
var DoughnutTextInsideChart = new Chart($('#chartTran1')[0].getContext('2d')).TranOneChart(vTranOne, {
	responsive: true
});
       // $(this).addClass('highlight_row');
        
   /* if ($(this).is(":odd")) {
        $('#multple_license_tbody tr').removeClass('highlight_row');
        $(this).addClass('highlight_row');
    } else{
    $('#multple_license_tbody tr').removeClass('highlight_row');
    $(this).removeClass('odd').addClass('highlight_row');
    }*/

   
});

Chart.types.Doughnut.extend({
	name: "TranOneChart",
	showTooltip: function() {
		this.chart.ctx.save();
		Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
		this.chart.ctx.restore();
	},
	draw: function() {
		Chart.types.Doughnut.prototype.draw.apply(this, arguments);

		var width = this.chart.width,
			height = this.chart.height;

		var fontSize = (height / 300).toFixed(2);
		this.chart.ctx.font = fontSize + "em Verdana";
		this.chart.ctx.textBaseline = "middle";

		var text = "Last date of filing",
			//vtranSubmtittedDate = "203/07/2017",
			textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
			textY = height / 2.2;

		this.chart.ctx.fillText(text, textX, textY);
		this.chart.ctx.fillText(vtranSubmtittedDate, textX, textY+20);				
		
		//ctx.fillText(data[0].value + "%", width/2 - 20, width/2, 200);
	}
});
/*var DoughnutTextInsideChart = new Chart($('#chartTran1')[0].getContext('2d')).TranOneChart(vTranOne, {
	responsive: true
});*/


</script>
@endpush
@endsection