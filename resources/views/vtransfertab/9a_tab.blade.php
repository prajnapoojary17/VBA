 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions9A">
                                                    @php $questionCount9A   =   0;@endphp
                                                    @foreach($array9ADetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            @php $questionCount9A++;@endphp
                                                            <div class="form-group" id="9AQ{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "9AQ";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@9AQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group9A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn9A_{{$questionCount9A}}" value="{{$option['optionname']}}" id="group9A{{$question['id'].$option['optionId']}}" data-showQuestionId="9AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group9A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn9A_{{$questionCount9A}}" value="{{$option['optionname']}}" id="group9A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group9A{{$question['id']}}" type="radio" class="with-gap groupRadioBtn9A_{{$questionCount9A}}" value="{{$option['optionname']}}" id="group9A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                        @endif   
                                                                        <label for="group9A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox9A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox9A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="9AQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox9A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox9A{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox9A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                <label class="errorLabel9A errorLabel error" style="display: none;"></label>
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="9AQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array9ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array9ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array9ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group9A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group9A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group9A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox9A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox9A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox9A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div> 
                                                <input type="hidden" name="questionCount9A" id="questionCount9A" value="{{$questionCount9A}}">
                                                <input type="hidden" name="input9AQuestions" id="input9AQuestions" value="{{$array9AQuestions}}">
                                                <input type="hidden" name="input9AQuestionsContinue" id="input9AQuestionsContinue" value="0">
                                                <div id="table9A" style="{{(count($array9ADetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                    <form id="nineAForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9ATable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="9">Details of goods sent as principal to the job worker under section 141</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow9A">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th rowspan="2">Name of Jobworker</th>
                                                                     <th rowspan="2">GSTIN of Job Worker, if available</th>

                                                                    <th rowspan="2">Challan No</th>
                                                                    <th rowspan="2">Challan Date</th>
                                                                     <th rowspan="2">Type of goods </th>
                                                                   <th colspan="5" class="text-center">Details of goods with job-worker</th>

                                                                </tr>
                                                                <tr class="tabTableColumnHeading">                                                                    
                                                                    <th>HSN</th>
                                                                    <th>Description</th>
                                                                    <th>Unit</th>
                                                                    <th>Rate per Unit</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="table9Atbody">
                                                                 @if(count($array9ADetails['data']['table']) >   0)
                                                                 @php
                                                                  $unit_9A=0;
                                                                    $quantity_9A=0;
                                                                    $value_9A=0;

                                                                 @endphp
                                                                            @foreach($array9ADetails['data']['table']   as $key=>$tableData)
                                                                            @php
                                                                             $unit_9A    +=  $tableData['unit'];
                                                                              $quantity_9A    +=  $tableData['quantity'];
                                                                               $value_9A    +=  $tableData['value'];
                                                                            @endphp
                                                                <tr>
                                                                      <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control hsnJobWorkder9a" name="name_of_job_worker_9A" value="{{isset($tableData['jobWorkerName'])?$tableData['jobWorkerName']:''}}" id="name_of_job_worker_9A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                       <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="gstn_job_worker_9A" value="{{$tableData['gstnJobWorkerName']}}" id="gstn_job_worker_9A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                  <label class="error error_gstn_job_worker_9A" style="display: none;">This field is required.</label>
                                                                            </div>
                                                                        </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="challan_no_9A" value="{{$tableData['challanNo']}}" id="challan_no_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_no_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="challan_date_9A" value="@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp" id="challan_date_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_date_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                 <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                @php $sixAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                                <select name="type_of_goods_9A" id="type_of_goods_9A_{{rand(10,1000)}}" class="type_of_goods_9A">
                                                                                    @foreach($sixAOption as $value)
                                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                                    @endforeach      
                                                                                </select>
                                                                            </div>
                                                                            <label class="error error_type_of_goods_9A" style="display: none;">This field is required.</label>
                                                                        </div>

                                `                           </td>                                                                    
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control hsnCode9a" name="hsn_9A" value="{{$tableData['hsn']}}" id="hsn_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_hsn_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_9A" value="{{$tableData['description']}}" id="description_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9A" name="unit_9A" value="{{$tableData['unit']}}" id="unit_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_unit_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9A" name="quantity_9A" value="{{$tableData['quantity']}}" id="quantity_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_quantity_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="9A" name="value_9A" value="{{$tableData['value']}}" id="value_9A_{{rand(10,1000)}}" readonly/>
                                                                            </div>
                                                                            <label class="error error_value_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        @if($key    >   0)
                                                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                        @endif
                                                                    </td>
                                                                </tr> 
                                                                @endforeach
                                                                        @else
                                                                    <tr>
                                                                         <td>
                                                                             <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control hsnJobWorkder9a" name="name_of_job_worker_9A" value="" id="name_of_job_worker_9A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                             </div>
                                                                        </td>

                                                                         <td>
                                                                             <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="gstn_job_worker_9A" id="gstn_job_worker_9A_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                                   <label class="error error_gstn_job_worker_9A" style="display: none;">This field is required.</label>
                                                                             </div>
                                                                        </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="challan_no_9A" id="challan_no_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_no_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="challan_date_9A" id="challan_date_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_date_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <select name="type_of_goods_9A" id="type_of_goods_9A_{{rand(10,1000)}}" class="type_of_goods_9A">
                                                                                    <option selected disabled>-- Select--</option>
                                                                                    <option>Inputs</option>
                                                                                    <option>Semi finished Goods</option>
                                                                                    <option>Finished Goods</option>
                                                                                    <option>Capital Goods</option>
                                                                                </select>
                                                                            </div>
                                                                            <label class="error error_type_of_goods_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control hsnCode9a" name="hsn_9A" id="hsn_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_hsn_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_9A" id="description_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9A" name="unit_9A" id="unit_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_unit_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9A" name="quantity_9A" id="quantity_9A_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_quantity_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="9A" name="value_9A" id="value_9A_{{rand(10,1000)}}" value="" readonly />
                                                                            </div>
                                                                            <label class="error error_value_9A" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>                                                                
                                                                 @endif
                                                            <tr><span style="color: red;" id="hsnError"></span></tr>
                                                            </tbody>
                                                              <tfoot>
                                                                <tr class="totalFooter">
                                                                    <th colspan="7">Total</th>
                                                                   <th id="unit_9A_total"  class="clearAll">
                                                                       @if(isset($unit_9A))
                                                                       {{$unit_9A}}
                                                                       @endif
                                                                   </th>
                                                                    <th id="quantity_9A_total"  class="clearAll">
                                                                          @if(isset($quantity_9A))
                                                                       {{$quantity_9A}}
                                                                       @endif
                                                                        </th>
                                                                    <th id="value_9A_total"  class="clearAll">
                                                                          @if(isset($value_9A))
                                                                        {{$value_9A}}
                                                                       @endif
                                                                       </th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        </form>
                                                </div>