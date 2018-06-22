<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
<div id="uploadFileSection5C">
    <h4>Please provide details of tax credit carried forward to electronic credit ledger as State/UT Tax(For all registrations on the same PAN and in the same State)</h4>
    <h4>Upload your C Forms, F Forms, H Forms, I Forms details and Continue.( Click <a id="download_sample_form_5c" style="cursor: pointer;" >here</a> to download excel template)</h4>
    <form action="" enctype="multipart/form-data" name="fileUploadForm5C" id="fileUploadForm5C" method="POST">                                                       
        <div class="form-group">            
            <label class="btn bg-indigo" style="margin-bottom: 12px;">Browse&hellip; 
                <input type="file" name="cfhi_forms_5C[]" id="cfhi_forms_5C" style="display: none;" multiple />
            </label>
            <!-- <input value="" type="file" name="cfhi_forms_5C[]" id="cfhi_forms_5C" multiple />-->
            <!-- <input type="button" name="upload_file" id="upload_file_5C" value="Upload Attached File(s)" class="btn bg-indigo"/> -->
            <span id="fileUploadLoader1" style="display: none;"><img src="{{url("/images/loading.gif")}}"></img></span>
            <span id="fileUploadSuccess1" style="display: none;"><b style="color: green;">File uploaded successfully..</b></img></span>
            <br />
            <span id="upload_file_error_5C" style="color: red;"></span>
            <span id="uploadedFile_5C"></span>
        </div>
    </form>
    <h4>or click Continue to proceed with manual data entry</h4>
    <form action="{{ URL::asset('fileDownload') }}" name="sample_form_5c" id="sample_form_5c" method="post">  
        {{csrf_field()}}
        <!-- File name inside public folder, below folder -->
        <input type="hidden" name="fileName" value="sample_fom_5c.xls" />
        <!-- Folder name inside public folder -->
        <input type="hidden" name="filePath" value="sampleform" />
    </form>
