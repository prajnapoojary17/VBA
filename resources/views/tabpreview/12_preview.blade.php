<div class="vtranPreviewHeading">12.Details of goods sent on approval basis six months prior to the appointed day (section 142(12))</div>
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" id="12Table">
    <thead>
        <tr>
            <th colspan="10" style="display:none">
                Details of goods sent on approval basis six months prior to the appointed day (section 142(12))
            </th>
        </tr>
        <tr>
            <th rowspan="2">Sr.No</th>
            <th rowspan="2">Document no</th>
            <th rowspan="2">Document date</th>
            <th rowspan="2">GSTIN no. of recipient, (if applicable)</th>
            <th rowspan="2">Name & address of recipient</th>
            <th colspan="5" class="text-center">Details of goods sent on approval basis</th>
        </tr>
        <tr class="nineasubheader">
            <th>HSN</th>
            <th>Description</th>
            <th>Unit</th>
            <th>Quantity</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody id="table12tbody">
        @php
            $unit_12=0;
            $quantity_12=0;
            $value_12=0;
            $twelveSerialNo=1;
        @endphp

     
         @if(isset($array12Details['data']['table'])&& count($array12Details['data']['table'])>0)

        @foreach($array12Details['data']['table']   as $key=>$tableData)
            @php
                $unit_12 +=$tableData['unit'];
                $quantity_12 +=$tableData['quantity'];
                $value_12 +=$tableData['value'];
            @endphp
            <tr>
                <td>{{$twelveSerialNo++}}</td>
                <td>{{$tableData['documentNo']}}</td>
                <td>@php echo date('d-m-Y', strtotime($tableData['documentDate'])); @endphp</td>
                <td>{{$tableData['gstnNumber']}}</td>
                <td>{{$tableData['RecipientName']}}</td>
                <td>{{$tableData['hsn']}}</td>
                <td>{{$tableData['description']}}</td>
                <td>{{$tableData['unit']}}</td>
                <td>{{$tableData['quantity']}}</td>
                <td>{{$tableData['value']}}</td>
            </tr>
        @endforeach
        @else 
         <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

       @endif

    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th colspan="6">Total</th>
            <th id="unit_12_total">
           {{($unit_12>0)?$unit_12:''}}
            </th>
            <th id="quantity_12_total">
               {{($quantity_12>0)?$quantity_12:''}}
            </th>
            <th id="value_12_total">
              {{($value_12>0)?$value_12:''}}
            </th>
        </tr>
    </tfoot>
</table>