  <form id="fiveAForm">         
                                                    <table class="table table-bordered table-striped table-hover dataTable" id="5ATable">
                                                        <thead>
                                                            <tr>
                                                            <th colspan="10">Amount of Cenvat credit carried forward to electronic credit ledger as central tax</th>
                                                        </tr>
                                                            <tr>
                                                                <th style="display:none">Nature of ITC carried forward in last return filed. 
                                                               
                                                                </th>
                                                                <th>Registration No. under existing law 
                                                               
                                                                </th>
                                                                
                                                                <th>Tax period to which the last return filed under the existing law pertains
                                                              
                                                                </th>
                                                                <th>Date of filing of such return
                                                                
                                                                </th>
                                                                <th>Amount of ITC carried forward  in last return filed under existing laws
                                                               
                                                                </th>
                                                                <th>ITC admissible under GST
                                                              
                                                                </th>
                                                                <th><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow5A">Add row</button></th>
                                                            </tr>
                                                        </thead>                                                        
                                                        <tbody id="table5Atbody">
                                                             
                                                            @php
                                                                    $balance_cenvat_credit_5A_totals    =   0;
                                                                    $cenvat_credit_admissible_5A_totals =   0;
                                                                    $tax_periof_total=0;
                                                                @endphp
                                                                @if(isset($fiveA)&&count($fiveA) >   0)
                                                       
                                                            
                                                                    @foreach($fiveA   as $key=>$tableData)
                                                                        @php
                                                                            $balance_cenvat_credit_5A_totals    +=  $tableData['balanceCenvatCredit'];
                                                                            $cenvat_credit_admissible_5A_totals +=  $tableData['balanceCenvatAdmissible'];
                                                                            
                                                                        @endphp
                                                                        <tr>
                                                                             <td style="display:none">
                                                                                 @php
                                                                                 $data=['Service Tax','Krishi Kalyan Cess  (not available to manufacturers)','Central Excise','CVD under Customs Act','SAD under Customs Act (not available to service providers)','NCCD on inputs'];
                                                                                 @endphp
                                                                    <select name="nature_of_itc_5A" style="width:100%" id="nature_of_itc_5A_{{rand(10,1000)}}">
                                                                     <option selected disabled value="select">-- Select--</option>
                                                                    @foreach($data as $natureKey=>$value)
                                                                    
                                                                    <option <?php if($tableData['natureOfItc']===$value){ echo 'selected'; } else{ } ?> >{{$value}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                                </td>
                                                                            <td><input type="text" class="form-control" name="registration_number_5A" value="{{$tableData['registrationNo']}}" id="registration_number_5A_{{rand(10,1000)}}"/></td>
                                                                            <td><input type="text" class="form-control tax_period" name="tax_period_5A"   value="{{$tableData['taxPeriod']}}"/></td>                                                                        
                                                                            <td><input type="text" class="datepicker form-control" name="date_of_filling_5A" value="@php echo date('d/m/Y', strtotime($tableData['dateFiling'])); @endphp" id="date_of_filling_5A_{{rand(10,1000)}}"/></td>                                                                        
                                                                            <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" value="{{$tableData['balanceCenvatCredit']}}" id="balance_cenvat_credit_5A_{{rand(10,1000)}}"/></td>                                                                        
                                                                            <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" value="{{$tableData['balanceCenvatAdmissible']}}" id="cenvat_credit_admissible_5A_{{rand(10,1000)}}"/></td>
                                                                            <td>
                                                                                @if($key    >   0)
                                                                                    <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <tr>
                                                                        <td style="display:none">
                                                                    <select name="nature_of_itc_5A" id="nature_of_itc_5A_{{rand(10,1000)}}">
                                                                    <option selected disabled value="select">-- Select--</option>
                                                                    <option value="service_tax">Service Tax</option>
                                                                    <option value="2">Krishi Kalyan Cess  (not available to manufacturers)</option>
                                                                    <option value="excise_reg">Central Excise</option>
                                                                    <option value="4"> CVD under Customs Act</option>
                                                                      <option value="5">SAD under Customs Act (not available to service providers)</option>
                                                                        <option value="6">NCCD on inputs</option>
                                                                </select>
                                                                </td>
                                                                <td><input type="text" class="form-control" name="registration_number_5A" id="registration_number_5A_{{rand(10,1000)}}"/></td>
                                                                        <td><input type="text" class="form-control tax_period" name="tax_period_5A"/></td>                                                                        
                                                                        <td><input type="text" class="datepicker form-control" name="date_of_filling_5A" id="date_of_filling_5A_{{rand(10,1000)}}"/></td>                                                                        
                                                                        <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" id="balance_cenvat_credit_5A_{{rand(10,1000)}}"/></td>                                                                        
                                                                        <td><input type="number" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" id="cenvat_credit_admissible_5A_{{rand(10,1000)}}"/></td>
                                                                        <td></td>
                                                                    </tr>
                                                                @endif
                                                                
                                                       
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="3">Total</th>
                                                                <th id="balance_cenvat_credit_5A_total">{{$balance_cenvat_credit_5A_totals}}</th>
                                                                <th id="cenvat_credit_admissible_5A_total">{{$cenvat_credit_admissible_5A_totals}}</th>
                                                              
                                                                <th></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                         </form>