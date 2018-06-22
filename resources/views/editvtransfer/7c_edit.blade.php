   <form id="sevenCForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7CTable">
                                                        <thead>
                                                             <tr>
                                                                   <th colspan="5">Stock of goods not supported by invoices/documents evidencing payment of tax (credit in terms of rule 1 (4)) (To be there only in States
    having VAT at single point)</th>
                                                                 <th rowspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7C">Add row</button></th>
                                                            </tr>
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
                                                            @if(isset($sevenC)&&count($sevenC) >   0)                                                        
                                                            @foreach($sevenC   as $key=>$tableData) 
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="description_7C" value="{{$tableData['description']}}" id="description_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="unit_7C" value="{{$tableData['unit']}}" id="unit_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="quantity_7C" value="{{$tableData['quantity']}}" id="quantity_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="value_7C" value="{{$tableData['value']}}" id="value_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="taxPaid_7C" value="{{$tableData['taxPaid']}}" id="taxPaid_7C_{{rand(10,1000)}}"/></td>
                                                                <td>
                                        @if($key    >   0)
                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                        @endif
                                    </td>

                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="description_7C" id="description_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="unit_7C" id="unit_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="quantity_7C" id="quantity_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="value_7C" id="value_7C_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="taxPaid_7C" id="taxPaid_7C_{{rand(10,1000)}}"/></td>
                                                            </tr>
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                    </form>