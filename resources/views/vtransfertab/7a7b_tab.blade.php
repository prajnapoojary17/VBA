<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>                                                
<div id="questions7A7A">
    @foreach($array7A7BDetails['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
            <div class="form-group" id="7A7BQ{{$question['id']}}">
                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
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
                                <input name="group7A7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7B{{$question['id'].$option['optionId']}}" data-showQuestionId="7A7BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @else
                                <input name="group7A7B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group7A7B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @endif
                        @else
                            <input name="group7A7B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group7A7B{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
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
    <form id="sevenABForm">
        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7BTable">
        <thead>
           <tr>
               <th colspan="7">Details of inputs held in stock or inputs contained in semi-finished goods held in stock where duty paid invoices are not available (Applicable only for person other than manufacurer or service provider)</th>
               <th colspan="1"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7A7B">Add row</button></th>
           </tr>
           <tr class="tabTableColumnHeading">
               <th>Type</th>
               <th>HSN ( at 6 digit level)</th>
               <th>Description</th>
               <th>Unit</th>
               <th>Qty</th>
               <th>Value</th>
               <th>Eligible Duties paid on such inputs</th>
               <th></th>
           </tr>
        </thead>
        <tbody id="table7A7Btbody"> 
            @if(count($array7A7BDetails['data']['table']) >   0)
               @foreach($array7A7BDetails['data']['table']   as $key=>$tableData)
                   <tr>
                       <td>
                            <div class="form-group">
                               <div class="form-line">                                  
                                   @php $sevenA7BOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods']; @endphp
                                   <select name="nature_of_itc_7a7b" id="nature_of_itc_7a7b_{{rand(10,1000)}}" class="nature_of_itc_7a7b">
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
                                   <input type="text" class="form-control hsnCode7a7b" name="hsn_7A7B" value="{{$tableData['hsn']}}" id="hsn_7A7B_{{rand(10,1000)}}"/>
                               </div>
                               <label class="error error_hsn_7A7B" style="display: none;">This field is required.</label>
                           </div>
                       </td>
                       <td>
                           <div class="form-group">
                               <div class="form-line">
                                   <input type="text" class="form-control" name="hsn_7A7B_desc" value="{{$tableData['hsn']}}" id="hsn_7A7B_desc_{{rand(10,1000)}}"/>
                               </div>
                               <label class="error error_hsn_7A7B_desc" style="display: none;">This field is required.</label>
                           </div>
                       </td>
                       <td>
                           <div class="form-group">
                               <div class="form-line">
                                   <input type="number"  min="0" class="form-control calculateValue" data-formname="7A7B" name="unit_7A7B" value="{{$tableData['unit']}}" id="unit_7A7B_{{rand(10,1000)}}"/>
                               </div>
                               <label class="error error_unit_7A7B" style="display: none;">This field is required.</label>
                           </div>
                       </td>
                       <td>
                           <div class="form-group">
                               <div class="form-line">
                                   <input type="number"  min="0" class="form-control calculateValue" data-formname="7A7B" name="quantity_7A7B" value="{{$tableData['quantity']}}" id="quantity_7A7B_{{rand(10,1000)}}"/>
                               </div>
                               <label class="error error_quantity_7A7B" style="display: none;">This field is required.</label>
                           </div>
                       </td>
                       <td>
                           <div class="form-group">
                               <div class="form-line">
                                   <input type="number"  min="0" class="form-control" name="value_7A7B" value="{{$tableData['value']}}" id="value_7A7B_{{rand(10,1000)}}" readonly/>
                               </div>
                               <label class="error error_value_7A7B" style="display: none;">This field is required.</label>
                           </div>
                       </td>
                       <td>
                           <div class="form-group">
                               <div class="form-line">
                                   <input type="number"  min="0" class="form-control" name="duties_paid_7A7B" value="{{$tableData['dutiesPaid']}}" id="duties_paid_7A7B_{{rand(10,1000)}}"/>
                               </div>
                               <label class="error error_duties_paid_7A7B" style="display: none;">This field is required.</label>
                           </div>
                       </td>
                       <td>
                           @if($key    >   0)
                               <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                           @endif
                       </td>                       
                   </tr>  
               @endforeach
            @else
               <tr>
                   <td>
                       <div class="form-group">
                          <div class="form-line">
                              <select name="nature_of_itc_7a7b" id="nature_of_itc_7a7b_{{rand(10,1000)}}" class="nature_of_itc_7a7b">
                                  <option selected disabled value="">-- Select--</option>
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
                              <input type="text" class="form-control hsnCode7a7b" name="hsn_7A7B" id="hsn_7A7B_{{rand(10,1000)}}"/>
                          </div>
                           <label class="error error_hsn_7A7B" style="display: none;">This field is required.</label>
                       </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" name="hsn_7A7B_desc" value="" id="hsn_7A7B_desc_{{rand(10,1000)}}"/>
                          </div>
                          <label class="error error_hsn_7A7B_desc" style="display: none;">This field is required.</label>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="number"  min="0" class="form-control calculateValue" data-formname="7A7B" name="unit_7A7B" id="unit_7A7B_{{rand(10,1000)}}"/>
                          </div>
                          <label class="error error_unit_7A7B" style="display: none;">This field is required.</label>
                      </div>
                  </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                              <input type="number"  min="0" class="form-control calculateValue" data-formname="7A7B" name="quantity_7A7B" id="quantity_7A7B_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_quantity_7A7B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="value_7A7B" id="value_7A7B_{{rand(10,1000)}}" readonly/>
                        </div>
                        <label class="error error_value_7A7B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control" name="duties_paid_7A7B" id="duties_paid_7A7B_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_duties_paid_7A7B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td></td>
            </tr> 

            @endif
        </tbody>
        </table>
    </form>
</div>