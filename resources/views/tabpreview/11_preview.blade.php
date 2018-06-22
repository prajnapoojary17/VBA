<div class="vtranPreviewHeading">11.&nbsp;&nbsp;&nbsp;Details of credit availed in terms of Section 142(11(c ))</div>
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15" id="11Table">
    <thead>
        <tr>
            <th colspan="7" style="display:none">
                Details of credit availed in terms of section 142(11(c )))
            </th>
        </tr>
        <tr>
            <th>Sr.no</th>
            <th>Registration No of VAT</th>
            <th>Service Tax Registration No.</th>
            <th> Invoice/ document no.</th>
            <th>Invoice /document date</th>
            <th>Tax Paid</th>
            <th>VAT paid Taken as SGST Credit or Service Tax paid as Central Tax Credit</th>
        </tr>
    </thead>
    <tbody id="table11tbody">
        @php  $tax_paid_11=0; $tax_credit_11=0; $elevenSerialNo=1; @endphp
        @if(isset($array11Details) && count($array11Details['data']['table']) >   0)
            @foreach($array11Details['data']['table']   as $key=>$tableData)
                @php 
                    $tax_paid_11 += $tableData['TaxPaid']; 
                    $tax_credit_11 += $tableData['taxCredit'];
                @endphp
                <tr>
                    <td>{{$elevenSerialNo++}}</td>
                    <td>{{($tableData['typeOfTax']=='VAT')?$tableData['registrationNo']:''}}</td>
                    <td>{{($tableData['typeOfTax']=='Service Tax')?$tableData['registrationNo']:''}}</td>
                    <td>{{$tableData['invoiceNo']}}</td>
                    <td>@php echo date('d/m/Y', strtotime($tableData['invoiceDate'])); @endphp</td>
                    <td>{{$tableData['TaxPaid']}}</td>
                    <td>{{$tableData['taxCredit']}}</td>
                </tr>
            @endforeach
            @else 
             <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
            <th></th> <th></th> <th></th>
            <th colspan="2">Total</th>
            <th id="tax_paid_11_total">
               {{($tax_paid_11>0)?$tax_paid_11:''}}
            </th>
            <th id="tax_credit_11_total">
             {{($tax_credit_11>0)?$tax_credit_11:''}}
            </th>
        </tr>
    </tfoot>
</table>