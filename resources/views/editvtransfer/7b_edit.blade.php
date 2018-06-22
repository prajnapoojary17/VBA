   <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7BTable">
                                                            <thead>
                                                                   <tr>
                                                                    <th colspan="8">Amount of vat and entry Tax paid on inputs supported by invoices/documents evidencing payment of tax carried forward to
        electronic credit ledger as SGST/UTGST</th>

                                                                      <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7B">Add row</button></th>
                                                                </tr>
                                                                <tr>
                                                                   <!--     <th rowspan="2"> Nature of Eligible Duty Paid</th>-->
                                                                       <th rowspan="2" style="display:none">Type</th>
                                                                    <th colspan="5">Details of inputs in stock</th>
                                                                    <th rowspan="2">Total input tax credit claimed under earlier law</th>
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
                                                                @if(isset($sevenB)&&count($sevenB) >   0)

                                @foreach($sevenB   as $key=>$tableData)
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
                                                                   <td style="display:none">
                                
                                  
                                    @php $sevenA7BOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods']; @endphp
                                                                        <select name="type_7b" style="dispaly:none" id="type_7b_{{rand(10,1000)}}" class="type_7b">
                                                                      @foreach($sevenA7BOption as $value)
                                                                        <option <?php if($tableData['type']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
                           
                             </td>
                                                                    <td><input type="text" class="form-control" name="description_7B" value="{{$tableData['description']}}" id="description_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="unit_7B" value="{{$tableData['unit']}}" id="unit_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="quantity_7B" value="{{$tableData['quantity']}}" id="quantity_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="value_7B" value="{{$tableData['value']}}" id="value_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="vat_7B" value="{{$tableData['vat']}}" id="vat_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="tax_credit_claimed_7B" value="{{$tableData['taxCreditClaimed']}}" id="tax_credit_claimed_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="tax_credit_exempt_7B" value="{{$tableData['taxCreditExempt']}}" id="tax_credit_exempt_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="tax_credit_admissible_7B" value="{{$tableData['taxCreditAdmissible']}}" id="tax_credit_admissible_7B_{{rand(10,1000)}}"/></td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr>
                                                                 @endforeach
                                                                    @else
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
        </td>-->   <td style="display:none">
                                      <select name="type_7b" id="type_7b_{{rand(10,1000)}}" class="type_7b">
                                        <option selected disabled value="select">-- Select--</option>
                                      <option value="Inputs">Inputs</option>
                                          <option value="Semi-finished">Semi-finished</option>
                                            <option value="Finished">Finished</option>
                                         
                                    </select>
                               
                                 
                             </td>
                                                                    <td><input type="text" class="form-control" name="description_7B" id="description_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="unit_7B" id="unit_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="quantity_7B" id="quantity_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="value_7B" id="value_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="vat_7B" id="vat_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="tax_credit_claimed_7B" id="tax_credit_claimed_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="tax_credit_exempt_7B" id="tax_credit_exempt_7B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="tax_credit_admissible_7B" id="tax_credit_admissible_7B_{{rand(10,1000)}}"/></td>
                                                                    </tr>

                                                                    @endif
                                                            </tbody>
                                                        </table>