<h3 class="fancy-title">{{session()->get('gstnDetail')['gstnId']}}<br><small>{{session()->get('gstnDetail')['legalName']}}</small> </h3>
<input type="hidden" class="form-control" name="gstnId" value="{{session()->get('gstnDetail')['gstnId']}}">
<div id="questionsGeneral" style="">
    @php $questionCountG   =   0;@endphp
    @foreach($arrayGDetails['data']['questions']   as  $key=>$question)                                                               
        @if(is_null($question['parentId']))
        @php if($question['type']   ==  'radiobutton') {$questionCountG++;}@endphp
            <div class="form-group" id="GQ{{$question['id']}}">
                <label class="form-label">{{$question['text']}}</label>
                <br>
                @foreach($question['options'] as  $option)
                    @if($question['type']   ==  'radiobutton')
                        @if($question['isLinked'] ==  'Yes')
                            @php
                                 $hideIds    =   "GQ";
                            @endphp

                            @foreach($question['options'] as  $optionsForId)
                                @if(!is_null($optionsForId['linkedQuestionId']))
                                    @php
                                        $hideIds    .=  '@#@GQ'.$optionsForId['linkedQuestionId'];
                                    @endphp
                                @endif                                                                                    
                            @endforeach                                                                                    
                            @if(!is_null($option['linkedQuestionId']))
                                <input name="groupG{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtnG_{{$questionCountG}}" value="{{$option['optionname']}}" id="groupG{{$question['id'].$option['optionname']}}" data-showQuestionId="GQ{{$option['linkedQuestionId']}}" data-hideQuestionId="{{$hideIds}}"/>
                            @else
                                <input name="groupG{{$question['id']}}" type="radio" class="with-gap linkedRadioBtnQuestion groupRadioBtnG_{{$questionCountG}}" value="{{$option['optionname']}}" id="groupG{{$question['id'].$option['optionname']}}" data-hideQuestionId="{{$hideIds}}"/>
                            @endif
                        @else
                            <input name="groupG{{$question['id']}}" type="radio" class="with-gap groupRadioBtnG_{{$questionCountG}}" value="{{$option['optionname']}}" id="groupG{{$question['id'].$option['optionname']}}"/>
                        @endif   
                        <label for="groupG{{$question['id'].$option['optionname']}}">{{$option['optionname']}} </label>                                                                            
                    @else    
                        @if($question['isLinked'] ==  'Yes')
                            <input name="chkBoxG{{$question['id'].$option['optionname']}}" class="linkedChkBoxQuestion" value="{{$option['optionname']}}" id="chkBoxG{{$question['id'].$option['optionname']}}" type="checkbox" data-showQuestionId="GQ{{$option['linkedQuestionId']}}">
                        @else
                            <input name="chkBoxG{{$question['id'].$option['optionname']}}" class="" value="{{$option['optionname']}}" id="chkBoxG{{$question['id'].$option['optionname']}}" type="checkbox" >
                        @endif    
                        <label for="chkBoxG{{$question['id'].$option['optionname']}}">{{$option['optionname']}}</label>   

                    @endif
                @endforeach
                @if($question['type']   ==  'radiobutton')
                    <br>
                    <label class="errorLabelG errorLabel error" style="display: none;"></label>
                @endif    
            </div>
            @if($question['isLinked'] ==  'Yes')
                @foreach($question['options'] as  $option)
                    @if(!is_null($option['linkedQuestionId']))                                                                           
                        <div class="form-group" id="GQ{{$option['linkedQuestionId']}}" style="display:none;">
                            <label class="form-label">{{$arrayGDetails['data']['questions'][$option['linkedQuestionId']]['text']}}</label>
                            <br>
                            @foreach($arrayGDetails['data']['questions'][$option['linkedQuestionId']]['options'] as  $qstOption)
                                @if($arrayGDetails['data']['questions'][$option['linkedQuestionId']]['type']   ==  'radiobutton')
                                    <input name="groupG{{$option['linkedQuestionId']}}" type="radio" class="with-gap" value="{{$qstOption['optionname']}}" id="groupG{{$option['linkedQuestionId'].$qstOption['optionname']}}" />
                                    <label for="groupG{{$option['linkedQuestionId'].$qstOption['optionname']}}">{{$qstOption['optionname']}} </label>                                                                            
                                @else    
                                    <input name="chkBox5A{{$option['linkedQuestionId'].$qstOption['optionname']}}" class="" value="{{$qstOption['optionname']}}" id="chkBoxG{{$option['linkedQuestionId'].$qstOption['optionname']}}" type="checkbox">
                                    <label for="chkBoxG{{$option['linkedQuestionId'].$qstOption['optionname']}}">{{$qstOption['optionname']}}</label>                                                                                            
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endforeach                                                                    
            @endif
        @endif                                                                
    @endforeach
    <div class="form-group" id="ques2">
        <label class="form-label">Were you registered under earlier tax laws?</label>
        <br>
        <input name="group2" type="radio" id="group2Yes" class="with-gap groupRadioBtnG_{{$questionCountG+1}}" />
        <label for="group2Yes">Yes</label>
        <input name="group2" type="radio" id="group2No" class="with-gap groupRadioBtnG_{{$questionCountG+1}}" />
        <label for="group2No">No</label>
        <br>
        <label class="errorLabelG errorLabel error" style="display: none;"></label>
    </div>
    <div class="form-group" id="ques3" style="display:none">
        <label class="form-label">Select the Tax centers where you are currently registered</label>
        <div class="row question-inline">
            <div class="col-lg-2 col-md-2">
                <input type="checkbox" id="group3VAT"  />
                <label for="group3VAT">VAT</label>
            </div>
            <div class="col-lg-3 col-md-4" id="group3VATAns" style="display:none;">
                <div class="form-group form-float">
                    <div class="form-line" >
                        <input type="text" name="vat_reg_GQ"  id="vatRegNo" class="form-control required registrationNumberFormat" value="{{$registeredPersonDetail->vatRegNo}}" id="vat_reg_GQ" />
                        <label class="form-label">VAT Registration No</label>
                        
                    </div>
                     <label class="error" id="error_vat_reg_GQ"></label>
                </div>
            </div>
               <div class="col-lg-3 col-md-4" id="group3Choice" style="display:none;">
                <div class="form-group form-float">
                   
        <input name="vatchoice" type="radio" id="vatchoiceYes" value="normal_registration" class="with-gap vatchoice"  />
        <label for="vatchoiceYes">Normal Registration</label>
        <input name="vatchoice" type="radio" id="vatchoiceNo" value="registered_under" class="with-gap vatchoice" />
        <label for="vatchoiceNo">Registered under Composition scheme </label>
                </div>
            </div>
              <div class="col-lg-3 col-md-4" id="group3VATOneAns" style="display:none;">
                <div class="form-group form-float">
                    <div class="form-line ">
                        <input type="text" name="tin_no_in_state" id="TinNoInState" class="form-control" value="{{$registeredPersonDetail->tinNoInState}}" />
                        <label class="form-label">Amount carried forward in the last return</label>
                    </div>
                     <label class="error" id="error_tin_no_in_state"></label>
                </div>
            </div>
        </div>
        <div class="row question-inline">
            <div class="col-lg-2 col-md-2">
                <input type="checkbox"  id="group3ServiceTax"  />
                <label for="group3ServiceTax">Service Tax</label>
            </div>
            <div class="col-lg-3 col-md-3" id="group3ServiceTaxAns" style="display:none;" >
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="service_tax_GQ" id="serviceTaxRegNo" class="form-control registrationNumberFormat" value="{{$registeredPersonDetail->serviceTaxRegNo}}" />
                        <label class="form-label">Service Tax Registration No</label>                        
                    </div>
                    <label class="error" id="error_service_tax_GQ"></label>
                </div>
            </div>
                 <div class="col-lg-3 col-md-3" id="group3ServiceChoice" style="display:none;">
                <div class="form-group form-float">
                   
        <input name="servicechoice" type="radio" id="servicechoiceYes" value="normal_registration" class="with-gap servicechoice"  />
        <label for="servicechoiceYes">Normal Registration</label>
        <input name="servicechoice" type="radio" id="servicechoiceNo" value="registered_under" class="with-gap servicechoice" />
        <label for="servicechoiceNo">Registered under Composition scheme </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3" id="group3ServiceTaxOneAns" style="display:none;" >
                  <div class="form-group form-float">
                    <div class="form-line ">
                        <input type="text" name="amount_vat_caarried_forward" id="AmountVatCarriedForward" class="form-control" value="{{$registeredPersonDetail->amountVatCarriedForward}}" />
                        <label class="form-label">Amount carried forward in the last return</label>
                    </div>
                    <label class="error" id="error_AmountVatCarriedForward"></label>  
                </div>
            </div>
        </div>
        <div class="row question-inline">
            <div class="col-lg-2 col-md-2">
                <input type="checkbox" id="group3Excise" />
                <label for="group3Excise">Excise</label>
            </div>
            <div class="col-lg-3 col-md-3" id="group3ExciseAns" style="display:none;" >
                <div class="form-group form-float">
                    <div class="form-line ">
                        <input type="text" name="excise_reg_no_GQ" id="exciseRegNo"  class="form-control registrationNumberFormat" value="{{$registeredPersonDetail->exciseRegNo}}" />
                        <label class="form-label">Excise Registration No</label>
                    </div>
                    <label class="error" id="error_excise_reg_no_GQ"></label>
                </div>
                
               
            </div>
                  <div class="col-lg-3 col-md-3" id="group3ExciseChoice" style="display:none;">
                <div class="form-group form-float">
                   
        <input name="excisechoice" type="radio" id="excisechoiceYes" value="normal_registration" class="with-gap excisechoice"  />
        <label for="excisechoiceYes">Normal Registration</label>
        <input name="excisechoice" type="radio" id="excisechoiceNo" value="registered_under" class="with-gap excisechoice" />
        <label for="excisechoiceNo">Registered under Composition scheme </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3" id="group3ExciseOneAns" style="display:none;" >
                  <div class="form-group form-float">
                     <div class="form-line ">
                        <input type="text" name="entry_tax_tin_no" id="TinNoInStateEntryTax" class="form-control" value="{{$registeredPersonDetail->tinNoInEntryTax}}" />
                        <label class="form-label">Amount carried forward in the last return</label>
                    </div>
                      <label class="error" id="error_TinNoInStateEntryTax"></label>
                </div>
            </div>
        </div>
        <div class="row question-inline">
            <div class="col-lg-2 col-md-2">
                <input type="checkbox" id="group3EntryTax" />
                <label for="group3EntryTax">Entry Tax</label>
            </div>
            <div class="col-lg-3 col-md-3" id="group3EntryTaxAns" style="display:none;" >
                <div class="form-group form-float">
                    <div class="form-line ">
                        <input type="text" name="entry_tax_GQ" id="entryTax" class="form-control" value="{{$registeredPersonDetail->entryTax}}" />
                        <label class="form-label">Entry tax</label>
                    </div>
                    <label class="error" id="error_entry_tax_GQ"></label>
                </div>
            </div>
             <div class="col-lg-3 col-md-3" id="group3EntryChoice" style="display:none;">
                <div class="form-group form-float">
                   
        <input name="entrytaxchoice" type="radio" id="entrytaxchoiceYes" value="normal_registration" class="with-gap entrytaxchoice"  />
        <label for="entrytaxchoiceYes">Normal Registration</label>
        <input name="entrytaxchoice" type="radio" id="entrytaxchoiceNo" value="registered_under" class="with-gap entrytaxchoice" />
        <label for="entrytaxchoiceNo">Registered under Composition scheme </label>
                </div>
            </div>
                 <div class="col-lg-3 col-md-3" id="group3EntryTaxOneAns" style="display:none;" >
                <div class="form-group form-float">
                  <div class="form-line ">
                        <input type="text" name="amount_entry_caarried_forward" id="AmountEntryCarriedForward" class="form-control" value="{{$registeredPersonDetail->entryTaxCarriedForward}}" />
                        <label class="form-label">Amount carried forward in the last return</label>
                    </div>
                    <label class="error" id="error_amount_entry_caarried_forward"></label>
                </div>
            </div>
        </div>
        
  
    </div>
    <input type="hidden" name="questionCountG" id="questionCountG" value="{{$questionCountG+1}}">
    <input type="hidden" name="inputGeneralQuestions" id="inputGeneralQuestions" value="{{$arrayGQuestions}}">                                               
    <input type="hidden" name="inputGeneralQuestionsContinue" id="inputGeneralQuestionsContinue" value="0">
    <input type="hidden" name="count_of_general_tables" id="count_of_general_tables" value="{{count($arrayGDetails['data']['table'])}}">
</div>                                   