 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions9B">
                                                    @php $questionCount9B   =   0;@endphp
                                                    @foreach($array9BDetails['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            @php $questionCount9B++;@endphp
                                                            <div class="form-group" id="9BQ{{$question['id']}}">
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
                                                                                        $hideIds    .=  '@#@9BQ'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group9B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn9B_{{$questionCount9B}}" value="{{$option['optionname']}}" id="group9B{{$question['id'].$option['optionId']}}" data-showQuestionId="9BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group9B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn9B_{{$questionCount9B}}" value="{{$option['optionname']}}" id="group9B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group9B{{$question['id']}}" type="radio" class="with-gap groupRadioBtn9B_{{$questionCount9B}}" value="{{$option['optionname']}}" id="group9B{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                        @endif   
                                                                        <label for="group9B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox9B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox9B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="9BQ{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox9B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox9B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox9B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                <label class="errorLabel9B errorLabel error" style="display: none;"></label>
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="9BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array9BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array9BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array9BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group9B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group9B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group9B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox9B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox9B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox9B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div> 
                                                <input type="hidden" name="questionCount9B" id="questionCount9B" value="{{$questionCount9B}}">
                                                <input type="hidden" name="input9BQuestions" id="input9BQuestions" value="{{$array9BQuestions}}">
                                                <input type="hidden" name="input9BQuestionsContinue" id="input9BQuestionsContinue" value="0">
                                                <div id="table9B" style="{{(count($array9BDetails['data']['questions']) >   0) ? 'display:none':''}}">
                                                    <form id="nineBForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9BTable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="9">Details of goods held in stock as job worker on behalf of the principal under section 141</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow9B">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th rowspan="2">Name of Principal</th>
                                                                    <th rowspan="2">GSTIN of Principal</th>
                                                                    <th rowspan="2">Challan No</th>

                                                                    <th rowspan="2">Challan Date</th>
                                                                       <th rowspan="2">Type of Goods</th>

                                                                    <th colspan="5" class="text-center">Details of goods with job-worker</th>

                                                                </tr>
                                                                <tr class="tabTableColumnHeading" id="subHeading">
                                                                    <th>HSN</th>
                                                                    <th>Description</th>
                                                                    <th>Unit</th>
                                                                    <th>Rate per Unit</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="table9Btbody">
                                                                 @if(count($array9BDetails['data']['table']) >   0)

                                                                 @php
                                                                  $unit_9B=0;
                                                                    $quantity_9B=0;
                                                                    $value_9B=0;

                                                                 @endphp
                                                                            @foreach($array9BDetails['data']['table']   as $key=>$tableData)
                                                                             @php
                                                                             $unit_9B    +=  $tableData['unit'];
                                                                              $quantity_9B    +=  $tableData['quantity'];
                                                                               $value_9B    +=  $tableData['value'];
                                                                            @endphp
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="name_of_principal_9B" value="{{isset($tableData['nameOfPrincipal'])?$tableData['nameOfPrincipal']:''}}" id="name_of_principal_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="gstn_of_principal_9B" value="{{isset($tableData['gstnOfPrincipal'])?$tableData['gstnOfPrincipal']:''}}" id="gstn_of_principal_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                              <label class="error error_gstn_of_principal_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="challan_no_9B" value="{{$tableData['challanNo']}}" id="challan_no_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_no_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="challan_date_9B" value=" @php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp" id="challan_date_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_date_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                @php $sixAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                                <select name="type_of_goods_9B" id="type_of_goods_9B_{{rand(10,1000)}}" class="type_of_goods_9B">
                                                                                    @foreach($sixAOption as $value)
                                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                                    @endforeach 
                                                                                </select>
                                                                            </div>
                                                                            <label class="error error_type_of_goods_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control hsnCode9b" name="hsn_9B" value="{{$tableData['hsn']}}" id="hsn_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_hsn_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_9B" value="{{$tableData['description']}}" id="description_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9B" name="unit_9B" value="{{$tableData['unit']}}" id="unit_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_unit_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9B" name="quantity_9B" value="{{$tableData['quantity']}}" id="quantity_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_quantity_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="9B" name="value_9B" value="{{$tableData['value']}}" id="value_9B_{{rand(10,1000)}}" readonly/>
                                                                            </div>
                                                                            <label class="error error_value_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        @if($key    >   0)
                                                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                        @endif
                                                                    </td>
                                                                </tr> 
                                                                @endforeach
                                                                        @else
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="name_of_principal_9B" value="" id="name_of_principal_9B_{{rand(10,1000)}}"/>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="gstn_of_principal_9B" value="" id="gstn_of_principal_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                              <label class="error error_gstn_of_principal_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="challan_no_9B" id="challan_no_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_no_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="challan_date_9B" id="challan_date_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_challan_date_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <select name="type_of_goods_9B"  id="type_of_goods_9B_{{rand(10,1000)}}" class="type_of_goods_9B">
                                                                                <option selected disabled>-- Select--</option>
                                                                                <option>Inputs</option>
                                                                                <option>Semi finished Goods</option>
                                                                                <option>Finished Goods</option>
                                                                                <option>Capital Goods</option>
                                                                                </select>
                                                                            </div>
                                                                            <label class="error error_type_of_goods_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control hsnCode9b" name="hsn_9B" id="hsn_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_hsn_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="description_9B" id="description_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_description_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9B" name="unit_9B" id="unit_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_unit_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal calculateValue" data-formname="9B" name="quantity_9B" id="quantity_9B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_quantity_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="9B" name="value_9B" id="value_9B_{{rand(10,1000)}}" value="" readonly/>
                                                                            </div>
                                                                            <label class="error error_value_9B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>                                                                
                                                                 @endif
                                                            </tbody>
                                                            <tfoot>
                                                                <tr class="totalFooter">
                                                                    <th colspan="7">Total</th>
                                                                   <th id="unit_9B_total">
                                                                       @if(isset($unit_9B))
                                                                       {{$unit_9B}}

                                                                       @endif

                                                                   </th>
                                                                    <th id="quantity_9B_total">
                                                                         @if(isset($quantity_9B))
                                                                       {{$quantity_9B}}

                                                                       @endif

                                                                    </th>
                                                                    <th id="value_9B_total">

                                                                     @if(isset($value_9B))
                                                                       {{$value_9B}}

                                                                       @endif
                                                                    </th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        </form>
                                                </div>