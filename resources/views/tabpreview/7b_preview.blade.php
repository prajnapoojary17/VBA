<div class="vtranPreviewHeading">(b)&nbsp;&nbsp;&nbsp;Amount of vat and entry Tax paid on inputs supported by invoices/documents evidencing payments of tax carried forward to electronic credit ledger as SGST/UTGST</div>
<table class="table table-bordered table-striped table-hover table-print dataTable m-t-15" id="7BTable">
    <thead>
        <tr>
            <th colspan="9" style="display:none">7B Where duty paid invoices are not available (Applicable only for person other
                than manufacurer or service provider) – Credit in terms of Rule 1 (4)</th>
        </tr>
        <tr>
           
            <th colspan="5" style="text-align: center">Details of inputs in stock</th>
            <th rowspan="2">Total input tax credit claimed under earlier law</th>
            <th rowspan="2">Total input tax credit related to exempt sales not claimed under earlier law</th>
            <th rowspan="2">Total Input tax credit admissible as SGST/UGST</th>
        </tr>
        <tr>
            <th>Description</th>
            <th>Unit</th>
            <th>Qty</th>
            <th>Value</th>
            <th>VAT [ and Entry Tax ] paid</th>
        </tr>
    </thead>
    <tbody id="table7Btbody">
     
        @php $sevenBSerialNo=1; @endphp
        @if(isset($array7BDetails) && count($array7BDetails['data']['table']) >   0)
          <tr><th colspan="10">Inputs</th></tr>
            @foreach($array7BDetails['data']['table']   as $key=>$tableData)
               @if($tableData['type']=='Inputs')
                <tr>
                 
                    <td>{{$tableData['description']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['vat']}}</td>
                    <td>{{$tableData['taxCreditClaimed']}}</td>
                    <td>{{$tableData['taxCreditExempt']}}</td>
                    <td>{{$tableData['taxCreditAdmissible']}}</td>
                </tr>
                @endif
            @endforeach
               <tr><th colspan="10">Inputs contained in semi-finished and finished goods</th></tr>
                 @if($tableData['type']=='Finished' ||$tableData['type']=='Semi-finished')
                   <tr>
                 
                    <td>{{$tableData['description']}}</td>
                    <td>{{$tableData['unit']}}</td>
                    <td>{{$tableData['quantity']}}</td>
                    <td>{{$tableData['value']}}</td>
                    <td>{{$tableData['vat']}}</td>
                    <td>{{$tableData['taxCreditClaimed']}}</td>
                    <td>{{$tableData['taxCreditExempt']}}</td>
                    <td>{{$tableData['taxCreditAdmissible']}}</td>
                </tr>
                 @endif
            @else 
             <tr><th colspan="10">Inputs</th></tr>
             <tr class="emptyTr">
       <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            
               <tr><th colspan="10">Inputs contained in semi-finished and finished goods</th></tr>
                <tr class="emptyTr">
       <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
</table>