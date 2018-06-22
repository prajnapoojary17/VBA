<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>                                                
<div id="questions6A">    
    @php $questionCount6A   =   0;@endphp
    @foreach($array6ADetails['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
            @php $questionCount6A++;@endphp 
            <div class="form-group" id="6AQ{{$question['id']}}">
                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
                <label class="form-label">
                    {{$question['text']}}
                    @if($question['helpText'])
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
                    @endif
                </label>
                <br>
                @foreach($question['options'] as  $option)
                    @if($question['type']   ==  'radiobutton')
                        @if($question['isLinked'] ==  'Yes')
                            @php
                                 $hideIds    =   "6AQ";
                            @endphp

                            @foreach($question['options'] as  $optionsForId)
                                @if(!is_null($optionsForId['linkedQuestionId']))
                                    @php
                                        $hideIds    .=  '@#@6AQ'.$optionsForId['linkedQuestionId'];
                                    @endphp
                                @endif                                                                                    
                            @endforeach                                                                                    
                            @if(!is_null($option['linkedQuestionId']))
                                <input name="group6A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn6A_{{$questionCount6A}}" value="{{$option['optionname']}}" id="group6A{{$question['id'].$option['optionId']}}" data-showQuestionId="6AQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @else
                                <input name="group6A{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn6A_{{$questionCount6A}}" value="{{$option['optionname']}}" id="group6A{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                            @endif
                        @else
                            <input name="group6A{{$question['id']}}" type="radio" class="with-gap groupRadioBtn6A_{{$questionCount6A}}" value="{{$option['optionname']}}" id="group6A{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                        @endif   
                        <label for="group6A{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                    @else    
                        @if($question['isLinked'] ==  'Yes')
                            <input name="chkBox6A{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox6A{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="6AQ{{$option['linkedQuestionId']}}">
                        @else
                            <input name="chkBox6A{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox6A{{$question['id'].$option['optionId']}}" type="checkbox">
                        @endif    
                        <label for="chkBox6A{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                    @endif
                @endforeach
                <br>
                <label class="errorLabel6A errorLabel error" style="display: none;"></label>
            </div>
            @if($question['isLinked'] ==  'Yes')
                @foreach($question['options'] as  $option)
                    @if(!is_null($option['linkedQuestionId']))                                                                           
                        <div class="form-group" id="6AQ{{$option['linkedQuestionId']}}" style="display:none;">
                            <label class="form-label">
                                {{$array6ADetails['data']['questions'][$option['linkedQuestionId']]['text']}}
                                @if($array6ADetails['data']['questions'][$option['linkedQuestionId']]['helpText'])
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
                                                <div class="m-t-20">{!!$array6ADetails['data']['questions'][$option['linkedQuestionId']]['helpText']!!}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            @endif
                            </label>
                            <br>
                            @foreach($array6ADetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                @if($array6ADetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                    <input name="group6A{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group6A{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                    <label for="group6A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                @else    
                                    <input name="chkBox6A{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox6A{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                    <label for="chkBox6A{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endforeach                                                                    
            @endif
        @endif                                                                
    @endforeach
</div>  
<input type="hidden" name="questionCount6A" id="questionCount6A" value="{{$questionCount6A}}">
<input type="hidden" name="input6AQuestions" id="input6AQuestions" value="{{$array6AQuestions}}">
<input type="hidden" name="input6AQuestionsContinue" id="input6AQuestionsContinue" value="0">
<div id="table6A" style="{{(count($array6ADetails['data']['questions']) >   0) ? 'display:none':''}}">  
    <form id="sixAForm">
  <div class="alert alert-warning alert-dismissible" id="6A_warning_alert" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button>
      You are not eligible to carry forward input tax credit under this section</div>
    <table class="table table-bordered table-striped table-hover dataTable" id="6ATable">
        <thead>
        <tr>
            <th colspan="15">
          Amount of unavailed cenvat credit in respect of capital goods carried forward to electronic credit ledger as central tax
            </th>
        </tr>

            <tr class="tabTableColumnHeading">
                  <th rowspan="3">Name of Capital Goods</th>
            <th rowspan="3">Invoice/Document No.</th>
            <th rowspan="3">Invoice/Document Date</th>
            <th rowspan="3">Supplier Registration no. under existing law</th>
            <th rowspan="3" style="display: none">Nature of ITC carried forward</th>
            <th rowspan="3">Reciepients' Registration no. under existing law</th>

              
            <th colspan="3">Details of capital goods on which credit has been partially availed</th>

            <th rowspan="3">Total eligible cenvat credit under existing law</th>
            <th rowspan="3">Total credit availed under existing law</th>
            <th rowspan="3">Total credit unavailed under existing law</th>
            <th rowspan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow6A">Add row</button></th>

        </tr>
        <tr class="tabTableColumnHeading">
            <td rowspan="2">Value</td>
            <td colspan="2">Duties and Taxes paid</td>
        </tr>
        <tr class="tabTableColumnHeading">
            <td>ED/CVD</td>
            <td>SAD</td>
        </tr>
        </thead>

        <tbody id="table6Atbody">
            @php

            $capital_good_value_6A_totals=0;
            $capital_good_cvd_6A_totals=0;
            $capital_good_sad_6A_totals=0;
            $eligible_cenvat_6A_totals=0;
            $cenvat_credit_availed_6A_totals=0;
            $cenvat_credit_unavailed_6A_6A_totals=0;
            @endphp
            @if(count($array6ADetails['data']['table']) >   0)
            @foreach($array6ADetails['data']['table']   as $key=>$tableData)
            @php
    $capital_good_value_6A_totals    +=  $tableData['capitalGoodValue'];
$capital_good_cvd_6A_totals +=  $tableData['capitalGoodCvd'];
  $capital_good_sad_6A_totals +=  $tableData['capitalGoodSad'];
    $eligible_cenvat_6A_totals +=  $tableData['eligibleCenvat'];
      $cenvat_credit_availed_6A_totals +=  $tableData['cenvatCreditAvailed'];
        $cenvat_credit_unavailed_6A_6A_totals +=  $tableData['cenvatCreditUnavailed'];
 @endphp
        <tr>
              <td>
                  <div class="form-group">
                    <div class="form-line">
                <input type="text" class="form-control" name="capital_goods_6A" value="{{$tableData['capitalGood']}}" id="capital_goods_6A_{{rand(10,1000)}}"/>
                    </div></div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
             <input type="text" class="form-control" name="invoice_no_6A" value="{{$tableData['invoiceNo']}}" id="invoice_no_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_invoice_no_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="invoiceDatepicker form-control" name="invoice_date_6A" value=" @php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp" id="invoice_date_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_invoice_date_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="form-control registrationNumberFormat" name="supplier_reg_no_6A" value="{{$tableData['supplierRegNo']}}" id="supplier_reg_no_6A_{{rand(10,1000)}}"/>
                  </div>
                    <label class="error error_supplier_reg_no_6A" style="display: none;">This field is required.</label>
                </div>  
                    </td>
                       <td style="display: none">
                   <div class="form-group">
                    <div class="form-line">
                  @php $sixAOption=['select'=>'-- Select--','central_excise'=>'Central Excise','cvd'=>'CVD','sad'=>'SAD*']; @endphp
                                                                <select name="itc_carried_forward_6A" class="itc_carried_forward_6A" id="itc_carried_forward_6A" id="itc_carried_forward_6A_{{rand(10,1000)}}">
                                                              @foreach($sixAOption as $sexAoption=>$value)
                                                                <option value="{{$sexAoption}}" <?php if($tableData['itcCarriedForward']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      
                                                                 </select>
                   </div></div>
                </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="form-control registrationNumberFormat" name="recipient_regno_6A" value="{{$tableData['recipientRegNo']}}" id="recipient_regno_6A_{{rand(10,1000)}}"/>
                   </div>
                    <label class="error error_recipient_regno_6A" style="display: none;">This field is required.</label>
                </div> 
                    </td>




            
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculateTotal" data-formname="6A"  name="capital_good_value_6A" value="{{$tableData['capitalGoodValue']}}" id="capital_good_value_6A_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_capital_good_value_6A" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculateTotal" data-formname="6A" name="capital_good_cvd_6A" value="{{$tableData['capitalGoodCvd']}}" id="capital_good_cvd_6A_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_capital_good_cvd_6A" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculateTotal" data-formname="6A" name="capital_good_sad_6A" value="{{$tableData['capitalGoodSad']}}" id="capital_good_sad_6A_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_capital_good_sad_6A" style="display: none;">This field is required.</label>
                    </div>
                </td>                                        



                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculateTotal calculateCenvatCredit eligible_cenvat_6A" data-formname="6A" name="eligible_cenvat_6A" value="{{$tableData['eligibleCenvat']}}" id="eligible_cenvat_6A_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_eligible_cenvat_6A" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculateTotal calculateCenvatCredit cenvat_credit_availed_6A" data-formname="6A" name="cenvat_credit_availed_6A" value="{{$tableData['cenvatCreditAvailed']}}" id="cenvat_credit_availed_6A_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_cenvat_credit_availed_6A" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number"  min="0" class="form-control calculateTotal cenvat_credit_unavailed_6A" data-formname="6A" name="cenvat_credit_unavailed_6A" value="{{$tableData['cenvatCreditUnavailed']}}" id="cenvat_credit_unavailed_6A_{{rand(10,1000)}}"/>
                        </div>
                        <label class="error error_cenvat_credit_unavailed_6A" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
@if($key    >   0)
<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
@endif
</td>
        </tr>
        @endforeach
        @else
        <tr>
             <td>
                 <div class="form-group">
                    <div class="form-line">
                 <input type="text" class="form-control" name="capital_goods_6A" value="" id="capital_goods_6A_{{rand(10,1000)}}"/>
                    </div></div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="form-control" name="invoice_no_6A" id="invoice_no_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_invoice_no_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="invoiceDatepicker form-control" name="invoice_date_6A" id="invoice_date_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_invoice_date_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="form-control registrationNumberFormat" name="supplier_reg_no_6A" id="supplier_reg_no_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_supplier_reg_no_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
                    
               <td style="display: none">
                   <div class="form-group">
                    <div class="form-line">
                        <select name="itc_carried_forward_6A" class="itc_carried_forward_6A" id="itc_carried_forward_6A" id="itc_carried_forward_6A_{{rand(10,1000)}}">
               <option selected disabled>-- Select--</option>
                                                                <option value="central_excise">Central Excise</option>
                                                                <option value="cvd">CVD</option>
                                                                <option value="sad">SAD*</option>

                 </select>
                        </div></div>
                </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="text" class="form-control registrationNumberFormat" name="recipient_regno_6A" id="recipient_regno_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_recipient_regno_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>


            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6A" name="capital_good_value_6A" id="capital_good_value_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_capital_good_value_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6A" name="capital_good_cvd_6A" id="capital_good_cvd_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_capital_good_cvd_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6A" name="capital_good_sad_6A" id="capital_good_sad_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_capital_good_sad_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="number"  min="0" class="form-control calculateTotal calculateCenvatCredit eligible_cenvat_6A" data-formname="6A" name="eligible_cenvat_6A" id="eligible_cenvat_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_eligible_cenvat_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="number"  min="0" class="form-control calculateTotal calculateCenvatCredit cenvat_credit_availed_6A" data-formname="6A" name="cenvat_credit_availed_6A" id="cenvat_credit_availed_6A_{{rand(10,1000)}}"/>

                    </div>
                    <label class="error error_cenvat_credit_availed_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
            <td>
                <div class="form-group">
                    <div class="form-line">
                <input type="number"  min="0" class="form-control calculateTotal cenvat_credit_unavailed_6A" data-formname="6A" name="cenvat_credit_unavailed_6A" id="cenvat_credit_unavailed_6A_{{rand(10,1000)}}"/>
                    </div>
                    <label class="error error_cenvat_credit_unavailed_6A" style="display: none;">This field is required.</label>
                </div>
                    </td>
        </tr>
        @endif
        </tbody>
         <tfoot>
            <tr class="totalFooter">
                <th colspan="5">Total</th>
                <th id="capital_good_value_6A_total" class="clearAll">{{$capital_good_value_6A_totals}}</th>
                <th id="capital_good_cvd_6A_total" class="clearAll">{{$capital_good_cvd_6A_totals}}</th>
                <th id="capital_good_sad_6A_total" class="clearAll">{{$capital_good_sad_6A_totals}}</th>
                <th id="eligible_cenvat_6A_total" class="clearAll">{{$eligible_cenvat_6A_totals}}</th>
                <th id="cenvat_credit_availed_6A_total" class="clearAll">{{$cenvat_credit_availed_6A_totals}}</th>
                <th id="cenvat_credit_unavailed_6A_total" class="clearAll">{{$cenvat_credit_unavailed_6A_6A_totals}}</th>
            </tr>
        </tfoot>
        </table>
        </form>
</div>