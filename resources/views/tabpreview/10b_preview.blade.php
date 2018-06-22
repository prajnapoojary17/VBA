<div class="vtranPreviewHeading">b.&nbsp;&nbsp;&nbsp;Details of goods held by the Agent. </div>
<table class="table table-bordered table-print table-striped table-hover dataTable m-t-15" id="10BTable">
    <thead>
        <tr>
            <th colspan="7" style="display:none">
                Details of goods held by the Agent
            </th>
        </tr>
        <tr>
            <th rowspan="2">Sr.No</th>
            <th rowspan="2">GSTIN of Principal</th>
            <th colspan="5" class="text-center">Details of goods with Agent</th>
        </tr>
        <tr>
            <th>Description</th>
            <th>Unit</th>
            <th>Quantity</th>
            <th>Value</th>
            <th>Input Tax to be taken</th>
        </tr>
    </thead>
    <tbody id="table10Atbody">
        @php $tenBSerialNo=1; @endphp
        @if(isset($array10BDetails) && count($array10BDetails['data']['table']) >   0)
            @foreach($array10BDetails['data']['table']   as $key=>$tableData)
                <tr>
                    <td>{{$tenBSerialNo++}}</td>
                    <td>{{$tableData['gstnPrincipal']}}</td>
                    <td>{{$tableData['descriptionOfGoods']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['inputTaxTaken']}}</td>
                </tr>
            @endforeach
            @else 
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
</table>