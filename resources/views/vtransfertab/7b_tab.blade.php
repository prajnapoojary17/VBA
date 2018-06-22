  <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                                                                  <div id="questions7B">
                                                    @foreach($array7BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            <div class="form-group" id="7BQ{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
                                                                                <input name="group7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7B{{$question['id'].$option['optionId']}}" data-showQuestionId="7BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group7B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7B{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
                                                    <form id="sevenBForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7BTable">
                                                            <thead>
                                                                   <tr>
                                                                    <th colspan="9">Amount of vat and entry Tax paid on inputs supported by invoices/documents evidencing payment of tax carried forward to
        electronic credit ledger as SGST/UTGST</th>

                                                                      <th colspan="1"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7B">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                   <!--     <th rowspan="2"> Nature of Eligible Duty Paid</th>-->
                                                                       <th rowspan="2">Type</th>
                                                                    <th colspan="5">Details of inputs in stock</th>
                                                                    <th rowspan="2">Total input tax credit claimed under earlier law</th>
                                                                    <th rowspan="2">Total input tax credit related to exempt sales not claimed under earlier law</th>
                                                                    <th rowspan="2">Total Input tax credit admissible as SGST/UGST</th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th>Description</th>
                                                                    <th>Unit</th>
                                                                    <th>Rate per Unit</th>
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
                                                                   <td>
                                                                       <div class="form-group">
                                    <div class="form-line">
                                
                                  
                                    @php $sevenA7BOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods']; @endphp
                                                                        <select name="type_7b" id="type_7b_{{rand(10,1000)}}" class="type_7b">
                                                                      @foreach($sevenA7BOption as $value)
                                                                        <option <?php if($tableData['type']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
                                    </div>
                                                                       </div>
                           
                             </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_7B" value="{{$tableData['description']}}" id="description_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateValue" data-formname="7B" name="unit_7B" value="{{$tableData['unit']}}" id="unit_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_unit_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateValue" data-formname="7B" name="quantity_7B" value="{{$tableData['quantity']}}" id="quantity_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_quantity_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="value_7B" value="{{$tableData['value']}}" id="value_7B_{{rand(10,1000)}}" readonly/>
                                                                            </div>
                                                                            <label class="error error_value_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="vat_7B" value="{{$tableData['vat']}}" id="vat_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_vat_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="tax_credit_claimed_7B" value="{{$tableData['taxCreditClaimed']}}" id="tax_credit_claimed_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_tax_credit_claimed_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="tax_credit_exempt_7B" value="{{$tableData['taxCreditExempt']}}" id="tax_credit_exempt_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_tax_credit_exempt_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="tax_credit_admissible_7B" value="{{$tableData['taxCreditAdmissible']}}" id="tax_credit_admissible_7B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_tax_credit_admissible_7B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
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
                                        </td>-->   <td>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="type_7b" id="type_7b_{{rand(10,1000)}}" class="type_7b">
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
                                                    <input type="text" class="form-control" name="description_7B" id="description_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_description_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="7B" name="unit_7B" id="unit_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_unit_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control calculateValue" data-formname="7B" name="quantity_7B" id="quantity_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_quantity_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control" name="value_7B" id="value_7B_{{rand(10,1000)}}" value="" readonly />
                                                </div>
                                                <label class="error error_value_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control" name="vat_7B" id="vat_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_vat_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control" name="tax_credit_claimed_7B" id="tax_credit_claimed_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_tax_credit_claimed_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control" name="tax_credit_exempt_7B" id="tax_credit_exempt_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_tax_credit_exempt_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number"  min="0" class="form-control" name="tax_credit_admissible_7B" id="tax_credit_admissible_7B_{{rand(10,1000)}}"/>
                                                </div>
                                                <label class="error error_tax_credit_admissible_7B" style="display: none;">This field is required.</label>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>

                                    @endif
                                </tbody>
                            </table>
                            </form>
                    </div>