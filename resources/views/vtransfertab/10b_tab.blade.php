 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions10B">
                                                    @php $questionCount10B   =   0;@endphp
                                                    @foreach($array10BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            @php $questionCount10B++;@endphp
                                                            <div class="form-group" id="10BQ{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
                                                                                <input name="group10B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn10B_{{$questionCount10B}}" value="{{$option['optionname']}}" id="group10B{{$question['id'].$option['optionId']}}" data-showQuestionId="10BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group10B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn10B_{{$questionCount10B}}" value="{{$option['optionname']}}" id="group10B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group10B{{$question['id']}}" type="radio" class="with-gap groupRadioBtn10B_{{$questionCount10B}}" value="{{$option['optionname']}}" id="group10B{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
                                                                <br>
                                                                <label class="errorLabel10B errorLabel error" style="display: none;"></label>
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
                                                <input type="hidden" name="questionCount10B" id="questionCount10B" value="{{$questionCount10B}}">
                                                <input type="hidden" name="input10BQuestions" id="input10BQuestions" value="{{$array10BQuestions}}">
                                                <input type="hidden" name="input10BQuestionsContinue" id="input10BQuestionsContinue" value="0">
                                                <div id="table10B" style="{{(count($array10BDetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                    <form id="tenBForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10BTable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="10">Details of goods held by the agent</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow10B">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                      <th rowspan="2">Name Of The Agent</th>
                                                                    <th rowspan="2">GSTIN of Agent</th>                                                                     
                                                                      <th rowspan="2">Description of Goods</th>
                                                                      <th rowspan="2">Description of Tax</th>
                                                                    <th rowspan="2">Type of Goods</th>
                                                                    <th colspan="5" class="text-center">Details of goods with Agent</th>

                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th>HSN Code</th>
                                                                    <th>Unit</th>
                                                                    <th>Rate per Unit</th>
                                                                    <th>Value</th>
                                                                    <th>Input Tax to be taken</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table10Btbody">
                                                                @if(count($array10BDetails['data']['table']) >   0)
                                                                            @foreach($array10BDetails['data']['table']   as $key=>$tableData)
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="name_of_agent_10B" value="{{isset($tableData['nameOfAgent'])?$tableData['nameOfAgent']:''}}" id="name_of_agent_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="gstn_agent_10B" value="{{$tableData['gstnPrincipal']}}" id="gstn_agent_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_gstn_agent_10B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_of_goods_10B" value="{{isset($tableData['descriptionOfGoods'])?$tableData['descriptionOfGoods']:''}}" id="description_of_goods_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_of_tax_10B" value="{{isset($tableData['descriptionOfTax'])?$tableData['descriptionOfTax']:''}}" id="description_of_tax_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_of_tax_10B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                @php $tenBOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                                <select name="type_of_goods_10B" class="type_of_goods_10B" id="type_of_goods_10B_{{rand(10,1000)}}">
                                                                                    @foreach($tenBOption as $value)
                                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                                    @endforeach      
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                         <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control hsnCode10b" name="hsn_code_10B" value="{{isset($tableData['hsnCode'])?$tableData['hsnCode']:''}}" id="hsn_code_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                             <label class="error error_hsn_code_10B" style="display: none;">This field is required.</label>
                                                                         </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateValue" data-formname="10B" name="unit_10B" value="{{$tableData['unit']}}" id="unit_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_unit_10B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateValue" data-formname="10B" name="quantity_10B" value="{{$tableData['quantity']}}" id="quantity_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_quantity_10B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="value_10B" value="{{$tableData['value']}}" id="value_10B_{{rand(10,1000)}}" readonly/>
                                                                            </div>
                                                                            <label class="error error_value_10B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="input_tax_taken_10B" value="{{$tableData['inputTaxTaken']}}" id="input_tax_taken_10B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_input_tax_taken_10B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        @if($key    >   0)
                                                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                 @endforeach
                                                                    @else
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="name_of_agent_10B" id="name_of_agent_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="gstn_agent_10B" id="gstn_agent_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_gstn_agent_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="description_of_goods_10B" id="description_of_goods_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="description_of_tax_10B" id="description_of_tax_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_description_of_tax_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <select name="type_of_goods_10B" class="type_of_goods_10B" id="type_of_goods_10B_{{rand(10,1000)}}">
                                                                                        <option selected disabled>-- Select--</option><option>Inputs</option>
                                                                                        <option>Semi finished Goods</option><option>Finished Goods</option>
                                                                                        <option>Capital Goods</option>


                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control hsnCode10b" name="hsn_code_10B" id="hsn_code_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_hsn_code_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="10B" name="unit_10B" id="unit_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_unit_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="10B" name="quantity_10B" id="quantity_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_quantity_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control" name="value_10B" id="value_10B_{{rand(10,1000)}}" value="" readonly/>
                                                                                </div>
                                                                                <label class="error error_value_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control" name="input_tax_taken_10B" id="input_tax_taken_10B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_input_tax_taken_10B" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                    </tr> 
                                                                  @endif
                                                            </tbody>
                                                        </table>
                                                        </form>
                                                </div>