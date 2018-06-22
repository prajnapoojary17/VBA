 <table class="table table-bordered table-striped table-hover dataTable" id="6ATable">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="15">
                                                          Amount of unavailed cenvat credit in respect of capital goods carried forward to electronic credit ledger as central tax
                                                            </th>
                                                        </tr>
                            
                                                            <tr>
                                                                <th rowspan="3" style="display: none">Name of Capital Goods</th>
                                                            <th rowspan="3">Invoice/Document No.</th>
                                                            <th rowspan="3">Invoice/Document Date</th>
                                                            <th rowspan="3">Supplier Registration no. under existing law</th>
                                                            <th rowspan="3">Reciepients' Registration no. under existing law</th>
                                                           
                                                                <th rowspan="3" style="display: none">Nature of ITC carried forward</th>
                                                            <th colspan="3">Details of capital goods on which credit has been partially availed</th>
                                                            
                                                            <th rowspan="3">Total eligible cenvat credit under existing law</th>
                                                            <th rowspan="3">Total credit availed under existing law</th>
                                                            <th rowspan="3">Total credit unavailed under existing law</th>
                                                            <th rowspan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow6A">Add row</button></th>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">Value</td>
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
                                                            @if(isset($sixA)&&count($sixA) >   0)
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
                                                              <td style="display: none"><input type="text" class="form-control" name="capital_goods_6A" value="{{$tableData['capitalGood']}}" id="capital_goods_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="form-control" name="invoice_no_6A" value="{{$tableData['invoiceNo']}}" id="invoice_no_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_6A" value=" @php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp" id="invoice_date_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="form-control" name="supplier_reg_no_6A" value="{{$tableData['supplierRegNo']}}" id="supplier_reg_no_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_regno_6A" value="{{$tableData['recipientRegNo']}}" id="recipient_regno_6A_{{rand(10,1000)}}"/></td>
                                                            
                                                            
                                                           
                                                               <td style="display: none">
                                                                  @php $sixAOption=['-- Select--','central_excise'=>'Central Excise','cvd'=>'CVD','sad'=>'SAD*']; @endphp
                                                                <select name="itc_carried_forward_6A" class="itc_carried_forward_6A" id="itc_carried_forward_6A" id="itc_carried_forward_6A_{{rand(10,1000)}}">
                                                              @foreach($sixAOption as $sixKey=>$value)
                                                                <option value="{{$sixKey}}" <?php if($tableData['itcCarriedForward']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                  @endforeach      
                                                                 </select>
                                                                </td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A"  name="capital_good_value_6A" value="{{$tableData['capitalGoodValue']}}" id="capital_good_value_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_cvd_6A" value="{{$tableData['capitalGoodCvd']}}" id="capital_good_cvd_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_sad_6A" value="{{$tableData['capitalGoodSad']}}" id="capital_good_sad_6A_{{rand(10,1000)}}"/></td>
                                                            
                                                           
                                                          
                                                            
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="eligible_cenvat_6A" value="{{$tableData['eligibleCenvat']}}" id="eligible_cenvat_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_availed_6A" value="{{$tableData['cenvatCreditAvailed']}}" id="cenvat_credit_availed_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_unavailed_6A" value="{{$tableData['cenvatCreditUnavailed']}}" id="cenvat_credit_unavailed_6A_{{rand(10,1000)}}"/></td>
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                             <td style="display: none"><input type="text" class="form-control" name="capital_goods_6A" value="" id="capital_goods_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="form-control" name="invoice_no_6A" id="invoice_no_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_6A" id="invoice_date_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="form-control" name="supplier_reg_no_6A" id="supplier_reg_no_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_regno_6A" id="recipient_regno_6A_{{rand(10,1000)}}"/></td>
                                                             
                                                           
                                                               <td style="display: none">
                                                                <select name="itc_carried_forward_6A" class="itc_carried_forward_6A" id="itc_carried_forward_6A" id="itc_carried_forward_6A_{{rand(10,1000)}}">
                                                                <option selected disabled>-- Select--</option>
                                                                <option value="central_excise">Central Excise</option>
                                                                <option value="cvd">CVD</option>
                                                                <option value="sad">SAD*</option>

                                                                 </select>
                                                                </td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_value_6A" id="capital_good_value_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_cvd_6A" id="capital_good_cvd_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="capital_good_sad_6A" id="capital_good_sad_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="eligible_cenvat_6A" id="eligible_cenvat_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_availed_6A" id="cenvat_credit_availed_6A_{{rand(10,1000)}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="6A" name="cenvat_credit_unavailed_6A" id="cenvat_credit_unavailed_6A_{{rand(10,1000)}}"/></td>
                                                        </tr>
                                                        @endif
                                                        </tbody>
                                                         <tfoot>
                                                            <tr>
                                                                <th colspan="4">Total</th>
                                                                    <th id="capital_good_value_6A_total">{{$capital_good_value_6A_totals}}</th>
                                                              <th id="capital_good_cvd_6A_total">{{$capital_good_cvd_6A_totals}}</th>
                                                              <th id="capital_good_sad_6A_total">{{$capital_good_sad_6A_totals}}</th>
                                                               <th id="eligible_cenvat_6A_total">{{$eligible_cenvat_6A_totals}}</th>
                                                              <th id="cenvat_credit_availed_6A_total">{{$cenvat_credit_availed_6A_totals}}</th>
                                                              <th id="cenvat_credit_unavailed_6A_total">{{$cenvat_credit_unavailed_6A_6A_totals}}</th>
                                                         
                                                             
                                                            </tr>
                                                        </tfoot>
                                                        </table>