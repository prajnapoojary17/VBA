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
    </style>
<style>
    .bootstrap-select dropup{
        width:100%;
    }
    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 100%;
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
                <!-- <a href="javascript:void(0);" class="bars"></a> -->
                <a class="navbar-brand" href="index.html">GST<span class="text-uppercase">Tran</span></a>
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
                                    <li class="js-sweetalert">
                                        <button class="btn btn-link" type="button" data-type="basic">
                                            <h5>Tran 1</h5>
                                        </button>
                                    </li>
                                    <li class="js-sweetalert">
                                        <button class="btn btn-link" type="button" data-type="basic">
                                            <h5>Tran 2</h5>
                                        </button>
                                    </li>
                                    <li class="js-sweetalert">
                                        <button class="btn btn-link" type="button" data-type="basic">
                                            <h5>Tran 3A</h5>
                                        </button>
                                    </li>
                                    <li class="js-sweetalert">
                                        <button class="btn btn-link" type="button" data-type="basic">
                                            <h5>Tran 3B</h5>
                                        </button>
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
                                                        as on 30.6.2017 e.g. Purchase Bills/ Bill of Entry/ Excise Paying</li>
                                                    <li>Documents etc. </li>
                                                    <li> Stock ageing be made to ascertain if any stock is more than one year
                                                        old. If yes then dispose it off immediately or sell it to your sister
                                                        concern against Tax Invoice locally. </li>
                                                    <li> Classify stock tax rate wise, purchased locally to get ITC into SGST.</li>
                                                    <li> Classify stock purchased on invoices bearing Duty Payment & non duty
                                                        payments to get ITC transferred to CGST. </li>
                                                </ol>
                                            </div>
                                            <div class="tab-pane" id="tab1">
                                             <!--   <h3 class="fancy-title">Enter Business Info</h3> -->
                                                    <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                     <input type="hidden" class="form-control" name="gstnId" value="{{session()->get('gstnDetail')['gstnId']}}">
                                                    <fieldset>
                                                    <div class="row m-t-15">
                                                <div class="col-lg-3 col-md-6"  style="visibility:hidden">
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
                                                         
                                                                                                    
                                              <!--   <div class="col-lg-4 col-lg-offset-1 col-md-6  m-t-5">-->
                                                @foreach($arrayGDetails['data']['questions']   as  $key=>$question)                                                               
                                                    @if(is_null($question['parentId']))
                                                        <div class="form-group" id="GQ{{$question['id']}}">
                                                            <label class="form-label">{{$question['text']}}</label>
                                                            <br>
                                                            @foreach($question['options'] as  $option)
                                                                @if($question['type']   ==  'radiobutton')
                                                                    @if($question['isLinked'] ==  'Yes')
                                                                        @php
                                                                             $hideIds    =   "GQ";
                                                                        @endphp

                                                                        @foreach($question['options'] as  $optionsForId)
                                                                            @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                @php
                                                                                    $hideIds    .=  '@#@GQ'.$optionsForId['linkedQuestionId'];
                                                                                @endphp
                                                                            @endif                                                                                    
                                                                        @endforeach                                                                                    
                                                                        @if(!is_null($option['linkedQuestionId']))
                                                                            <input name="groupG{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="groupG{{$question['id'].$option['optionname']}}" data-showQuestionId="GQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                        @else
                                                                            <input name="groupG{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="groupG{{$question['id'].$option['optionname']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                        @endif
                                                                    @else
                                                                        <input name="groupG{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="groupG{{$question['id'].$option['optionname']}}"/>
                                                                    @endif   
                                                                    <label for="groupG{{$question['id'].$option['optionname']}}">{{$option['optionname']}} </label>                                                                            
                                                                @else    
                                                                    @if($question['isLinked'] ==  'Yes')
                                                                        <input name="chkBoxG{{$question['id'].$option['optionname']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBoxG{{$question['id'].$option['optionname']}}" type="checkbox" data-showQuestionId="GQ{{$option['linkedQuestionId']}}">
                                                                    @else
                                                                        <input name="chkBoxG{{$question['id'].$option['optionname']}}" class="" value="{{$option['optionname']}}" id="chkBoxG{{$question['id'].$option['optionname']}}" type="checkbox" >
                                                                    @endif    
                                                                    <label for="chkBoxG{{$question['id'].$option['optionname']}}">{{$option['optionname']}}</label>   

                                                                @endif
                                                            @endforeach
                                                            
                                                        </div>
                                                        @if($question['isLinked'] ==  'Yes')
                                                            @foreach($question['options'] as  $option)
                                                                @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                    <div class="form-group" id="GQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                        <label class="form-label">{{$arrayGDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                        <br>
                                                                        @foreach($arrayGDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                            @if($arrayGDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                <input name="groupG{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="groupG{{$option['linkedQuestionId'].$qstOption['optionname']}}" />
                                                                                <label for="groupG{{$option['linkedQuestionId'].$qstOption['optionname']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                            @else    
                                                                                <input name="chkBox5A{{$option['linkedQuestionId'].$qstOption['optionname']}}" class="" value="{{$qstOption['optionname']}}" id="chkBoxG{{$option['linkedQuestionId'].$qstOption['optionname']}}" type="checkbox">
                                                                                <label for="chkBoxG{{$option['linkedQuestionId'].$qstOption['optionname']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                            @endforeach                                                                    
                                                        @endif
                                                    @endif                                                                
                                                @endforeach
                                                      <div class="form-group" id="ques2">
                                                                <label class="form-label">Are you registered dealer under Composition scheme in GST?</label>
                                                                <br>
                                                                <input name="group2" type="radio" id="group2Yes" class="with-gap" />
                                                                <label for="group2Yes">Yes</label>
                                                                <input name="group2" type="radio" id="group2No" class="with-gap" />
                                                                <label for="group2No">No</label>
                                                            </div>
                                               
                                                            <div class="form-group" id="ques3" style="display:none">
                                                                <label class="form-label">Select the Tax centers where you are currently registered</label>

                                                                <div class="row question-inline">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <input type="checkbox" id="group3VAT"  />
                                                                        <label for="group3VAT">VAT</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10" id="group3VATAns" style="display:none;">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line" >
                                                                                <input type="text" name="vat_reg_GQ"  class="form-control required" value="{{$registeredPersonDetail->vatRegNo}}" id="vat_reg_GQ" />
                                                                                <label class="form-label">VAT Registration No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row question-inline">
                                                                    <div class="col-lg-3 col-md-4">
                                                                        <input type="checkbox"  id="group3ServiceTax"  />
                                                                        <label for="group3ServiceTax">Service Tax</label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-8" id="group3ServiceTaxAns" style="display:none;" >
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" name="service_tax_GQ" class="form-control" value="{{$registeredPersonDetail->serviceTaxRegNo}}" />
                                                                                <label class="form-label">Service Tax Registration No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row question-inline">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <input type="checkbox" id="group3Excise" />
                                                                        <label for="group3Excise">Excise</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10" id="group3ExciseAns" style="display:none;" >
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line ">
                                                                                <input type="text" name="excise_reg_no_GQ" class="form-control" value="{{$registeredPersonDetail->exciseRegNo}}" />
                                                                                <label class="form-label">Excise Registration No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                         
                                                    </div>
                                                    </div>
                                                </fieldset>   
                                               <input type="hidden" name="inputGeneralQuestions" id="inputGeneralQuestions" value="{{$arrayGQuestions}}">
                                               
                                                <input type="hidden" name="inputGeneralQuestionsContinue" id="input5AQuestionsContinue" value="0">
                                                <input type="hidden" name="count_of_general_tables" id="count_of_general_tables" value="{{count($arrayGDetails['data']['table'])}}">
                                            </div>
                                            <div class="tab-pane" id="tab2">    
                                               <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions5A" style="">
                                                    @foreach($array5ADetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="5AQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "5AQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@5AQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group5A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5A{{$question['id'].$option['optionId']}}" data-showQuestionId="5AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group5A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group5A{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group5A{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group5A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox5A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox5A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="5AQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox5A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox5A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox5A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="5AQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array5ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array5ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array5ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group5A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group5A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group5A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox5A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox5A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox5A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                               
                                                
                                                <input type="hidden" name="input5AQuestions" id="input5AQuestions" value="{{$array5AQuestions}}">
                                                <input type="hidden" name="input5AQuestionsContinue" id="input5AQuestionsContinue" value="0">
                                                <input type="hidden" name="count_of_5A_tables" id="count_of_5A_tables" value="{{count($array5ADetails['data']['table'])}}">
                                                <!--<div>
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
                                                </div>-->                                                   
                                                <div id="table5A" style="{{(count($array5ADetails['data']['questions']) >   0   &&  count($array5ADetails['data']['table']) >= 0) ? 'display:none':''}}">                                                    
                                                    <form id="fiveAForm">         
                                                    <table class="table table-bordered table-striped table-hover dataTable" id="5ATable">
                                                        <thead>
                                                            <tr>
                                                            <th colspan="10">Amount of Cenvat credit carried forward to electronic credit ledger as central tax</th>
                                                        </tr>
                                                            <tr>
                                                                  <th>Nature of ITC carried forward in last return filed. 
                                                                <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Nature of ITC carried forward in last return filed.">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                </th>
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
                                                                <th><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow5A">Add row</button></th>
                                                            </tr>
                                                        </thead>                                                        
                                                        <tbody id="table5Atbody">
                                                             
                                                            @php
                                                                    $balance_cenvat_credit_5A_totals    =   0;
                                                                    $cenvat_credit_admissible_5A_totals =   0;
                                                                    $tax_periof_total=0;
                                                                @endphp
                                                                @if(count($array5ADetails['data']['table']) >   0)
                                                       
                                                            
                                                                    @foreach($array5ADetails['data']['table']   as $key=>$tableData)
                                                                        @php
                                                                            $balance_cenvat_credit_5A_totals    +=  $tableData['balanceCenvatCredit'];
                                                                            $cenvat_credit_admissible_5A_totals +=  $tableData['balanceCenvatAdmissible'];
                                                                            
                                                                        @endphp
                                                                        <tr>
                                                                             <td>
                                                                                 @php
                                                                                 $data=['Service Tax','Krishi Kalyan Cess  (not available to manufacturers)','Central Excise','CVD under Customs Act','SAD under Customs Act (not available to service providers)','NCCD on inputs'];
                                                                                 @endphp
                                                                    <select name="nature_of_itc_5A" style="width:100%" id="nature_of_itc_5A">
                                                                     <option selected disabled value="select">-- Select--</option>
                                                                    @foreach($data as $key=>$value)
                                                                    
                                                                    <option <?php if($tableData['natureOfItc']===$value){ echo 'selected'; } else{ } ?> >{{$value}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                                </td>
                                                                            <td><input type="text" class="form-control" name="registration_number_5A" value="{{$tableData['registrationNo']}}"/></td>
                                                                            <td><input type="text" class="form-control " name="tax_period_5A"   value="{{$tableData['taxPeriod']}}"/></td>                                                                        
                                                                            <td><input type="text" class="datepicker form-control" name="date_of_filling_5A" value="@php echo date('d/m/Y', strtotime($tableData['dateFiling'])); @endphp"/></td>                                                                        
                                                                            <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" value="{{$tableData['balanceCenvatCredit']}}"/></td>                                                                        
                                                                            <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" value="{{$tableData['balanceCenvatAdmissible']}}"/></td>
                                                                            <td>
                                                                                @if($key    >   0)
                                                                                    <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <tr>
                                                                         <td>
                                                                    <select name="nature_of_itc_5A" id="nature_of_itc_5A">
                                                                    <option selected disabled value="select">-- Select--</option>
                                                                    <option value="service_tax">Service Tax</option>
                                                                    <option value="2">Krishi Kalyan Cess  (not available to manufacturers)</option>
                                                                    <option value="excise_reg">Central Excise</option>
                                                                    <option value="4"> CVD under Customs Act</option>
                                                                      <option value="5">SAD under Customs Act (not available to service providers)</option>
                                                                        <option value="6">NCCD on inputs</option>
                                                                </select>
                                                                </td>
                                                                        <td><input type="text" class="form-control" name="registration_number_5A"/></td>
                                                                        <td><input type="text" class="form-control" name="tax_period_5A"/></td>                                                                        
                                                                        <td><input type="text" class="datepicker form-control" name="date_of_filling_5A"/></td>                                                                        
                                                                        <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A"/></td>                                                                        
                                                                        <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A"/></td>
                                                                        <td></td>
                                                                    </tr>
                                                                @endif
                                                                
                                                       
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="4">Total</th>
                                                                <th id="balance_cenvat_credit_5A_total">{{$balance_cenvat_credit_5A_totals}}</th>
                                                                <th id="cenvat_credit_admissible_5A_total">{{$cenvat_credit_admissible_5A_totals}}</th>
                                                              
                                                                <th></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                         </form>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab3">  
                                                <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="uploadFileSection5B">
                                                    <h4>Upload your C Forms, F Forms, H Forms, I Forms here or Click continue to proceed with manual data entry</h4>
                                                    <form action="" enctype="multipart/form-data" name="fileUploadForm5B" id="fileUploadForm5B" method="POST">                                                       
                                                        <div class="form-group">
                                                            Upload File
                                                            <input type="file" name="cfhi_forms_5B[]" id="cfhi_forms_5B" multiple />
                                                            <br />
                                                            <input type="button" name="upload_file" id="upload_file" value="Upload"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="questions5B">
                                                   @if(count($array5BDetails['data']['questions'])>0)
                                                    @foreach($array5BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="5BQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "5BQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@5BQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group5B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5B{{$question['id'].$option['optionId']}}" data-showQuestionId="5BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group5B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group5B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group5B{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group5B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox5B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox5B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="5BQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox5B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox5B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox5B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="5BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array5ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array5BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array5BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group5B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group5B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group5B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox5B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox5B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox5B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                    @endif
                                                </div>
                                                <input type="hidden" name="input5BQuestions" id="input5BQuestions" value="{{$array5BQuestions}}">
                                                <input type="hidden" name="input5BQuestionsContinue" id="input5BQuestionsContinue" value="0">
                                                <div id="table5B" style="display:block;"> 
                                                   <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="5BTable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="8">Details of statutory forms received for which credit is being carried forward</th>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Type of Form C/F/E/H/I</th>
                                                            <th>Sr. No. of Form</th>
                                                            <th>TIN of Issuer</th>
                                                            <th>Name of Issuer</th>
                                                            <th> Sales Value In Form</th>
                                                          
                                                            <th>Applicable VAT Rate</th>
                                                            <th><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow5B">Add row</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table5BtbodyFormUpload">
                                                        <?php 
                                                        //echo "<pre>";
      //print_r( $array5BDetails['data']);
    // echo "this". count($array5BDetails['data']['table']);
    // exit();
     ?>
                                                        @if(count($array5BDetails['data']['table']) > 0)
                                                  
                                                        @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                                                      
                                                        <tr>
                                                             <td>
                                                                 @php $data=['C','F','H','I']; @endphp
                                                                    <select id ="select5B" name="type_of_form_5B">
                                                                    <option selected disabled>-- Select--</option>
                                                                    @foreach($data as $key=>$value)
                                                                    <option <?php if($tableData['type']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                   @endforeach
                                                                   
                                                                </select>
                                                                </td>
                                                            <td><input type="text" class="form-control" name="form_serial_no_5B" value="{{$tableData['formSerialNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="tin_issuer_5B" value="{{$tableData['tinIssuer']}}"/></td>
                                                            <td><input type="text" class="form-control" name="issuer_name_5B" value="{{$tableData['issuerName']}}"/></td>
                                                                <td><input type="number" class="form-control" name="sales_value_5B" value="{{$tableData['issuerName']}}"/></td>
                                                                  <!--  <td><input type="number" class="form-control" name="amount_5B" value="{{$tableData['amount']}}"/></td>-->
                                                            <td><input type="number" class="form-control" name="vat_rate_5B" value="{{$tableData['vatRate']}}"/></td>
                                                            <td> @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif</td>
                                                        </tr>
                                                        
                                                         
                                                        
                                                        @endforeach
                                                        
                                                        @else
                                                         <tr>
                                                             <td>
                                                                 @php $data=['C','F','H','I']; @endphp
                                                                    <select id ="select5B" name="type_of_form_5B">
                                                                    <option selected disabled>-- Select--</option>
                                                                    @foreach($data as $key=>$value)
                                                                    <option >{{$value}}</option>
                                                                   @endforeach
                                                                   
                                                                </select>
                                                                </td>
                                                            <td><input type="text" class="form-control" name="form_serial_no_5B" value=""/></td>
                                                            <td><input type="text" class="form-control" name="tin_issuer_5B" value=""/></td>
                                                            <td><input type="text" class="form-control" name="issuer_name_5B" value=""/></td>
                                                                <td><input type="number" class="form-control" name="sales_value_5B" value=""/></td>
                                                          <!--  <td><input type="number" class="form-control" name="amount_5B" value=""/></td>-->
                                                            <td><input type="number" class="form-control" name="vat_rate_5B" value=""/></td>
                                                        </tr>
                                                        
                                                        
                                                      @endif
                                                    </tbody>
                                                </table>
                                            </div>

                                            </div>
                                            <div class="tab-pane" id="tab4">
                                               <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions5C">
                                                    @foreach($array5CDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="5CQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "5CQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@5CQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group5C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5C{{$question['id'].$option['optionId']}}" data-showQuestionId="5CQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group5C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5C{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group5C{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group5C{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group5C{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox5C{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox5C{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="5CQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox5C{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox5C{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox5C{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="5CQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array5CDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array5CDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array5CDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group5C{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group5C{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group5C{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox5C{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox5C{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox5C{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input5CQuestions" id="input5CQuestions" value="{{$array5CQuestions}}">
                                                <input type="hidden" name="input5CQuestionsContinue" id="input5CQuestionsContinue" value="0">
                                                <div id="table5C" style="{{(count($array5CDetails['data']['questions']) >   0) ? 'display:none':''}}">
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
                                                            <button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow5C">Add row</button>
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
                                                    <tbody id="table5Ctbody">
                                                        @if(count($array5CDetails['data']['table']) >   0)                                                   
                                                        @foreach($array5CDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="registration_no_5C" value="{{$tableData['registrationNo']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="itc_balance_5C" value="{{$tableData['itcBalance']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="cForm_pending_5C" value="{{$tableData['cFormPending']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="diff_tax_payable_5C" value="{{$tableData['diffTaxPayable']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="fForm_pending_5C" value="{{$tableData['fFormPending']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="fTax_payable_5C" value="{{$tableData['fTaxPayable']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="itc_reversal_5C" value="{{$tableData['itcReversal']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hForm_pedning_5C" value="{{$tableData['hFormPedning']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hTax_payable_5C" value="{{$tableData['hTaxPayable']}}"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="transition_5C" value="{{$tableData['transition']}}"/>
                                                            </td>
                                                            <td> @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif</td>
                                                        </tr>
                                                         @endforeach
                                                         @else
                                                         <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="registration_no_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="itc_balance_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="cForm_pending_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="diff_tax_payable_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="fForm_pending_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="fTax_payable_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="itc_reversal_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hForm_pedning_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="hTax_payable_5C"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="transition_5C"/>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                         
                                                         @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                               <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                    <div id="questions6A">
                                                        @foreach($array6ADetails['data']['questions']   as  $key=>$question)                                                               
                                                            @if(is_null($question['parentId']))
                                                                <div class="form-group" id="6AQ{{$question['id']}}">
                                                                    <label class="form-label">{{$question['text']}}</label>
                                                                    <br>
                                                                    @foreach($question['options'] as  $option)
                                                                        @if($question['type']   ==  'radiobutton')
                                                                            @if($question['isLinked'] ==  'Yes')
                                                                                @php
                                                                                     $hideIds    =   "6AQ";
                                                                                @endphp

                                                                                @foreach($question['options'] as  $optionsForId)
                                                                                    @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                        @php
                                                                                            $hideIds    .=  '@#@6AQ'.$optionsForId['linkedQuestionId'];
                                                                                        @endphp
                                                                                    @endif                                                                                    
                                                                                @endforeach                                                                                    
                                                                                @if(!is_null($option['linkedQuestionId']))
                                                                                    <input name="group6A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group6A{{$question['id'].$option['optionId']}}" data-showQuestionId="6AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                                @else
                                                                                    <input name="group6A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group6A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                                @endif
                                                                            @else
                                                                                <input name="group6A{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group6A{{$question['id'].$option['optionId']}}"/>
                                                                            @endif   
                                                                            <label for="group6A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                        @else    
                                                                            @if($question['isLinked'] ==  'Yes')
                                                                                <input name="chkBox6A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox6A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="6AQ{{$option['linkedQuestionId']}}">
                                                                            @else
                                                                                <input name="chkBox6A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox6A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                            @endif    
                                                                            <label for="chkBox6A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                @if($question['isLinked'] ==  'Yes')
                                                                    @foreach($question['options'] as  $option)
                                                                        @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                            <div class="form-group" id="6AQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                                <label class="form-label">{{$array6ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                                <br>
                                                                                @foreach($array6ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                    @if($array6ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                        <input name="group6A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group6A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                        <label for="group6A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                    @else    
                                                                                        <input name="chkBox6A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox6A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                        <label for="chkBox6A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                    @endforeach                                                                    
                                                                @endif
                                                            @endif                                                                
                                                        @endforeach
                                                    </div>    
                                                    <input type="hidden" name="input6AQuestions" id="input6AQuestions" value="{{$array6AQuestions}}">
                                                    <input type="hidden" name="input6AQuestionsContinue" id="input6AQuestionsContinue" value="0">
                                                <div id="table6A" style="{{(count($array6ADetails['data']['questions']) >   0) ? 'display:none':''}}">  
                                                   

                                                    <table class="table table-bordered table-striped table-hover dataTable" id="6ATable">
                                                        <thead>
                                                        <tr>
                                                            <tr>
                                                                <th colspan="15">Amount of unavailed cenvat credit in respect of capital goods carried forward to electronic credit ledger as central tax</tr>
                                                            <th rowspan="3">Invoice/Document No.</th>
                                                            <th rowspan="3">Invoice/Document Date</th>
                                                            <th rowspan="3">Supplier Registration no. under existing law</th>
                                                            <th rowspan="3">Reciepients' Registration no. under existing law</th>
                                                              <th rowspan="3">Capital Goods</th>
                                                                <th rowspan="3">Nature of ITC carried forward</th>
                                                            <th colspan="3">Details of capital goods on which credit has been partially availed</th>
                                                            
                                                            <th rowspan="3">Total eligible cenvat credit under existing law</th>
                                                            <th rowspan="3">Total credit availed under existing law</th>
                                                            <th rowspan="3">Total credit unavailed under existing law</th>
                                                            <th rowspan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow6A">Add row</button></th>
                                                            
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
                                                       
                                                        <tbody id="table6Atbody">
                                                            @php
                                                            
                                                            $capital_good_value_6A_totals=0;
                                                            $capital_good_cvd_6A_totals=0;
                                                            $capital_good_sad_6A_totals=0;
                                                            $eligible_cenvat_6A_totals=0;
                                                            $cenvat_credit_availed_6A_totals=0;
                                                            $cenvat_credit_unavailed_6A_6A_totals=0;
                                                            @endphp
                                                            @if(count($array6ADetails['data']['table']) >   0)
                                                            @foreach($array6ADetails['data']['table']   as $key=>$tableData)
                                                            @php
                                                    $capital_good_value_6A_totals    +=  $tableData['capitalGoodValue'];
                                                $capital_good_cvd_6A_totals +=  $tableData['capitalGoodCvd'];
                                                  $capital_good_sad_6A_totals +=  $tableData['capitalGoodSad'];
                                                    $eligible_cenvat_6A_totals +=  $tableData['eligibleCenvat'];
                                                      $cenvat_credit_availed_6A_totals +=  $tableData['cenvatCreditAvailed'];
                                                        $cenvat_credit_unavailed_6A_6A_totals +=  $tableData['cenvatCreditUnavailed'];
                                                 @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="invoice_no_6A" value="{{$tableData['invoiceNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_6A" value=" @php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp"/></td>
                                                            <td><input type="text" class="form-control" name="supplier_reg_no_6A" value="{{$tableData['supplierRegNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_regno_6A" value="{{$tableData['recipientRegNo']}}"/></td>
                                                            
                                                              <td><input type="text" class="form-control" name="capital_goods_6A" value="{{$tableData['recipientRegNo']}}"/></td>
                                                           
                                                               <td>
                                                                   @php $sixAOption=['-- Select--','Central Excise','VAT','Entry Tax']; @endphp
                                                                <select name="itc_carried_forward_6A" id="itc_carried_forward_6A">
                                                              @foreach($sixAOption as $value)
                                                                <option <?php if($tableData['itcCarriedForward']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      
                                                                 </select>
                                                                </td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A"  name="capital_good_value_6A" value="{{$tableData['capitalGoodValue']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_cvd_6A" value="{{$tableData['capitalGoodCvd']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_sad_6A" value="{{$tableData['capitalGoodSad']}}"/></td>
                                                            
                                                           
                                                          
                                                            
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="eligible_cenvat_6A" value="{{$tableData['eligibleCenvat']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_availed_6A" value="{{$tableData['cenvatCreditAvailed']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_unavailed_6A" value="{{$tableData['cenvatCreditUnavailed']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="invoice_no_6A"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_6A"/></td>
                                                            <td><input type="text" class="form-control" name="supplier_reg_no_6A"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_regno_6A"/></td>
                                                              <td><input type="text" class="form-control" name="capital_goods_6A" value=""/></td>
                                                           
                                                               <td>
                                                                <select name="itc_carried_forward_6A" id="itc_carried_forward_6A">
                                                                <option selected disabled>-- Select--</option>
                                                                <option>Central Excise</option>
                                                                <option>VAT</option>
                                                                <option>Entry Tax</option>

                                                                 </select>
                                                                </td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_value_6A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_cvd_6A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_sad_6A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="eligible_cenvat_6A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_availed_6A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_unavailed_6A"/></td>
                                                        </tr>
                                                        @endif
                                                        </tbody>
                                                         <tfoot>
                                                            <tr>
                                                                <th colspan="6">Total</th>
                                                                    <th id="capital_good_value_6A_total">{{$capital_good_value_6A_totals}}</th>
                                                              <th id="capital_good_cvd_6A_total">{{$capital_good_cvd_6A_totals}}</th>
                                                              <th id="capital_good_sad_6A_total">{{$capital_good_sad_6A_totals}}</th>
                                                               <th id="eligible_cenvat_6A_total">{{$eligible_cenvat_6A_totals}}</th>
                                                              <th id="cenvat_credit_availed_6A_total">{{$cenvat_credit_availed_6A_totals}}</th>
                                                              <th id="cenvat_credit_unavailed_6A_total">{{$cenvat_credit_unavailed_6A_6A_totals}}</th>
                                                         
                                                             
                                                            </tr>
                                                        </tfoot>
                                                        </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab6">
                                                <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                               <div id="questions6B">
                                                        @foreach($array6BDetails['data']['questions']   as  $key=>$question)                                                               
                                                            @if(is_null($question['parentId']))
                                                                <div class="form-group" id="6BQ{{$question['id']}}">
                                                                    <label class="form-label">{{$question['text']}}</label>
                                                                    <br>
                                                                    @foreach($question['options'] as  $option)
                                                                        @if($question['type']   ==  'radiobutton')
                                                                            @if($question['isLinked'] ==  'Yes')
                                                                                @php
                                                                                     $hideIds    =   "6BQ";
                                                                                @endphp

                                                                                @foreach($question['options'] as  $optionsForId)
                                                                                    @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                        @php
                                                                                            $hideIds    .=  '@#@6BQ'.$optionsForId['linkedQuestionId'];
                                                                                        @endphp
                                                                                    @endif                                                                                    
                                                                                @endforeach                                                                                    
                                                                                @if(!is_null($option['linkedQuestionId']))
                                                                                    <input name="group6B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group6B{{$question['id'].$option['optionId']}}" data-showQuestionId="6BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                                @else
                                                                                    <input name="group6B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group6B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                                @endif
                                                                            @else
                                                                                <input name="group6B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group6B{{$question['id'].$option['optionId']}}"/>
                                                                            @endif   
                                                                            <label for="group6B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                        @else    
                                                                            @if($question['isLinked'] ==  'Yes')
                                                                                <input name="chkBox6B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox6B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="6BQ{{$option['linkedQuestionId']}}">
                                                                            @else
                                                                                <input name="chkBox6B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox6B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                            @endif    
                                                                            <label for="chkBox6B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                @if($question['isLinked'] ==  'Yes')
                                                                    @foreach($question['options'] as  $option)
                                                                        @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                            <div class="form-group" id="6BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                                <label class="form-label">{{$array6BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                                <br>
                                                                                @foreach($array6BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                    @if($array6BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                        <input name="group6B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group6B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                        <label for="group6B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                    @else    
                                                                                        <input name="chkBox6B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox6B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                        <label for="chkBox6B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                    @endforeach                                                                    
                                                                @endif
                                                            @endif                                                                
                                                        @endforeach
                                                    </div>    
                                                    <input type="hidden" name="input6BQuestions" id="input6BQuestions" value="{{$array6BQuestions}}">
                                                    <input type="hidden" name="input6BQuestionsContinue" id="input6BQuestionsContinue" value="0">
                                                <div id="table6B" style="{{(count($array6BDetails['data']['questions']) >   0) ? 'display:none':''}}">  
                                                    <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="6BTable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="15">Amount of unavailed input tax credit carried forward to electronic credit ledger as State/UT tax</th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Invoice/Document no.</th>
                                                            <th rowspan="2">Invoice/Document Date</th>
                                                             <th rowspan="2">Capital Goods</th>
                                                              <th rowspan="2">Nature of ITC carried Forward</th>
                                                            <th rowspan="2">Supplier's registration no. under existing law</th>
                                                            <th rowspan="2">Recipients' registration no. under existing law</th>
                                                            <th colspan="2">Details regarding capital goods on which credit is not availed</th>
                                                            <th rowspan="2">Total eligible VAT [and ET] credit under existing law</th>
                                                            <th rowspan="2">Total VAT [and ET] credit availed under existing law</th>
                                                            <th rowspan="2">Total VAT [and ET] credit unavailed under existing law (acmissible as ITC of State/UT tax)(8-9)</th>
                                                            <th rowspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow6B">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th>Value</th>
                                                            <th>Taxes paid VAT [and ET]</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table6Btbody">
                                                        @if(count($array6BDetails['data']['table']) >   0)
                                                        @php
                                                        $capital_good_value_6B=0;
                                                        $capital_good_vat_6B=0;
                                                        $eligible_vat_6B=0;
                                                        $vatCredit_availed_6B=0;
                                                        $vat_credit_unavailed_6B=0;
                                                        @endphp
                                                    @foreach($array6BDetails['data']['table']   as $key=>$tableData)
                                                    @php
                                                    $capital_good_value_6B    +=  $tableData['capitalGoodValue'];
                                                    $capital_good_vat_6B    +=  $tableData['capitalGoodVat'];
                                                    $eligible_vat_6B    +=  $tableData['eligibleVat'];
                                                    $vatCredit_availed_6B    +=  $tableData['vatCreditAvailed'];
                                                    $vat_credit_unavailed_6B    +=  $tableData['vatCreditUnavailed'];
                                                    @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="invoice_no_6B" value="{{$tableData['invoiceNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_6B" value=" @php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp"/></td>
                                                            
                                                            
                                                            <td><input type="text" class="form-control" name="capital_goods_6B" value="{{$tableData['invoiceNo']}}"/></td>
                                                           
                                                               <td>
                                                                <select name="itc_carried_forward_6B">
                                                                <option selected disabled>-- Select--</option>
                                                               
                                                                <option>VAT</option>
                                                                <option>Entry Tax</option>

                                                                 </select>
                                                                </td>
                                                            
                                                            <td><input type="text" class="form-control " name="supplier_reg_no_6B" value="{{$tableData['supplierRegNo']}}"/></td>
                                                            <td><input type="text" class="form-control " name="recipient_reg_no_6B" value="{{$tableData['recipientRegNo']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_value_6B" value="{{$tableData['capitalGoodValue']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_vat_6B" value="{{$tableData['capitalGoodVat']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="eligible_vat_6B" value="{{$tableData['eligibleVat']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vatCredit_availed_6B" value="{{$tableData['vatCreditAvailed']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vat_credit_unavailed_6B" value="{{$tableData['vatCreditUnavailed']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                        @endforeach
                                                    @else
                                                    <tr>
                                                            <td><input type="text" class="form-control" name="invoice_no_6B" /></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_6B"/></td>
                                                            <td><input type="text" class="form-control" name="capital_goods_6B" value=""/></td>
                                                           
                                                               <td>
                                                                <select name="itc_carried_forward_6B">
                                                                <option selected disabled>-- Select--</option>
                                                               
                                                                <option>VAT</option>
                                                                <option>Entry Tax</option>

                                                                 </select>
                                                                </td>
                                                            <td><input type="text" class="form-control" name="supplier_reg_no_6B"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_reg_no_6B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_value_6B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_vat_6B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="eligible_vat_6B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vatCredit_availed_6B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vat_credit_unavailed_6B"/></td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                      <tfoot>
                                                        <tr>
                                                            
                                                            <th colspan="6">Total</th>
                                                           <th id="capital_good_value_6B_total">
                                                               @if(isset($capital_good_value_6B))
                                                               {{$capital_good_value_6B}}
                                                             @endif
                                                           </th>
                                                           <th id="capital_good_vat_6B_total">{{isset($capital_good_vat_6B)?$capital_good_vat_6B:0}}</th>
                                                            <th id="eligible_vat_6B_total">{{isset($eligible_vat_6B)?$eligible_vat_6B:0}}</th>
                                                            <th id="vatCredit_availed_6B_total">{{isset($vatCredit_availed_6B)?$vatCredit_availed_6B:0}}</th>
                                                            <th id="vat_credit_unavailed_6B_total">{{isset($vat_credit_unavailed_6B)?$vat_credit_unavailed_6B:0}}</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab7">
                                                 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                  <div id="questions7A7A">
                                                    @foreach($array7A7ADetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="7A7AQ{{$question['id']}}" style="{{($question['id'] ==  14) ? 'display:none':''}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "7A7AQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@7A7AQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" data-showQuestionId="7A7AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group7A7A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox7A7A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox7A7A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="7A7AQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox7A7A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox7A7A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox7A7A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="7A7AQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array7A7ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array7A7ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array7A7ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group7A7A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group7A7A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group7A7A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox7A7A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox7A7A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox7A7A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input7A7AQuestions" id="input7A7AQuestions" value="{{$array7A7AQuestions}}">
                                                <input type="hidden" name="input7A7AQuestionsContinue" id="input7A7AQuestionsContinue" value="0">                                                
                                                 <div id="table7A7A" style="{{(count($array7A7ADetails['data']['questions']) >   0) ? 'display:none':''}}">   
                                                    
                                                    <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7ATable">
                                                    <thead>
                                                         <tr>
                                                             <!-- <th>Type of Goods</th>-->
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock where duty paid invoices or any other document are available</th>
                                                           
                                                            
                                                        </tr>
                                                        <tr>
                                                             <!-- <th>Type of Goods</th>-->
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                            <th rowspan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7A7A">Add row</button></th>
                                                            
                                                        </tr>
                                                        <tr>
                                                           
                                                            <th>HSN ( at 6 digit level)</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Eligible Duties paid on such inputs</th>
                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody id="table7A7Atbody"> 
                                                         @if(count($array7A7ADetails['data']['table']) >   0)
                        @foreach($array7A7ADetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                          <!--    <td>
<select name="type_of_goods_7A">
<option selected disabled>-- Select--</option>
<option>Inputs</option>
<option>Semi-finished</option>
<option>Finished</option>

</select>
</td>-->
                                                            <td><input type="text" class="form-control" name="hsn_7A7A" value="{{$tableData['hsn']}}"/></td>
                                                            <td><input type="text" class="form-control" name="unit_7A7A" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="text" class="form-control" name="quantity_7A7A" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="text" class="form-control" name="value_7A7A" value="{{$tableData['value']}}"/></td>
                                                            <td><input type="text" class="form-control" name="duties_paid_7A7A" value="{{$tableData['dutiesPaid']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>  
                                                        @endforeach
                    @else
                     <tr>
                    <!--       <td>
<select name="type_of_goods_7A">
<option selected disabled>-- Select--</option>
<option>Inputs</option>
<option>Semi-finished</option>
<option>Finished</option>

</select>
</td>-->
                                                            <td><input type="text" class="form-control" name="hsn_7A7A"/></td>
                                                            <td><input type="text" class="form-control" name="unit_7A7A"/></td>
                                                            <td><input type="text" class="form-control" name="quantity_7A7A"/></td>
                                                            <td><input type="text" class="form-control" name="value_7A7A"/></td>
                                                            <td><input type="text" class="form-control" name="duties_paid_7A7A"/></td>
                                                        </tr> 
                    
                     @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab8">
                                                 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                  <div id="questions7A7A">
                                                    @foreach($array7A7BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="7A7BQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "7A7BQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@7A7BQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group7A7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7B{{$question['id'].$option['optionId']}}" data-showQuestionId="7A7BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group7A7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group7A7B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7A7B{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group7A7B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox7A7B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox7A7B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="7A7BQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox7A7B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox7A7A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox7A7B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="7A7BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array7A7BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array7A7BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array7A7BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group7A7B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group7A7B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group7A7B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox7A7B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox7A7B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox7A7B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input7A7BQuestions" id="input7A7BQuestions" value="{{$array7A7BQuestions}}">
                                                <input type="hidden" name="input7A7BQuestionsContinue" id="input7A7BQuestionsContinue" value="0">                                                
                                                 <div id="table7A7B" style="{{(count($array7A7BDetails['data']['questions']) >   0) ? 'display:none':''}}">   
                                                    
                                                    <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7BTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock where duty paid invoices or any other document are available</th>
                                                            <th roespan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7A7B">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th>HSN ( at 6 digit level)</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Eligible Duties paid on such inputs</th>
                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody id="table7A7Btbody"> 
                                                         @if(count($array7A7BDetails['data']['table']) >   0)
                        @foreach($array7A7BDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="hsn_7A7B" value="{{$tableData['hsn']}}"/></td>
                                                            <td><input type="number" class="form-control" name="unit_7A7B" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_7A7B" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control" name="value_7A7B" value="{{$tableData['value']}}"/></td>
                                                            <td><input type="number" class="form-control" name="duties_paid_7A7B" value="{{$tableData['dutiesPaid']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>  
                                                        @endforeach
                    @else
                     <tr>
                                                            <td><input type="text" class="form-control" name="hsn_7A7B"/></td>
                                                            <td><input type="number" class="form-control" name="unit_7A7B"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_7A7B"/></td>
                                                            <td><input type="number" class="form-control" name="value_7A7B"/></td>
                                                            <td><input type="number" class="form-control" name="duties_paid_7A7B"/></td>
                                                        </tr> 
                    
                     @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>                                            
                                            <div class="tab-pane" id="tab9">
                                                  <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                                                                  <div id="questions7B">
                                                    @foreach($array7BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="7BQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "7BQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@7BQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7B{{$question['id'].$option['optionId']}}" data-showQuestionId="7BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group7B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7B{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group7B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox7B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox7B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="7BQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox7B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox7B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox7B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="7BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array7BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array7BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array7BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group7B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group7B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group7B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox7B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox7B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox7B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input7BQuestions" id="input7BQuestions" value="{{$array7BQuestions}}">
                                                <input type="hidden" name="input7BQuestionsContinue" id="input7BQuestionsContinue" value="0">
                                                <div id="table7B" style="{{(count($array7BDetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7BTable">
                                                    <thead>
                                                           <tr>
                                                            <th colspan="8">Amount of vat and entry Tax paid on inputs supported by invoices/documents evidencing payment of tax 
                                                                carried forward to electronic credit ledger as SGST/UTGST</th>
                                                            
                                                              <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7B">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                           <!--     <th rowspan="2"> Nature of Eligible Duty Paid</th>-->
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
                                                    <tbody id="table7Btbody">
                                                        @if(count($array7BDetails['data']['table']) >   0)
                                                       
                        @foreach($array7BDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                          <!--       <td>
<select name="eligble_duty_paid_7B">
<option selected disabled>-- Select--</option>
<option>Duty of excise specified in the First & Second Schedule to the Central Excise Tariff Act, 1985;</option>
<option>Additional Duties of Excise (Goods of Special</option>
<option>Additional Duties of Excise (Textile and Textile</option>
<option>Additional duty leviable u/s 3(1)  & 3(5) of the</option>
<option>National Calamity Contingent Duty leviable under section 136 of the Finance Act, 2001,</option>

</select>
</td>-->
                                                            <td><input type="text" class="form-control" name="description_7B" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control" name="unit_7B" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_7B" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control" name="value_7B" value="{{$tableData['value']}}"/></td>
                                                            <td><input type="number" class="form-control" name="vat_7B" value="{{$tableData['vat']}}"/></td>
                                                            <td><input type="number" class="form-control" name="tax_credit_claimed_7B" value="{{$tableData['taxCreditClaimed']}}"/></td>
                                                            <td><input type="number" class="form-control" name="tax_credit_exempt_7B" value="{{$tableData['taxCreditExempt']}}"/></td>
                                                            <td><input type="number" class="form-control" name="tax_credit_admissible_7B" value="{{$tableData['taxCreditAdmissible']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                         @endforeach
                                                            @else
                                                            <tr>
                                                         <!--       <td>
<select name="eligble_duty_paid_7B">
<option selected disabled>-- Select--</option>
<option>Duty of excise specified in the First & Second Schedule to the Central Excise Tariff Act, 1985;</option>
<option>Additional Duties of Excise (Goods of Special</option>
<option>Additional Duties of Excise (Textile and Textile</option>
<option>Additional duty leviable u/s 3(1)  & 3(5) of the</option>
<option>National Calamity Contingent Duty leviable under section 136 of the Finance Act, 2001,</option>

</select>
</td>-->
                                                            <td><input type="text" class="form-control" name="description_7B"/></td>
                                                            <td><input type="number" class="form-control" name="unit_7B"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_7B"/></td>
                                                            <td><input type="number" class="form-control" name="value_7B"/></td>
                                                            <td><input type="number" class="form-control" name="vat_7B"/></td>
                                                            <td><input type="number" class="form-control" name="tax_credit_claimed_7B"/></td>
                                                            <td><input type="number" class="form-control" name="tax_credit_exempt_7B"/></td>
                                                            <td><input type="number" class="form-control" name="tax_credit_admissible_7B"/></td>
                                                            </tr>
                                                            
                                                            @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab10">
                                                             <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                                                                                                <div id="questions7C">
                                                    @foreach($array7CDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="7CQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "7CQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@7CQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group7C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7C{{$question['id'].$option['optionId']}}" data-showQuestionId="7CQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group7C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7C{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group7C{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7C{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group7C{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox7C{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox7C{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="7CQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox7C{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox7C{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox7C{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="7CQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array7CDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array7CDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array7CDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group7C{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group7C{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group7C{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox7C{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox7C{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox7C{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input7CQuestions" id="input7CQuestions" value="{{$array7CQuestions}}">
                                                <input type="hidden" name="input7CQuestionsContinue" id="input7CQuestionsContinue" value="0">
                                                <div id="table7C" style="{{(count($array7CDetails['data']['questions']) >   0) ? 'display:none':''}}"> 
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7CTable">
                                                    <thead>
                                                         <tr>
                                                               <th colspan="5">Stock of goods not supported by invoices/dcouments evidencing payment of tax(credit in terms of rule 1(4)) (To be there only in states having VAT at single point)</th>
                                                             <th rowspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7C">Add row</button></th>
                                                        </tr>
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
                                                    <tbody id="table7Ctbody">
                                                        @if(count($array7CDetails['data']['table']) >   0)                                                        
                                                        @foreach($array7CDetails['data']['table']   as $key=>$tableData) 
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="description_7C" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control" name="unit_7C" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_7C" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control" name="value_7C" value="{{$tableData['value']}}"/></td>
                                                            <td><input type="number" class="form-control" name="taxPaid_7C" value="{{$tableData['taxPaid']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="description_7C"/></td>
                                                            <td><input type="number" class="form-control" name="unit_7C"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_7C"/></td>
                                                            <td><input type="number" class="form-control" name="value_7C"/></td>
                                                            <td><input type="number" class="form-control" name="taxPaid_7C"/></td>
                                                        </tr>
                                                        @endif
                                                        
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab11">
                                                <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions8">
                                                    @foreach($array8Details['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="8Q{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "8Q";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@8Q'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group8{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group8{{$question['id'].$option['optionId']}}" data-showQuestionId="8Q{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group8{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group8{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group8{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group8{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group8{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox8{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox8{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="8Q{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox8{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox8{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox8{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="8Q{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array8Details['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array8Details['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array8Details['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group8{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group8{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group8{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox8{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox8{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox8{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input8Questions" id="input8Questions" value="{{$array8Questions}}">
                                                <input type="hidden" name="input8QuestionsContinue" id="input8QuestionsContinue" value="0">
                                                <div id="table8" style="{{(count($array8Details['data']['questions']) >   0) ? 'display:none':''}}">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="8Table">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="8">Details of transfer of cenvat credit for registered person having centralized registration under existing law(Section 140(8))</th>
                                                             <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow8">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Registration no. under existing law (Centralized)</th>
                                                            <th rowspan="2">Tax period to which the last return filed under the existing law pertains</th>
                                                            <th rowspan="2">Date of filing of the return specified in Column no. 3</th>
                                                            <th rowspan="2">Balance eligible cenvat credit carried forward in the said last return</th>
                                                            <th rowspan="2">GSTIN of receivers ( same PAN) of ITC CENTRAL TAX</th>
                                                            <th colspan="2" class="text-center">Distribution document / invoice</th>
                                                            <th rowspan="2">ITC of CENTRAL TAX transferred</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table8tbody">
                                                        @if(count($array8Details['data']['table']) >   0)
                                                                    @foreach($array8Details['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="register_no_8" value="{{$tableData['registerNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="tax_period_8" value="{{$tableData['taxPeriod']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="date_filling_8" value="@php echo date('d/m/Y', strtotime($tableData['dateFilling'])); @endphp"/></td>
                                                            <td><input type="text" class="form-control" name="cenvat_credit_8" value="{{$tableData['cenvatCredit']}}"/></td>
                                                            <td><input type="text" class="form-control" name="itc_central_tax_8" value="{{$tableData['itcCentralTax']}}"/></td>
                                                            <td><input type="text" class="form-control" name="invoice_no_8" value="{{$tableData['invoiceNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_8" value="@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp"/></td>
                                                            <td><input type="text" class="form-control" name="central_tax_transfered_8" value="{{$tableData['centralTaxTransfered']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow8" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="register_no_8"/></td>
                                                            <td><input type="text" class="form-control" name="tax_period_8"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="date_filling_8"/></td>
                                                            <td><input type="text" class="form-control" name="cenvat_credit_8"/></td>
                                                            <td><input type="text" class="form-control" name="itc_central_tax_8"/></td>
                                                            <td><input type="text" class="form-control" name="invoice_no_8"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_8"/></td>
                                                            <td><input type="text" class="form-control" name="central_tax_transfered_8"/></td>
                                                        </tr>   
                                                                
                                                        @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>                                   
                                          
                                            <div class="tab-pane" id="tab12">
                                                <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions9A">
                                                    @foreach($array9ADetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="9AQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "9AQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@9AQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group9A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group9A{{$question['id'].$option['optionId']}}" data-showQuestionId="9AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group9A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group9A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group9A{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group9A{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group9A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox9A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox9A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="9AQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox9A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox9A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox9A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="9AQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array9ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array9ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array9ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group9A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group9A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group9A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox9A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox9A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox9A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input9AQuestions" id="input9AQuestions" value="{{$array9AQuestions}}">
                                                <input type="hidden" name="input9AQuestionsContinue" id="input9AQuestionsContinue" value="0">
                                                <div id="table9A" style="{{(count($array9ADetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9ATable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="9">Details of goods sent as principal to the job worker under section 141</th>
                                                             <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow9A">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Challan No</th>
                                                             <th rowspan="2">Type of goods </th>
                                                            <th rowspan="2">Challan Date</th>
                                                            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
                                                            <th colspan="5" class="text-center">Details of goods with job-worker</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table9Atbody">
                                                         @if(count($array9ADetails['data']['table']) >   0)
                                                         @php
                                                          $unit_9A=0;
                                                            $quantity_9A=0;
                                                            $value_9A=0;
                                                            
                                                         @endphp
                                                                    @foreach($array9ADetails['data']['table']   as $key=>$tableData)
                                                                    @php
                                                                     $unit_9A    +=  $tableData['unit'];
                                                                      $quantity_9A    +=  $tableData['quantity'];
                                                                       $value_9A    +=  $tableData['value'];
                                                                    @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="challan_no_9A" value="{{$tableData['challanNo']}}"/></td>
                                                            <td>
                                                                @php $sixAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                <select name="type_of_goods_9A" id="type_of_goods_9A">
                                                              @foreach($sixAOption as $value)
                                                                <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      
                                                                
</td>
                                                            <td><input type="text" class="datepicker form-control" name="challan_date_9A" value="@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp"/></td>
                                                            <td><input type="text" class="form-control" name="goods_type_9A" value="{{$tableData['goodsType']}}"/></td>
                                                            <td><input type="text" class="form-control" name="hsn_9A" value="{{$tableData['hsn']}}"/></td>
                                                            <td><input type="text" class="form-control" name="description_9A" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="unit_9A" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="quantity_9A" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="value_9A" value="{{$tableData['value']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr> 
                                                        @endforeach
                                                                @else
                                                            <tr>
                                                            <td><input type="text" class="form-control" name="challan_no_9A"/></td>
                                                            <td>
<select name="type_of_goods_9A" id="type_of_goods_9A">
<option selected disabled>-- Select--</option>
<option>Inputs</option>
<option>Semi finished Goods</option>
<option>Finished Goods</option>
<option>Capital Goods</option>


</select>
</td>
                                                            <td><input type="text" class="datepicker form-control" name="challan_date_9A"/></td>
                                                            <td><input type="text" class="form-control" name="goods_type_9A"/></td>
                                                            <td><input type="text" class="form-control" name="hsn_9A"/></td>
                                                            <td><input type="text" class="form-control" name="description_9A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="unit_9A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="quantity_9A"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="value_9A"/></td>
                                                        </tr>                                                                
                                                         @endif
                                                    </tbody>
                                                      <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
                                                           <th id="unit_9A_total">
                                                               @if(isset($unit_9A))
                                                               {{$unit_9A}}
                                                               @endif
                                                           </th>
                                                            <th id="quantity_9A_total">
                                                                  @if(isset($quantity_9A))
                                                               {{$quantity_9A}}
                                                               @endif
                                                                </th>
                                                            <th id="value_9A_total">
                                                                  @if(isset($value_9A))
                                                                {{$value_9A}}
                                                               @endif
                                                               </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab13">
                                                <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions9B">
                                                    @foreach($array9BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="9BQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "5BQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@9BQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group9B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group9B{{$question['id'].$option['optionId']}}" data-showQuestionId="9BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group9B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group9B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group9B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group9B{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group9B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox9B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox9B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="9BQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox9B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox9B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox9B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="9BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array9BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array9BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array9BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group9B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group9B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group9B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox9B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox9B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox9B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input9BQuestions" id="input9BQuestions" value="{{$array9BQuestions}}">
                                                <input type="hidden" name="input9BQuestionsContinue" id="input9BQuestionsContinue" value="0">
                                                <div id="table9B" style="{{(count($array9BDetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9BTable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="9">Details of goods held in stock as job worker on behalf of the principal under section 141</th>
                                                             <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow9B">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Challan No</th>
                                                          
                                                            <th rowspan="2">Challan Date</th>
                                                               <th rowspan="2">Type of Goods</th>
                                                            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
                                                            <th colspan="5" class="text-center">Details of goods with job-worker</th>
                                                          
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table9Atbody">
                                                         @if(count($array9BDetails['data']['table']) >   0)
                                                           
                                                         @php
                                                          $unit_9B=0;
                                                            $quantity_9B=0;
                                                            $value_9B=0;
                                                            
                                                         @endphp
                                                                    @foreach($array9BDetails['data']['table']   as $key=>$tableData)
                                                                     @php
                                                                     $unit_9B    +=  $tableData['unit'];
                                                                      $quantity_9B    +=  $tableData['quantity'];
                                                                       $value_9B    +=  $tableData['value'];
                                                                    @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="challan_no_9B" value="{{$tableData['challanNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="challan_date_9B" value=" @php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp"/></td>
                                                            <td>
                                                                  @php $sixAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                <select name="type_of_goods_9B" id="type_of_goods_9B">
                                                              @foreach($sixAOption as $value)
                                                                <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      



</select>
</td>
                                                            <td><input type="text" class="form-control" name="goods_type_9B" value="{{$tableData['goodsType']}}"/></td>
                                                            <td><input type="text" class="form-control" name="hsn_9B" value="{{$tableData['hsn']}}"/></td>
                                                            <td><input type="text" class="form-control" name="description_9B" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="unit_9B" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="quantity_9B" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="value_9B" value="{{$tableData['value']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr> 
                                                        @endforeach
                                                                @else
                                                            <tr>
                                                            <td><input type="text" class="form-control" name="challan_no_9B"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="challan_date_9B"/></td>
                                                            <td>
<select name="type_of_goods_9B"  id="type_of_goods_9B">
<option selected disabled>-- Select--</option>
<option>Inputs</option>
<option>Semi finished Goods</option>
<option>Finished Goods</option>
<option>Capital Goods</option>


</select>
</td>
                                                            <td><input type="text" class="form-control" name="goods_type_9B"/></td>
                                                            <td><input type="text" class="form-control" name="hsn_9B"/></td>
                                                            <td><input type="text" class="form-control" name="description_9B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="unit_9B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="quantity_9B"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="value_9B"/></td>
                                                        </tr>                                                                
                                                         @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
                                                           <th id="unit_9B_total">
                                                               @if(isset($unit_9B))
                                                               {{$unit_9B}}
                                                               
                                                               @endif
                                                           
                                                           </th>
                                                            <th id="quantity_9B_total">
                                                                 @if(isset($quantity_9B))
                                                               {{$quantity_9B}}
                                                               
                                                               @endif
                                                                
                                                            </th>
                                                            <th id="value_9B_total">
                                                               
                                                             @if(isset($value_9B))
                                                               {{$value_9B}}
                                                               
                                                               @endif
                                                            </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab14">
                                                 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions10A">
                                                    @foreach($array10ADetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="10AQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "10AQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@10AQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group10A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group10A{{$question['id'].$option['optionId']}}" data-showQuestionId="10AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group10A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group10A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group10A{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group10A{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group10A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox10A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox10A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="10AQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox10A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox10A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox10A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="10AQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array10ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array10ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array10ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group10A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group10A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group10A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox10A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox10A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox10A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input10AQuestions" id="input10AQuestions" value="{{$array10AQuestions}}">
                                                <input type="hidden" name="input10AQuestionsContinue" id="input10AQuestionsContinue" value="0">
                                                <div id="table10A" style="{{(count($array10ADetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10ATable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="7">Details of goods held as agent on behalf of the principal</th>
                                                             <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow10A">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">GSTIN of Principal</th>
                                                            <th rowspan="2">Type of Goods</th>
                                                            <th colspan="5" class="text-center">Details of goods with Agent</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Input Tax to be taken</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table10Atbody">
                                                        @if(count($array10ADetails['data']['table']) >   0)
                                                                    @foreach($array10ADetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="gstn_principal_10A" value="{{$tableData['gstnPrincipal']}}"/></td>
                                                           <td>
                                                               @php $tenAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                <select name="type_of_goods_10A" id="type_of_goods_10A">
                                                              @foreach($tenAOption as $value)
                                                                <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      
                                                                 </select>
                                                               
                                                           </td>
                                                            <td><input type="text" class="form-control" name="description_10A" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control" name="unit_10A" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_10A" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control" name="value_10A" value="{{$tableData['value']}}"/></td>
                                                            <td><input type="number" class="form-control" name="input_tax_taken_10A" value="{{$tableData['inputTaxTaken']}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                         @endforeach
                                                            @else
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="gstn_principal_10A"/></td>
                                                                 <td><select name="type_of_goods_10A" id="type_of_goods_10A"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></td>
                                                            
                                                                <td><input type="text" class="form-control" name="description_10A"/></td>
                                                                <td><input type="number" class="form-control" name="unit_10A"/></td>
                                                                <td><input type="number" class="form-control" name="quantity_10A"/></td>
                                                                <td><input type="number" class="form-control" name="value_10A"/></td>
                                                                <td><input type="number" class="form-control" name="input_tax_taken_10A"/></td>
                                                            </tr> 
                                                          @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab15">
                                                  <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions10B">
                                                    @foreach($array10BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="10BQ{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "10BQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@10BQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group10B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group10B{{$question['id'].$option['optionId']}}" data-showQuestionId="10BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group10B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group10B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group10B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group10B{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group10B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox10B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox10B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="10BQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox10B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox10B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox10B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="10BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array10BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array10BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array10BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group10B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group10B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group10B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox10B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox10B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox10B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input10BQuestions" id="input10BQuestions" value="{{$array10BQuestions}}">
                                                <input type="hidden" name="input10BQuestionsContinue" id="input10BQuestionsContinue" value="0">
                                                <div id="table10B" style="{{(count($array10BDetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10BTable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="7">Details of goods held by the agent</th>
                                                             <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow10B">Add row</button></th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">GSTIN of Principal</th>
                                                            <th rowspan="2">Type of Goods</th>
                                                            <th colspan="5" class="text-center">Details of goods with Agent</th>
                                                          
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Input Tax to be taken</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table10Atbody">
                                                        @if(count($array10BDetails['data']['table']) >   0)
                                                                    @foreach($array10BDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="gstn_principal_10B" value="{{$tableData['gstnPrincipal']}}"/></td>
                                                            <td>
                                                                @php $tenBOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                <select name="type_of_goods_10B" id="type_of_goods_10B">
                                                              @foreach($tenBOption as $value)
                                                                <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      
                                                                 </select>
                                                               </td>
                                                            <td><input type="text" class="form-control" name="description_10B" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control" name="unit_10B" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control" name="quantity_10B" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control" name="value_10B" value="{{$tableData['value']}}"/></td>
                                                            <td><input type="number" class="form-control" name="input_tax_taken_10B" value="{{$tableData['inputTaxTaken']}}"/></td>
                                                          
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                         @endforeach
                                                            @else
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="gstn_principal_10B"/></td>
                                                                <td>
                                                                    <select name="type_of_goods_10B" id="type_of_goods_10B">
                                                                        <option selected disabled>-- Select--</option><option>Inputs</option>
                                                                        <option>Semi finished Goods</option><option>Finished Goods</option>
                                                                        <option>Capital Goods</option>
                                                                    
                                                                    
                                                                    </select></td>
                                                            
                                                                <td><input type="text" class="form-control" name="description_10B"/></td>
                                                                <td><input type="text" class="form-control" name="unit_10B"/></td>
                                                                <td><input type="text" class="form-control" name="quantity_10B"/></td>
                                                                <td><input type="text" class="form-control" name="value_10B"/></td>
                                                                <td><input type="text" class="form-control" name="input_tax_taken_10B"/></td>
                                                            </tr> 
                                                          @endif
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab16">
                                                   <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                               <div id="questions11">
                                                    @foreach($array11Details['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="11Q{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "11Q";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@11Q'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group11{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group11{{$question['id'].$option['optionId']}}" data-showQuestionId="11Q{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group11{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group11{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group11{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group11{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group11{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox11{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox11{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="11Q{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox11{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox11{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox11{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="11Q{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array11Details['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array11Details['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array11Details['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group11{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group11{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group11{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox11{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox11{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox11{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input11Questions" id="input11Questions" value="{{$array11Questions}}">
                                                <input type="hidden" name="input11QuestionsContinue" id="input11QuestionsContinue" value="0">
                                                <div id="table11" style="{{(count($array11Details['data']['questions']) >   0) ? 'display:none':''}}">   
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="11Table">
                                                    <thead>
                                                          <tr>
                                                            <th colspan="6" >Details of credit availed in terms of section 142(11(c )))</th>
                                                            <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow11">Add row</button></th>
                                                       
                                                        </tr>
                                                        <tr>
                                                            <th>Registration No of VAT</th>
                                                            <th>Service Tax Registration No.</th>
                                                            <th>Invoice / Document No.</th>
                                                            <th>Invoice / Document Date</th>
                                                            <th>Tax Paid</th>
                                                            <th>VAT paid Taken as SGST Credit or Service Tax paid as Central Tax Credit</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table11tbody">
                                                        @if(count($array11Details['data']['table']) >   0)
                                                        @php  $tax_paid_11=0; $tax_credit_11=0; @endphp
                                                            @foreach($array11Details['data']['table']   as $key=>$tableData)
                                                            @php 
                                                            $tax_paid_11 += $tableData['TaxPaid']; 
                                                            $tax_credit_11 += $tableData['taxCredit'];
                                                            
                                                            @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="vat_reg_no_11" value="{{$tableData['vatRegNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="service_tax_regno_11" value="{{$tableData['serviceTaxRegNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="invoice_no_11" value="{{$tableData['invoiceNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_11" value="@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_paid_11" value="{{$tableData['TaxPaid']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_credit_11" value="{{$tableData['taxCredit']}}"/></td>
                                                            <td>@if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                        @endif</td>
                                                        </tr>
                                                         @endforeach
                                                            @else
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="vat_reg_no_11"/></td>
                                                                <td><input type="text" class="form-control" name="service_tax_regno_11"/></td>
                                                                <td><input type="text" class="form-control" name="invoice_no_11"/></td>
                                                                <td><input type="text" class="datepicker form-control" name="invoice_date_11"/></td>
                                                                <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_paid_11"/></td>
                                                                <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_credit_11"/></td>
                                                                <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                            </tr>
                                                            @endif
                                                    </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th colspan="4">Total</th>
                                                          <th id="tax_paid_11_total">
                                                              @if(isset($tax_paid_11))
                                                              {{$tax_paid_11}}
                                                              @endif
                                                          </th>
                                                          <th id="tax_credit_11_total">
                                                              @if(isset($tax_credit_11))
                                                              {{$tax_credit_11}}
                                                              @endif 
                                                          </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </div>  
                                            </div>
                                            <div class="tab-pane" id="tab17">
                                               <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                    <div id="questions12">
                                                    @foreach($array12Details['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="12Q{{$question['id']}}">
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "12Q";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@12Q'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group12{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group12{{$question['id'].$option['optionId']}}" data-showQuestionId="12Q{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @else
                                                                                <input name="group12{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group12{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group12{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group12{{$question['id'].$option['optionId']}}"/>
                                                                        @endif   
                                                                        <label for="group12{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox12{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox12{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="12Q{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox12{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox12{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox12{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="12Q{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array12Details['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array12Details['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array12Details['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group12{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group12{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group12{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox12{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox12{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox12{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="input12Questions" id="input12Questions" value="{{$array12Questions}}">
                                                <input type="hidden" name="input12QuestionsContinue" id="input12QuestionsContinue" value="0">
                                                <div id="table12" style="{{(count($array12Details['data']['questions']) >   0) ? 'display:none':''}}">  
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="12Table">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="9" >Details of goods sent on approval basis six months prior to the appointed day (section 142(12))</th>
                                                            <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow12">Add row</button></th>
                                                       
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Document no</th>
                                                            <th rowspan="2">Document date</th>
                                                            <th rowspan="2">GSTIN no. of recipient, (if applicable)</th>
                                                            <th rowspan="2">Name & address of recipient</th>
                                                            <th colspan="5" class="text-center">Details of goods sent on approval basis</th>
                                                             
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table12tbody">
                                                @if(count($array12Details['data']['table']) >   0)
                                                @php
                                                $unit_12=0;
                                                $quantity_12=0;
                                                $value_12=0;
                                                @endphp
                                                    @foreach($array12Details['data']['table']   as $key=>$tableData)
                                                     @php
                                                $unit_12 +=$tableData['unit'];
                                                $quantity_12 +=$tableData['quantity'];
                                                $value_12 +=$tableData['value'];
                                                @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="document_no_12" value="{{$tableData['documentNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="document_date_12" value="@php echo date('d/m/Y', strtotime($tableData['documentDate'])); @endphp"/></td>
                                                            <td><input type="text" class="form-control" name="gstn_number_12" value="{{$tableData['gstnNumber']}}"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_name_12" value="{{$tableData['RecipientName']}}"/></td>
                                                            <td><input type="text" class="form-control" name="hsn_12" value="{{$tableData['hsn']}}"/></td>
                                                            <td><input type="text" class="form-control" name="description_12" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="unit_12" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="quantity_12" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="value_12" value="{{$tableData['value']}}"/></td>
                                                           
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow12" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="document_no_12"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="document_date_12"/></td>
                                                            <td><input type="text" class="form-control" name="gstn_number_12"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_name_12"/></td>
                                                            <td><input type="text" class="form-control" name="hsn_12"/></td>
                                                            <td><input type="text" class="form-control" name="description_12"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="unit_12"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="quantity_12"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="value_12"/></td>
                                                        </tr>
                                                        @endif
                                                    </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
                                                          <th id="unit_12_total">
                                                              @if(isset($unit_12))
                                                              {{$unit_12}}
                                                              @endif
                                                          </th>
                                                          <th id="quantity_12_total">
                                                                 @if(isset($quantity_12))
                                                                {{$quantity_12}}
                                                              @endif
                                                            </th>
                                                            <th id="value_12_total">
                                                                   @if(isset($value_12))
                                                              {{$value_12}}
                                                              @endif
                                                              </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                    </div>
                                            </div>
                                            <div class="tab-pane" id="tab18">
                                                
                                                 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                @php
                                               
                                                 $balance_cenvat_credit_5A_totals    =   0;
                                                                    $cenvat_credit_admissible_5A_totals =   0;
                                                                    $tax_periof_total=0;
                                                                @endphp
                                                    @if(count($array5ADetails['data']['table']) >   0)               
                                                 <h4>5A</h4>
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="10">Amount of Cenvat credit carried forward to electronic credit ledger as central tax</th>
                                                        </tr>
                                                      <tr>
                                                          
                                                                  <th> 
                                                               Sl. No.
                                                                </th>
                                                                <th>Registration No. under existing law 
                                                               
                                                                </th>
                                                                
                                                                <th>Tax period to which the last return filed under the existing law pertains 
                                                               
                                                                </th>
                                                                <th>Date of filing of such return
                                                                
                                                                </th>
                                                                <th>Balance cenvat credit 
                                                                
                                                                </th>
                                                                <th>Cenvat credit admissible 
                                                              
                                                                </th>
                                                              
                                                            </tr>
                                                    </thead>
                
                                                    <tbody>
                                                        <?php
                                                       /* echo "<pre>";
        print_r($array5ADetails['data']['table']);
        exit();*/
        ?>                                                  @php $fiveBSN=1; @endphp
                                                           @foreach($array5ADetails['data']['table']   as $key=>$tableData)
                                                                        @php
                                                                            $balance_cenvat_credit_5A_totals    +=  $tableData['balanceCenvatCredit'];
                                                                            $cenvat_credit_admissible_5A_totals +=  $tableData['balanceCenvatAdmissible'];
                                                                            
                                                                        @endphp
                                                        <tr>
                                                            <td>{{$fiveBSN}}</td>
                                                             <td>{{$tableData['registrationNo']}}</td>
                                                              <td>{{$tableData['taxPeriod']}}</td>
                                                               <td>{{$tableData['dateFiling']}}</td>
                                                                <td>{{$tableData['balanceCenvatCredit']}}</td>
                                                                 <td>{{$tableData['balanceCenvatAdmissible']}}</td>
                                                                 
                                                        </tr>
                                                         @php $fiveBSN++; @endphp
                                                         @endforeach
                                                    </tbody>
                                                     <tfoot>
                                                            <tr>
                                                                <th colspan="4">Total</th>
                                                                <th id="balance_cenvat_credit_5A_total">{{$balance_cenvat_credit_5A_totals}}</th>
                                                                <th id="cenvat_credit_admissible_5A_total">{{$cenvat_credit_admissible_5A_totals}}</th>
                                                              
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                                 @endif
                                                
                                                 <!---5b Table-->
                                                 @if(count($array5BDetails['data']['table']) > 0)
                                                   <h4>5B</h4>
                                                 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="5BTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="8">Details of statutory forms received for which credit is being carried forward</th>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Sr. No</th>
                                                             <th>Type</th>
                                                            <th>Sr. No. of Form</th>
                                                            <th>TIN of Issuer</th>
                                                            <th>Name of Issuer</th>
                                                            <th> Sales Value</th>
                                                            <th>Amount</th>
                                                            <th>Applicable VAT Rate</th>
                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table5Btbody">
                                                       
                                                       <tr>
                                                                <th colspan="7">C-Form</th>
                                                            </tr>
                                                            @php 
                                                            $c=1;$f=1;$h=1;$i=1;
                                                            $cAmount=0; $cVatRate=0;
                                                            $fAmount=0; $fVatRate=0;
                                                            $hAmount=0; $hVatRate=0;
                                                            $iAmount=0; $iVatRate=0;
                                                            @endphp
                                                             @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                                                              @if(trim($tableData['type'])=='C')
                                                              @php 
                                                              $cAmount+=$tableData['amount'];
                                                              $cVatRate+=$tableData['vatRate'];
                                                              @endphp
                                                            <tr>
                                                                <td>{{$c++}}</td>
                                                                <td>{{$tableData['type']}}</td>
                                                                
                                                              <td>{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                                                            <td>{{$tableData['tinIssuer']}}</td>
                                                            <td>{{$tableData['issuerName']}}</td>
                                                           <td>{{$tableData['salesValue']}}</td>
                                                            <td>{{$tableData['amount']}}</td>
                                                            <td>{{$tableData['vatRate']}}</td> 
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                            <tr>
                                                                <td colspan="6">Total</td>
                                                                <td>{{$cAmount}}</td>
                                                                <td>{{$cVatRate}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7">F-Form</th>
                                                            </tr>
                                                            <tr>
                                                               @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                                                              @if(trim($tableData['type'])=='F')
                                                               @php 
                                                              $fAmount+=$tableData['amount'];
                                                              $fVatRate+=$tableData['vatRate'];
                                                              @endphp
                                                            <tr>
                                                                <td>{{$f++}}</td>
                                                                <td>{{$tableData['type']}}</td>
                                                              <td>{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                                                            <td>{{$tableData['tinIssuer']}}</td>
                                                            <td>{{$tableData['issuerName']}}</td>
                                                           <td>{{$tableData['salesValue']}}</td>
                                                            <td>{{$tableData['amount']}}</td>
                                                            <td>{{$tableData['vatRate']}}</td> 
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                            </tr>
                                                            <tr>
                                                               
                                                               <td colspan="6">Total</td>
                                                                <td>{{$fAmount}}</td>
                                                                <td>{{$fVatRate}}</td>
                                                            </tr>
                                                           
                                            <tr>
                                                                <th colspan="7">H-Form</th>
                                                            </tr>
                                                            <tr>
                                                               @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                                                               
                                                              @if(trim($tableData['type'])=='H')
                                                               @php 
                                                              $hAmount+=$tableData['amount'];
                                                              $hVatRate+=$tableData['vatRate'];
                                                              @endphp
                                                            <tr>
                                                                <td>{{$h++}}</td>
                                                                <td>{{$tableData['type']}}</td>
                                                              <td>{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                                                            <td>{{$tableData['tinIssuer']}}</td>
                                                            <td>{{$tableData['issuerName']}}</td>
                                                           <td>{{$tableData['salesValue']}}</td>
                                                            <td>{{$tableData['amount']}}</td>
                                                            <td>{{$tableData['vatRate']}}</td> 
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                            </tr>
                                                            <tr>
                                                               
                                                               <td colspan="6">Total</td>
                                                                <td>{{$hAmount}}</td>
                                                                <td>{{$hVatRate}}</td>
                                                            </tr>
                                                             <tr>
                                                                <th colspan="7">I-Form</th>
                                                            </tr>
                                                            <tr>
                                                               @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                                                              @if(trim($tableData['type'])=='I')
                                                               @php 
                                                              $iAmount+=$tableData['amount'];
                                                              $iVatRate+=$tableData['vatRate'];
                                                              @endphp
                                                            <tr>
                                                                <td>{{$i++}}</td>
                                                                <td>{{$tableData['type']}}</td>
                                                              <td>{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                                                            <td>{{$tableData['tinIssuer']}}</td>
                                                            <td>{{$tableData['issuerName']}}</td>
                                                           <td>{{$tableData['salesValue']}}</td>
                                                            <td>{{$tableData['amount']}}</td>
                                                            <td>{{$tableData['vatRate']}}</td> 
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                            </tr>
                                                            <tr>
                                                               
                                                               <td colspan="6">Total</td>
                                                                <td>{{$iAmount}}</td>
                                                                <td>{{$iVatRate}}</td>
                                                            </tr>
                                                         </tbody>
                                                </table>
                                                         
                                                   @endif
                                                   
                                                   <!---5c Table--->
                                                   
                                                     @if(count($array5CDetails['data']['table']) >   0) 
                                                     <h4>5C</h4>
                                                    <table class="table table-bordered table-striped table-hover dataTable" id="5CTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Registration No. 
                                                               
                                                                </th>
                                                            <th rowspan="2">Balance of ITC of VAT 
                                                                
                                                                </th>
                                                            <th colspan="2" class="text-center">C Forms</th>
                                                            <th colspan="2" class="text-center">F Forms</th>
                                                            <th rowspan="2">ITC Reversal 
                                                               
                                                                </th>
                                                            <th colspan="2" class="text-center">H/I Forms 
                                                               
                                                                </th>
                                                            <th rowspan="2">Transition ITC 2 
                                                               
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
                                                    <tbody id="table5Ctbody">
                                                                                                      
                                                        @foreach($array5CDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>
                                                               {{$tableData['registrationNo']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['itcBalance']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['cFormPending']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['diffTaxPayable']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['fFormPending']}}
                                                            </td>
                                                            <td>
                                                              {{$tableData['fTaxPayable']}}
                                                            </td>
                                                            <td>
                                                                {{$tableData['itcReversal']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['hFormPedning']}}
                                                            </td>
                                                            <td>
                                                              {{$tableData['hTaxPayable']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['transition']}}
                                                            </td>
                                                            
                                                        </tr>
                                                         @endforeach
                                                   </tbody>
                                                </table>
                                                     @endif
                                                       <!--end of 5c Table--->
                                                       
                                                       <!---6A Table-->
                                                        @if(count($array6ADetails['data']['table']) >   0)
                                                            <h4>6A</h4>
                                                       <table class="table table-bordered table-striped table-hover dataTable" id="6ATable">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="15">Amount of unavailed cenvat credit in respect of capital goods carried forward to electronic credit ledger as central tax																																													Amount of unavailed cenvat credit in respect of capital goods carried forward to electronic credit ledger as central tax																																													
</th>
                                                            </tr>
                                                        <tr>
                                                             <th rowspan="3">Sr.No</th>
                                                            <th rowspan="3">Invoice/Document No.</th>
                                                            <th rowspan="3">Invoice/Document Date</th>
                                                            <th rowspan="3">Supplier Registration no. under existing law</th>
                                                            <th rowspan="3">Reciepients' Registration no. under existing law</th>
                                                              <th rowspan="3">Capital Goods</th>
                                                                <th rowspan="3">Nature of ITC carried forward</th>
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
                                                       
                                                        <tbody id="table6Atbody">
                                                            @php
                                                            $sixSerialNo=1;
                                                            $capital_good_value_6A_totals=0;
                                                            $capital_good_cvd_6A_totals=0;
                                                            $capital_good_sad_6A_totals=0;
                                                            $eligible_cenvat_6A_totals=0;
                                                            $cenvat_credit_availed_6A_totals=0;
                                                            $cenvat_credit_unavailed_6A_6A_totals=0;
                                                            @endphp
                                                           
                                                            @foreach($array6ADetails['data']['table']   as $key=>$tableData)
                                                            @php
                                                    $capital_good_value_6A_totals    +=  $tableData['capitalGoodValue'];
                                                $capital_good_cvd_6A_totals +=  $tableData['capitalGoodCvd'];
                                                  $capital_good_sad_6A_totals +=  $tableData['capitalGoodSad'];
                                                    $eligible_cenvat_6A_totals +=  $tableData['eligibleCenvat'];
                                                      $cenvat_credit_availed_6A_totals +=  $tableData['cenvatCreditAvailed'];
                                                        $cenvat_credit_unavailed_6A_6A_totals +=  $tableData['cenvatCreditUnavailed'];
                                                 @endphp
                                                        <tr>
                                                            <td>{{$sixSerialNo++}}</td>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            <td>{{$tableData['supplierRegNo']}}</td>
                                                            <td>{{$tableData['recipientRegNo']}}</td>
                                                            
                                                              <td>{{$tableData['recipientRegNo']}}</td>
                                                           
                                                               <td>
                                                                   {{$tableData['itcCarriedForward']}}
                                                               
                                                                </td>
                                                            <td>{{$tableData['capitalGoodValue']}}</td>
                                                            <td>{{$tableData['capitalGoodCvd']}}</td>
                                                            <td>{{$tableData['capitalGoodSad']}}</td>
                                                            
                                                           
                                                          
                                                            
                                                            <td>{{$tableData['eligibleCenvat']}}</td>
                                                            <td>{{$tableData['cenvatCreditAvailed']}}</td>
                                                            <td>{{$tableData['cenvatCreditUnavailed']}}</td>
                                                          
                                                        </tr>
                                                        @endforeach
                                                         </tbody>
                                                         <tfoot>
                                                            <tr>
                                                                <th colspan="7">Total</th>
                                                                    <th id="capital_good_value_6A_total">{{$capital_good_value_6A_totals}}</th>
                                                              <th id="capital_good_cvd_6A_total">{{$capital_good_cvd_6A_totals}}</th>
                                                              <th id="capital_good_sad_6A_total">{{$capital_good_sad_6A_totals}}</th>
                                                               <th id="eligible_cenvat_6A_total">{{$eligible_cenvat_6A_totals}}</th>
                                                              <th id="cenvat_credit_availed_6A_total">{{$cenvat_credit_availed_6A_totals}}</th>
                                                              <th id="cenvat_credit_unavailed_6A_total">{{$cenvat_credit_unavailed_6A_6A_totals}}</th>
                                                         
                                                             
                                                            </tr>
                                                        </tfoot>
                                                        </table>
                                                        @endif
                                                 <!--end of 6A table-->
                                                 
                                                 <!--6B table--> 
                                                 @if(count($array6BDetails['data']['table']) >   0)
                                                     <h4>6B</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="6BTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="15">Amount of unavailed input tax credit carried forward to electronic credit ledger as State/UT tax</th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Sr.no</th>
                                                            <th rowspan="2">Invoice/Document no.</th>
                                                            <th rowspan="2">Invoice/Document Date</th>
                                                             <th rowspan="2">Capital Goods</th>
                                                              <th rowspan="2">Nature of ITC carried Forward</th>
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
                                                  
                                                    <tbody id="table6Btbody">
                                                        
                                                        @php
                                                        $sixBSerialNo=1;
                                                        $capital_good_value_6B=0;
                                                        $capital_good_vat_6B=0;
                                                        $eligible_vat_6B=0;
                                                        $vatCredit_availed_6B=0;
                                                        $vat_credit_unavailed_6B=0;
                                                        @endphp
                                                    @foreach($array6BDetails['data']['table']   as $key=>$tableData)
                                                    @php
                                                    $capital_good_value_6B    +=  $tableData['capitalGoodValue'];
                                                    $capital_good_vat_6B    +=  $tableData['capitalGoodVat'];
                                                    $eligible_vat_6B    +=  $tableData['eligibleVat'];
                                                    $vatCredit_availed_6B    +=  $tableData['vatCreditAvailed'];
                                                    $vat_credit_unavailed_6B    +=  $tableData['vatCreditUnavailed'];
                                                    @endphp
                                                        <tr>
                                                            <td>{{$sixBSerialNo++}}</td>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            
                                                            
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                           
                                                               <td>
                                                               
                                                                </td>
                                                            
                                                            <td>{{$tableData['supplierRegNo']}}</td>
                                                            <td>{{$tableData['recipientRegNo']}}</td>
                                                            <td>{{$tableData['capitalGoodValue']}}</td>
                                                            <td>{{$tableData['capitalGoodVat']}}</td>
                                                            <td>{{$tableData['eligibleVat']}}</td>
                                                            <td>{{$tableData['vatCreditAvailed']}}</td>
                                                            <td>{{$tableData['vatCreditUnavailed']}}</td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                         </tbody>
                                                      <tfoot>
                                                        <tr>
                                                            
                                                            <th colspan="7">Total</th>
                                                           <th id="capital_good_value_6B_total">
                                                               @if(isset($capital_good_value_6B))
                                                               {{$capital_good_value_6B}}
                                                             @endif
                                                           </th>
                                                           <th id="capital_good_vat_6B_total">{{isset($capital_good_vat_6B)?$capital_good_vat_6B:0}}</th>
                                                            <th id="eligible_vat_6B_total">{{isset($eligible_vat_6B)?$eligible_vat_6B:0}}</th>
                                                            <th id="vatCredit_availed_6B_total">{{isset($vatCredit_availed_6B)?$vatCredit_availed_6B:0}}</th>
                                                            <th id="vat_credit_unavailed_6B_total">{{isset($vat_credit_unavailed_6B)?$vat_credit_unavailed_6B:0}}</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                 @endif
                                                 <!---6b table end-->
                                                 
                                                 <!--7A7A table-->
                                                  @if(count($array7A7ADetails['data']['table']) >   0)
                                                      <h4>7A7A</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7ATable">
                                                    <thead>
                                                        <tr>
                                                             <!-- <th>Type of Goods</th>-->
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                           
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Sr.No</th>
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
                                                    <tbody id="table7A7Atbody"> 
                                                       @php $sevenA7ASerialNo=1; @endphp 
                        @foreach($array7A7ADetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                          <!--    <td>
<select name="type_of_goods_7A">
<option selected disabled>-- Select--</option>
<option>Inputs</option>
<option>Semi-finished</option>
<option>Finished</option>

</select>
</td>-->                                                    <td>{{$sevenA7ASerialNo++}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['dutiesPaid']}}</td>
                                          
                                                        </tr>  
                                                        @endforeach
                                                         </tbody>
                                                </table>
                                                 @endif
                                                 <!--end of 7a7a table-->
                                                 
                                                 
                                                 <!---start of 7a7b table--> 
                                                    @if(count($array7A7BDetails['data']['table']) >   0)
                                                        <h4>7A7B</h4>
                                                 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7BTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="6">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>Sr.No</th>
                                                            <th>HSN ( at 6 digit level)</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Eligible Duties paid on such inputs</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">7B Where duty paid invoices or any other document are available</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table7A7Btbody"> 
                                                        @php $sevenA7BSerialNo=1; @endphp 
                        @foreach($array7A7BDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$sevenA7BSerialNo++}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['dutiesPaid']}}</td>
                                                           
                                                        </tr>  
                                                        @endforeach
                                                 </tbody>
                                                </table>
                                                    @endif
                                                 <!--end of 7a7b --->
                                                 
                                                 <!---7b table start--> 
                                                  @if(count($array7BDetails['data']['table']) >   0)
                                                      <h4>7B</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7BTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="12">7B Where duty paid invoices are not available (Applicable only for person other
                                                                than manufacurer or service provider) – Credit in terms of Rule 1 (4)</th>
                                                        </tr>
                                                        <tr>
                                                          <th rowspan="2"> Sr.No</th>
                                                          <th rowspan="2"> Nature of Eligible Duty Paid</th>
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
                                                    <tbody id="table7Btbody">
                                                       
                                                       @php $sevenBSerialNo=1; @endphp
                        @foreach($array7BDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$sevenBSerialNo++}}</td>
                                                             <td>

</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['vat']}}</td>
                                                            <td>{{$tableData['taxCreditClaimed']}}</td>
                                                            <td>{{$tableData['taxCreditExempt']}}</td>
                                                            <td>{{$tableData['taxCreditAdmissible']}}</td>
                                                           
                                                        </tr>
                                                         @endforeach
                                                         
                                                          </tbody>
                                                </table>
                                                  @endif
                                                 <!--end of 7b table-->  
                                                 
                                                 
                                                 <!--7c table-->
                                                   @if(count($array7CDetails['data']['table']) >   0) 
                                                       <h4>7C</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7CTable">
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
                                                    <tbody id="table7Ctbody">
                                                                                                             
                                                        @foreach($array7CDetails['data']['table']   as $key=>$tableData) 
                                                        <tr>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['taxPaid']}}</td>
                                                         
                                                            
                                                        </tr>
                                                        @endforeach
                                                        
                                                        </tbody>
                                                </table>
                                                        @endif
                                                 <!--7c table ends-->
                                                 <!--end of 5b table-->
                                                 
                                                 <!--8 table start---> 
                                                  @if(count($array8Details['data']['table']) >   0)
                                                     <h4>8</h4>
                                                 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="8Table">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="15">Registration no. under existing law (Centralized)Registration no. under existing law (Centralized) Date of filing of the return specified in Column no. 3</th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Sr.No</th>
                                                            <th rowspan="2">Registration no. under existing law (Centralized)</th>
                                                            <th rowspan="2">Tax period to which the last return filed under the existing law pertains</th>
                                                            <th rowspan="2">Date of filing of the return specified in Column no. 3</th>
                                                            <th rowspan="2">Balance eligible cenvat credit carried forward in the said last return</th>
                                                            <th rowspan="2">GSTIN of receivers ( same PAN) of ITC CENTRAL TAX</th>
                                                            <th colspan="2" class="text-center">Distribution document / invoice</th>
                                                            <th rowspan="2">ITC of CENTRAL TAX transferred</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table8tbody">
                                                       @php $eightSerialNo=1; @endphp
                                                                    @foreach($array8Details['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$eightSerialNo++}}</td>
                                                            <td>{{$tableData['registerNo']}}</td>
                                                            <td>{{$tableData['taxPeriod']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['dateFilling'])); @endphp</td>
                                                            <td>{{$tableData['cenvatCredit']}}</td>
                                                            <td>{{$tableData['itcCentralTax']}}</td>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            <td>{{$tableData['centralTaxTransfered']}}</td>
                                                          
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                </table>
                                                   @endif
                                                   
                                                        <!---8 table end-->
                                                        
                                                        <!--9a table--> 
                                                        @if(count($array9ADetails['data']['table']) >   0)
                                                            <h4>9A</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9ATable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="15">
                                                                Details of goods sent as principal to the job worker under section 141
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Sr.No</th>
                                                            <th rowspan="2">Challan No</th>
                                                             <th rowspan="2">Type of goods </th>
                                                            <th rowspan="2">Challan Date</th>
                                                            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
                                                            <th colspan="5" class="text-center">Details of goods with job-worker</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                           
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table9Atbody">
                                                         
                                                         @php
                                                          $unit_9A=0;
                                                            $quantity_9A=0;
                                                            $value_9A=0;
                                                            $ninASerialNo=1;
                                                         @endphp
                                                                    @foreach($array9ADetails['data']['table']   as $key=>$tableData)
                                                                    @php
                                                                     $unit_9A    +=  $tableData['unit'];
                                                                      $quantity_9A    +=  $tableData['quantity'];
                                                                       $value_9A    +=  $tableData['value'];
                                                                    @endphp
                                                        <tr>
                                                            <td>{{$ninASerialNo++}}</td>
                                                            <td>{{$tableData['challanNo']}}</td>
                        <td>{{$tableData['typeOfGoods']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp</td>
                                                            <td>{{$tableData['goodsType']}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            
                                                        </tr> 
                                                        @endforeach
                                                        </tbody>
                                                      <tfoot>
                                                        <tr>
                                                            <th colspan="7">Total</th>
                                                           <th id="unit_9A_total">
                                                               @if(isset($unit_9A))
                                                               {{$unit_9A}}
                                                               @endif
                                                           </th>
                                                            <th id="quantity_9A_total">
                                                                  @if(isset($quantity_9A))
                                                               {{$quantity_9A}}
                                                               @endif
                                                                </th>
                                                            <th id="value_9A_total">
                                                                  @if(isset($value_9A))
                                                                {{$value_9A}}
                                                               @endif
                                                               </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                        @endif
                                                        <!--end of 9a table-->
                                                        
                                                        
                                                        <!--9B table--> 
                                                         @if(count($array9BDetails['data']['table']) >   0)
                                                             <h4>9B</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9BTable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="15">
                                                               Details of goods held in stock as job worker on behalf of the principal under section 141
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                             <th rowspan="2">Sr.No</th>
                                                            <th rowspan="2">Challan No</th>
                                                          
                                                            <th rowspan="2">Challan Date</th>
                                                               <th rowspan="2">Type of Goods</th>
                                                            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
                                                            <th colspan="5" class="text-center">Details of goods with job-worker</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table9Atbody">
                                                        
                                                           
                                                         @php
                                                          $unit_9B=0;
                                                            $quantity_9B=0;
                                                            $value_9B=0;
                                                            $nineBSerialNo=1;
                                                         @endphp
                                                                    @foreach($array9BDetails['data']['table']   as $key=>$tableData)
                                                                     @php
                                                                     $unit_9B    +=  $tableData['unit'];
                                                                      $quantity_9B    +=  $tableData['quantity'];
                                                                       $value_9B    +=  $tableData['value'];
                                                                    @endphp
                                                        <tr>
                                                            <td>{{$nineBSerialNo++}}</td>
                                                            <td>{{$tableData['challanNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp</td>
                             <td>{{$tableData['typeOfGoods']}}</td>
                                                            <td>{{$tableData['goodsType']}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                         
                                                        </tr> 
                                                        @endforeach
                                                        </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="7">Total</th>
                                                           <th id="unit_9B_total">
                                                               @if(isset($unit_9B))
                                                               {{$unit_9B}}
                                                               
                                                               @endif
                                                           
                                                           </th>
                                                            <th id="quantity_9B_total">
                                                                 @if(isset($quantity_9B))
                                                               {{$quantity_9B}}
                                                               
                                                               @endif
                                                                
                                                            </th>
                                                            <th id="value_9B_total">
                                                               
                                                             @if(isset($value_9B))
                                                               {{$value_9B}}
                                                               
                                                               @endif
                                                            </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                        @endif
                                                        <!--end of 9B table--> 
                                                        
                                                        <!---10a table stat---> 
                                                         @if(count($array10ADetails['data']['table']) >   0)
                                                             <h4>10A</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10ATable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="15">
                                                               Details of goods held as Agent on behalf of the principal
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Sr.No</th>
                                                            <th rowspan="2">GSTIN of Principal</th>
                                                            <th rowspan="2">Type of Goods</th>
                                                            <th colspan="5" class="text-center">Details of goods with Agent</th>
                                                        
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Input Tax to be taken</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table10Atbody">
                                                       @php $tenASerialNo=1; @endphp
                                                                    @foreach($array10ADetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$tenASerialNo++}}</td>
                                                            <td>{{$tableData['gstnPrincipal']}}</td>
                                                                <td>{{$tableData['typeOfGoods']}}</td>
                                                         <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['inputTaxTaken']}}</td>
                                                           
                                                        </tr>
                                                         @endforeach
                                                           </tbody>
                                                </table>
                                                         @endif
                                                         <!--end of 10a table-->
                                                         
                                                         <!--start of 10B table-->
                                                          @if(count($array10BDetails['data']['table']) >   0)
                                                              <h4>10B</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10BTable">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="15">
                                                               Details of goods held by the Agent
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                                <th rowspan="2">Sr.No</th>
                                                            <th rowspan="2">GSTIN of Principal</th>
                                                            <th rowspan="2">Type of Goods</th>
                                                            <th colspan="5" class="text-center">Details of goods with Agent</th>
                                                          
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Input Tax to be taken</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table10Atbody">
                                                       @php $tenBSerialNo=1; @endphp
                                                                    @foreach($array10BDetails['data']['table']   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$tenBSerialNo++}}</td>
                                                            <td>{{$tableData['gstnPrincipal']}}</td>
                                                            <td>{{$tableData['typeOfGoods']}}</td>
                                                             <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['inputTaxTaken']}}</td>
                                                          
                                                        </tr>
                                                         @endforeach
                                                          </tbody>
                                                </table>
                                                         @endif
                                                         <!--end of 10B table--> 
                                                         
                                                         <!--start of 11 table--> 
                                                          @if(count($array11Details['data']['table']) >   0)
                                                              <h4>11</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="11Table">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="15">
                                                               Details of credit availed in terms of section 142(11(c )))
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Sr.No</th>
                                                            <th>Registration No of VAT</th>
                                                            <th>Service Tax Registration No.</th>
                                                            <th>Invoice / Document No.</th>
                                                            <th>Invoice / Document Date</th>
                                                            <th>Tax Paid</th>
                                                            <th>VAT paid Taken as SGST Credit or Service Tax paid as Central Tax Credit</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table11tbody">
                                                       
                                                        @php  $tax_paid_11=0; $tax_credit_11=0; $elevenSerialNo=1; @endphp
                                                            @foreach($array11Details['data']['table']   as $key=>$tableData)
                                                            @php 
                                                            $tax_paid_11 += $tableData['TaxPaid']; 
                                                            $tax_credit_11 += $tableData['taxCredit'];
                                                            
                                                            @endphp
                                                        <tr>
                                                            <td>{{$elevenSerialNo++}}</td>
                                                            <td>{{$tableData['vatRegNo']}}</td>
                                                            <td>{{$tableData['serviceTaxRegNo']}}</td>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            <td>{{$tableData['TaxPaid']}}</td>
                                                            <td>{{$tableData['taxCredit']}}</td>
                                                           
                                                        </tr>
                                                         @endforeach
                                                         
                                                          </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th colspan="5">Total</th>
                                                          <th id="tax_paid_11_total">
                                                              @if(isset($tax_paid_11))
                                                              {{$tax_paid_11}}
                                                              @endif
                                                          </th>
                                                          <th id="tax_credit_11_total">
                                                              @if(isset($tax_credit_11))
                                                              {{$tax_credit_11}}
                                                              @endif 
                                                          </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                         @endif
                                                         
                                                         <!--end of 11 table--> 
                                                         
                                                         <!--12 table--> 
                                                           @if(count($array12Details['data']['table']) ==  0)
                                                               <h4>12</h4>
                                                          <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="12Table">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="15">
                                                                Details of goods sent on approval basis six months prior to the appointed day (section 142(12))
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Sr.No</th>
                                                            <th rowspan="2">Document no</th>
                                                            <th rowspan="2">Document date</th>
                                                            <th rowspan="2">GSTIN no. of recipient, (if applicable)</th>
                                                            <th rowspan="2">Name & address of recipient</th>
                                                            <th colspan="5" class="text-center">Details of goods sent on approval basis</th>
                                                            
                                                        </tr>
                                                        <tr>
                                                            
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table12tbody">
                                              
                                                @php
                                                $unit_12=0;
                                                $quantity_12=0;
                                                $value_12=0;
                                                $twelveSerialNo=1;
                                                @endphp
                                                    @foreach($array12Details['data']['table']   as $key=>$tableData)
                                                     @php
                                                $unit_12 +=$tableData['unit'];
                                                $quantity_12 +=$tableData['quantity'];
                                                $value_12 +=$tableData['value'];
                                                @endphp
                                                        <tr>
                                                            <td>{{$twelveSerialNo++}}</td>
                                                            <td>{{$tableData['documentNo']}}</td>
                                                            <td>@php echo date('d-m-Y', strtotime($tableData['documentDate'])); @endphp</td>
                                                            <td>{{$tableData['gstnNumber']}}</td>
                                                            <td>{{$tableData['RecipientName']}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                           
                                                        
                                                        </tr>
                                                        @endforeach
                                                          </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
                                                          <th id="unit_12_total">
                                                              @if(isset($unit_12))
                                                              {{$unit_12}}
                                                              @endif
                                                          </th>
                                                          <th id="quantity_12_total">
                                                                 @if(isset($quantity_12))
                                                                {{$quantity_12}}
                                                              @endif
                                                            </th>
                                                            <th id="value_12_total">
                                                                   @if(isset($value_12))
                                                              {{$value_12}}
                                                              @endif
                                                              </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                           @endif
                                                         <!--end of 12 table--> 
                                                 
                                             
                                            </div>
                                          
                                            <ul class="pager wizard">
                                                <li class="next">
                                                    <button type="button" id="continue" class="btn bg-green">Continue</button>
                                                </li>
                                                <li class="save">
                                                    <button type="button" class="btn bg-green" data-type="success" id="save_return_draft">Save Draft</button>
                                                </li>
                                                <li class="finish js-sweetalert">
                                                    <button type="button" class="btn bg-deep-purple waves-effect" data-type="cancel">Upload to GSTN</button>
                                                </li>
                                                <li class="finish">
                                                    
                                                    <a href="{{url('/v-transfer-edit')}}/{{Request::segment(2)}}/{{Request::segment(3)}}/{{Request::segment(4)}}" class="btn btn-warning" >Edit</a>
                                                   
                                                </li>
                                                <li class="finish">
                                                    <button type="button" class="btn bg-indigo" id="printGst" >Print</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                       <!-- </form> 
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
     
    @push('script')
      <script src="{{asset('vtran/js/vtransfer.js')}}"></script>
      <script src="{{asset('/js/printThis.js')}}"></script>
    <script>
       
        
        function validateTaxCenters(){
            
        
        }
        $(function() {
$('input[name="registration_no_5C"]').val($('#vatRegNo').val());
    
  $(document).on('change','#nature_of_itc_5A', function(){
     
      // var $cell = $(this).parent();
  //  var $row = $cell.parent();
//    // $('input[name="registration_number_5A"]').eq($row.index()).val();
    //.closest("div.options")
   
 var rowIndex = $(this)
    .closest('tr') // Get the closest tr parent element
    .prevAll() // Find all sibling elements in front of it
    .length;
 $('input[name="registration_number_5A"]').eq(rowIndex).attr('value','');
   if(this.value=='service_tax'){
    
    //$('#nature_of_itc_5A').closest('input[name="registration_number_5A"]').attr('value',$('#serviceTaxRegNo').val());
 $('input[name="registration_number_5A"]').eq(rowIndex).attr('value',$('#serviceTaxRegNo').val());



   } else if(this.value=='excise_reg'){
     $('input[name="registration_number_5A"]').eq(rowIndex).attr('value',$('#exciseRegNo').val());
        // $(this).closest('input[name="registration_number_5A"]').attr('value',$('#serviceTaxRegNo').val());
   }
    
  });
  
});
       
    </script>
    <script>
        $('#printGst').on('click',function(){
            $('.fancy-title').hide();
             $('#tab18').printThis(
                     {
                     header: null,               // prefix to html
    footer: null,  
                     });
            
        });
   
    </script>
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
 $(document).ready(function(){
     @if($registeredPersonDetail->exciseRegNo||$registeredPersonDetail->vatRegNo||$registeredPersonDetail->serviceTaxRegNo)
    setTimeout(function () {
       
      $("#group2No").click();
      @if($registeredPersonDetail->vatRegNo)
          $('#group3VAT').click();
     $('input[name="vat_reg_GQ"]').parent('div').addClass('focused');
      
      @endif 
            @if($registeredPersonDetail->exciseRegNo)
          $('#group3Excise').click();
        $('input[name="service_tax_GQ"]').parent('div').addClass('focused');
      @endif
      @if($registeredPersonDetail->serviceTaxRegNo)
          $('#group3ServiceTax').click();
        $('input[name="excise_reg_no_GQ"]').parent('div').addClass('focused');
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