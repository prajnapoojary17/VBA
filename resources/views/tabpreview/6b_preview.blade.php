<div class="vtranPreviewHeading">(b)&nbsp;&nbsp;&nbsp;Amount of unavailed input tax credit carried forward to electronic credit ledger as State/UT tax</div>
<div class="" style="margin-left: 67px;font-weight: 700;font-size: 16px;">(For all registrations on the same PAN and  in the same State)</div>
<table class="table table-bordered table-striped table-hover table-print dataTable m-t-15" id="6BTable">
    <thead>
        <tr>
            <th colspan="10" style="display:none"></th>
        </tr>
        <tr>
            <th rowspan="2">Sr.no</th>
            <th rowspan="2">Invoice/Document no.</th>
            <th rowspan="2">Invoice /document Date</th>
             <!--<th rowspan="2">Capital Goods</th>---->
            <th rowspan="2">Supplier's registration no. under existing law</th>
            <th rowspan="2">Recipients' registration no. under existing law</th>
            <th colspan="2">Details regarding capital goods on which credit is not availed</th>
            <th rowspan="2">Total eligible VAT [and ET] credit under existing law</th>
            <th rowspan="2">Total VAT [and ET] credit availed under existing law</th>
            <th rowspan="2">Total VAT [and ET] credit unavailed under existing law (acmissible as ITC of State/UT tax)(8-9)</th>
        </tr>
        <tr>
            <th>Value</th>
            <th>Taxes paid VAT [and ET]</th>
        </tr>
    </thead>
    <tbody id="table6Btbody">
        @php
            $sixBSerialNo=1;
            $capital_good_value_6B=0;
            $capital_good_vat_6B=0;
            $eligible_vat_6B=0;
            $vatCredit_availed_6B=0;
            $vat_credit_unavailed_6B=0;
        @endphp
        @if(isset($array6BDetails['data']['table'])&&count($array6BDetails['data']['table'])>0)
            @foreach($array6BDetails['data']['table']   as $key=>$tableData)
                @php
                    $capital_good_value_6B    +=  $tableData['capitalGoodValue'];
                    $capital_good_vat_6B    +=  $tableData['capitalGoodVat'];
                    $eligible_vat_6B    +=  $tableData['eligibleVat'];
                    $vatCredit_availed_6B    +=  $tableData['vatCreditAvailed'];
                    $vat_credit_unavailed_6B    +=  $tableData['vatCreditUnavailed'];
                @endphp
                <tr>
                    <td>{{$sixBSerialNo++}}</td>
                    <td>{{$tableData['invoiceNo']}}</td>
                    <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                    <td>{{$tableData['supplierRegNo']}}</td>
                    <td>{{$tableData['recipientRegNo']}}</td>
                    <td>{{$tableData['capitalGoodValue']}}</td>
                    <td>{{$tableData['capitalGoodVat']}}</td>
                    <td>{{$tableData['eligibleVat']}}</td>
                    <td>{{$tableData['vatCreditAvailed']}}</td>
                    <td>{{$tableData['vatCreditUnavailed']}}</td>
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
            <th></th> <th></th>
            <th colspan="3">Total</th>
            <th id="capital_good_value_6B_total">
             {{($capital_good_value_6B>0)?$capital_good_value_6B:''}}
            </th>
            <th id="capital_good_vat_6B_total">{{($capital_good_vat_6B>0)?$capital_good_vat_6B:''}}</th>
            <th id="eligible_vat_6B_total">{{($eligible_vat_6B>0)?$eligible_vat_6B:''}}</th>
            <th id="vatCredit_availed_6B_total">{{($vatCredit_availed_6B>0)?$vatCredit_availed_6B:''}}</th>
            <th id="vat_credit_unavailed_6B_total">{{($vat_credit_unavailed_6B>0)?$vat_credit_unavailed_6B:''}}</th>
        </tr>
    </tfoot>
</table>