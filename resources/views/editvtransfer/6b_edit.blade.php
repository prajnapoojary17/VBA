  <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="6BTable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="15">Amount of unavailed input tax credit carried forward to electronic credit ledger as State/UT tax</th>
                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="2">Invoice/Document no.</th>
                                                                    <th rowspan="2">Invoice/Document Date</th>
                                                                     <th rowspan="2" style="display:none">Name of Capital Goods</th>
                                                                      <th rowspan="2" style="display:none">Nature of ITC carried Forward</th>
                                                                    <th rowspan="2">Supplier's registration no. under existing law</th>
                                                                    <th rowspan="2">Recipients' registration no. under existing law</th>
                                                                    <th colspan="2">Details regarding capital goods on which credit is not availed</th>
                                                                    <th rowspan="2">Total eligible VAT [and ET] credit under existing law</th>
                                                                    <th rowspan="2">Total VAT [and ET] credit availed under existing law</th>
                                                                    <th rowspan="2">Total VAT [and ET] credit unavailed under existing law (acmissible as ITC of State/UT tax)(8-9)</th>
                                                                    <th rowspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow6B">Add row</button></th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <th>Taxes paid VAT [and ET]</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="table6Btbody">
                                                                @if(isset($sixB)&&count($sixB) >   0)
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
                                                                    <td><input type="text" class="form-control" name="invoice_no_6B" value="{{$tableData['invoiceNo']}}" id="invoice_no_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="invoice_date_6B" value=" @php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp" id="invoice_date_6B_{{rand(10,1000)}}"/></td>


                                                                    <td style="display:none"><input type="text" class="form-control" name="capital_goods_6B" value="{{$tableData['invoiceNo']}}" id="capital_goods_6B_{{rand(10,1000)}}"/></td>

                                                                    <td style="display:none">
                                                                      
                                                                           
                                                                               @php $sixBOption=['-- Select--','VAT','Entry Tax']; @endphp
                                                                        <select name="itc_carried_forward_6B" id="itc_carried_forward_6B_{{rand(10,1000)}}" class="itc_carried_forward_6B">
                                                                      @foreach($sixBOption as $value)
                                                                        <option <?php if($tableData['itcCarriedForward']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
                                                                        </td>

                                                                    <td><input type="text" class="form-control " name="supplier_reg_no_6B" value="{{$tableData['supplierRegNo']}}" id="supplier_reg_no_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control " name="recipient_reg_no_6B" value="{{$tableData['recipientRegNo']}}" id="recipient_reg_no_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_value_6B" value="{{$tableData['capitalGoodValue']}}" id="capital_good_value_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_vat_6B" value="{{$tableData['capitalGoodVat']}}" id="capital_good_vat_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="eligible_vat_6B" value="{{$tableData['eligibleVat']}}" id="eligible_vat_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vatCredit_availed_6B" value="{{$tableData['vatCreditAvailed']}}" id="vatCredit_availed_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vat_credit_unavailed_6B" value="{{$tableData['vatCreditUnavailed']}}" id="vat_credit_unavailed_6B_{{rand(10,1000)}}"/></td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr>
                                                                @endforeach
                                                            @else
                                                            <tr>
                                                                    <td><input type="text" class="form-control" name="invoice_no_6B" id="invoice_no_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="invoice_date_6B" id="invoice_date_6B_{{rand(10,1000)}}"/></td>
                                                                    <td style="display:none"><input type="text" class="form-control" name="capital_goods_6B" value="" id="capital_goods_6B_{{rand(10,1000)}}"/></td>

                                                                       <td style="display:none">
                                                                        <select name="itc_carried_forward_6B" class="itc_carried_forward_6B" id="itc_carried_forward_6B_{{rand(10,1000)}}">
                                                                        <option selected disabled>-- Select--</option>

                                                                        <option>VAT</option>
                                                                        <option>Entry Tax</option>

                                                                         </select>
                                                                        </td>
                                                                    <td><input type="text" class="form-control" name="supplier_reg_no_6B" id="supplier_reg_no_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="recipient_reg_no_6B" id="recipient_reg_no_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_value_6B" id="capital_good_value_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="capital_good_vat_6B" id="capital_good_vat_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="eligible_vat_6B" id="eligible_vat_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vatCredit_availed_6B" id="vatCredit_availed_6B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="6B" name="vat_credit_unavailed_6B" id="vat_credit_unavailed_6B_{{rand(10,1000)}}"/></td>
                                                                </tr>
                                                            @endif
                                                            </tbody>
                                                              <tfoot>
                                                                <tr>

                                                                    <th colspan="4">Total</th>
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