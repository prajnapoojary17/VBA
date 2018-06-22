<div class="vtranPreviewHeading">&nbsp;&nbsp;8.Details of transfer of cenvat credit for registered person having centralized registration under existing law(Section 140(8))</div>
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" id="8Table">
    <thead>
        <tr>
            <th colspan="9" style="display:none">Registration no. under existing law (Centralized)Registration no. under existing law (Centralized) Date of filing of the return specified in Column no. 3</th>
        </tr>
        <tr>
            <th rowspan="2">SI.No</th>
            <th rowspan="2">Registration no. under existing law (Centralized)</th>
            <th rowspan="2">Tax period to which the last return filed under the existing law pertains</th>
            <th rowspan="2">Date of filing of the return specified in Column no. 3</th>
            <th rowspan="2">Balance eligible cenvat credit carried forward in the said last return</th>
            <th rowspan="2">GSTIN of receivers ( same PAN) of ITC CENTRAL TAX</th>
            <th colspan="2" class="text-center">Distribution document / invoice</th>
            <th rowspan="2">ITC of CENTRAL TAX transferred</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody id="table8tbody">
        @php $eightSerialNo=1; 
        
        $centralTaxTransfered=0;
        @endphp
        @if(isset($array8Details) && count($array8Details['data']['table']) >   0)
            @foreach($array8Details['data']['table']   as $key=>$tableData)
            @php 
            $centralTaxTransfered+=$tableData['centralTaxTransfered'];
            @endphp
                <tr>
                    <td>{{$eightSerialNo++}}</td>
                    <td>{{($tableData['registerNo']=='none')?'':$tableData['registerNo']}}</td>
                    <td>{{$tableData['taxPeriod']}}</td>
                    <td>@php echo date('d/m/Y', strtotime($tableData['dateFilling'])); @endphp</td>
                    <td>{{($tableData['cenvatCredit']=='none')?'':$tableData['cenvatCredit']}}</td>
                    <td>{{$tableData['itcCentralTax']}}</td>
                    <td>{{$tableData['invoiceNo']}}</td>
                    <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                    <td>{{$tableData['centralTaxTransfered']}}</td>
                </tr>
            @endforeach
            @else 
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
     <tfoot>
        <tr>
            <th></th>
            <th colspan="">Total</th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>
            <th>{{($centralTaxTransfered==0)?'':$centralTaxTransfered}}</th>
        </tr>
    </tfoot>
</table>