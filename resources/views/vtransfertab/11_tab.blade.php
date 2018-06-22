  <h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                               <div id="questions11">
                                                    @php $questionCount11   =   0;@endphp
                                                    @foreach($array11Details['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            @php $questionCount11++;@endphp
                                                            <div class="form-group" id="11Q{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "11Q";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@11Q'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group11{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn11_{{$questionCount11}}" value="{{$option['optionname']}}" id="group11{{$question['id'].$option['optionId']}}" data-showQuestionId="11Q{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group11{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn11_{{$questionCount11}}" value="{{$option['optionname']}}" id="group11{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group11{{$question['id']}}" type="radio" class="with-gap groupRadioBtn11_{{$questionCount11}}" value="{{$option['optionname']}}" id="group11{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                        @endif   
                                                                        <label for="group11{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox11{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox11{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="11Q{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox11{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox11{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox11{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                <label class="errorLabel11 errorLabel error" style="display: none;"></label>
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="11Q{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array11Details['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array11Details['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array11Details['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group11{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group11{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group11{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox11{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox11{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox11{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="questionCount11" id="questionCount11" value="{{$questionCount11}}">
                                                <input type="hidden" name="input11Questions" id="input11Questions" value="{{$array11Questions}}">
                                                <input type="hidden" name="input11QuestionsContinue" id="input11QuestionsContinue" value="0">
                                                <div id="table11" style="{{(count($array11Details['data']['questions']) >   0) ? 'display:none':''}}">   
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="11Table">
                                                    <thead>
                                                          <tr>
                                                            <th colspan="8" >Details of credit availed in terms of section 142(11(c )))</th>
                                                            <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow11">Add row</button></th>
                                                       
                                                        </tr>
                                                        <tr class="tabTableColumnHeading">
                                                            <th style="display: none">Registration No of VAT</th>
                                                            <th style="display: none">Service Tax Registration No.</th>
                                                             <th>Type Of Tax</th>
                                                              <th>Registration No</th>
                                                            <th>Invoice / Document No.</th>
                                                            <th>Invoice / Document Date</th>
                                                            <th>Tax Paid</th>
                                                            <th>VAT paid Taken as SGST Credit or Service Tax paid as Central Tax Credit</th>
                                                            <th>VAT paid Taken as SGST Credit</th>
                                                            <th>Service Tax paid taken as CGST</th>
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table11tbody">
                                                        @if(count($array11Details['data']['table']) >   0)
                                                        @php  $tax_paid_11=0; $tax_credit_11=0; @endphp
                                                            @foreach($array11Details['data']['table']   as $key=>$tableData)
                                                            @php 
                                                            $tax_paid_11 += $tableData['TaxPaid']; 
                                                            $tax_credit_11 += $tableData['taxCredit'];
                                                            
                                                            @endphp
                                                        <tr>
                                                            <td style="display: none">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="vat_reg_no_11" value="{{$tableData['vatRegNo']}}"/>
                                                                    </div>
                                                                    <label class="error error_vat_reg_no_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td style="display: none">
                                                                <div class="form-group" >
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="service_tax_regno_11" value="{{$tableData['serviceTaxRegNo']}}"/>
                                                                    </div>
                                                                    <label class="error error_service_tax_regno_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                                    <td>
                                <div class="form-group">
                                    <div class="form-line">
                                         @php $data=['vat'=>'VAT','service_tax'=>'Service Tax']; @endphp
                                        <select id="type_of_tax_11_{{rand(10,1000)}}" name="type_of_tax_11" class="type_of_tax_11">
                                            <option value="" selected >-- Select--</option>
                                            @foreach($data as $elevenKey=>$value)
                                                <option value="{{$elevenKey}}"  <?php if ($tableData['typeOfTax'] === $value) {
                                                echo 'selected';
                                                } else {

                                                } ?>>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="error error_type_of_tax_11" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                                                             <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control registrationNumberFormat" name="registration_no_11" value="{{$tableData['registrationNo']}}"/>
                                                                    </div>
                                                                    <label class="error error_registration_no_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="invoice_no_11" value="{{$tableData['invoiceNo']}}"/>
                                                                    </div>
                                                                    <label class="error error_invoice_no_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="invoiceDatepicker form-control" name="invoice_date_11" value="@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp"/>
                                                                    </div>
                                                                    <label class="error error_invoice_date_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="number"  min="0" class="form-control calculateTotal" data-formname="11" name="tax_paid_11" value="{{$tableData['TaxPaid']}}"/>
                                                                    </div>
                                                                    <label class="error error_tax_paid_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="number"  min="0" class="form-control calculateTotal" data-formname="11" name="tax_credit_11" value="{{$tableData['taxCredit']}}"/>
                                                                    </div>
                                                                    <label class="error error_tax_credit_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="number"  min="0" class="form-control" name="vat_tax_paid_11" value="{{isset($tableData['vatTaxPaid'])?$tableData['vatTaxPaid']:''}}"/>
                                                                    </div>
                                                                    <label class="error error_vat_tax_paid_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="number"  min="0" class="form-control" name="service_tax_paid_11" value="{{isset($tableData['serviceTaxPaid'])?$tableData['serviceTaxPaid']:''}}"/>
                                                                    </div>
                                                                    <label class="error error_service_tax_paid_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @if($key    >   0)
                                                                    <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                         @endforeach
                                                            @else
                                                            <tr>
                                                                <td style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="vat_reg_no_11"/>
                                                                        </div>
                                                                        <label class="error error_vat_reg_no_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="service_tax_regno_11"/>
                                                                        </div>
                                                                        <label class="error error_service_tax_regno_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                  <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        @php $data=['vat'=>'VAT','service_tax'=>'Service Tax']; @endphp
                                        <select id="type_of_tax_11_{{rand(10,1000)}}" name="type_of_tax_11" class="type_of_tax_11">
                                            <option value="" selected >-- Select--</option>
                                            @foreach($data as $elevenKey=>$value)
                                            <option value="{{$elevenKey}}" >{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="error error_type_of_tax_11" style="display: none;">This field is required.</label>
                                </div>
                            </td>
                                                             <td>
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control registrationNumberFormat" name="registration_no_11" />
                                                                    </div>
                                                                    <label class="error error_registration_no_11" style="display: none;">This field is required.</label>
                                                                </div>
                                                            </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="invoice_no_11"/>
                                                                        </div>
                                                                        <label class="error error_invoice_no_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="invoiceDatepicker form-control" name="invoice_date_11"/>
                                                                        </div>
                                                                        <label class="error error_invoice_date_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateTotal" data-formname="11" name="tax_paid_11"/>
                                                                        </div>
                                                                        <label class="error error_tax_paid_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control calculateTotal" data-formname="11" name="tax_credit_11"/>
                                                                        </div>
                                                                        <label class="error error_tax_credit_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control" name="vat_tax_paid_11" value=""/>
                                                                        </div>
                                                                        <label class="error error_vat_tax_paid_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="number"  min="0" class="form-control" name="service_tax_paid_11" value=""/>
                                                                        </div>
                                                                        <label class="error error_service_tax_paid_11" style="display: none;">This field is required.</label>
                                                                    </div>
                                                                </td>                                                            
                                                                <td></td>
                                                            </tr>
                                                            @endif
                                                    </tbody>
                                                     <tfoot>
                                                        <tr class="totalFooter">
                                                            <th colspan="4">Total</th>
                                                          <th id="tax_paid_11_total"  class="clearAll">
                                                              @if(isset($tax_paid_11))
                                                              {{$tax_paid_11}}
                                                              @endif
                                                          </th>
                                                          <th id="tax_credit_11_total"  class="clearAll">
                                                              @if(isset($tax_credit_11))
                                                              {{$tax_credit_11}}
                                                              @endif 
                                                          </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </div>  