</div> 
<div id="5Ccontainer" style="display:none">
    <div id="questions5C">
        @if(isset($array5CDetails['data']['questions'] ))
        @foreach($array5CDetails['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
        <div class="form-group" id="5CQ{{$question['id']}}">
             <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
            <input name="group5C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5C{{$question['id'].$option['optionId']}}" data-showQuestionId="5CQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
            @else
            <input name="group5C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5C{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
            @endif
            @else
            <input name="group5C{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group5C{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
        @endif
    </div>    
    <input type="hidden" name="input5CQuestions" id="input5CQuestions" value="{{$array5CQuestions}}">
    <input type="hidden" name="input5CQuestionsContinue" id="input5CQuestionsContinue" value="0">
    <div id="table5CC" style="{{(count($array5CDetails['data']['questions']) >   0) ? 'display:none':''}}">
        <!----5CC table--->
        <form id="fiveCCForm">
            <table class="table table-bordered table-striped table-hover dataTable table-condensed" id="5CCTable">
                <thead>
                    <tr>
                        <th colspan="8">Details of C forms pending under CST Act’1956. (from 01-04-2015 to 30-06-2017)</th>
                    </tr>
                    <tr class="tabTableColumnHeading">
                        <th>Type of Tax</th>
                        <th>Name of the Issuer</th>
                        <th class="text-center">Turnover for which C Forms are Pending

                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Here turnover against C forms not made available to your state's VAT department is to be reported, which also inculdes C forms received but not submitted/iploaded to VAT dept. It is advised that you first submit such C forms received and not submited to VAT dept. otherwise it may lead to reduction in ITC.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th class="text-center">Rate under respective state VAT
                        </th>
                        <th>Tax payable under existing laws  if sold without such forms </th>
                        <th class="text-center">Tax already paid under existing laws 
                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Includes VAT paid against turnover reported in column 4">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th>Inputs already reversed under existing laws</th>
                        <th>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="addRow5CC">Add row</button>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="clearAllRows5CC">Clear All</button>
                        </th>
                    </tr>

                </thead>
                <tbody id="table5CCtbody">
                    @if(isset($fiveC['C'])&&count($fiveC['C']) >   0)      



                    @foreach($fiveC['C']   as $key=>$val)
                    <tr>

                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="category_5cc" value="{{$val['fiveCCategory']}}" id="category_5cc_{{rand(10,1000)}}"/>
                                    @php $category_c=['0'=>'-- Select--','vat'=>'VAT','entry_tax'=>'Entry Tax']; @endphp
                                    <select name="type_of_tax_5cc" id="type_of_tax" id="type_of_tax_5cc_{{rand(10,1000)}}">
                                        @foreach($category_c as $catKey=>$value)

                                        <option value="{{$catKey}}" <?php
                                        if ($val['typeOfTax'] === $catKey) {
                                            echo 'selected';
                                        } else {
                                            
                                        }
                                        ?>>{{$value}}</option>
                                        @endforeach

                                    </select>
                                    <label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name_of_issuer_5cc" value="{{$val['nameOfIssuer']}}" id="name_of_issuer_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CC turnover_pending" value="{{$val['turnoverPending']}}" name="turnover_pending_5cc" id="turnover_pending_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CC state_vat" value="{{$val['stateVat']}}" name="state_vat_5cc" id="state_vat_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_state_vat_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control tax_payble" value="{{$val['taxPayable']}}" name="tax_payble" readonly />
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['taxAlreadyPaid']}}" name="tax_already_paid_5cc" id="tax_already_paid_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['inputAlreadyReversed']}}" name="input_already_reversed_5cc" id="input_already_reversed_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td><td>
                        @if($key>0)                         
                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CC" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>                        
                        @endif
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>

                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="category_5cc" value="C" id="category_c_5cc_{{rand(10,1000)}}" />
                                    <select name="type_of_tax_5cc"  id="type_of_tax_5cc_{{rand(10,1000)}}">
                                        <option selected disabled value="select">-- Select--</option>
                                        <option value="vat">VAT</option>
                                        <option value="entry_tax">Entry Tax</option>
                                    </select>
                                    <label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name_of_issuer_5cc" id="name_of_issuer_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CC turnover_pending" name="turnover_pending_5cc" id="turnover_pending_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CC state_vat" name="state_vat_5cc" id="state_vat_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_state_vat_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" name="tax_already_paid_5cc" id="tax_already_paid_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" name="input_already_reversed_5cc" id="input_already_reversed_5cc_{{rand(10,1000)}}"/>
                                    <label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td></td>
                    </tr>

                    @endif
                </tbody>
            </table>
        </form>
    </div>


    <!----------------------------------------table 5F form---------------------------------------------------------------->


    <div id="table5CF" >
        <form id="fiveCFForm">
            <table class="table table-bordered table-striped table-hover dataTable table-condensed" id="5CFTable">
                <thead>
                    <tr>
                        <th colspan="8">Details of F forms pending under CST Act’1956. (from 01-04-2015 to 30-06-2017)</th>
                    </tr>
                    <tr class="tabTableColumnHeading">
                        <th>Type of Tax</th>
                        <th>Name of the Issuer</th>
                        <th class="text-center">Turnover for which C Forms are Pending

                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Here turnover against F forms not made available to your state's VAT department is to be reported, which also inculdes F forms received but not submitted/iploaded to VAT dept. It is advised that you first submit such F forms received and not submited to VAT dept. otherwise it may lead to reduction in ITC.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th class="text-center">Rate under respective state VAT</th>
                        <th>Tax payable under existing laws  if sold without such forms 

                        </th>
                        <th class="text-center">Tax already paid under existing laws 
                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Includes VAT or CST paid against turnover reported in column 4.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th>Inputs already reversed under existing laws

                        </th>
                        <th>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="addRow5CF">Add row</button>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="clearAllRows5CF">Clear All</button>
                        </th>
                    </tr>

                </thead>
                <tbody id="table5CFtbody">
                    @if(isset($fiveC['F']) && count($fiveC['F']) >   0  )                                                   

                    @foreach($fiveC['F']   as $key=>$val)
                    <tr>

                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="category_5cf" value="{{$val['fiveCCategory']}}" id="category_5cf_{{rand(10,1000)}}"/>
                                    @php $category_c=['0'=>'-- Select--','vat'=>'VAT','entry_tax'=>'Entry Tax']; @endphp
                                    <select name="type_of_tax_5cf" id="type_of_tax_5cf_{{rand(10,1000)}}">
                                        @foreach($category_c as $cfKey=>$value)

                                        <option value="{{$cfKey}}" <?php
                                        if ($val['typeOfTax'] === $cfKey) {
                                            echo 'selected';
                                        } else {
                                            
                                        }
                                        ?>>{{$value}}</option>
                                        @endforeach
                                    </select>
                                    <label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name_of_issuer_5cf" value="{{$val['nameOfIssuer']}}"  id="nameOfIssuer_5cf_{{rand(10,1000)}}"/>
                                    <label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CF turnover_pending" value="{{$val['turnoverPending']}}" name="turnover_pending_5cf"  id="turnoverPending_5cf_{{rand(10,1000)}}"/>
                                    <label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CF state_vat" value="{{$val['stateVat']}}" name="state_vat_5cf"  id="state_vat_5cf_{{rand(10,1000)}}"/>
                                    <label class="error error_state_vat_5cf" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control tax_payble" value="{{$val['taxPayable']}}" name="tax_payble" readonly/>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['taxAlreadyPaid']}}" name="tax_already_paid_5cf"  id="tax_already_paid_5cf_{{rand(10,1000)}}"/>
                                    <label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['inputAlreadyReversed']}}" name="input_already_reversed_5cf"  id="input_already_reversed_5cf_{{rand(10,1000)}}"/>
                                    <label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label>
                                </div>
                            </div>  
                        </td>
                        <td> 
                            @if($key>0)                        
                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CF" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                            @endif
                        </td>
                    </tr>

                    @endforeach
                    @else
                    <tr>
                <input type="hidden" class="form-control" name="category_5cf" value="F"  id="category_5cf_{{rand(10,1000)}}"/>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="type_of_tax_5cf" id="type_of_tax_5cf_{{rand(10,1000)}}">
                                <option selected disabled value="select">-- Select--</option>
                                <option value="vat">VAT</option>
                                <option value="entry_tax">Entry Tax</option>
                            </select>
                            <label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name_of_issuer_5cf"  id="name_of_issuer_5cf_{{rand(10,1000)}}"/>
                            <label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculate5CF turnover_pending" name="turnover_pending_5cf"  id="turnover_pending_5cf_{{rand(10,1000)}}"/>
                            <label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculate5CF state_vat" name="state_vat_5cf"  id="state_vat_5cf_{{rand(10,1000)}}"/>
                            <label class="error error_state_vat_5cf" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="tax_already_paid_5cf"  id="tax_already_paid_5cf_{{rand(10,1000)}}"/>
                            <label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="input_already_reversed_5cf"  id="input_already_reversed_5cf_{{rand(10,1000)}}"/>
                            <label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td></td>
                </tr>

                @endif
                </tbody>
            </table>
        </form>
    </div>

    <!----------------------------------------table 5H form---------------------------------------------------------------->


    <div id="table5CH">
        <form id="fiveCHForm">
            <table class="table table-bordered table-striped table-hover dataTable  table-condensed" id="5CHTable" >
                <thead>
                    <tr>
                        <th colspan="8">Details of H forms pending under CST Act’1956. (from 01-04-2015 to 30-06-2017)</th>
                    </tr>
                    <tr class="tabTableColumnHeading">
                        <th>Type of Tax</th>
                        <th>Name of the Issuer</th>
                        <th class="text-center">Turnover for which C Forms are Pending

                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Here turnover against H/I forms not made available to your state's VAT department is to be reported, which also inculdes H/I forms received but not submitted/iploaded to VAT dept. It is advised that you first submit such
                                    H/I forms received and not submited to VAT dept. otherwise it may lead to reduction in ITC.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th class="text-center">Rate under respective state VAT</th>
                        <th>Tax payable under existing laws  if sold without such forms 

                        </th>
                        <th class="text-center">Tax already paid under existing laws 
                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Includes VAT or CST paid against turnover reported in column 4.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th>Inputs already reversed under existing laws

                        </th>
                        <th>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="addRow5CH">Add row</button>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="clearAllRows5CH">Clear All</button>
                        </th>
                    </tr>

                </thead>
                <tbody id="table5CHtbody">
                    @if(isset($fiveC['H']) && count($fiveC['H']) >   0  )                                                   

                    @foreach($fiveC['H']   as $key=>$val)
                    <tr>

                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="category_5ch" value="H"  id="category_5ch_{{rand(10,1000)}}"/>
                                    @php $category_c=['0'=>'-- Select--','vat'=>'VAT','entry_tax'=>'Entry Tax']; @endphp
                                    <select name="type_of_tax_5ch" id="type_of_tax_5ch_{{rand(10,1000)}}">
                                        @foreach($category_c as $keyCh=>$value)

                                        <option value="{{$keyCh}}" <?php
                                        if ($val['typeOfTax'] === $keyCh) {
                                            echo 'selected';
                                        } else {
                                            
                                        }
                                        ?>>{{$value}}</option>
                                        @endforeach

                                    </select>
                                    <label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name_of_issuer_5ch" value="{{$val['nameOfIssuer']}}" id="nameOfIssuer_5ch_{{rand(10,1000)}}" />
                                </div>
                                <label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CH turnover_pending" value="{{$val['turnoverPending']}}" name="turnover_pending_5ch" id="turnover_pending_5ch_{{rand(10,1000)}}"/>
                                    <label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CH state_vat" value="{{$val['stateVat']}}" name="state_vat_5ch" id="state_vat_5ch_{{rand(10,1000)}}"/>
                                    <label class="error error_state_vat_5ch" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control tax_payble" value="{{$val['taxPayable']}}" name="tax_payble" readonly/>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['taxAlreadyPaid']}}" name="tax_already_paid_5ch" id="tax_already_paid_5ch_{{rand(10,1000)}}"/>
                                    <label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td> 
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['inputAlreadyReversed']}}" name="input_already_reversed_5ch" id="input_already_reversed_5ch_{{rand(10,1000)}}"/>
                                    <label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label>
                                </div>
                            </div>  
                        </td>                        
                        <td> 
                            @if($key>0)
                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CH" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                            @endif
                        </td>                        
                    </tr>
                    @endforeach
                    @else
                    <tr>
                <input type="hidden" class="form-control" name="category_5ch" value="H" id="category_5ch_{{rand(10,1000)}}"/>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="type_of_tax_5ch" id="type_of_tax_5ch_{{rand(10,1000)}}">
                                <option selected disabled value="select">-- Select--</option>
                                <option value="vat">VAT</option>
                                <option value="entry_tax">Entry Tax</option>
                            </select>
                            <label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name_of_issuer_5ch" id="name_of_issuer_5ch_{{rand(10,1000)}}"/>
                            <label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculate5CH turnover_pending" name="turnover_pending_5ch" id="turnover_pending_5ch_{{rand(10,1000)}}"/>
                            <label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculate5CH state_vat" name="state_vat_5ch" id="state_vat_5ch_{{rand(10,1000)}}"/>
                            <label class="error error_state_vat_5ch" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td> <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="tax_already_paid_5ch" id="tax_already_paid_5ch_{{rand(10,1000)}}"/>
                            <label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="input_already_reversed_5ch" id="input_already_reversed_5ch_{{rand(10,1000)}}"/>
                            <label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label>
                        </div>
                    </div>  
                </td>


                <td></td>
                </tr>

                @endif
                </tbody>
            </table>
        </form>
    </div>


    <!----------------------------------------table 5I form---------------------------------------------------------------->


    <div id="table5CI" >
        <form id="fiveCIForm">
            <table class="table table-bordered table-striped table-hover dataTable  table-condensed" id="5CITable">
                <thead>
                    <tr>
                        <th colspan="8">Details of I forms pending under CST Act’1956. (from 01-04-2015 to 30-06-2017)</th>
                    </tr>
                    <tr class="tabTableColumnHeading">
                        <th>Type of Tax</th>
                        <th>Name of the Issuer</th>
                        <th class="text-center">Turnover for which C Forms are Pending

                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Here turnover against H/I forms not made available to your state's VAT department is to be reported, which also inculdes H/I forms received but not submitted/iploaded to VAT dept. It is advised that you first submit such
                                    H/I forms received and not submited to VAT dept. otherwise it may lead to reduction in ITC.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th class="text-center">Rate under respective state VAT</th>
                        <th>Tax payable under existing laws  if sold without such forms 

                        </th>
                        <th class="text-center">Tax already paid under existing laws 
                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Includes VAT or CST paid against turnover reported in column 4.">
                                <i class="material-icons">help_outline</i>
                            </button>
                        </th>
                        <th>Inputs already reversed under existing laws

                        </th>
                        <th>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="addRow5CI">Add row</button>
                            <button type="button" class="btn bg-indigo pull-left m-b-10" id="clearAllRows5CI">Clear All</button>
                        </th>
                    </tr>

                </thead>
                <tbody id="table5CItbody">
                    @if(isset($fiveC['I']) && count($fiveC['I']) >   0  )                                                   

                    @foreach($fiveC['I']   as $key=>$val)
                    <tr>

                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="category_5ci" value="I" id="category_5ci_{{rand(10,1000)}}"/>
                                    @php $category_c=['0'=>'-- Select--','vat'=>'VAT','entry_tax'=>'Entry Tax']; @endphp
                                    <select name="type_of_tax_5ci" id="type_of_tax_5ci_{{rand(10,1000)}}">
                                        @foreach($category_c as $ciKey=>$value)

                                        <option value="{{$ciKey}}" <?php
                                        if ($val['typeOfTax'] === $ciKey) {
                                            echo 'selected';
                                        } else {
                                            
                                        }
                                        ?>>{{$value}}</option>
                                        @endforeach
                                    </select>
                                    <label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name_of_issuer_5ci" value="{{$val['nameOfIssuer']}}" id="name_of_issuer_5ci_{{rand(10,1000)}}"/>
                                    <label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CI turnover_pending" value="{{$val['turnoverPending']}}" name="turnover_pending_5ci" id="turnover_pending_5ci_{{rand(10,1000)}}"/>
                                    <label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CI state_vat" value="{{$val['stateVat']}}" name="state_vat_5ci" id="state_vat_5ci_{{rand(10,1000)}}"/>
                                    <label class="error error_state_vat_5ci" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control tax_payble" value="{{$val['taxPayable']}}" name="tax_payble" readonly/>
                                </div>
                            </div>  
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['taxAlreadyPaid']}}" name="tax_already_paid_5ci" id="tax_already_paid_5ci_{{rand(10,1000)}}"/>
                                    <label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label>
                                </div>
                            </div>  
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" value="{{$val['inputAlreadyReversed']}}" name="input_already_reversed_5ci" id="input_already_reversed_5ci_{{rand(10,1000)}}"/>
                                    <label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>                        
                        <td> 
                            @if($key>0)
                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CI" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                            @endif
                        </td>                        
                    </tr>


                    @endforeach
                    @else
                    <tr>
                <input type="hidden" class="form-control" name="category_5ci" value="I" id="category_5ci_{{rand(10,1000)}}"/>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="type_of_tax_5ci" id="type_of_tax_5ci_{{rand(10,1000)}}">
                                <option selected disabled value="select">-- Select--</option>
                                <option value="vat">VAT</option>
                                <option value="entry_tax">Entry Tax</option>

                            </select>
                            <label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label>
                        </div></div></td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name_of_issuer_5ci" id="name_of_issuer_5ci_{{rand(10,1000)}}"/>
                            <label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label>
                        </div>
                    </div>  
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculate5CI turnover_pending" name="turnover_pending_5ci" id="turnover_pending_5ci_{{rand(10,1000)}}"/>
                            <label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculate5CI state_vat" name="state_vat_5ci" id="state_vat_5ci_{{rand(10,1000)}}"/>
                            <label class="error error_state_vat_5ci" style="display: none;">This field is required.</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="tax_already_paid_5ci" id="tax_already_paid_5ci_{{rand(10,1000)}}"/>
                            <label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="input_already_reversed_5ci" id="input_already_reversed_5ci_{{rand(10,1000)}}"/>
                            <label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label>
                        </div>
                    </div> 
                </td>
                <td></td>
                </tr>

                @endif
                </tbody>
            </table>
        </form>
    </div>

    <!---vat entity tax table--->


    <div id="table5CG" style="">
        <form id="fiveCGForm">
            <table class="table table-bordered table-striped table-hover dataTable" id="5CGTable">
                <thead>                   
                    <tr class="tabTableColumnHeading"> <th colspan="2" class="text-center">VAT</th>
                        <th colspan="2" class="text-center">Entity Tax</th>

                    </tr>

                    <tr class="tabTableColumnHeading">
                        <th rowspan="2">TIN No. of Seller in State</th>
                        <th rowspan="2">Amount of VAT carried forward</th>

                    </tr>
                    <tr class="tabTableColumnHeading">
                        <th rowspan="2">TIN No. of Seller in State</th>
                        <th rowspan="2">Amount of VAT carried forward</th>

                    </tr>
                </thead>
                <tbody id="table5CGtbody">
                    <tr>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="hidden" class="form-control" name="category_5cg" value="G"/>                                
                            </div>
                        </div> 
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="seller_in_state_5cg"  id="seller_in_state_5c_g_{{rand(10,1000)}}" value="{{isset($fiveC['G']['sellerInState'])?$fiveC['G']['sellerInState']:''}}" readonly/>
                                    <label class="error error_seller_in_state_5cg" style="display: none;">This field is required.</label>                                    
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculate5CG turnover_pending seller_vat_carried_forward_5cg" id="turnover_pending_5c_g_{{rand(10,1000)}}" name="seller_vat_carried_forward_5cg" value="{{isset($fiveC['G']['sellerVatCarriedForward'])?$fiveC['G']['sellerVatCarriedForward']:''}}" readonly/>
                                    <label class="error error_seller_vat_carried_forward_5cg" style="display: none;">This field is required.</label>
                                </div>
                            </div> 
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control calculate5CG state_vat" id="state_vat_5c_g_{{rand(10,1000)}}" name="tin_no_seller_state_5cg" value="{{isset($fiveC['G']['tinNumberInState'])?$fiveC['G']['tinNumberInState']:''}}" readonly/>
                                    <label class="error error_tin_no_seller_state_5cg" style="display: none;">This field is required.</label>
                                </div>
                            </div>  
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control tax_payble vat_carried_forward_5cg"  id="vat_carried_forward_5c_g_{{rand(10,1000)}}" name="vat_carried_forward_5cg" value="{{isset($fiveC['G']['vatCarriedForward'])?$fiveC['G']['vatCarriedForward']:''}}" readonly/>
                                    <label class="error error_vat_carried_forward_5cg" style="display: none;">This field is required.</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <input type="hidden" name="fileAddingStatus_5C" id="fileAddingStatus_5C" value="0" />
</div>