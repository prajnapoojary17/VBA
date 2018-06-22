  <form id="nineBForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9BTable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="9">Details of goods held in stock as job worker on behalf of the principal under section 141</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow9B">Add row</button></th>
                                                                </tr>
                                                                <tr>
                                                                    <!--   <th rowspan="2">Name of Principal</th>
                                                                 <th rowspan="2">GSTIN of Principal</th>-->
                                                                    <th rowspan="2">Challan No</th>

                                                                    <th rowspan="2">Challan Date</th>
                                                                       <th rowspan="2">Type of Goods</th>

                                                                    <th colspan="5" class="text-center">Details of goods with job-worker</th>

                                                                </tr>
                                                                <tr>
                                                                    <th>HSN</th>
                                                                    <th>Description</th>
                                                                    <th>Unit</th>
                                                                    <th>Quantity</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="table9Btbody">
                                                                 @if(isset($nineB)&&count($nineB) >   0)

                                                                 @php
                                                                  $unit_9B=0;
                                                                    $quantity_9B=0;
                                                                    $value_9B=0;

                                                                 @endphp
                                                                            @foreach($nineB   as $key=>$tableData)
                                                                             @php
                                                                             $unit_9B    +=  $tableData['unit'];
                                                                              $quantity_9B    +=  $tableData['quantity'];
                                                                               $value_9B    +=  $tableData['value'];
                                                                            @endphp
                                                                <tr>
                                                                    <td style="display:none"><input type="text" class="form-control" name="name_of_principal_9B" value="{{isset($tableData['NameOfPrincipal'])?$tableData['NameOfPrincipal']:''}}" id="name_of_principal_9B_{{rand(10,1000)}}"/></td>
                                                                      <td style="display:none"><input type="text" class="form-control" name="gstn_of_principal_9B" value="{{isset($tableData['GstnOfPrincipal'])?$tableData['GstnOfPrincipal']:''}}" id="gstn_of_principal_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="challan_no_9B" value="{{$tableData['challanNo']}}" id="challan_no_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="challan_date_9B" value=" @php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp" id="challan_date_9B_{{rand(10,1000)}}"/></td>
                                                                    <td>
                                                                          @php $sixAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                        <select name="type_of_goods_9B" class="type_of_goods_9B" id="type_of_goods_9B_{{rand(10,1000)}}">
                                                                      @foreach($sixAOption as $value)
                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      



        </select>
        </td>

                                                                    <td><div class="form-line"><input type="text" class="form-control hsnCode9b" name="hsn_9B" value="{{$tableData['hsn']}}" id="hsn_9B_{{rand(10,1000)}}"/></div></td>
                                                                    <td><input type="text" class="form-control" name="description_9B" value="{{$tableData['description']}}" id="description_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="unit_9B" value="{{$tableData['unit']}}" id="unit_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="quantity_9B" value="{{$tableData['quantity']}}" id="quantity_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="value_9B" value="{{$tableData['value']}}" id="value_9B_{{rand(10,1000)}}"/></td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr> 
                                                                @endforeach
                                                                        @else
                                                                    <tr>
                                                                        <td style="display:none"><input type="text" class="form-control" name="name_of_principal_9B" value="" id="name_of_principal_9B_{{rand(10,1000)}}"/></td>
                                                                      <td style="display:none"><input type="text" class="form-control" name="gstn_of_principal_9B" value="" id="gstn_of_principal_9B_{{rand(10,1000)}}"/></td>

                                                                    <td><input type="text" class="form-control" name="challan_no_9B" id="challan_no_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="datepicker form-control" name="challan_date_9B" id="challan_date_9B_{{rand(10,1000)}}"/></td>
                                                                    <td>
        <select name="type_of_goods_9B" class="type_of_goods_9B" id="type_of_goods_9B_{{rand(10,1000)}}">
        <option selected disabled>-- Select--</option>
        <option>Inputs</option>
        <option>Semi finished Goods</option>
        <option>Finished Goods</option>
        <option>Capital Goods</option>


        </select>
        </td>

                                                                    <td><div class="form-line"><input type="text" class="form-control hsnCode9b" name="hsn_9B" id="hsn_9B_{{rand(10,1000)}}" value=""/></div></td>
                                                                    <td><input type="text" class="form-control" name="description_9B" id="description_9B_{{rand(10,1000)}}" value=""/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="unit_9B" id="unit_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="quantity_9B" id="quantity_9B_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9B" name="value_9B" id="value_9B_{{rand(10,1000)}}"/></td>
                                                                </tr>                                                                
                                                                 @endif
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="5">Total</th>
                                                                   <th id="unit_9B_total">
                                                                       @if(isset($unit_9B))
                                                                       {{$unit_9B}}

                                                                       @endif

                                                                   </th>
                                                                    <th id="quantity_9B_total">
                                                                         @if(isset($quantity_9B))
                                                                       {{$quantity_9B}}

                                                                       @endif

                                                                    </th>
                                                                    <th id="value_9B_total">

                                                                     @if(isset($value_9B))
                                                                       {{$value_9B}}

                                                                       @endif
                                                                    </th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        </form>