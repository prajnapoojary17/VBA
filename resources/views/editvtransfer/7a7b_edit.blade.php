 <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7BTable">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock where duty paid invoices are not available (Applicable only for person other than manufacurer or service provider)</th>
                                                                <th roespan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7A7B">Add row</button></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="display:none">Type</th>
                                                                <th>HSN ( at 6 digit level)</th>
                                                                <th>Unit</th>
                                                                <th>Qty</th>
                                                                <th>Value</th>
                                                                <th>Eligible Duties paid on such inputs</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody id="table7A7Btbody"> 
                                                         
                                                             @if(isset($sevenA7B)&&count($sevenA7B) >   0)
                            @foreach($sevenA7B   as $key=>$tableData)
                                                            <tr>
                                                                 <td style="display:none">
                                
                                  
                                    @php $sevenA7BOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods']; @endphp
                                                                        <select name="nature_of_itc_7a7b" id="nature_of_itc_7a7b_{{rand(10,1000)}}" class="nature_of_itc_7a7b">
                                                                      @foreach($sevenA7BOption as $value)
                                                                        <option <?php if($tableData['type']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
                           
                             </td>
                                                                <td><input type="text" class="form-control" name="hsn_7A7B" value="{{$tableData['hsn']}}" id="hsn_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="unit_7A7B" value="{{$tableData['unit']}}" id="unit_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="quantity_7A7B" value="{{$tableData['quantity']}}" id="quantity_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="value_7A7B" value="{{$tableData['value']}}" id="value_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="duties_paid_7A7B" value="{{$tableData['dutiesPaid']}}" id="duties_paid_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td>
                                        @if($key    >   0)
                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                        @endif
                                    </td>
                                                            </tr>  
                                                            @endforeach
                        @else
                         <tr>
                             <td style="display:none">
                                      <select name="nature_of_itc_7a7b" id="nature_of_itc_7a7b_{{rand(10,1000)}}" class="nature_of_itc_7a7b">
                                        <option selected disabled value="select">-- Select--</option>
                                      <option value="Inputs">Inputs</option>
                                          <option value="Semi-finished">Semi-finished</option>
                                            <option value="Finished">Finished</option>
                                         
                                    </select>
                               
                                 
                             </td>
                                                                <td><input type="text" class="form-control" name="hsn_7A7B" id="hsn_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="unit_7A7B" id="unit_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="quantity_7A7B" id="quantity_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="value_7A7B" id="value_7A7B_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="duties_paid_7A7B" id="duties_paid_7A7B_{{rand(10,1000)}}"/></td>
                                                            </tr> 

                         @endif
                                                        </tbody>
                                                        </table>