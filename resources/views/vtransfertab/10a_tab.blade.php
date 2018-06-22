  <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions10A">
                                                    @php $questionCount10A   =   0;@endphp
                                                    @foreach($array10ADetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            @php $questionCount10A++;@endphp
                                                            <div class="form-group" id="10AQ{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
                                                                                <input name="group10A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn10A_{{$questionCount10A}}" value="{{$option['optionname']}}" id="group10A{{$question['id'].$option['optionId']}}" data-showQuestionId="10AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group10A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn10A_{{$questionCount10A}}" value="{{$option['optionname']}}" id="group10A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group10A{{$question['id']}}" type="radio" class="with-gap groupRadioBtn10A_{{$questionCount10A}}" value="{{$option['optionname']}}" id="group10A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
                                                                <br>
                                                                <label class="errorLabel10A errorLabel error" style="display: none;"></label>
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
                                                <input type="hidden" name="questionCount10A" id="questionCount10A" value="{{$questionCount10A}}">
                                                <input type="hidden" name="input10AQuestions" id="input10AQuestions" value="{{$array10AQuestions}}">
                                                <input type="hidden" name="input10AQuestionsContinue" id="input10AQuestionsContinue" value="0">
                                                <div id="table10A" style="{{(count($array10ADetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                    <form id="tenAForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10ATable">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="10">Details of goods held as agent on behalf of the principal</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow10A">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                     <th rowspan="2">Name of Principal</th>
                                                                    <th rowspan="2">GSTIN of Principal</th>
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
                                                            <tbody id="table10Atbody">
                                                                @if(count($array10ADetails['data']['table']) >   0)
                                                                            @foreach($array10ADetails['data']['table']   as $key=>$tableData)
                                                                <tr>
                                                                      <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="name_principal_10A" value="{{isset($tableData['nameOfPrincipal'])?$tableData['nameOfPrincipal']:''}}" id="name_principal_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                      <td>
                                                                          <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="gstn_principal_10A" value="{{isset($tableData['gstnPrincipal'])?$tableData['gstnPrincipal']:''}}" id="gstn_principal_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_gstn_principal_10A" style="display: none;">This field is required.</label>
                                                                          </div>
                                                                        </td>
                                                                        <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_of_goods_10A" value="{{isset($tableData['descriptionOfGoods'])?$tableData['descriptionOfGoods']:''}}" id="description_of_goods_10A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_of_goods_10A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                     <td>
                                                                         <div class="form-group">
                                                                                <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_of_tax_10A" value="{{isset($tableData['descriptionOfTax'])?$tableData['descriptionOfTax']:''}}" id="description_of_tax_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                         </div>
                                                                        </td>

                                                                     <td>
                                                                         <div class="form-group">
                                                                                <div class="form-line">
                                                                       @php $tenAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                        <select name="type_of_goods_10A" id="type_of_goods_10A_{{rand(10,1000)}}" class="type_of_goods_10A">
                                                                      @foreach($tenAOption as $value)
                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                         </select>
                                                                                </div>
                                                                         </div>
                                                                   </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control hsnCode10a" name="hsn_10A" value="{{isset($tableData['hsnCode'])?$tableData['hsnCode']:''}}" id="hsn_10A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_hsn_10A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                                <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateValue" data-formname="10A" name="unit_10A" value="{{$tableData['unit']}}" id="unit_10A_{{rand(10,1000)}}"/>
                                                                                </div>  
                                                                            <label class="error error_unit_10A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                        </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="10A" name="quantity_10A" value="{{$tableData['quantity']}}" id="quantity_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            <label class="error error_quantity_10A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control" name="value_10A" value="{{$tableData['value']}}" id="value_10A_{{rand(10,1000)}}" readonly/>
                                                                                </div>
                                                                            <label class="error error_value_10A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control" name="input_tax_taken_10A" value="{{$tableData['inputTaxTaken']}}" id="input_tax_taken_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            <label class="error error_input_tax_taken_10A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        @if($key    >   0)
                                                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                 @endforeach
                                                                    @else
                                                                    <tr>
                                                                         <td>
                                                                             <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="name_principal_10A" value="" id="name_principal_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                             </div>
                                                                        </td>

                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="gstn_principal_10A" id="gstn_principal_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_gstn_principal_10A" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                         <td>
                                                                             <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="description_of_goods_10A" id="description_of_goods_10A_{{rand(10,1000)}}"/>
                                                                                </div> 
                                                                                 <label class="error error_description_of_goods_10A" style="display: none;">This field is required.</label>
                                                                             </div>
                                                                        </td>
                                                                     <td>
                                                                         <div class="form-group">
                                                                                <div class="form-line">                                                                         
                                                                                <input type="text" class="form-control" name="description_of_tax_10A" id="description_of_tax_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                         </div>
                                                                    </td>
                                                                         <td>
                                                                             <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <select name="type_of_goods_10A" class="type_of_goods_10A" id="type_of_goods_10A_{{rand(10,1000)}}"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select>
                                                                                </div>
                                                                             </div>
                                                                        </td>

                                                                       <td> 
                                                                           <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control hsnCode10a" name="hsn_10A" id="hsn_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                               <label class="error error_hsn_10A" style="display: none;">This field is required.</label>
                                                                           </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="10A" name="unit_10A" id="unit_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_unit_10A" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="10A" name="quantity_10A" id="quantity_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_quantity_10A" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control" name="value_10A" id="value_10A_{{rand(10,1000)}}" value="" readonly/>
                                                                                </div>
                                                                                <label class="error error_value_10A" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="number"  min="0" class="form-control" name="input_tax_taken_10A" id="input_tax_taken_10A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                <label class="error error_input_tax_taken_10A" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                    </tr> 
                                                                  @endif
                                                            </tbody>
                                                        </table>
                                                        </form>
                                                </div>