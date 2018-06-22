@php
    $balance_cenvat_credit_5A_totals    =   0;
    $cenvat_credit_admissible_5A_totals =   0;
    $tax_periof_total=0;
@endphp

<div class="vtranPreviewHeading">5.&nbsp;&nbsp;Amount of tax credit carried forward in the return filed under existing laws:</div><br/>
<div class="vtranPreviewHeading">(a)&nbsp;&nbsp;&nbsp;Amount of Cenvat credit carried forward to electronic credit ledger as central tax(Section 140(1) and Section140(4)(a))</div>
    <table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" >
        <thead>
            <tr style="display:none">
                <th colspan="10">Amount of Cenvat credit carried forward to electronic credit ledger as central tax</th>
            </tr>
            <tr>

                <th> 
                    Sl. no.
                </th>
                <th>Registration no under existing law(Central Excise and ServiceTax)

                </th>

                <th>Tax period to which the last return filed under the existing law pertains 

                </th>
                <th>Date of filing of the return specified in Column no. 3

                </th>
                <th>Balance cenvat credit carried forward in the said last return

                </th>
                <th>Cenvat Credit admissible as ITC of central tax in accordance with transitional provisions

                </th>

            </tr>
        </thead>

        <tbody>
                                                          @php $fiveBSN=1; @endphp
          
            @if(isset($array5ADetails['data']['table'])&& count($array5ADetails['data']['table'])>0)

            @foreach($array5ADetails['data']['table']   as $key=>$tableData)
                @php
                    $balance_cenvat_credit_5A_totals    +=  $tableData['balanceCenvatCredit'];
                    $cenvat_credit_admissible_5A_totals +=  $tableData['balanceCenvatAdmissible'];
                @endphp
                <tr>
                    <td>{{$fiveBSN}}</td>
                    <td>{{$tableData['registrationNo']}}</td>
                    <td>{{$tableData['taxPeriod']}}</td>
                    <td>{{$tableData['dateFiling']}}</td>
                    <td>{{$tableData['balanceCenvatCredit']}}</td>
                    <td>{{$tableData['balanceCenvatAdmissible']}}</td>
                </tr>
                @php $fiveBSN++; @endphp
            @endforeach
            @else
            <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
		<th></th>
            <th colspan="3">Total</th>
            <th id="balance_cenvat_credit_5A_total">{{($balance_cenvat_credit_5A_totals>0)?$balance_cenvat_credit_5A_totals:''}}</th>
            <th id="cenvat_credit_admissible_5A_total">{{($cenvat_credit_admissible_5A_totals>0)?$cenvat_credit_admissible_5A_totals:''}}</th>
        </tr>
    </tfoot>
</table>