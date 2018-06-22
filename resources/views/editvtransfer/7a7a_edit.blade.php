<table class="table table-bordered table-striped table-hover dataTable m-t-15" id="7A7ATable">
                                                        <thead>
                                                             <tr>
                                                                 <!-- <th>Type of Goods</th>-->
                                                                <th colspan="5">
                                                                    Details of inputs held in stock or inputs contained in semi-finished goods held in stock where duty paid invoices or any other document are available</th>


                                                            </tr>
                                                            <tr>
                                                                 <!-- <th>Type of Goods</th>-->
                                                                <th colspan="5">Details of inputs held in stock or inputs contained in semi-finished goods held in stock</th>
                                                                <th rowspan="3"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow7A7A">Add row</button></th>

                                                            </tr>
                                                            <tr>
                                                                <th style="display: none">Type</th>
                                                                <th>HSN ( at 6 digit level)</th>
                                                                <th>Unit</th>
                                                                <th>Qty</th>
                                                                <th>Value</th>
                                                                <th>Eligible Duties paid on such inputs</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody id="table7A7Atbody"> 
                                                             @if(isset($sevenA7A)&&count($sevenA7A) >   0)
                            @foreach($sevenA7A   as $key=>$tableData)
                                                            <tr>
                                                              <!--    <td>
    <select name="type_of_goods_7A">
    <option selected disabled>-- Select--</option>
    <option>Inputs</option>
    <option>Semi-finished</option>
    <option>Finished</option>

    </select>
                                                              </td>-->
                                                                <td style="display: none">
                                
                                  
                                    @php $sevenA7BOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods']; @endphp
                                                                        <select name="nature_of_itc_7a7a" id="nature_of_itc_7a7a_{{rand(10,1000)}}" class="nature_of_itc_7a7a">
                                                                      @foreach($sevenA7BOption as $value)
                                                                        <option <?php if($tableData['type']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
                           
                             </td>
                                                                <td><input type="text" class="form-control" name="hsn_7A7A" value="{{$tableData['hsn']}}" id="hsn_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="unit_7A7A" value="{{isset($tableData['unit'])?$tableData['unit']:''}}" id="unit_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="quantity_7A7A" value="{{isset($tableData['quantity'])?$tableData['quantity']:''}}" id="quantity_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="value_7A7A" value="{{isset($tableData['value'])?$tableData['value']:''}}" id="value_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="duties_paid_7A7A" value="{{isset($tableData['dutiesPaid'])?$tableData['dutiesPaid']:''}}" id="duties_paid_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td>
                                        @if($key    >   0)
                                            <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                        @endif
                                    </td>
                                                            </tr>  
                                                            @endforeach
                        @else
                         <tr>
                        <!--       <td>
    <select name="type_of_goods_7A">
    <option selected disabled>-- Select--</option>
    <option>Inputs</option>
    <option>Semi-finished</option>
    <option>Finished</option>

    </select>
                        </td>--> <td style="display: none"><select name="nature_of_itc_7a7a" id="nature_of_itc_7a7a_{{rand(10,1000)}}" class="nature_of_itc_7a7a">
                                        <option selected disabled value="select">-- Select--</option>
                                      <option value="Inputs">Inputs</option>
                                          <option value="Semi-finished">Semi-finished</option>
                                            <option value="Finished">Finished</option>
                                         
                                    </select></td>
                                                                <td><input type="text" class="form-control" name="hsn_7A7A" id="hsn_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="unit_7A7A" id="unit_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="quantity_7A7A" id="quantity_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" min="0" class="form-control" name="value_7A7A" id="value_7A7A_{{rand(10,1000)}}"/></td>
                                                                <td><input type="number" class="form-control" name="duties_paid_7A7A" id="duties_paid_7A7A_{{rand(10,1000)}}"/></td>
                                                            </tr> 

                         @endif
                                                        </tbody>
                                                        </table>