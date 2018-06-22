<div class="vtranPreviewHeading">b.&nbsp;&nbsp;&nbsp;Details of goods held in stock as job worker on behalf of the principal under section 141</div>
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" id="9BTable">
    <thead>
        <tr>
            <th colspan="9" style="display:none">
                Details of goods held in stock as job worker on behalf of the principal under section 141
            </th>
        </tr>
        <tr>
            <th rowspan="2">Sr.No</th>
            <th rowspan="2">Challan No</th>
            <th rowspan="2">Challan Date</th>
            <th rowspan="2">Type of goods (inputs/ semi – finished / finished)</th>
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
        @php
            $unit_9B=0;
            $quantity_9B=0;
            $value_9B=0;
            $nineBSerialNo=1;
        @endphp
        @if(isset($array9BDetails) && count($array9BDetails['data']['table']) >   0)
          <tr ><td colspan="3">GSTIN of Manufacturer</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            @foreach($array9BDetails['data']['table']   as $key=>$tableData)
                @php
                    $unit_9B    +=  $tableData['unit'];
                    $quantity_9B    +=  $tableData['quantity'];
                    $value_9B    +=  $tableData['value'];
                @endphp
                <tr>
                    <td>{{$nineBSerialNo++}}</td>
                    <td>{{$tableData['challanNo']}}</td>
                    <td>@php echo date('d/m/Y', strtotime($tableData['challanDate'])); @endphp</td>
                    <td>{{$tableData['typeOfGoods']}}</td>
                    <td>{{$tableData['hsn']}}</td>
                    <td>{{$tableData['description']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                </tr> 
            @endforeach
            @else 
            <tr ><td colspan="3">GSTIN of Manufacturer</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th colspan="5">Total</th>
            <th id="unit_9B_total">
              {{($unit_9B>0)?$unit_9B:''}}
            </th>
            <th id="quantity_9B_total">
              {{($quantity_9B>0)?$quantity_9B:''}}
            </th>
            <th id="value_9B_total">
               {{($value_9B>0)?$value_9B:''}}
            </th>
        </tr>
    </tfoot>
</table>