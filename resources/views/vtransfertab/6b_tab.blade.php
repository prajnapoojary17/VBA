 <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                               <div id="questions6B">
                                                        @foreach($array6BDetails['data']['questions']   as  $key=>$question)                                                               
                                                            @if(is_null($question['parentId']))
                                                                <div class="form-group" id="6BQ{{$question['id']}}">
                                                                     <input type="hidden" name="questionId" value="{{$question['id']}}" />
                                                                    <label class="form-label">{{$question['text']}}</label>
                                                                    <br>
                                                                    @foreach($question['options'] as  $option)
                                                                        @if($question['type']   ==  'radiobutton')
                                                                            @if($question['isLinked'] ==  'Yes')
                                                                                @php
                                                                                     $hideIds    =   "6BQ";
                                                                                @endphp

                                                                                @foreach($question['options'] as  $optionsForId)
                                                                                    @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                        @php
                                                                                            $hideIds    .=  '@#@6BQ'.$optionsForId['linkedQuestionId'];
                                                                                        @endphp
                                                                                    @endif                                                                                    
                                                                                @endforeach                                                                                    
                                                                                @if(!is_null($option['linkedQuestionId']))
                                                                                    <input name="group6B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group6B{{$question['id'].$option['optionId']}}" data-showQuestionId="6BQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                                @else
                                                                                    <input name="group6B{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion" value="{{$option['optionname']}}" id="group6B{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                                @endif
                                                                            @else
                                                                                <input name="group6B{{$question['id']}}" type="radio" class="with-gap" value="{{$option['optionname']}}" id="group6B{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif   
                                                                            <label for="group6B{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                        @else    
                                                                            @if($question['isLinked'] ==  'Yes')
                                                                                <input name="chkBox6B{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox6B{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="6BQ{{$option['linkedQuestionId']}}">
                                                                            @else
                                                                                <input name="chkBox6B{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox6B{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                            @endif    
                                                                            <label for="chkBox6B{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                @if($question['isLinked'] ==  'Yes')
                                                                    @foreach($question['options'] as  $option)
                                                                        @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                            <div class="form-group" id="6BQ{{$option['linkedQuestionId']}}" style="display:none;">
                                                                                <label class="form-label">{{$array6BDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                                <br>
                                                                                @foreach($array6BDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                    @if($array6BDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                        <input name="group6B{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group6B{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                        <label for="group6B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                    @else    
                                                                                        <input name="chkBox6B{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox6B{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                        <label for="chkBox6B{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        @endif
                                                                    @endforeach                                                                    
                                                                @endif
                                                            @endif                                                                
                                                        @endforeach
                                                    </div>    
                                                    <input type="hidden" name="input6BQuestions" id="input6BQuestions" value="{{$array6BQuestions}}">
                                                    <input type="hidden" name="input6BQuestionsContinue" id="input6BQuestionsContinue" value="0">
                                                    <div id="table6B" style="{{(count($array6BDetails['data']['questions']) >   0) ? 'display:none':''}}"> 
                                                        <form id="sixBForm">    
                                                             <div class="alert alert-warning alert-dismissible" id="6B_warning_alert" style="display:none;">
                                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button>
                                                                 Warning if amounts of columns – Details of capital goods on which credit has been partially availed and Total eligible cenvat credit under existing law don’t match.</div>
                                                            <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="6BTable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="12">Amount of unavailed input tax credit carried forward to electronic credit ledger as State/UT tax</th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th rowspan="2">Invoice/Document no.</th>
                                                                    <th rowspan="2">Invoice/Document Date</th>
                                                                     <th rowspan="2">Name of Capital Goods</th>
                                                                     <th rowspan="2" style="display: none">Nature of ITC carried Forward</th>
                                                                    <th rowspan="2">Supplier's registration no. under existing law</th>
                                                                    <th rowspan="2" style="display: none">Recipients' registration no. under existing law</th>
                                                                    <th colspan="2">Details regarding capital goods on which credit is not availed</th>
                                                                    <th rowspan="2">Total eligible VAT [and ET] credit under existing law</th>
                                                                    <th rowspan="2">Total VAT [and ET] credit availed under existing law</th>
                                                                    <th rowspan="2">Total VAT [and ET] credit unavailed under existing law (acmissible as ITC of State/UT tax)
                                                                     <button type="button" class="help-table" data-trigger="focus" data-container="body" data-toggle="popover"
                                                                        data-placement="right" data-content="Nature of ITC carried Forward : 1.VAT, 2.Entry Tax">
                                                                    <i class="material-icons">help_outline</i>
                                                                </button>
                                                                    
                                                                    </th>
                                                                    <th rowspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow6B">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th>Value</th>
                                                                    <th>Taxes paid VAT [and ET]</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="table6Btbody">
                                                                @if(count($array6BDetails['data']['table']) >   0)
                                                                @php
                                                                $capital_good_value_6B=0;
                                                                $capital_good_vat_6B=0;
                                                                $eligible_vat_6B=0;
                                                                $vatCredit_availed_6B=0;
                                                                $vat_credit_unavailed_6B=0;
                                                                @endphp
                                                            @foreach($array6BDetails['data']['table']   as $key=>$tableData)
                                                            @php
                                                            $capital_good_value_6B    +=  $tableData['capitalGoodValue'];
                                                            $capital_good_vat_6B    +=  $tableData['capitalGoodVat'];
                                                            $eligible_vat_6B    +=  $tableData['eligibleVat'];
                                                            $vatCredit_availed_6B    +=  $tableData['vatCreditAvailed'];
                                                            $vat_credit_unavailed_6B    +=  $tableData['vatCreditUnavailed'];
                                                            @endphp
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="invoice_no_6B" value="{{$tableData['invoiceNo']}}" id="invoice_no_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_no_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="invoice_date_6B" value=" @php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp" id="invoice_date_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_date_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>


                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="capital_goods_6B" value="{{$tableData['invoiceNo']}}" id="capital_goods_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                            </td>

                                                                       <td style="display: none">
                                                                           <div class="form-group">
                                                                                <div class="form-line">
                                                                           
                                                                               @php $sixBOption=['-- Select--','VAT','Entry Tax']; @endphp
                                                                        <select name="itc_carried_forward_6B" id="itc_carried_forward_6B_{{rand(10,1000)}}" class="itc_carried_forward_6B">
                                                                      @foreach($sixBOption as $value)
                                                                        <option <?php if($tableData['itcCarriedForward']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
                                                                               </div>
                                                                            
                                                                        </div>
                                                                        </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                            <input type="text" class="form-control registrationNumberFormat" name="supplier_reg_no_6B" value="{{$tableData['supplierRegNo']}}" id="supplier_reg_no_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_supplier_reg_no_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control " name="recipient_reg_no_6B" value="{{$tableData['recipientRegNo']}}" id="recipient_reg_no_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_recipient_reg_no_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="capital_good_value_6B" value="{{$tableData['capitalGoodValue']}}" id="capital_good_value_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_capital_good_value_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="capital_good_vat_6B" value="{{$tableData['capitalGoodVat']}}" id="capital_good_vat_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_capital_good_vat_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="eligible_vat_6B" value="{{$tableData['eligibleVat']}}" id="eligible_vat_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_eligible_vat_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="vatCredit_availed_6B" value="{{$tableData['vatCreditAvailed']}}" id="vatCredit_availed_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_vatCredit_availed_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="vat_credit_unavailed_6B" value="{{$tableData['vatCreditUnavailed']}}" id="vat_credit_unavailed_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_vat_credit_unavailed_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr>
                                                                @endforeach
                                                            @else
                                                            <tr>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="invoice_no_6B" id="invoice_no_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_no_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="invoice_date_6B" id="invoice_date_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_date_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="capital_goods_6B" value="" id="capital_goods_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                            </td>

                                                                       <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                           <select name="itc_carried_forward_6B" class="itc_carried_forward_6B" id="itc_carried_forward_6B_{{rand(10,1000)}}">
                                                                        <option selected disabled>-- Select--</option>

                                                                        <option>VAT</option>
                                                                        <option>Entry Tax</option>

                                                                         </select>
                                                                         </div>
                                                                            
                                                                        </div>       
                                                                        </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control registrationNumberFormat" name="supplier_reg_no_6B" id="supplier_reg_no_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_supplier_reg_no_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control registrationNumberFormat" name="recipient_reg_no_6B" id="recipient_reg_no_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_recipient_reg_no_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="capital_good_value_6B" id="capital_good_value_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_capital_good_value_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="capital_good_vat_6B" id="capital_good_vat_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_capital_good_vat_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="eligible_vat_6B" id="eligible_vat_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_eligible_vat_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="vatCredit_availed_6B" id="vatCredit_availed_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_vatCredit_availed_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control calculateTotal" data-formname="6B" name="vat_credit_unavailed_6B" id="vat_credit_unavailed_6B_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_vat_credit_unavailed_6B" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                            </td>
                                                                </tr>
                                                            @endif
                                                            </tbody>
                                                              <tfoot>
                                                                <tr class="totalFooter">

                                                                    <th colspan="4">Total</th>
                                                                   <th id="capital_good_value_6B_total"  class="clearAll">
                                                                       @if(isset($capital_good_value_6B))
                                                                       {{$capital_good_value_6B}}
                                                                     @endif
                                                                   </th>
                                                                   <th id="capital_good_vat_6B_total"  class="clearAll">{{isset($capital_good_vat_6B)?$capital_good_vat_6B:0}}</th>
                                                                    <th id="eligible_vat_6B_total"  class="clearAll">{{isset($eligible_vat_6B)?$eligible_vat_6B:0}}</th>
                                                                    <th id="vatCredit_availed_6B_total"  class="clearAll">{{isset($vatCredit_availed_6B)?$vatCredit_availed_6B:0}}</th>
                                                                    <th id="vat_credit_unavailed_6B_total"  class="clearAll">{{isset($vat_credit_unavailed_6B)?$vat_credit_unavailed_6B:0}}</th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </form>
                                                </div>