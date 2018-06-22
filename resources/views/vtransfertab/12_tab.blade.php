<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
<form id="twelveAForm">      
    <div id="questions12">
        @php $questionCount12   =   0;@endphp
        @foreach($array12Details['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
        @php $questionCount12++;@endphp
        <div class="form-group" id="12Q{{$question['id']}}">
              <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
            <input name="group12{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn12_{{$questionCount12}}" value="{{$option['optionname']}}" id="group12{{$question['id'].$option['optionId']}}" data-showQuestionId="12Q{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
            @else
            <input name="group12{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn12_{{$questionCount12}}" value="{{$option['optionname']}}" id="group12{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
            @endif
            @else
            <input name="group12{{$question['id']}}" type="radio" class="with-gap groupRadioBtn12_{{$questionCount12}}" value="{{$option['optionname']}}" id="group12{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
            <br>
            <label class="errorLabel12 errorLabel error" style="display: none;"></label>
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
    <input type="hidden" name="questionCount12" id="questionCount12" value="{{$questionCount12}}">
    <input type="hidden" name="input12Questions" id="input12Questions" value="{{$array12Questions}}">
    <input type="hidden" name="input12QuestionsContinue" id="input12QuestionsContinue" value="0">
    <div id="table12" style="{{(count($array12Details['data']['questions']) >   0) ? 'display:none':''}}">  
        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="12Table">
            <thead>
                <tr>
                    <th colspan="9" >Details of goods sent on approval basis six months prior to the appointed day (section 142(12))</th>
                    <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow12">Add row</button></th>

                </tr>
                <tr class="tabTableColumnHeading">
                    <th rowspan="2">Document no</th>
                    <th rowspan="2">Document date</th>
                    <th rowspan="2">GSTIN no. of recipient, (if applicable)</th>
                    <th rowspan="2">Name & address of recipient</th>
                    <th colspan="5" class="text-center">Details of goods sent on approval basis</th>

                </tr>
                <tr class="tabTableColumnHeading">
                    <th>HSN</th>
                    <th>Description Of Goods</th>
                    <th>Units</th>
                    <th>Rate per Unit</th>
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
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="document_no_12" value="{{$tableData['documentNo']}}"/>
                            </div>
                            <label class="error error_document_no_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="invoiceDatepicker form-control" name="document_date_12" value="@php echo date('d/m/Y', strtotime($tableData['documentDate'])); @endphp"/>
                            </div>
                            <label class="error error_document_date_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="gstn_number_12" value="{{$tableData['gstnNumber']}}"/>
                            </div>
                            <label class="error error_gstn_number_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="recipient_name_12" value="{{$tableData['RecipientName']}}"/>
                            </div> 
                            <label class="error error_recipient_name_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control hsnCode12" name="hsn_12" value="{{$tableData['hsn']}}"/>
                            </div>
                            <label class="error error_hsn_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="description_12" value="{{$tableData['description']}}"/>
                            </div>
                            <label class="error error_description_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="12" name="unit_12" value="{{$tableData['unit']}}"/>
                            </div>
                            <label class="error error_unit_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="12" name="quantity_12" value="{{$tableData['quantity']}}"/>
                            </div>
                            <label class="error error_quantity_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="12" name="value_12" value="{{$tableData['value']}}" readonly/>
                            </div>
                            <label class="error error_value_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>

                    <td>
                        @if($key    >   0)
                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow12" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                        @endif
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="document_no_12"/>
                            </div>
                            <label class="error error_document_no_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="invoiceDatepicker form-control" name="document_date_12"/>
                            </div>
                            <label class="error error_document_date_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="gstn_number_12"/>
                            </div>
                            <label class="error error_gstn_number_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="recipient_name_12"/>
                            </div>
                            <label class="error error_recipient_name_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control hsnCode12" name="hsn_12"/>
                            </div>
                            <label class="error error_hsn_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="description_12"/>
                            </div>
                            <label class="error error_description_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="12" name="unit_12"/>
                            </div>
                            <label class="error error_unit_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="12" name="quantity_12"/>
                            </div>
                            <label class="error error_quantity_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="12" name="value_12" value="" readonly/>
                            </div>
                            <label class="error error_value_12" style="display: none;">This field is required.</label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                @endif
            </tbody>
            <tfoot>
                <tr class="totalFooter">
                    <th colspan="6">Total</th>
                    <th id="unit_12_total"  class="clearAll">
                        @if(isset($unit_12))
                        {{$unit_12}}
                        @endif
                    </th>
                    <th id="quantity_12_total"  class="clearAll">
                        @if(isset($quantity_12))
                        {{$quantity_12}}
                        @endif
                    </th>
                    <th id="value_12_total"  class="clearAll">
                        @if(isset($value_12))
                        {{$value_12}}
                        @endif
                    </th>
                </tr>
            </tfoot>
        </table>
</form>
</div>