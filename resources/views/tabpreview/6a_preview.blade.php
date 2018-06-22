<div class="vtranPreviewHeading">6.&nbsp;&nbsp;&nbsp;Details of capitals goods for which unavailed credit has not been carried forword under existing law(section 140(2))</div><br/>
<div class="vtranPreviewHeading">(a)&nbsp;&nbsp;&nbsp;&nbsp;Amount of unavailed cenvat credit in respect of capital goods carried forward to electronic credit ledger as central tax</div>
<table class="table table-bordered table-striped table-print table-hover dataTable" id="6ATable">
    <thead>
        <tr>
            <th colspan="11" style="display:none">																																												
            </th>
        </tr>
        <tr>
            <th rowspan="3">Sr.no</th>
            <th rowspan="3">Invoice/Document no.</th>
            <th rowspan="3">Invoice /document Date</th>
            <th rowspan="3">Supplier's registration no. under existing law</th>
            <th rowspan="3">Reciepients' registration no. under existing law</th>
            <th rowspan="3" style="display:none">Capital Goods</th>
            <th colspan="3">Details of capital goods on which credit has been partially availed</th>
            <th rowspan="3">Total eligible cenvat credit under existing law</th>
            <th rowspan="3">Total cenvat credit availed under existing law</th>
            <th rowspan="3">Total cenvat credit unavailed under existing law ( admissible as ITC of central tax)(9-10)</th>
        </tr>
        <tr>
            <td rowspan="2">Value</td>
            <td colspan="2">Duties and Taxes paid</td>
        </tr>
        <tr>
            <td>ED/CVD</td>
            <td>SAD</td>
        </tr>
    </thead>
    <tbody id="table6Atbody">
        @php
            $sixSerialNo=1;
            $capital_good_value_6A_totals=0;
            $capital_good_cvd_6A_totals=0;
            $capital_good_sad_6A_totals=0;
            $eligible_cenvat_6A_totals=0;
            $cenvat_credit_availed_6A_totals=0;
            $cenvat_credit_unavailed_6A_totals=0;
        @endphp
        @if(isset($array6ADetails['data']['table'] ) &&count($array6ADetails['data']['table'])>0)
            @foreach($array6ADetails['data']['table']   as $key=>$tableData)
                @php
                    $capital_good_value_6A_totals    +=  $tableData['capitalGoodValue'];
                    $capital_good_cvd_6A_totals +=  $tableData['capitalGoodCvd'];
                    $capital_good_sad_6A_totals +=  $tableData['capitalGoodSad'];
                    $eligible_cenvat_6A_totals +=  $tableData['eligibleCenvat'];
                    $cenvat_credit_availed_6A_totals +=  $tableData['cenvatCreditAvailed'];
                    $cenvat_credit_unavailed_6A_totals +=  $tableData['cenvatCreditUnavailed']; 
                @endphp
                <tr>
                    <td>{{$sixSerialNo++}}</td>
                    <td>{{$tableData['invoiceNo']}}</td>
                    <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                    <td>{{$tableData['supplierRegNo']}}</td>
                    <td style="display:none">{{$tableData['recipientRegNo']}}</td>
                    <td>{{$tableData['recipientRegNo']}}</td>
                    <td >{{$tableData['capitalGoodValue']}}</td>
                    <td>{{$tableData['capitalGoodCvd']}}</td>
                    <td>{{$tableData['capitalGoodSad']}}</td>
                    <td>{{$tableData['eligibleCenvat']}}</td>
                    <td>{{$tableData['cenvatCreditAvailed']}}</td>
                    <td>{{$tableData['cenvatCreditUnavailed']}}</td>
                </tr>
            @endforeach
            @else
            
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
            <th></th><th></th>
            <th colspan="3">Total</th>
            <th id="capital_good_value_6A_total">{{($capital_good_value_6A_totals>0)?$capital_good_value_6A_totals:''}}</th>
            <th id="capital_good_cvd_6A_total">{{($capital_good_cvd_6A_totals>0)?$capital_good_cvd_6A_totals:''}}</th>
            <th id="capital_good_sad_6A_total">{{($capital_good_sad_6A_totals>0)?$capital_good_sad_6A_totals:''}}</th>
            <th id="eligible_cenvat_6A_total">{{($eligible_cenvat_6A_totals>0)?$eligible_cenvat_6A_totals:''}}</th>
            <th id="cenvat_credit_availed_6A_total">{{($cenvat_credit_availed_6A_totals>0)?$cenvat_credit_availed_6A_totals:''}}</th>
            <th id="cenvat_credit_unavailed_6A_total">{{($cenvat_credit_unavailed_6A_totals)>0?$cenvat_credit_unavailed_6A_totals:''}}</th>
        </tr>
    </tfoot>
</table>