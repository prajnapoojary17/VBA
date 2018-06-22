 <form id="tenAForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10ATable">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="10">Details of goods held as agent on behalf of the principal</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow10A">Add row</button></th>
                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="2" style="display:none">Name of Principal</th>
                                                                    <th rowspan="2">GSTIN of Principal</th>
                                                                    <th rowspan="2" >Description of Goods</th>
                                                                    <th rowspan="2" style="display:none">Description of Tax</th>
                                                                    <th rowspan="2" style="display:none">Type of Goods</th>
                                                                    <th colspan="5" class="text-center">Details of goods with Agent</th>

                                                                </tr>
                                                                <tr>
                                                                    <th>HSN Code</th>
                                                                    <th>Unit</th>
                                                                    <th>Quantity</th>
                                                                    <th>Value</th>
                                                                    <th>Input Tax to be taken</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table10Atbody">
                                                                @if(isset($tenA)&&count($tenA) >   0)
                                                                            @foreach($tenA   as $key=>$tableData)
                                                                            @php $randomNumber  =  rand(10,1000);@endphp 
                                                                <tr>
                                                                      <td style="display:none"><input type="text" class="form-control" name="name_principal_10A" value="{{isset($tableData['nameOfPrincipal'])?$tableData['nameOfPrincipal']:''}}" id="name_principal_10A_{{$randomNumber}}"/></td>

                                                                      <td><input type="text" class="form-control" name="gstn_principal_10A" value="{{isset($tableData['gstnPrincipal'])?$tableData['gstnPrincipal']:''}}" id="gstn_principal_10A_{{$randomNumber}}"/></td>
                                                                <td><input type="text" class="form-control" name="description_of_goods_10A" value="{{isset($tableData['descriptionOfGoods'])?$tableData['descriptionOfGoods']:''}}" id="description_of_goods_10A_{{$randomNumber}}"/></td>
                                                                     <td style="display:none"><input type="text" class="form-control" name="description_of_tax_10A" value="{{isset($tableData['descriptionOfTax'])?$tableData['descriptionOfTax']:''}}" id="description_of_tax_10A_{{$randomNumber}}"/></td>

                                                                     <td style="display:none">
                                                                       @php $tenAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                        <select name="type_of_goods_10A" id="type_of_goods_10A_{{$randomNumber}}">
                                                                      @foreach($tenAOption as $value)
                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                         </select>

                                                                   </td>
                                                                    <td><input type="text" class="form-control hsnCode10a" name="hsn_10A" value="{{isset($tableData['hsnCode'])?$tableData['hsnCode']:''}}" id="hsn_10A_{{$randomNumber}}"/></td>
                                                                    <td><input type="number" class="form-control" name="unit_10A" value="{{$tableData['unit']}}" id="unit_10A_{{$randomNumber}}"/></td>
                                                                    <td><input type="number" class="form-control" name="quantity_10A" value="{{$tableData['quantity']}}" id="quantity_10A_{{$randomNumber}}"/></td>
                                                                    <td><input type="number" class="form-control" name="value_10A" value="{{$tableData['value']}}" id="value_10A_{{$randomNumber}}"/></td>
                                                                    <td><input type="number" class="form-control" name="input_tax_taken_10A" value="{{$tableData['inputTaxTaken']}}" id="input_tax_taken_10A_{{$randomNumber}}"/></td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr>
                                                                 @endforeach
                                                                    @else
                                                                    @php $randomNumber  =  rand(10,1000);@endphp
                                                                    <tr>
                                                                         <td style="display:none"><input type="text" class="form-control" name="name_principal_10A" value="" id="name_principal_10A_{{$randomNumber}}"/></td>

                                                                        <td><input type="text" class="form-control" name="gstn_principal_10A" id="gstn_principal_10A_{{$randomNumber}}"/></td>
                                                                        <td><input type="text" class="form-control" name="description_of_goods_10A" id="description_of_goods_10A_{{$randomNumber}}" value=""/></td>
                                                                     <td style="display:none"><input type="text" class="form-control" name="description_of_tax_10A" id="description_of_tax_10A_{{$randomNumber}}"/></td>
                                                                         <td style="display:none"><select name="type_of_goods_10A" id="type_of_goods_10A_{{$randomNumber}}"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></td>

                                                                       <td><input type="text" class="form-control hsnCode10a" name="hsn_10A" id="hsn_10A_{{$randomNumber}}"/></td>
                                                                        <td><input type="number" class="form-control" name="unit_10A" id="unit_10A_{{$randomNumber}}"/></td>
                                                                        <td><input type="number" class="form-control" name="quantity_10A" id="quantity_10A_{{$randomNumber}}"/></td>
                                                                        <td><input type="number" class="form-control" name="value_10A" id="value_10A_{{$randomNumber}}"/></td>
                                                                        <td><input type="number" class="form-control" name="input_tax_taken_10A" id="input_tax_taken_10A_{{$randomNumber}}"/></td>
                                                                    </tr> 
                                                                  @endif
                                                            </tbody>
                                                        </table>
                                                        </form>