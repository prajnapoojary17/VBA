@php
                                      
                                                 $balance_cenvat_credit_5A_totals    =   0;
                                                                    $cenvat_credit_admissible_5A_totals =   0;
                                                                    $tax_periof_total=0;
                                                                @endphp
                                                    @if(count($fiveA) >   0)               
                                                 <h4>5A</h4>
                                                <table class="table table-bordered table-striped table-hover dataTable m-t-15">
                                                    <thead>
                                                      <tr>
                                                                  <th>Nature of ITC carried forward in last return filed. 
                                                                
                                                                </th>
                                                                <th>Registration No. under existing law 
                                                              
                                                                </th>
                                                                
                                                                <th>Tax Period 
                                                              
                                                                </th>
                                                                <th>Date of filling 
                                                               
                                                                </th>
                                                                <th>Balance cenvat credit 
                                                               
                                                                </th>
                                                                <th>Cenvat credit admissible 
                                                               
                                                                </th>
                                                              
                                                            </tr>
                                                    </thead>
                
                                                    <tbody>
                                                        <?php
                                                       /* echo "<pre>";
        print_r($fiveA);
        exit();*/
        ?>
                                                           @foreach($fiveA   as $key=>$tableData)
                                                                        @php
                                                                            $balance_cenvat_credit_5A_totals    +=  $tableData['balanceCenvatCredit'];
                                                                            $cenvat_credit_admissible_5A_totals +=  $tableData['balanceCenvatAdmissible'];
                                                                            
                                                                        @endphp
                                                        <tr>
                                                            <td>{{$tableData['natureOfItc']}}</td>
                                                             <td>{{$tableData['registrationNo']}}</td>
                                                              <td>{{$tableData['taxPeriod']}}</td>
                                                               <td>{{$tableData['dateFiling']}}</td>
                                                                <td>{{$tableData['balanceCenvatCredit']}}</td>
                                                                 <td>{{$tableData['balanceCenvatAdmissible']}}</td>
                                                                 
                                                        </tr>
                                                         @endforeach
                                                    </tbody>
                                                     <tfoot>
                                                            <tr>
                                                                <th colspan="4">Total</th>
                                                                <th id="balance_cenvat_credit_5A_total">{{$balance_cenvat_credit_5A_totals}}</th>
                                                                <th id="cenvat_credit_admissible_5A_total">{{$cenvat_credit_admissible_5A_totals}}</th>
                                                              
                                                            </tr>
                                                        </tfoot>
                                                </table>
                                                 @endif
                                                 
                                                 <!---5b Table-->
                                                 @if(count($fiveB) > 0)
                                                   <h4>5B</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="5BTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Type of Form C/F/E/H/I</th>
                                                            <th>Sr. No. of Form</th>
                                                            <th>TIN of Issuer</th>
                                                            <th>Name of Issuer</th>
                                                            <th> Sales Value</th>
                                                            <th>Amount</th>
                                                            <th>Applicable VAT Rate</th>
                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table5Btbody">
                                                       
                                                        
                                                  
                                                        @foreach($fiveB   as $key=>$tableData)
                                                      
                                                        <tr>
                                                             <td>
                                                               {{$tableData['type']}}
                                                                </td>
                                                            <td>{{$tableData['formSerialNo']}}</td>
                                                            <td>{{$tableData['tinIssuer']}}</td>
                                                            <td>{{$tableData['issuerName']}}</td>
                                                           <td>{{$tableData['salesValue']}}</td>
                                                            <td>{{$tableData['amount']}}</td>
                                                            <td>{{$tableData['vatRate']}}</td>
                                                        </tr>
                                                         @endforeach
                                                         </tbody>
                                                </table>
                                                         
                                                   @endif
                                                   
                                                   <!---5c Table--->
                                                   
                                                     @if(isset($fiveC)&&count($fiveC) >   0) 
                                                     <h4>5C</h4>
                                                    <table class="table table-bordered table-striped table-hover dataTable" id="5CTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Registration No. 
                                                               
                                                                </th>
                                                            <th rowspan="2">Balance of ITC of VAT 
                                                                
                                                                </th>
                                                            <th colspan="2" class="text-center">C Forms</th>
                                                            <th colspan="2" class="text-center">F Forms</th>
                                                            <th rowspan="2">ITC Reversal 
                                                               
                                                                </th>
                                                            <th colspan="2" class="text-center">H/I Forms 
                                                               
                                                                </th>
                                                            <th rowspan="2">Transition ITC 2 
                                                               
                                                                </th>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>Turnover</th>
                                                            <th>Difference Tax</th>
                                                            <th>Turnover</th>
                                                            <th>Tax Payable</th>
                                                            <th>Turnover</th>
                                                            <th>Tax Payable</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table5Ctbody">
                                                                                                      
                                                        @foreach($fiveC   as $key=>$tableData)
                                                        <tr>
                                                            <td>
                                                               {{$tableData['registrationNo']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['itcBalance']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['cFormPending']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['diffTaxPayable']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['fFormPending']}}
                                                            </td>
                                                            <td>
                                                              {{$tableData['fTaxPayable']}}
                                                            </td>
                                                            <td>
                                                                {{$tableData['itcReversal']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['hFormPedning']}}
                                                            </td>
                                                            <td>
                                                              {{$tableData['hTaxPayable']}}
                                                            </td>
                                                            <td>
                                                               {{$tableData['transition']}}
                                                            </td>
                                                            
                                                        </tr>
                                                         @endforeach
                                                   </tbody>
                                                </table>
                                                     @endif
                                                       <!--end of 5c Table--->
                                                       
                                                       <!---6A Table-->
                                                        @if(count($sixA) >   0)
                                                            <h4>6A</h4>
                                                       <table class="table table-bordered table-striped table-hover dataTable" id="6ATable">
                                                        <thead>
                                                        <tr>
                                                            <th rowspan="3">Invoice/Document No.</th>
                                                            <th rowspan="3">Invoice/Document Date</th>
                                                            <th rowspan="3">Supplier Registration no. under existing law</th>
                                                            <th rowspan="3">Reciepients' Registration no. under existing law</th>
                                                              <th rowspan="3">Capital Goods</th>
                                                                <th rowspan="3">Nature of ITC carried forward</th>
                                                            <th colspan="3">Details of capital goods on which credit has been partially availed</th>
                                                            
                                                            <th rowspan="3">Total eligible cenvat credit under existing law</th>
                                                            <th rowspan="3">Total credit availed under existing law</th>
                                                            <th rowspan="3">Total credit unavailed under existing law</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">Values</td>
                                                            <td colspan="2">Duties and Taxes paid</td>
                                                        </tr>
                                                        <tr>
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
                                                           
                                                            @foreach($sixA   as $key=>$tableData)
                                                            @php
                                                    $capital_good_value_6A_totals    +=  $tableData['capitalGoodValue'];
                                                $capital_good_cvd_6A_totals +=  $tableData['capitalGoodCvd'];
                                                  $capital_good_sad_6A_totals +=  $tableData['capitalGoodSad'];
                                                    $eligible_cenvat_6A_totals +=  $tableData['eligibleCenvat'];
                                                      $cenvat_credit_availed_6A_totals +=  $tableData['cenvatCreditAvailed'];
                                                        $cenvat_credit_unavailed_6A_6A_totals +=  $tableData['cenvatCreditUnavailed'];
                                                 @endphp
                                                        <tr>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            <td>{{$tableData['supplierRegNo']}}</td>
                                                            <td>{{$tableData['recipientRegNo']}}</td>
                                                            
                                                              <td>{{$tableData['recipientRegNo']}}</td>
                                                           
                                                               <td>
                                                                   {{$tableData['itcCarriedForward']}}
                                                               
                                                                </td>
                                                            <td>{{$tableData['capitalGoodValue']}}</td>
                                                            <td>{{$tableData['capitalGoodCvd']}}</td>
                                                            <td>{{$tableData['capitalGoodSad']}}</td>
                                                            
                                                           
                                                          
                                                            
                                                            <td>{{$tableData['eligibleCenvat']}}</td>
                                                            <td>{{$tableData['cenvatCreditAvailed']}}</td>
                                                            <td>{{$tableData['cenvatCreditUnavailed']}}</td>
                                                          
                                                        </tr>
                                                        @endforeach
                                                         </tbody>
                                                         <tfoot>
                                                            <tr>
                                                                <th colspan="6">Total</th>
                                                                    <th id="capital_good_value_6A_total">{{$capital_good_value_6A_totals}}</th>
                                                              <th id="capital_good_cvd_6A_total">{{$capital_good_cvd_6A_totals}}</th>
                                                              <th id="capital_good_sad_6A_total">{{$capital_good_sad_6A_totals}}</th>
                                                               <th id="eligible_cenvat_6A_total">{{$eligible_cenvat_6A_totals}}</th>
                                                              <th id="cenvat_credit_availed_6A_total">{{$cenvat_credit_availed_6A_totals}}</th>
                                                              <th id="cenvat_credit_unavailed_6A_total">{{$cenvat_credit_unavailed_6A_6A_totals}}</th>
                                                         
                                                             
                                                            </tr>
                                                        </tfoot>
                                                        </table>
                                                        @endif
                                                 <!--end of 6A table-->
                                                 
                                                 <!--6B table--> 
                                                 @if(count($sixB) >   0)
                                                     <h4>6B</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="6BTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Invoice/Document no.</th>
                                                            <th rowspan="2">Invoice/Document Date</th>
                                                             <th rowspan="2">Capital Goods</th>
                                                              <th rowspan="2">Nature of ITC carried Forward</th>
                                                            <th rowspan="2">Supplier's registration no. under existing law</th>
                                                            <th rowspan="2">Recipients' registration no. under existing law</th>
                                                            <th colspan="2">Details regarding capital goods on which credit is not availed</th>
                                                            <th rowspan="2">Total eligible VAT [and ET] credit under existing law</th>
                                                            <th rowspan="2">Total VAT [and ET] credit availed under existing law</th>
                                                            <th rowspan="2">Total VAT [and ET] credit unavailed under existing law (acmissible as ITC of State/UT tax)(8-9)</th>
                                                             </tr>
                                                        <tr>
                                                            <th>Value</th>
                                                            <th>Taxes paid VAT [and ET]</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table6Btbody">
                                                        
                                                        @php
                                                        $capital_good_value_6B=0;
                                                        $capital_good_vat_6B=0;
                                                        $eligible_vat_6B=0;
                                                        $vatCredit_availed_6B=0;
                                                        $vat_credit_unavailed_6B=0;
                                                        @endphp
                                                    @foreach($sixB   as $key=>$tableData)
                                                    @php
                                                    $capital_good_value_6B    +=  $tableData['capitalGoodValue'];
                                                    $capital_good_vat_6B    +=  $tableData['capitalGoodVat'];
                                                    $eligible_vat_6B    +=  $tableData['eligibleVat'];
                                                    $vatCredit_availed_6B    +=  $tableData['vatCreditAvailed'];
                                                    $vat_credit_unavailed_6B    +=  $tableData['vatCreditUnavailed'];
                                                    @endphp
                                                        <tr>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            
                                                            
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                           
                                                               <td>
                                                               
                                                                </td>
                                                            
                                                            <td>{{$tableData['supplierRegNo']}}</td>
                                                            <td>{{$tableData['recipientRegNo']}}</td>
                                                            <td>{{$tableData['capitalGoodValue']}}</td>
                                                            <td>{{$tableData['capitalGoodVat']}}</td>
                                                            <td>{{$tableData['eligibleVat']}}</td>
                                                            <td>{{$tableData['vatCreditAvailed']}}</td>
                                                            <td>{{$tableData['vatCreditUnavailed']}}</td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                         </tbody>
                                                      <tfoot>
                                                        <tr>
                                                            
                                                            <th colspan="6">Total</th>
                                                           <th id="capital_good_value_6B_total">
                                                               @if(isset($capital_good_value_6B))
                                                               {{$capital_good_value_6B}}
                                                             @endif
                                                           </th>
                                                           <th id="capital_good_vat_6B_total">{{isset($capital_good_vat_6B)?$capital_good_vat_6B:0}}</th>
                                                            <th id="eligible_vat_6B_total">{{isset($eligible_vat_6B)?$eligible_vat_6B:0}}</th>
                                                            <th id="vatCredit_availed_6B_total">{{isset($vatCredit_availed_6B)?$vatCredit_availed_6B:0}}</th>
                                                            <th id="vat_credit_unavailed_6B_total">{{isset($vat_credit_unavailed_6B)?$vat_credit_unavailed_6B:0}}</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                 @endif
                                                 <!---6b table end-->
                                                 
                                                 <!--7A7A table-->
                                                  @if(count($sevenA7A) >   0)
                                                      <h4>7A7A</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7ATable">
                                                    <thead>
                                                        <tr>
                                                             <!-- <th>Type of Goods</th>-->
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                           
                                                            
                                                        </tr>
                                                        <tr>
                                                           
                                                            <th>HSN ( at 6 digit level)</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Eligible Duties paid on such inputs</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">7A Where duty paid invoices or any other document are available</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table7A7Atbody"> 
                                                        
                        @foreach($sevenA7A   as $key=>$tableData)
                                                        <tr>
                                                          <!--    <td>
