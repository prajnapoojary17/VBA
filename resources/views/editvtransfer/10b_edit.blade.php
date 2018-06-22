 <form id="tenBForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="10BTable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="10">Details of goods held by the agent</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow10B">Add row</button></th>
                                                                </tr>
                                                                <tr>
                                                                      <th rowspan="2" style="display:none">Name Of The Agent</th>
                                                                    <th rowspan="2">GSTIN of Principal</th>
                                                                     <th rowspan="2" style="display:none">Description of Tax</th>
                                                                      <th rowspan="2">Description of Goods</th>
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
                                                            <tbody id="table10Btbody">
                                                                @if(isset($tenB)&&count($tenB) >   0)
                                                                            @foreach($tenB   as $key=>$tableData)
                                                                <tr>
                                                                    <td style="display:none"><input type="text" class="form-control" name="name_of_agent_10B" value="{{isset($tableData['nameOfAgent'])?$tableData['nameOfAgent']:''}}" id="name_of_agent_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="gstn_agent_10B" value="{{$tableData['gstnPrincipal']}}" id="gstn_agent_10B_{{rand(10,1000)}}"/></td>
                                                                     <td><input type="text" class="form-control" name="description_of_goods_10B" value="{{isset($tableData['descriptionOfGoods'])?$tableData['descriptionOfGoods']:''}}" id="description_of_goods_10B_{{rand(10,1000)}}"/></td>
                                                                     <td style="display:none"><input type="text" class="form-control" name="description_of_tax_10B" value="{{isset($tableData['descriptionOfTax'])?$tableData['descriptionOfTax']:''}}" id="description_of_tax_10B_{{rand(10,1000)}}"/></td>

                                                                    <td style="display:none">
                                                                        @php $tenBOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                        <select name="type_of_goods_10B" class="type_of_goods_10B" id="type_of_goods_10B_{{rand(10,1000)}}">
                                                                      @foreach($tenBOption as $value)
                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                         </select>
                                                                       </td>
                                                                    <td><input type="text" class="form-control hsnCode10b" name="hsn_code_10B" value="{{isset($tableData['hsnCode'])?$tableData['hsnCode']:''}}" id="hsn_code_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="unit_10B" value="{{$tableData['unit']}}" id="unit_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="quantity_10B" value="{{$tableData['quantity']}}" id="quantity_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="value_10B" value="{{$tableData['value']}}" id="value_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control" name="input_tax_taken_10B" value="{{$tableData['inputTaxTaken']}}" id="input_tax_taken_10B_{{rand(10,1000)}}"/></td>

                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr>
                                                                 @endforeach
                                                                    @else
                                                                    <tr>
                                                                         <td style="display:none"><input type="text" class="form-control" name="name_of_agent_10B" id="name_of_agent_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="gstn_agent_10B" id="gstn_agent_10B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="description_of_goods_10B" value="" id="description_of_goods_10B_{{rand(10,1000)}}"/></td>
                                                                     <td style="display:none"><input type="text" class="form-control" name="description_of_tax_10B" id="description_of_tax_10B_{{rand(10,1000)}}"/></td>
                                                                        <td style="display:none">
                                                                            <select name="type_of_goods_10B" class="type_of_goods_10B" id="type_of_goods_10B_{{rand(10,1000)}}">
                                                                                <option selected disabled>-- Select--</option><option>Inputs</option>
                                                                                <option>Semi finished Goods</option><option>Finished Goods</option>
                                                                                <option>Capital Goods</option>


                                                                            </select></td>

                                                                        <td><input type="text" class="form-control hsnCode10b" name="hsn_code_10B" id="hsn_code_10B_{{rand(10,1000)}}"/></td>
                                                                        <td><input type="number" class="form-control" name="unit_10B" id="unit_10B_{{rand(10,1000)}}"/></td>
                                                                        <td><input type="number" class="form-control" name="quantity_10B" id="quantity_10B_{{rand(10,1000)}}"/></td>
                                                                        <td><input type="number" class="form-control" name="value_10B" id="value_10B_{{rand(10,1000)}}"/></td>
                                                                        <td><input type="number" class="form-control" name="input_tax_taken_10B" id="input_tax_taken_10B_{{rand(10,1000)}}"/></td>
                                                                    </tr> 
                                                                  @endif
                                                            </tbody>
                                                        </table>
                                                        </form>