    <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                                                                                                <div id="questions7C">
                                                    @foreach($array7CDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="7CQ{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
                                                                                <input name="group7C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7C{{$question['id'].$option['optionId']}}" data-showQuestionId="7CQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" />
                                                                            @else
                                                                                <input name="group7C{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7C{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}} />
                                                                            @endif
                                                                        @else
                                                                            <input name="group7C{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7C{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
                                                    <form id="sevenCForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7CTable">
                                                        <thead>
                                                             <tr>
                                                                   <th colspan="6">Stock of goods not supported by invoices/documents evidencing payment of tax (credit in terms of rule 1 (4)) (To be there only in States
    having VAT at single point)</th>                                                                 
                                                            </tr>
                                                            <tr>
                                                                <th colspan="5">Details of inputs in stock</th>
                                                                <th ><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7C">Add row</button></th>
                                                            </tr>
                                                            <tr class="tabTableColumnHeading">
                                                                <th>Description</th>
                                                                <th>Unit</th>
                                                                <th>Rate per Unit</th>
                                                                <th>Value</th>
                                                                <th>Tax paid</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table7Ctbody">
                                                            @if(count($array7CDetails['data']['table']) >   0)                                                        
                                                            @foreach($array7CDetails['data']['table']   as $key=>$tableData) 
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="description_7C" value="{{$tableData['description']}}" id="description_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_description_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateValue" data-formname="7C" name="unit_7C" value="{{$tableData['unit']}}" id="unit_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_unit_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateValue" data-formname="7C" name="quantity_7C" value="{{$tableData['quantity']}}" id="quantity_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_quantity_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control" name="value_7C" value="{{$tableData['value']}}" id="value_7C_{{rand(10,1000)}}" readonly/>
                                                                        </div>
                                                                        <label class="error error_value_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control" name="taxPaid_7C" value="{{$tableData['taxPaid']}}" id="taxPaid_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_taxPaid_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    @if($key    >   0)
                                                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="description_7C" id="description_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_description_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateValue" data-formname="7C" name="unit_7C" id="unit_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_unit_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateValue" data-formname="7C" name="quantity_7C" id="quantity_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_quantity_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control" name="value_7C" id="value_7C_{{rand(10,1000)}}" value="" readonly/>
                                                                        </div>
                                                                        <label class="error error_value_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control" name="taxPaid_7C" id="taxPaid_7C_{{rand(10,1000)}}"/>
                                                                        </div>
                                                                        <label class="error error_taxPaid_7C" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                    </form>
                                                </div>