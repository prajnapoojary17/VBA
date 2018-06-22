  <form id="nineAForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="9ATable">
                                                            <thead>
                                                                 <tr>
                                                                    <th colspan="9">Details of goods sent as principal to the job worker under section 141</th>
                                                                     <th colspan="2"><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow9A">Add row</button></th>
                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="2" style="display: none">Name of Jobworker</th>
                                                                     <th rowspan="2" style="display: none">GSTIN of Job Worker, if available</th>

                                                                    <th rowspan="2">Challan No</th>
                                                                    <th rowspan="2">Challan Date</th>
                                                                     <th rowspan="2">Type of goods </th>
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

                                                            <tbody id="table9Atbody">
                                                                 @if(isset($nineA)&&count($nineA) >   0)
                                                                 @php
                                                                  $unit_9A=0;
                                                                    $quantity_9A=0;
                                                                    $value_9A=0;

                                                                 @endphp
                                                                            @foreach($nineA   as $key=>$tableData)
                                                                            @php
                                                                             $unit_9A    +=  $tableData['unit'];
                                                                              $quantity_9A    +=  $tableData['quantity'];
                                                                               $value_9A    +=  $tableData['value'];
                                                                            @endphp
                                                                <tr>
                                                                      <td style="display: none"><input type="text" class="form-control" name="name_of_job_worker_9A" value="{{isset($tableData['NameOfJobWorker'])?$tableData['NameOfJobWorker']:''}}" id="name_of_job_worker_9A_{{rand(10,1000)}}"/></td>
                                                                       <td style="display: none"><input type="text" class="form-control" name="gstn_job_worker_9A" value="{{$tableData['goodsType']}}" id="gstn_job_worker_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="challan_no_9A" value="{{$tableData['challanNo']}}" id="challan_no_9A_{{rand(10,1000)}}"/></td>

                                                                    <td><input type="text" class="datepicker form-control" name="challan_date_9A" value="@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp" id="challan_date_9A_{{rand(10,1000)}}"/></td>
                                                                 <td>
                                                                        @php $sixAOption=['-- Select--','Inputs','Semi finished Goods','Finished Goods','Capital Goods']; @endphp
                                                                        <select name="type_of_goods_9A" class="type_of_goods_9A" id="type_of_goods_9A_{{rand(10,1000)}}">
                                                                      @foreach($sixAOption as $value)
                                                                        <option <?php if($tableData['typeOfGoods']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                          @endforeach      
                                                                        </select>
        </td>
                                                                    <td><input type="text" class="form-control hsnCode9a" name="hsn_9A" value="{{$tableData['hsn']}}" id="hsn_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="description_9A" value="{{$tableData['description']}}" id="description_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="unit_9A" value="{{$tableData['unit']}}" id="unit_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="quantity_9A" value="{{$tableData['quantity']}}" id="quantity_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="value_9A" value="{{$tableData['value']}}" id="value_9A_{{rand(10,1000)}}"/></td>
                                                                    <td>
                                            @if($key    >   0)
                                                <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                            @endif
                                        </td>
                                                                </tr> 
                                                                @endforeach
                                                                        @else
                                                                    <tr>
                                                                         <td style="display: none"><input type="text" class="form-control" name="name_of_job_worker_9A" value="{{isset($tableData['NameOfJobWorker'])?$tableData['NameOfJobWorker']:''}}" id="name_of_job_worker_9A_{{rand(10,1000)}}"/></td>

                                                                         <td style="display: none"><input type="text" class="form-control" name="gstn_job_worker_9A" id="gstn_job_worker_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="text" class="form-control" name="challan_no_9A" id="challan_no_9A_{{rand(10,1000)}}"/></td>

                                                                    <td><input type="text" class="datepicker form-control" name="challan_date_9A" id="challan_date_9A_{{rand(10,1000)}}"/></td>
                                                                     <td>
        <select name="type_of_goods_9A" class="type_of_goods_9A" id="type_of_goods_9A_{{rand(10,1000)}}">
        <option selected disabled>-- Select--</option>
        <option>Inputs</option>
        <option>Semi finished Goods</option>
        <option>Finished Goods</option>
        <option>Capital Goods</option>


        </select>
        </td>
                                                                    <td><input type="text" class="form-control hsnCode9a" name="hsn_9A" id="hsn_9A_{{rand(10,1000)}}" value=""/></td>
                                                                    <td><input type="text" class="form-control" name="description_9A" id="description_9A_{{rand(10,1000)}}" value=""/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="unit_9A" id="unit_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="quantity_9A" id="quantity_9A_{{rand(10,1000)}}"/></td>
                                                                    <td><input type="number" class="form-control calculateTotal" data-formname="9A" name="value_9A" id="value_9A_{{rand(10,1000)}}"/></td>
                                                                </tr>                                                                
                                                                 @endif
                                                            </tbody>
                                                              <tfoot>
                                                                <tr>
                                                                    <th colspan="5">Total</th>
                                                                   <th id="unit_9A_total">
                                                                       @if(isset($unit_9A))
                                                                       {{$unit_9A}}
                                                                       @endif
                                                                   </th>
                                                                    <th id="quantity_9A_total">
                                                                          @if(isset($quantity_9A))
                                                                       {{$quantity_9A}}
                                                                       @endif
                                                                        </th>
                                                                    <th id="value_9A_total">
                                                                          @if(isset($value_9A))
                                                                        {{$value_9A}}
                                                                       @endif
                                                                       </th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>