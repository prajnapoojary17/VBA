<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>                                                
<!--<div id="questions7A7A">                                                      
    @php $questionCount7A7A   =   0;@endphp
    @foreach($array7A7ADetails['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
            @php $questionCount7A7A++;@endphp
            <div class="form-group" id="7A7AQ{{$question['id']}}" style="{{($question['id'] ==  14) ? 'display:none':''}}">
                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
                <label class="form-label">
                    {{$question['text']}}
                    @if($question['helpText'])                         
                        <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                data-placement="right" data-content="{!!$question['helpText']!!}" data-html="true">
                            <i class="material-icons">help_outline</i>
                        </button>
                    @endif
                </label>
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
                                <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn7A7A_{{$questionCount7A7A}}" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" data-showQuestionId="7A7AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @else
                                <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn7A7A_{{$questionCount7A7A}}" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @endif
                        @else
                            <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap groupRadioBtn7A7A_{{$questionCount7A7A}}" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
                <br>
                <label class="errorLabel7A7A errorLabel error" style="display: none;"></label>
            </div>
            @if($question['isLinked'] ==  'Yes')
                @foreach($question['options'] as  $option)
                    @if(!is_null($option['linkedQuestionId']))                                                                           
                        <div class="form-group" id="7A7AQ{{$option['linkedQuestionId']}}" style="display:none;">
                            <label class="form-label">
                                {{$array7A7ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}
                                @if($array7A7ADetails['data']['questions'][$option['linkedQuestionId']]['helpText'])
                                <button  class="help-table" type="button" data-toggle="modal" data-target="#help_{{$option['linkedQuestionId']}}" data-backdrop="static">
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
                                                <div class="m-t-20">{!!$array7A7ADetails['data']['questions'][$option['linkedQuestionId']]['helpText']!!}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                @endif
                            </label>
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
</div>    -->
@php
    $showQuestionArr    =   array("7A7AQ14","7A7AQ12","7A7AQ11","7A7AQ13","7A7AQ25","7A7AQ26@#@7A7AQ27"); 
    $hideQuestionArr    =   array("7A7AQ14","7A7AQ12@#@7A7AQ11@#@7A7AQ13@#@7A7AQ25@#@7A7AQ26@#@7A7AQ27","7A7AQ11@#@7A7AQ13@#@7A7AQ25@#@7A7AQ26@#@7A7AQ27","7A7AQ13@#@7A7AQ25@#@7A7AQ26@#@7A7AQ27","7A7AQ25@#@7A7AQ26@#@7A7AQ27","7A7AQ26@#@7A7AQ27"); 
@endphp
<div id="questions7A7A">
    @php $questionCount7A7A   =   0;@endphp
    @foreach($array7A7ADetails['data']['questions']   as  $key=>$question)          
        @php $questionCount7A7A++;@endphp        
        <div class="form-group" id="7A7AQ{{$question['id']}}" style="{{($questionCount7A7A !=  2) ? 'display:none':''}}">
             <input type="hidden" name="questionId" value="{{$question['id']}}" />
            <label class="form-label">
                {{$question['text']}}
                @if($question['helpText'])                         
                    <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                            data-placement="right" data-content="{!!$question['helpText']!!}" data-html="true">
                        <i class="material-icons">help_outline</i>
                    </button>
                @endif
            </label>
            <br>
            @foreach($question['options'] as  $option)    
                @if($option['optionname']   ==  'Yes')
                    <input name="group7A7A{{$question['id']}}" type="radio" data-showquestionid="{{$showQuestionArr[$questionCount7A7A]}}" class="with-gap groupRadioBtn7A7A_{{$questionCount7A7A}} linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>                      
                @elseif($questionCount7A7A   <=   5)
                    <input name="group7A7A{{$question['id']}}" type="radio" data-hidequestionid="{{$hideQuestionArr[$questionCount7A7A]}}" class="with-gap groupRadioBtn7A7A_{{$questionCount7A7A}} linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                @else
                    <input name="group7A7A{{$question['id']}}" type="radio" class="with-gap groupRadioBtn7A7A_{{$questionCount7A7A}}" value="{{$option['optionname']}}" id="group7A7A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                @endif                
                <label for="group7A7A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                          
            @endforeach
            <br>
            <label class="errorLabel7A7A errorLabel error" style="display: none;"></label>
        </div>                                                                         
    @endforeach
</div>
<input type="hidden" name="questionCount7A7A" id="questionCount7A7A" value="{{$questionCount7A7A}}">
<input type="hidden" name="input7A7AQuestions" id="input7A7AQuestions" value="{{$array7A7AQuestions}}">
<input type="hidden" name="input7A7AQuestionsContinue" id="input7A7AQuestionsContinue" value="0">                                                
<div id="table7A7A" style="{{(count($array7A7ADetails['data']['questions']) >   0) ? 'display:none':''}}">   
    <form id="sevenAAForm">
        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7ATable">
            <thead>
                <tr>
                    <!-- <th>Type of Goods</th>-->
                    <th colspan="8">
                        Details of inputs held in stock or inputs contained in semi-finished goods held in stock where duty paid invoices or any other document are available</th>
                </tr>
                <tr >
                     <!-- <th>Type of Goods</th>-->
                    <th colspan="7">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                    <th colspan="1"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7A7A">Add row</button></th>
                </tr>
                <tr class="tabTableColumnHeading">
                    <th>Type</th>
                    <th>HSN ( at 6 digit level)</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Rate per Unit</th>
                    <th>Value</th>
                    <th>Eligible Duties paid on such inputs</th>
                    <th></th>
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
                            <td>
                                <div class="form-group">
                                    <div class="form-line">                                     
                                        @php $sevenA7BOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods']; @endphp
                                        <select name="nature_of_itc_7a7a" id="nature_of_itc_7a7a_{{rand(10,1000)}}" class="nature_of_itc_7a7a">
                                            @foreach($sevenA7BOption as $value)
                                                <option <?php if ($tableData['type'] === $value) { echo 'selected';} else {} ?>>{{$value}}</option>
                                            @endforeach      
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control hsnCode7a7a" name="hsn_7A7A" value="{{$tableData['hsn']}}" id="hsn_7A7A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_hsn_7A7A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hsn_7A7A_desc" value="{{$tableData['description']}}" id="hsn_7A7A_desc_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_hsn_7A7A_desc" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control calculateValue" data-formname="7A7A" name="unit_7A7A" value="{{$tableData['unit']}}" id="unit_7A7A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_unit_7A7A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control calculateValue" data-formname="7A7A" name="quantity_7A7A" value="{{$tableData['quantity']}}" id="quantity_7A7A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_quantity_7A7A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="value_7A7A" value="{{$tableData['value']}}" id="value_7A7A_{{rand(10,1000)}}" readonly />
                                    </div>
                                    <label class="error error_value_7A7A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number"  min="0" class="form-control" name="duties_paid_7A7A" value="{{$tableData['dutiesPaid']}}" id="duties_paid_7A7A_{{rand(10,1000)}}"/>
                                    </div>
                                    <label class="error error_duties_paid_7A7A" style="display: none;">This field is required.</label>
                                </div>
                            </td>
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
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="nature_of_itc_7a7a" id="nature_of_itc_7a7a_{{rand(10,1000)}}" class="nature_of_itc_7a7a">
                                        <option selected disabled value="select">-- Select--</option>
                                        <option value="Inputs">Inputs</option>
                                        <option value="Semi-finished">Semi-finished</option>
                                        <option value="Finished">Finished</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control hsnCode7a7a" name="hsn_7A7A" id="hsn_7A7A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_hsn_7A7A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hsn_7A7A_desc" value="" id="hsn_7A7A_desc_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_hsn_7A7A_desc" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control calculateValue" data-formname="7A7A" name="unit_7A7A" id="unit_7A7A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_unit_7A7A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control calculateValue" data-formname="7A7A" name="quantity_7A7A" id="quantity_7A7A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_quantity_7A7A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="value_7A7A" id="value_7A7A_{{rand(10,1000)}}" readonly />
                                </div>
                                <label class="error error_value_7A7A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"  min="0" class="form-control" name="duties_paid_7A7A" id="duties_paid_7A7A_{{rand(10,1000)}}"/>
                                </div>
                                <label class="error error_duties_paid_7A7A" style="display: none;">This field is required.</label>
                            </div>
                        </td>
                        <td></td>
                    </tr> 
                @endif
            </tbody>
        </table>
    </form>
</div>