<div class="vtranPreviewHeading">9.&nbsp;&nbsp;Details of goods sent to job-worker and held in his stock on behalf of principal under section 141.</div>
<div class="vtranPreviewHeading">a.&nbsp;&nbsp;&nbsp;Details of goods sent as principal to the job worker under section 141</div>
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" id="9ATable">
    <thead>
        <tr>
            <th colspan="9" style="display:none">
                Details of goods sent as principal to the job worker under section 141
            </th>
        </tr>
        <tr>
            <th rowspan="2">Sr.No</th>
            <th rowspan="2">Challan No</th>
            <th rowspan="2">Challan date</th>
            <th rowspan="2">Type of goods (inputs/ semi–finished/finished)</th>
            <th colspan="5" class="text-center">Details of goods with job-worker</th>
        </tr>
        <tr class="nineasubheader">
            <th >HSN</th>
            <th>Description</th>
            <th>Unit</th>
            <th>Quantity</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody id="table9Atbody">
        @php
            $unit_9A=0;
            $quantity_9A=0;
            $value_9A=0;
            $ninASerialNo=1;
        @endphp
        @if(isset($array9ADetails) && count($array9ADetails['data']['table']) >   0)
          <td colspan="3">GSTIN of Job Worker, if available</td>
            @foreach($array9ADetails['data']['table']   as $key=>$tableData)
                @php
                    $unit_9A    +=  $tableData['unit'];
                    $quantity_9A    +=  $tableData['quantity'];
                    $value_9A    +=  $tableData['value'];
                @endphp
                <tr>
                    <td>{{$ninASerialNo++}}</td>
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
            <tr class="emptyTr">
                <td colspan="3">GSTIN of Job Worker, if available</td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th colspan="5">Total</th>
            <th id="unit_9A_total">
              {{($unit_9A>0)?$unit_9A:''}}
            </th>
            <th id="quantity_9A_total">
            {{($quantity_9A>0)?$quantity_9A:''}}
            </th>
            <th id="value_9A_total">
              {{($value_9A>0)?$value_9A:''}}
            </th>
        </tr>
    </tfoot>
</table>