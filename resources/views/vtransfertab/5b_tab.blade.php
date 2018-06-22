<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
<div id="uploadFileSection5B">
    <h4>Please provide Details of statutory forms received for which credit is being carried forward</h4>
    <h4>Upload your C Forms, F Forms, H Forms, I Forms data and Continue.( Click <a id="download_sample_form_5b" style="cursor: pointer;" >here</a> to download excel template)</h4>
    <form action="" enctype="multipart/form-data" name="fileUploadForm5B" id="fileUploadForm5B" method="POST">                                                       
        <div class="form-group">
            <label class="btn bg-indigo" style="margin-bottom: 12px;">Browse&hellip; 
                <input type="file" name="cfhi_forms_5B[]" id="cfhi_forms_5B" style="display: none;" multiple />
            </label>
            <!-- <input value="" type="file" name="cfhi_forms_5B[]" id="cfhi_forms_5B" multiple /> -->
            <span id="fileUploadLoader" style="display: none;"><img src="{{url("/images/loading.gif")}}"></img></span>
            <span id="fileUploadSuccess" style="display: none;"><b style="color: green;">File uploaded successfully..</b></img></span>
            <br />
            <span id="upload_file_error" style="color: red;"></span>
            <span id="uploadedFile"></span>
           <!-- <input type="button" name="upload_file" id="upload_file" value="Upload Attached File(s)" class="btn bg-indigo" /> -->
           <!-- <span id="fileUploadLoader" style="display: none;"><img src="{{url("/images/loading.gif")}}"></img></span> -->
           <!-- <span id="fileUploadSuccess" style="display: none;"><b style="color: green;">File uploaded successfully..</b></img></span> -->
            <br />            
            <!-- <span id="upload_file_error" style="color: red;"></span> -->            
        </div>
    </form>
    <h4>or click Continue to proceed with manual data entry</h4>
    <form action="{{ URL::asset('fileDownload') }}" name="sample_form_5b" id="sample_form_5b" method="post">  
        {{csrf_field()}}
        <!-- File name inside public folder, below folder -->
        <input type="hidden" name="fileName" value="sample_fom_5b.xls" />
        <!-- Folder name inside public folder -->
        <input type="hidden" name="filePath" value="sampleform" />
    </form>
</div>
<div id="questions5B">
    @if(count($array5BDetails['data']['questions'])>0)
        @foreach($array5BDetails['data']['questions']   as  $key=>$question)                                                               
            @if(is_null($question['parentId']))
                <div class="form-group" id="5BQ{{$question['id']}}">
                     <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
                                    <input name="group5B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5B{{$question['id'].$option['optionId']}}" data-showQuestionId="5BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                @else
                                    <input name="group5B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group5B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                @endif
                            @else
                                <input name="group5B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group5B{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
                                <label class="form-label">{{$array5BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
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
<div id="table5B" style="display:none;"> 
    <form id="fiveBForm">
        <table class="table table-bordered table-striped table-hover dataTable m-t-15 table-condensed" id="5BTable" >
            <thead>
                <tr>
                    <th colspan="7">Details of statutory forms received for which credit is being carried forward</th>
                </tr>
                <tr class="tabTableColumnHeading">
                    <th>Type of Form 
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="C/F/H/I">
                            <i class="material-icons">help_outline</i>
                        </button>
                    </th>
                    <th>Sr. No. of Form</th>
                    <th>TIN of Issuer
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="TIN of purchaser/customer">
                            <i class="material-icons">help_outline</i>
                        </button>
                    </th>
                    <th>Name of Issuer
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="Name of the purchaser/customer">
                            <i class="material-icons">help_outline</i>
                        </button>
                    </th>
                    <th> Sales Value In Form</th>
                    <th>Applicable VAT Rate</th>
                    <th>
                        <button type="button" class="btn bg-indigo pull-left m-b-10" id="addRow5B">Add row</button>
                        <button type="button" class="btn bg-indigo pull-left m-b-10" id="clearAllRows5B">Clear All</button>
                    </th>
                </tr>
            </thead>
            <tbody id="table5Btbody">                
                @if(count($array5BDetails['data']['table']) > 0)
                    @foreach($array5BDetails['data']['table']   as $fiveBkey=>$tableData)
                        <tr>
                            
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        @php $data=['C','F','H','I']; @endphp
                                        <select id="type_of_form_5B_{{rand(10,1000)}}" name="type_of_form_5B">
                                            <option selected disabled>-- Select--</option>
                                            @foreach($data as $key=>$value)
                                                <option <?php if ($tableData['type'] === $value) {
                                                echo 'selected';
                                                } else {

                                                } ?>>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="error error_type_of_form_5B" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="form_serial_no_5B" value="{{$tableData['formSerialNo']}}" id="form_serial_no_5B_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tin_issuer_5B" value="{{$tableData['tinIssuer']}}" id="tin_issuer_5B_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="issuer_name_5B" value="{{$tableData['issuerName']}}" id="issuer_name_5B_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_issuer_name_5B" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number"  min="0" class="form-control" name="sales_value_5B" value="{{$tableData['salesValue']}}" id="sales_value_5B_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_sales_value_5B" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                           <!--  <td><input type="number"  min="0" class="form-control" name="amount_5B" value="{{$tableData['amount']}}"/></td>-->
                            <td>
                                <div class="form-group has-feedback">
                                    <div class="form-line">
                                        <input type="number"  min="0" class="form-control" name="vat_rate_5B" value="{{$tableData['vatRate']}}" id="vat_rate_5B_{{rand(10,1000)}}"/>
                                     <span class="form-control-feedback">%</span>
                                    </div>
                                    <label class="error error_vat_rate_5B" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td> @if($fiveBkey > 0) 
                                    <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    @php $data=['C','F','H','I']; @endphp
                                    <select id="type_of_form_5B_{{rand(10,1000)}}" name="type_of_form_5B">
                                        <option selected disabled>-- Select--</option>
                                        @foreach($data as $key=>$value)
                                            <option >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="error error_type_of_form_5B" style="display: none;">This field is required.</label>
                            </div>                                                                     
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="form_serial_no_5B" value="" id="form_serial_no_5B_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tin_issuer_5B" value="" id="tin_issuer_5B_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="issuer_name_5B" value="" id="issuer_name_5B_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_issuer_name_5B" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" name="sales_value_5B" value="" id="sales_value_5B_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_sales_value_5B" style="display: none;">This field is required.</label>
                            </div>
                        </td>
               <!--  <td><input type="number"  min="0" class="form-control" name="amount_5B" value=""/></td>-->
                        <td>
                            <div class="form-group has-feedback">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" name="vat_rate_5B" value="" id="vat_rate_5B_{{rand(10,1000)}}"/>
                                      <span class="form-control-feedback">%</span>
                                </div>
                                <label class="error error_vat_rate_5B" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                @endif
            </tbody>
        </table>
    </form>
    <input type="hidden" name="fileAddingStatus" id="fileAddingStatus" value="0" />
</div>