<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
<div id="questions5A" style="">    
    @php $questionCount5A   =   0;@endphp
    @foreach($array5ADetails['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
            @php $questionCount5A++;@endphp 
            <div class="form-group" id="5AQ{{$question['id']}}">
                <input type="hidden" name="questionId" value="{{$question['id']}}" />
                <label class="form-label">
                    {{$question['text']}}
                    @if($question['helpText'])
                        @if($question['id'] !=  7)
                            <button  class="help-table" type="button" data-toggle="modal" data-target="#help_{{$question['id']}}" data-backdrop="static">
                                <i class="material-icons">help_outline</i>
                            </button>
                            <div class="modal fade" id="help_{{$question['id']}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg m-t-0" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="material-icons">close</i>
                                                </span>
                                            </button>
                                            <div class="m-t-20">{!!$question['helpText']!!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        @else
                            <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="{!!$question['helpText']!!}" data-html="true">
                                <i class="material-icons">help_outline</i>
                            </button>
                        @endif
                    @endif
                </label>
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
                                <input name="group5A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn5A_{{$questionCount5A}}" value="{{$option['optionname']}}" id="group5A{{$question['id'].$option['optionId']}}" data-showQuestionId="5AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @else
                                <input name="group5A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn5A_{{$questionCount5A}}" value="{{$option['optionname']}}" id="group5A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @endif
                        @else
                            <input name="group5A{{$question['id']}}" type="radio" class="with-gap groupRadioBtn5A_{{$questionCount5A}}" value="{{$option['optionname']}}" id="group5A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                        @endif   
                        <label for="group5A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                    @else    
                        @if($question['isLinked'] ==  'Yes')
                            <input name="chkBox5A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox5A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="5AQ{{$option['linkedQuestionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}>
                        @else
                            <input name="chkBox5A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox5A{{$question['id'].$option['optionId']}}" type="checkbox">
                        @endif    
                        <label for="chkBox5A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   
                    @endif
                @endforeach
                <br>
                <label class="errorLabel5A errorLabel error" style="display: none;"></label>
            </div>
            @if($question['isLinked'] ==  'Yes')
                @foreach($question['options'] as  $option)
                    @if(!is_null($option['linkedQuestionId']))                                                                           
                        <div class="form-group" id="5AQ{{$option['linkedQuestionId']}}" style="display:none;">
                            <label class="form-label">
                                {{$array5ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}
                                @if($array5ADetails['data']['questions'][$option['linkedQuestionId']]['helpText'])
                                    <button class="help-table" type="button" data-toggle="modal" data-target="#help_{{$option['linkedQuestionId']}}" data-backdrop="static">
                                        <i class="material-icons">help_outline</i>
                                    </button>
                                    <div class="modal fade" id="help_{{$option['linkedQuestionId']}}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg m-t-0" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">
                                                            <i class="material-icons">close</i>
                                                        </span>
                                                    </button>
                                                    <div class="m-t-20">{!!$array5ADetails['data']['questions'][$option['linkedQuestionId']]['helpText']!!}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                @endif
                            </label>
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
<input type="hidden" name="questionCount5A" id="questionCount5A" value="{{$questionCount5A}}">
<input type="hidden" name="input5AQuestions" id="input5AQuestions" value="{{$array5AQuestions}}">
<input type="hidden" name="input5AQuestionsContinue" id="input5AQuestionsContinue" value="0">
<input type="hidden" name="count_of_5A_tables" id="count_of_5A_tables" value="{{count($array5ADetails['data']['table'])}}">
<div id="table5A" style="{{(count($array5ADetails['data']['questions']) >   0   &&  count($array5ADetails['data']['table']) >= 0) ? 'display:none':''}}">                                                    
    <form id="fiveAForm">         
        <table class="table table-bordered table-striped table-hover dataTable " id="5ATable">
            <thead>
                <tr>
                    <th colspan="7">Amount of Cenvat credit carried forward to electronic credit ledger as central tax</th>
                </tr>
                <tr class="tabTableColumnHeading">
                    <th>Nature of ITC carried forward in last return filed. 
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="Type of Tax carried forward in last return.">
                            <i class="material-icons">help_outline</i>
                        </button>
                    </th>
                    <th>Registration No. under existing law 
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="Registration no. of the person carrying forward the tax unders respective tax law">
                            <i class="material-icons">help_outline</i>
                        </button>
                    </th>
                    <th>Tax period to which the last return filed under the existing law pertains </th>
                    <th>Date of filing of such return </th>
                    <th>Amount of ITC carried forward  in last return filed under existing laws
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="Amount of respective tax carried forward.">
                            <i class="material-icons">help_outline</i>
                        </button>
                    </th>
                    <th>ITC admissible under GST </th>
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
                                <div class="form-group">
                                    <div class="form-line">
                                        @php
                                        $data=['service_tax'=>'Service Tax','kirshi'=>'Krishi Kalyan Cess  (not available to manufacturers)','cental_excise'=>'Central Excise','cvd'=>'CVD under Customs Act','sad'=>'SAD under Customs Act (not available to service providers)','nccd'=>'NCCD on inputs'];
                                        @endphp
                                        <select name="nature_of_itc_5A" style="width:100%" class="nature_of_itc_5A" id="nature_of_itc_5A_{{rand(10,1000)}}">
                                            <option selected disabled value="">-- Select--</option>
                                            @foreach($data as $naturKey=>$value)
                                                <option value="{{$naturKey}}" <?php if ($tableData['natureOfItc'] === $value) {
                                                        echo 'selected';
                                                    } else {
                                                } ?> >{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>  
                                       <label class="error error_nature_of_itc_5A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control registrationNumberFormat" name="registration_number_5A" value="{{$tableData['registrationNo']}}" id="registration_number_5A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_registration_number_5A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control tax_period" name="tax_period_5A"   value="{{$tableData['taxPeriod']}}"/>
                                    </div>
                                </div>
                            </td>                                                                        
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" class="datepicker form-control" name="date_of_filling_5A" value="@php echo date('d/m/Y', strtotime($tableData['dateFiling'])); @endphp" id="date_of_filling_5A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_date_of_filling_5A" style="display: none;">This field is required.</label>
                                </div>
                            </td>                                                                        
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number"  min="0" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" value="{{$tableData['balanceCenvatCredit']}}" id="balance_cenvat_credit_5A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_balance_cenvat_credit_5A" style="display: none;">This field is required.</label>
                                </div>
                            </td>                                                                        
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number"  min="0" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" value="{{$tableData['balanceCenvatAdmissible']}}" id="cenvat_credit_admissible_5A_{{rand(10,1000)}}"/>
                                    </div>    
                                    <label class="error error_cenvat_credit_admissible_5A" style="display: none;">This field is required.</label>
                                </div>    
                            </td>
                            
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
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="nature_of_itc_5A" class="nature_of_itc_5A" id="nature_of_itc_5A_{{rand(10,1000)}}">
                                        <option selected disabled value="">-- Select--</option>
                                        <option value="service_tax">Service Tax</option>
                                        <option value="2">Krishi Kalyan Cess  (not available to manufacturers)</option>
                                        <option value="cental_excise">Central Excise</option>
                                        <option value="4"> CVD under Customs Act</option>
                                        <option value="5">SAD under Customs Act (not available to service providers)</option>
                                        <option value="6">NCCD on inputs</option>
                                    </select>
                                </div>
                                  <label class="error error_nature_of_itc_5A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control registrationNumberFormat" name="registration_number_5A" id="registration_number_5A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_registration_number_5A" style="display: none;">This field is required.</label>
                            </div></td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control tax_period" name="tax_period_5A"/>
                                </div></div>
                        </td>                                                                        
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="datepicker form-control" name="date_of_filling_5A" id="date_of_filling_5A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_date_of_filling_5A" style="display: none;">This field is required.</label>
                            </div>
                        </td>                                                                        
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" id="balance_cenvat_credit_5A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_balance_cenvat_credit_5A" style="display: none;">This field is required.</label>
                            </div>
                        </td>                                                                        
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" id="cenvat_credit_admissible_5A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_cenvat_credit_admissible_5A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                @endif
            </tbody>
            <tfoot>
                <tr class="totalFooter">
                    <th colspan="4">Total</th>
                    <th id="balance_cenvat_credit_5A_total" class="clearAll">{{$balance_cenvat_credit_5A_totals}}</th>
                    <th id="cenvat_credit_admissible_5A_total" class="clearAll">{{$cenvat_credit_admissible_5A_totals}}</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
