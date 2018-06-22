   <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="11Table">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="6" >Details of credit availed in terms of section 142(11(c )))</th>
                                                            <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow11">Add row</button></th>
                                                       
                                                        </tr>
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
                                                        @if(isset($eleven)&&count($eleven) >   0)
                                                        @php  $tax_paid_11=0; $tax_credit_11=0; @endphp
                                                            @foreach($eleven   as $key=>$tableData)
                                                            @php 
                                                            $tax_paid_11 += $tableData['TaxPaid']; 
                                                            $tax_credit_11 += $tableData['taxCredit'];
                                                            
                                                            @endphp
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="vat_reg_no_11" value="{{$tableData['vatRegNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="service_tax_regno_11" value="{{$tableData['serviceTaxRegNo']}}"/></td>
                                                            <td><input type="text" class="form-control" name="invoice_no_11" value="{{$tableData['invoiceNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="invoice_date_11" value="@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_paid_11" value="{{$tableData['TaxPaid']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_credit_11" value="{{$tableData['taxCredit']}}"/></td>
                                                            <td style="display:none"><input type="number" class="form-control" name="vat_tax_paid_11" value="{{isset($tableData['vatTaxPaid'])?$tableData['vatTaxPaid']:''}}"/></td>
                                                             <td style="display:none"><input type="number" class="form-control" name="service_tax_paid_11" value="{{isset($tableData['serviceTaxPaid'])?$tableData['serviceTaxPaid']:''}}"/></td>
                                                            <td>@if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                        @endif</td>
                                                        </tr>
                                                         @endforeach
                                                            @else
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="vat_reg_no_11"/></td>
                                                                <td><input type="text" class="form-control" name="service_tax_regno_11"/></td>
                                                                <td><input type="text" class="form-control" name="invoice_no_11"/></td>
                                                                <td><input type="text" class="datepicker form-control" name="invoice_date_11"/></td>
                                                                <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_paid_11"/></td>
                                                                <td><input type="number" class="form-control calculateTotal" data-formname="11" name="tax_credit_11"/></td>
                                                                 <td style="display:none"><input type="number" class="form-control" name="vat_tax_paid_11" value=""/></td>
                                                             <td style="display:none"><input type="number" class="form-control" name="service_tax_paid_11" value=""/></td>
                                                            
                                                                <td>
                                 
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                  
                                </td>
                                                            </tr>
                                                            @endif
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