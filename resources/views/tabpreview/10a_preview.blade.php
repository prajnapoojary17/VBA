<div class="vtranPreviewHeading">10.&nbsp;&nbsp;&nbsp;Details of goods held in stock as agent on behalf of the principal under section142(14) <span style="font-style: italic" >of the SGST Act.</span></div><br/>
<div class="vtranPreviewHeading">a.&nbsp;&nbsp;&nbsp;Details of goods held as agent on behalf of the principal</div>
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" id="10ATable">
    <thead>
        <tr>
            <th colspan="7" style="display:none">
                Details of goods held as Agent on behalf of the principal
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
        @php $tenASerialNo=1; @endphp
        @if(isset($array10ADetails) && count($array10ADetails['data']['table']) >   0)
            @foreach($array10ADetails['data']['table']   as $key=>$tableData)
                <tr>
                    <td>{{$tenASerialNo++}}</td>
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