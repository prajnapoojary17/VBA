  <form id="fiveBForm">
                                                        <table class="table table-bordered table-striped table-hover dataTable m-t-15" id="5BTable" >
                                                         <thead>
                                                              <tr>
                                                                 <th colspan="8">Details of statutory forms received for which credit is being carried forward</th>
                                                             </tr>

                                                             <tr>
                                                                 <th>Type of Form 
                                                                  
                                                                 </th>
                                                                 <th>Sr. No. of Form</th>
                                                                 <th>TIN of Issuer
                                                                     
                                                                 </th>
                                                                 <th>Name of Issuer
                                                                    
                                                                 </th>
                                                                 <th> Amount</th>

                                                                 <th>Applicable VAT Rate</th>
                                                                 <th><button type="button" class="btn bg-indigo pull-right m-b-10" id="addRow5B">Add row</button></th>
                                                             </tr>
                                                         </thead>
                                                         <tbody id="table5Btbody">
                                                     
                                                             @if(isset($fiveB)&&count($fiveB) > 0)

                                                             @foreach($fiveB  as $key=>$tableData)

                                                             <tr>
                                                                  <td>
                                                                      @php $data=['C','F','H','I']; @endphp
                                                                         <select id="type_of_form_5B_{{rand(10,1000)}}" name="type_of_form_5B">
                                                                         <option selected disabled>-- Select--</option>
                                                                         @foreach($data as $typekey=>$value)
                                                                         <option <?php if($tableData['type']===$value){ echo 'selected'; } else{ } ?>>{{$value}}</option>
                                                                        @endforeach

                                                                     </select>
                                                                     </td>
                                                                 <td><input type="text" class="form-control" name="form_serial_no_5B" value="{{$tableData['formSerialNo']}}" id="form_serial_no_5B_{{rand(10,1000)}}"/></td>
                                                                 <td><input type="text" class="form-control" name="tin_issuer_5B" value="{{$tableData['tinIssuer']}}" id="tin_issuer_5B_{{rand(10,1000)}}"/></td>
                                                                 <td><input type="text" class="form-control" name="issuer_name_5B" value="{{$tableData['issuerName']}}" id="issuer_name_5B_{{rand(10,1000)}}"/></td>
                                                                     <td><input type="number" class="form-control" name="sales_value_5B" value="{{$tableData['salesValue']}}" id="sales_value_5B_{{rand(10,1000)}}"/></td>
                                                                       <!--  <td><input type="number" class="form-control" name="amount_5B" value="{{$tableData['amount']}}"/></td>-->
                                                                 <td><input type="number" class="form-control" name="vat_rate_5B" value="{{$tableData['vatRate']}}" id="vat_rate_5B_{{rand(10,1000)}}"/></td>
                                                                 <td> @if($key    >   0)
                                             <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                                         @endif</td>
                                                             </tr>



                                                             @endforeach

                                                             @else
                                                              <tr>
                                                                  <td>
                                                                      @php $data=['C','F','H','I']; @endphp
                                                                         <select id="type_of_form_5B_{{rand(10,1000)}}" name="type_of_form_5B">
                                                                         <option selected disabled>-- Select--</option>
                                                                         @foreach($data as $key=>$value)
                                                                         <option >{{$value}}</option>
                                                                        @endforeach

                                                                     </select>
                                                                     </td>
                                                                     <td><input type="text" class="form-control" name="form_serial_no_5B" value="" id="form_serial_no_5B_{{rand(10,1000)}}"/></td>
                                                                 <td><input type="text" class="form-control" name="tin_issuer_5B" value="" id="tin_issuer_5B_{{rand(10,1000)}}"/></td>
                                                                 <td><input type="text" class="form-control" name="issuer_name_5B" value="" id="issuer_name_5B_{{rand(10,1000)}}"/></td>
                                                                     <td><input type="number" class="form-control" name="sales_value_5B" value="" id="sales_value_5B_{{rand(10,1000)}}"/></td>
                                                               <!--  <td><input type="number" class="form-control" name="amount_5B" value=""/></td>-->
                                                                 <td><input type="number" class="form-control" name="vat_rate_5B" value="" id="vat_rate_5B_{{rand(10,1000)}}"/></td>
                                                             </tr>


                                                           @endif
                                                         </tbody>
                                                     </table>
                                                    </form>