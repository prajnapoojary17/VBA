<div class="vtranPreviewHeading">(c)&nbsp;&nbsp;&nbsp;Stock of goods not supported by invoices/documents evidencing payment of tax (credit in terms of rule 1 (4)) (<span style="font-style:italic">To be there only in States having VAT at single point</span>)</div>
<table class="table table-bordered table-striped table-hover table-print dataTable m-t-15" id="7CTable">
    <thead>
        <tr>
            <th colspan="5" style="text-align:center;">Details of inputs in stock</th>
        </tr>
        <tr>
            <th>Description</th>
            <th>Unit</th>
            <th>Qty</th>
            <th>Value</th>
            <th>Tax paid</th>
        </tr>
    </thead>
    <tbody id="table7Ctbody">
        @if( isset($array7CDetails) && count($array7CDetails['data']['table']) >   0) 
            @foreach($array7CDetails['data']['table']   as $key=>$tableData) 
                <tr>
                    <td>{{$tableData['description']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['taxPaid']}}</td>
                </tr>
            @endforeach
            @else
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
</table>