<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
                                                
                                                <div id="questions8">
                                                    @php $questionCount8   =   0;@endphp
                                                    @foreach($array8Details['data']['questions']   as  $key=>$question)                                                               
                                                        @if(is_null($question['parentId']))
                                                            @php $questionCount8++;@endphp
                                                            <div class="form-group" id="8Q{{$question['id']}}">
                                                                 <input type="hidden" name="questionId" value="{{$question['id']}}" />
                                                                <label class="form-label">{{$question['text']}}</label>
                                                                <br>
                                                                @foreach($question['options'] as  $option)
                                                                    @if($question['type']   ==  'radiobutton')
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            @php
                                                                                 $hideIds    =   "8Q";
                                                                            @endphp

                                                                            @foreach($question['options'] as  $optionsForId)
                                                                                @if(!is_null($optionsForId['linkedQuestionId']))
                                                                                    @php
                                                                                        $hideIds    .=  '@#@8Q'.$optionsForId['linkedQuestionId'];
                                                                                    @endphp
                                                                                @endif                                                                                    
                                                                            @endforeach                                                                                    
                                                                            @if(!is_null($option['linkedQuestionId']))
                                                                                <input name="group8{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn8_{{$questionCount8}}" value="{{$option['optionname']}}" id="group8{{$question['id'].$option['optionId']}}" data-showQuestionId="8Q{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @else
                                                                                <input name="group8{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtn8_{{$questionCount8}}" value="{{$option['optionname']}}" id="group8{{$question['id'].$option['optionId']}}" data-hideQuestionId="{{$hideIds}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                            @endif
                                                                        @else
                                                                            <input name="group8{{$question['id']}}" type="radio" class="with-gap groupRadioBtn8_{{$questionCount8}}" value="{{$option['optionname']}}" id="group8{{$question['id'].$option['optionId']}}" {{($option['optionname']==$option['isSelected'])?'checked="checked"':''}}/>
                                                                        @endif   
                                                                        <label for="group8{{$question['id'].$option['optionId']}}">{{$option['optionname']}} </label>                                                                            
                                                                    @else    
                                                                        @if($question['isLinked'] ==  'Yes')
                                                                            <input name="chkBox8{{$question['id'].$option['optionId']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBox8{{$question['id'].$option['optionId']}}" type="checkbox" data-showQuestionId="8Q{{$option['linkedQuestionId']}}">
                                                                        @else
                                                                            <input name="chkBox8{{$question['id'].$option['optionId']}}" class="" value="{{$option['optionname']}}" id="chkBox8{{$question['id'].$option['optionId']}}" type="checkbox">
                                                                        @endif    
                                                                        <label for="chkBox8{{$question['id'].$option['optionId']}}">{{$option['optionname']}}</label>   

                                                                    @endif
                                                                @endforeach
                                                                <br>
                                                                <label class="errorLabel8 errorLabel error" style="display: none;"></label>
                                                            </div>
                                                            @if($question['isLinked'] ==  'Yes')
                                                                @foreach($question['options'] as  $option)
                                                                    @if(!is_null($option['linkedQuestionId']))                                                                           
                                                                        <div class="form-group" id="8Q{{$option['linkedQuestionId']}}" style="display:none;">
                                                                            <label class="form-label">{{$array8Details['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                                                                            <br>
                                                                            @foreach($array8Details['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                                                                @if($array8Details['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                                                                    <input name="group8{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="group8{{$option['linkedQuestionId'].$qstOption['optionId']}}" />
                                                                                    <label for="group8{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}} </label>                                                                            
                                                                                @else    
                                                                                    <input name="chkBox8{{$option['linkedQuestionId'].$qstOption['optionId']}}" class="" value="{{$qstOption['optionname']}}" id="chkBox8{{$option['linkedQuestionId'].$qstOption['optionId']}}" type="checkbox">
                                                                                    <label for="chkBox8{{$option['linkedQuestionId'].$qstOption['optionId']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                @endforeach                                                                    
                                                            @endif
                                                        @endif                                                                
                                                    @endforeach
                                                </div>    
                                                <input type="hidden" name="questionCount8" id="questionCount8" value="{{$questionCount8}}">
                                                <input type="hidden" name="input8Questions" id="input8Questions" value="{{$array8Questions}}">
                                                <input type="hidden" name="input8QuestionsContinue" id="input8QuestionsContinue" value="0">
                                                <div id="table8" style="{{(count($array8Details['data']['questions']) >   0) ? 'display:none':''}}">
                                                    <form id="eightForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="8Table">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="6">Details of transfer of cenvat credit for registered person having centralized registration under existing law</th>
                                                                     <th colspan="1"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow8">Add row</button></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                     <th rowspan="2" style="">Type of Tax</th>
                                                                    <th rowspan="2" style="display: none">Registration no. under existing law (Centralized)</th>
                                                                    <th rowspan="2">Tax period to which the last return filed under the existing law pertains</th>
                                                                    <th rowspan="2">Date of filing of the return specified in Column no. 3</th>
                                                                    <th rowspan="2" style="display: none">Balance eligible cenvat credit carried forward in the said last return</th>
                                                                    <th rowspan="2">GSTIN of receivers ( same PAN) of ITC CENTRAL TAX</th>
                                                                    <th colspan="2" class="text-center">Distribution document / invoice</th>
                                                                    <th rowspan="2">ITC of CENTRAL TAX transferred</th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr class="tabTableColumnHeading">
                                                                    <th>No</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table8tbody">
                                                                @if(count($array8Details['data']['table']) >   0)
                                                                            @foreach($array8Details['data']['table']   as $key=>$tableData)
                                                                <tr>
                                                                     <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        @php $data=['excise'=>'Excise','service_tax'=>'Service Tax']; @endphp
                                        <select id="type_of_tax_8_{{rand(10,1000)}}" class="type_of_tax_8" name="type_of_tax_8">
                                            <option selected disabled>-- Select--</option>
                                            @foreach($data as $typeKey=>$value)
                                                <option value="{{$typeKey}}" <?php if ($tableData['typeOfTax'] === $typeKey) {
                                                echo 'selected';
                                                } else {

                                                } ?>>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="error error_type_of_tax_8" style="display: none;">This field is required.</label>
                                </div>
                           <input type="hidden" class="form-control" name="register_no_8" value="{{$tableData['registerNo']}}" id="register_no_8_{{rand(10,1000)}}"/>
                            </td>
                                                                    <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="register_no_48" value="{{$tableData['registerNo']}}" id="register_no_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_register_no_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="tax_period_8" value="{{$tableData['taxPeriod']}}" id="tax_period_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_tax_period_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="datepicker form-control" name="date_filling_8" value="@php echo date('d/m/Y', strtotime($tableData['dateFilling'])); @endphp" id="date_filling_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_date_filling_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="cenvat_credit_8" value="{{$tableData['cenvatCredit']}}" id="cenvat_credit_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_cenvat_credit_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="itc_central_tax_8" value="{{$tableData['itcCentralTax']}}" id="itc_central_tax_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_itc_central_tax_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="invoice_no_8" value="{{$tableData['invoiceNo']}}" id="invoice_no_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_no_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="invoiceDatepicker form-control" name="invoice_date_8" value="@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp" id="invoice_date_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_date_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="central_tax_transfered_8" value="{{$tableData['centralTaxTransfered']}}" id="central_tax_transfered_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_central_tax_transfered_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        @if($key    >   0)
                                                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow8" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                                                <td>
                                <div class="form-group">
                                    <div class="form-line">
                                        @php $data=['excise'=>'Excise','service_tax'=>'Service Tax']; @endphp
                                        <select id="type_of_tax_8_{{rand(10,1000)}}" class="type_of_tax_8" name="type_of_tax_8">
                                            <option selected disabled>-- Select--</option>
                                            @foreach($data as $typeKey=>$value)
                                                <option value="{{$typeKey}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="error error_type_of_tax_8" style="display: none;">This field is required.</label>
                                </div>
                                                                                                               <input type="hidden" class="form-control" name="register_no_8" value="" id="register_no_8_{{rand(10,1000)}}"/>
                            </td>
                                                                    <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="registere_no_8" id="register_no_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_register_no_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="tax_period_8" id="tax_period_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_tax_period_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="datepicker form-control" name="date_filling_8" id="date_filling_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_date_filling_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td style="display: none">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="cenvat_credit_8" id="cenvat_credit_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_cenvat_credit_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="itc_central_tax_8" id="itc_central_tax_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_itc_central_tax_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="invoice_no_8" id="invoice_no_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_no_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="datepicker form-control" name="invoice_date_8" id="invoice_date_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_invoice_date_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="number"  min="0" class="form-control" name="central_tax_transfered_8" id="central_tax_transfered_8_{{rand(10,1000)}}"/>
                                                                            </div>
                                                                            <label class="error error_central_tax_transfered_8" style="display: none;">This field is required.</label>
                                                                        </div>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>  
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>