<select name="type_of_goods_7A">
<option selected disabled>-- Select--</option>
<option>Inputs</option>
<option>Semi-finished</option>
<option>Finished</option>

</select>
</td>-->
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['dutiesPaid']}}</td>
                                          
                                                        </tr>  
                                                        @endforeach
                                                         </tbody>
                                                </table>
                                                 @endif
                                                 <!--end of 7a7a table-->
                                                 
                                                 
                                                 <!---start of 7a7b table--> 
                                                    @if(count($sevenA7B) >   0)
                                                        <h4>7A7B</h4>
                                                 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7BTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>HSN ( at 6 digit level)</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Eligible Duties paid on such inputs</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5">7B Where duty paid invoices or any other document are available</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table7A7Btbody"> 
                                                      
                        @foreach($sevenA7B   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['dutiesPaid']}}</td>
                                                           
                                                        </tr>  
                                                        @endforeach
                                                 </tbody>
                                                </table>
                                                    @endif
                                                 <!--end of 7a7b --->
                                                 
                                                 <!---7b table start--> 
                                                  @if(count($sevenB) >   0)
                                                      <h4>7B</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7BTable">
                                                    <thead>
                                                        <tr>
                                                        <!--     <th rowspan="2"> Nature of Eligible Duty Paid</th>-->
                                                            <th colspan="5">Details of inputs in stock</th>
                                                            <th rowspan="2">Total input tax credit related to exempt sales not claimed under earlier law</th>
                                                            <th rowspan="2">Total input tax credit related to exempt sales not claimed under earlier law</th>
                                                            <th rowspan="2">Total Input tax credit admissible as SGST/UGST</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>VAT [ and Entry Tax ] paid</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table7Btbody">
                                                       
                                                       
                        @foreach($sevenB  as $key=>$tableData)
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
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['vat']}}</td>
                                                            <td>{{$tableData['taxCreditClaimed']}}</td>
                                                            <td>{{$tableData['taxCreditExempt']}}</td>
                                                            <td>{{$tableData['taxCreditAdmissible']}}</td>
                                                           
                                                        </tr>
                                                         @endforeach
                                                         
                                                          </tbody>
                                                </table>
                                                  @endif
                                                 <!--end of 7b table-->  
                                                 
                                                 
                                                 <!--7c table-->
                                                   @if(isset($sevenC) && count($sevenC) >   0) 
                                                       <h4>7C</h4>
                                                  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7CTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="5">Details of inputs in stock</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Qty</th>
                                                            <th>Value</th>
                                                            <th>Tax paid</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table7Ctbody">
                                                                                                             
                                                        @foreach($sevenC   as $key=>$tableData) 
                                                        <tr>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['taxPaid']}}</td>
                                                         
                                                            
                                                        </tr>
                                                        @endforeach
                                                        
                                                        </tbody>
                                                </table>
                                                        @endif
                                                 <!--7c table ends-->
                                                 <!--end of 5b table-->
                                                 
                                                 <!--8 table start---> 
                                                  @if(count($eight) >   0)
                                                 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="8Table">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Registration no. under existing law (Centralized)</th>
                                                            <th rowspan="2">Tax period to which the last return filed under the existing law pertains</th>
                                                            <th rowspan="2">Date of filing of the return specified in Column no. 3</th>
                                                            <th rowspan="2">Balance eligible cenvat credit carried forward in the said last return</th>
                                                            <th rowspan="2">GSTIN of receivers ( same PAN) of ITC CENTRAL TAX</th>
                                                            <th colspan="2" class="text-center">Distribution document / invoice</th>
                                                            <th rowspan="2">ITC of CENTRAL TAX transferred</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table8tbody">
                                                       
                                                                    @foreach($eight   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$tableData['registerNo']}}</td>
                                                            <td>{{$tableData['taxPeriod']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['dateFilling'])); @endphp</td>
                                                            <td>{{$tableData['cenvatCredit']}}</td>
                                                            <td>{{$tableData['itcCentralTax']}}</td>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            <td>{{$tableData['centralTaxTransfered']}}</td>
                                                          
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                </table>
                                                   @endif
                                                   
                                                        <!---8 table end-->
                                                        
                                                        <!--9a table--> 
                                                        @if(count($nineA) >   0)
                                                            <h4>8</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9ATable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Challan No</th>
                                                             <th rowspan="2">Type of goods </th>
                                                            <th rowspan="2">Challan Date</th>
                                                            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
                                                            <th colspan="5" class="text-center">Details of goods with job-worker</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table9Atbody">
                                                         
                                                         @php
                                                          $unit_9A=0;
                                                            $quantity_9A=0;
                                                            $value_9A=0;
                                                            
                                                         @endphp
                                                                    @foreach($nineA  as $key=>$tableData)
                                                                    @php
                                                                     $unit_9A    +=  $tableData['unit'];
                                                                      $quantity_9A    +=  $tableData['quantity'];
                                                                       $value_9A    +=  $tableData['value'];
                                                                    @endphp
                                                        <tr>
                                                            <td>{{$tableData['challanNo']}}</td>
                        <td>{{$tableData['typeOfGoods']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp</td>
                                                            <td>{{$tableData['goodsType']}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            
                                                        </tr> 
                                                        @endforeach
                                                        </tbody>
                                                      <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
                                                           <th id="unit_9A_total">
                                                               @if(isset($unit_9A))
                                                               {{$unit_9A}}
                                                               @endif
                                                           </th>
                                                            <th id="quantity_9A_total">
                                                                  @if(isset($quantity_9A))
                                                               {{$quantity_9A}}
                                                               @endif
                                                                </th>
                                                            <th id="value_9A_total">
                                                                  @if(isset($value_9A))
                                                                {{$value_9A}}
                                                               @endif
                                                               </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                        @endif
                                                        <!--end of 9a table-->
                                                        
                                                        
                                                        <!--9B table--> 
                                                         @if(count($nineB) >   0)
                                                             <h4>9B</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9BTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Challan No</th>
                                                          
                                                            <th rowspan="2">Challan Date</th>
                                                               <th rowspan="2">Type of Goods</th>
                                                            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
                                                            <th colspan="5" class="text-center">Details of goods with job-worker</th>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody id="table9Atbody">
                                                        
                                                           
                                                         @php
                                                          $unit_9B=0;
                                                            $quantity_9B=0;
                                                            $value_9B=0;
                                                            
                                                         @endphp
                                                                    @foreach($nineB   as $key=>$tableData)
                                                                     @php
                                                                     $unit_9B    +=  $tableData['unit'];
                                                                      $quantity_9B    +=  $tableData['quantity'];
                                                                       $value_9B    +=  $tableData['value'];
                                                                    @endphp
                                                        <tr>
                                                            <td>{{$tableData['challanNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp</td>
                             <td>{{$tableData['typeOfGoods']}}</td>
                                                            <td>{{$tableData['goodsType']}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                         
                                                        </tr> 
                                                        @endforeach
                                                        </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
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
                                                        @endif
                                                        <!--end of 9B table--> 
                                                        
                                                        <!---10a table stat---> 
                                                         @if(count($tenA) >   0)
                                                             <h4>10A</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10ATable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">GSTIN of Principal</th>
                                                            <th rowspan="2">Type of Goods</th>
                                                            <th colspan="5" class="text-center">Details of goods with Agent</th>
                                                        
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Input Tax to be taken</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table10Atbody">
                                                       
                                                                    @foreach($tenA   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$tableData['gstnPrincipal']}}</td>
                                                                <td>{{$tableData['typeOfGoods']}}</td>
                                                         <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['inputTaxTaken']}}</td>
                                                           
                                                        </tr>
                                                         @endforeach
                                                           </tbody>
                                                </table>
                                                         @endif
                                                         <!--end of 10a table-->
                                                         
                                                         <!--start of 10B table-->
                                                          @if(count($tenB) >   0)
                                                              <h4>10B</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10BTable">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">GSTIN of Principal</th>
                                                            <th rowspan="2">Type of Goods</th>
                                                            <th colspan="5" class="text-center">Details of goods with Agent</th>
                                                          
                                                        </tr>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Input Tax to be taken</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table10Atbody">
                                                       
                                                                    @foreach($tenB   as $key=>$tableData)
                                                        <tr>
                                                            <td>{{$tableData['gstnPrincipal']}}</td>
                                                            <td>{{$tableData['typeOfGoods']}}</td>
                                                             <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                            <td>{{$tableData['inputTaxTaken']}}</td>
                                                          
                                                        </tr>
                                                         @endforeach
                                                          </tbody>
                                                </table>
                                                         @endif
                                                         <!--end of 10B table--> 
                                                         
                                                         <!--start of 11 table--> 
                                                          @if(count($eleven) >   0)
                                                              <h4>11</h4>
                                                         <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="11Table">
                                                    <thead>
                                                        <tr>
                                                            <th>Registration No of VAT</th>
                                                            <th>Service Tax Registration No.</th>
                                                            <th>Invoice / Document No.</th>
                                                            <th>Invoice / Document Date</th>
                                                            <th>Tax Paid</th>
                                                            <th>VAT paid Taken as SGST Credit or Service Tax paid as Central Tax Credit</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table11tbody">
                                                       
                                                        @php  $tax_paid_11=0; $tax_credit_11=0; @endphp
                                                            @foreach($eleven   as $key=>$tableData)
                                                            @php 
                                                            $tax_paid_11 += $tableData['TaxPaid']; 
                                                            $tax_credit_11 += $tableData['taxCredit'];
                                                            
                                                            @endphp
                                                        <tr>
                                                            <td>{{$tableData['vatRegNo']}}</td>
                                                            <td>{{$tableData['serviceTaxRegNo']}}</td>
                                                            <td>{{$tableData['invoiceNo']}}</td>
                                                            <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                                                            <td>{{$tableData['TaxPaid']}}</td>
                                                            <td>{{$tableData['taxCredit']}}</td>
                                                           
                                                        </tr>
                                                         @endforeach
                                                         
                                                          </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th colspan="4">Total</th>
                                                          <th id="tax_paid_11_total">
                                                              @if(isset($tax_paid_11))
                                                              {{$tax_paid_11}}
                                                              @endif
                                                          </th>
                                                          <th id="tax_credit_11_total">
                                                              @if(isset($tax_credit_11))
                                                              {{$tax_credit_11}}
                                                              @endif 
                                                          </th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                         @endif
                                                         
                                                         <!--end of 11 table--> 
                                                         
                                                         <!--12 table--> 
                                                           @if(count($twelve) ==  0)
                                                               <h4>12</h4>
                                                          <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="12Table">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Document no</th>
                                                            <th rowspan="2">Document date</th>
                                                            <th rowspan="2">GSTIN no. of recipient, (if applicable)</th>
                                                            <th rowspan="2">Name & address of recipient</th>
                                                            <th colspan="5" class="text-center">Details of goods sent on approval basis</th>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table12tbody">
                                              
                                                @php
                                                $unit_12=0;
                                                $quantity_12=0;
                                                $value_12=0;
                                                @endphp
                                                    @foreach($twelve   as $key=>$tableData)
                                                     @php
                                                $unit_12 +=$tableData['unit'];
                                                $quantity_12 +=$tableData['quantity'];
                                                $value_12 +=$tableData['value'];
                                                @endphp
                                                        <tr>
                                                            <td>{{$tableData['documentNo']}}</td>
                                                            <td>@php echo date('d-m-Y', strtotime($tableData['documentDate'])); @endphp</td>
                                                            <td>{{$tableData['gstnNumber']}}</td>
                                                            <td>{{$tableData['RecipientName']}}</td>
                                                            <td>{{$tableData['hsn']}}</td>
                                                            <td>{{$tableData['description']}}</td>
                                                            <td>{{$tableData['unit']}}</td>
                                                            <td>{{$tableData['quantity']}}</td>
                                                            <td>{{$tableData['value']}}</td>
                                                           
                                                        
                                                        </tr>
                                                        @endforeach
                                                          </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th colspan="6">Total</th>
                                                          <th id="unit_12_total">
                                                              @if(isset($unit_12))
                                                              {{$unit_12}}
                                                              @endif
                                                          </th>
                                                          <th id="quantity_12_total">
                                                                 @if(isset($quantity_12))
                                                                {{$quantity_12}}
                                                              @endif
                                                            </th>
                                                            <th id="value_12_total">
                                                                   @if(isset($value_12))
                                                              {{$value_12}}
                                                              @endif
                                                              </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                           @endif
                                                         <!--end of 12 table--> 