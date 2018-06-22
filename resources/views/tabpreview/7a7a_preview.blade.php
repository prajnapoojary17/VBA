<div class="vtranPreviewHeading">7.&nbsp;&nbsp;Details of the inputs held in stock in terms of sections 140(3),140(4)(b) and 140(6).</div><br/>
<div class="vtranPreviewHeading">(a)&nbsp;&nbsp;&nbsp;Amount of duties and taxes on inputs claimed as credit exculding the credit claimed under Table5(a) and 7(a)</div>
<table class="table table-bordered table-striped table-hover table-print dataTable m-t-15" id="7A7ATable">
    <thead>
        <tr>
            <th rowspan="2">Sr.no</th>
             <!-- <th>Type of Goods</th>-->
            <th colspan="6" style="text-align:center">Details of inputs held in stock or inputs contained in semi-finished or finished goods held in stock</th>
        </tr>
        <tr>
           
            <th>HSN ( at 6 digit level)</th>
            <th>Unit</th>
            <th>Qty</th>
            <th>Value</th>
            <th>Eligible Duties paid on such inputs</th>
        </tr>
        <tr>
            <th colspan="6">7A Where duty paid invoices or any other document are available</th>
        </tr>
    </thead>
    <tbody id="table7A7Atbody"> 
   
        @php $sevenA7ASerialNo=1; @endphp 
        @if(isset($array7A7ADetails) && count($array7A7ADetails['data']['table']) >   0)
        <tr><th colspan="6">Inputs</th></tr>
            @foreach($array7A7ADetails['data']['table']   as $key=>$tableData)
           @if($tableData['type']=='Inputs')
                <tr>
                  <!--    <td>
        <select name="type_of_goods_7A">
        <option selected disabled>-- Select--</option>
        <option>Inputs</option>
        <option>Semi-finished</option>
        <option>Finished</option>

        </select>
        </td>-->    <td>{{$sevenA7ASerialNo++}}</td>
                    <td>{{$tableData['hsn']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['dutiesPaid']}}</td>
                </tr>
                @endif
            @endforeach
             <tr><th colspan="6">Inputs contained in semi-finished and finished goods</th></tr>
               @foreach($array7A7ADetails['data']['table']   as $key=>$tableData)
           @if($tableData['type']=='Finished' ||$tableData['type']=='Semi-finished')
                <tr>
                  <!--    <td>
        <select name="type_of_goods_7A">
        <option selected disabled>-- Select--</option>
        <option>Inputs</option>
        <option>Semi-finished</option>
        <option>Finished</option>

        </select>
        </td>-->    <td>{{$sevenA7ASerialNo++}}</td>
                    <td>{{$tableData['hsn']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['dutiesPaid']}}</td>
                </tr>
                @endif
            @endforeach
            @else 
              <tr><th colspan="6">Inputs</th></tr>
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
               <tr><th colspan="6">Inputs contained in semi-finished and finished goods</th></tr>
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
        <tr>
            <th colspan="6">7B Where duty paid invoices are not availble(Applicable only for person other than manufacturer or service provider)-Credit in terms of Rule 1(4)</th>
        </tr>
   
        @php $sevenA7BSerialNo=1; @endphp 
        @if(isset($array7A7BDetails) && count($array7A7BDetails['data']['table']) >   0)
            <tr><th colspan="6">Inputs</th></tr>
            @foreach($array7A7BDetails['data']['table']   as $key=>$tableData)
        
                <tr>
                    <td>{{$sevenA7BSerialNo++}}</td>
                    <td>{{$tableData['hsn']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['dutiesPaid']}}</td>
                </tr>  
            
            @endforeach
           
            @else 
             <tr><th colspan="6">Inputs</th></tr>
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
              <!-- <tr><th colspan="6">Inputs contained in semi-finished and finished goods</th></tr>
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>-->
        @endif
    </tbody>
</table>