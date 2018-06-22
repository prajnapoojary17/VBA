 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="12Table">
                                                    <thead>
                                                         <tr>
                                                            <th colspan="9" >Details of goods sent on approval basis six months prior to the appointed day (section 142(12))</th>
                                                            <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow12">Add row</button></th>
                                                       
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">Document no</th>
                                                            <th rowspan="2">Document date</th>
                                                            <th rowspan="2">GSTIN no. of recipient, (if applicable)</th>
                                                            <th rowspan="2">Name & address of recipient</th>
                                                            <th colspan="5" class="text-center">Details of goods sent on approval basis</th>
                                                             
                                                        </tr>
                                                        <tr>
                                                            <th>HSN</th>
                                                            <th>Description Of Goods</th>
                                                            <th>Rate</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody id="table12tbody">
                                                @if(isset($twelve)&&count($twelve) >   0)
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
                                                            <td><input type="text" class="form-control" name="document_no_12" value="{{$tableData['documentNo']}}"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="document_date_12" value="@php echo date('d/m/Y', strtotime($tableData['documentDate'])); @endphp"/></td>
                                                            <td><input type="text" class="form-control" name="gstn_number_12" value="{{$tableData['gstnNumber']}}"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_name_12" value="{{$tableData['RecipientName']}}"/></td>
                                                            <td><input type="text" class="form-control hsnCode12" name="hsn_12" value="{{$tableData['hsn']}}"/></td>
                                                            <td><input type="text" class="form-control" name="description_12" value="{{$tableData['description']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="unit_12" value="{{$tableData['unit']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="quantity_12" value="{{$tableData['quantity']}}"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="value_12" value="{{$tableData['value']}}"/></td>
                                                           
                                                            <td>
                                    @if($key    >   0)
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow12" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                    @endif
                                </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="document_no_12"/></td>
                                                            <td><input type="text" class="datepicker form-control" name="document_date_12"/></td>
                                                            <td><input type="text" class="form-control" name="gstn_number_12"/></td>
                                                            <td><input type="text" class="form-control" name="recipient_name_12"/></td>
                                                            <td><input type="text" class="form-control hsnCode12" name="hsn_12"/></td>
                                                            <td><input type="text" class="form-control" name="description_12" value=""/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="unit_12"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="quantity_12"/></td>
                                                            <td><input type="number" class="form-control calculateTotal" data-formname="12" name="value_12"/></td>
                                                        </tr>
                                                        @endif
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