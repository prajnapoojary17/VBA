  <form id="eightForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="8Table">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="8">Details of transfer of cenvat credit for registered person having centralized registration under existing law(Section 140(8))</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow8">Add row</button></th>
                                                                </tr>
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
                                                                @if(isset($eight)&&count($eight) >   0)
                                                                            @foreach($eight   as $key=>$tableData)
                                                                <tr>
                                                                    <td><input type="text" class="form-control" name="register_no_8" value="{{$tableData['registerNo']}}" id="register_no_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="tax_period_8" value="{{$tableData['taxPeriod']}}" id="tax_period_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="date_filling_8" value="@php echo date('d/m/Y', strtotime($tableData['dateFilling'])); @endphp" id="date_filling_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="cenvat_credit_8" value="{{$tableData['cenvatCredit']}}" id="cenvat_credit_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="itc_central_tax_8" value="{{$tableData['itcCentralTax']}}" id="itc_central_tax_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="invoice_no_8" value="{{$tableData['invoiceNo']}}" id="invoice_no_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="invoice_date_8" value="@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp" id="invoice_date_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" min="0"  class="form-control" name="central_tax_transfered_8" value="{{$tableData['centralTaxTransfered']}}" id="central_tax_transfered_8_{{rand(10,1000)}}"/></td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow8" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td><input type="text" class="form-control" name="register_no_8" id="register_no_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="tax_period_8" id="tax_period_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="date_filling_8" id="date_filling_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="cenvat_credit_8" id="cenvat_credit_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="itc_central_tax_8" id="itc_central_tax_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="invoice_no_8" id="invoice_no_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="invoice_date_8" id="invoice_date_8_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" min="0" class="form-control" name="central_tax_transfered_8" id="central_tax_transfered_8_{{rand(10,1000)}}"/></td>
                                                                </tr>   

                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </form>