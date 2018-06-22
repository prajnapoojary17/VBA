

<table class="table table-bordered table-striped table-hover dataTable" id="5CGTable">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="15">Amount of tax credit carried forward to electronic credit ledger as State/UT Tax(For all registrations on the same PAN and in the
same State)</th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="4" class="text-center">Registration No. in existing law</th>
                                                             <th rowspan="4" class="text-center">Balance of ITC of VAT and [Entry Tax] in last return</th>
                                                            <th colspan="2" class="text-center">C Forms</th>
                                                             <th colspan="2" class="text-center">F Forms</th>
                                                             <th rowspan="4" class="text-center">ITC reversal relatable to [(3)and] (5)</th>
                                                              <th colspan="2" class="text-center">H/I Forms</th>
                                                               <th rowspan="4" class="text-center">Transition ITC 2</th>
                                                        </tr>
                                                     
                                                        <tr>
                                                          
                                                            <th rowspan="2">Turnover for which forms Pending</th>
                                                            <th rowspan="2">Difference tax payable on(3)</th>
                                                            <th rowspan="2">Turnover for which forms Pending</th>
                                                            <th rowspan="2">Tax payable on (5)</th>
                                                           <th rowspan="2">Turnover for which forms Pending</th>
                                                             <th rowspan="2">Tax payable on (7)</th>
                                                        </tr>
                                                          
                                                    </thead>
                                                    <tbody id="table5CGtbody">
                                                       
                                                         <tr>
                                                        
                                                            <td>
                                                                
                                                         {{isset($fiveCCustom['fiveCView']['vat']['vatTinNumber'])?$fiveCCustom['fiveCView']['vat']['vatTinNumber']:''}}
                                                            </td>
                                                            <td>
                                                           {{isset($fiveCCustom['fiveCView']['vat']['vatCarryForward'])?$fiveCCustom['fiveCView']['vat']['vatCarryForward']:''}}      
                                                            </td>
                                                            <td>
                                                                {{isset($fiveCCustom['fiveCView']['vat']['cTurnoverPendingVat'])?$fiveCCustom['fiveCView']['vat']['cTurnoverPendingVat']:''}}    
                                                            </td>
                                                            <td>
                                                                    {{isset($fiveCCustom['fiveCView']['vat']['cDiffTaxPayable'])?$fiveCCustom['fiveCView']['vat']['cDiffTaxPayable']:''}}    
                                                            </td>
                                                          
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['vat']['fTurnoverPendingVat'])?$fiveCCustom['fiveCView']['vat']['fTurnoverPendingVat']:''}}    
                                                            </td>
                                                           <td>
                                                                    {{isset($fiveCCustom['fiveCView']['vat']['fDiffTaxPayable'])?$fiveCCustom['fiveCView']['vat']['fDiffTaxPayable']:''}}    
                                                            </td>
                                                            <td>
                                                                
                                                                {{isset($fiveCCustom['fiveCView']['vat']['itcReversal'])?$fiveCCustom['fiveCView']['vat']['itcReversal']:''}} 
                                                            </td>
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['vat']['hTurnoverPendingVat'])?$fiveCCustom['fiveCView']['vat']['hTurnoverPendingVat']:''}}    
                                                            </td>
                                                          
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['vat']['hDiffTaxPayable'])?$fiveCCustom['fiveCView']['vat']['hDiffTaxPayable']:''}}    
                                                            </td>
                                                              <td>
                                                                    {{isset($fiveCCustom['fiveCView']['vat']['transition'])?$fiveCCustom['fiveCView']['vat']['transition']:''}}    
                                                            </td>
                                                          
                                                        </tr>
                                                         
                                                          <tr>
                                                        
                                                            <td>
                                                         {{isset($fiveCCustom['fiveCView']['entry_tax']['vatTinNumber'])?$fiveCCustom['fiveCView']['entry_tax']['vatTinNumber']:''}}
                                                            </td>
                                                            <td>
                                                           {{isset($fiveCCustom['fiveCView']['entry_tax']['vatCarryForward'])?$fiveCCustom['fiveCView']['entry_tax']['vatCarryForward']:''}}      
                                                            </td>
                                                            <td>
                                                                {{isset($fiveCCustom['fiveCView']['entry_tax']['cTurnoverPendingVat'])?$fiveCCustom['fiveCView']['entry_tax']['cTurnoverPendingVat']:''}}    
                                                            </td>
                                                            <td>
                                                                    {{isset($fiveCCustom['fiveCView']['entry_tax']['cDiffTaxPayable'])?$fiveCCustom['fiveCView']['entry_tax']['cDiffTaxPayable']:''}}    
                                                            </td>
                                                          
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['entry_tax']['fTurnoverPendingVat'])?$fiveCCustom['fiveCView']['entry_tax']['fTurnoverPendingVat']:''}}    
                                                            </td>
                                                           <td>
                                                                    {{isset($fiveCCustom['fiveCView']['entry_tax']['fDiffTaxPayable'])?$fiveCCustom['fiveCView']['entry_tax']['fDiffTaxPayable']:''}}    
                                                            </td>
                                                            <td>
                                                                
                                                                {{isset($fiveCCustom['fiveCView']['entry_tax']['itcReversal'])?$fiveCCustom['fiveCView']['entry_tax']['itcReversal']:''}} 
                                                            </td>
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['entry_tax']['hTurnoverPendingVat'])?$fiveCCustom['fiveCView']['entry_tax']['hTurnoverPendingVat']:''}}    
                                                            </td>
                                                          
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['entry_tax']['hDiffTaxPayable'])?$fiveCCustom['fiveCView']['entry_tax']['hDiffTaxPayable']:''}}    
                                                            </td>
                                                             <td>
                                                                    {{isset($fiveCCustom['fiveCView']['entry_tax']['transition'])?$fiveCCustom['fiveCView']['entry_tax']['transition']:''}}    
                                                            </td>
                                                          
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                  
