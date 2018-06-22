<div class="vtranPreviewHeading">(b)&nbsp;&nbsp;&nbsp;Details of statutory forms received for which credit is being carried forward</div><br/>
Period:1<sup>st</sup> Apr 2015 to 30<sup>th</sup> June 2017 
<table class="table table-bordered table-striped table-print table-hover dataTable m-t-15 five_b_tab" id="5BTable">
    <thead>
        <tr>
            <th colspan="6" style="display:none"></th>
        </tr>
        <tr>
          
            <th style="display:none">Sr. No. of Form</th>
            <th>TIN of Issuer</th>
            <th>Name of Issuer</th>
	<th>Sr. No. of Form</th>
            <th>Amount</th>
            <th>Applicable VAT Rate</th>
        </tr>
    </thead>
    <tbody id="table5Btbody">
        <tr>
            <th colspan="5">C-Form</th>
        </tr>
        @php 
            $c=1;$f=1;$h=1;$i=1;
            $cAmount=0; $cVatRate=0;
            $fAmount=0; $fVatRate=0;
            $hAmount=0; $hVatRate=0;
            $iAmount=0; $iVatRate=0;
        @endphp
        @if(isset($array5BDetails['data']['table']) && count($array5BDetails['data']['table'])>0)
            @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                @if(trim($tableData['type'])=='C')
                    @php 
                        $cAmount+=$tableData['amount'];
                        $cVatRate+=$tableData['vatRate'];
                    @endphp
                    <tr>
                        <td style="display:none">{{$c++}}</td>
                        <td style="display:none">{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                        <td>{{$tableData['tinIssuer']}}</td>
                        <td>{{$tableData['issuerName']}}</td>
			 <td>{{$tableData['formSerialNo']}}</td>
                        <td>{{$tableData['amount']}}</td>
                        <td>{{$tableData['vatRate']}}</td> 
                    </tr>
                    
                @endif
            @endforeach
             @else
            <tr class="emptyTr">
              <td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif
        <tr>
            <td colspan="3">Total</td>
            <td>{{($cAmount>0)?$cAmount:''}}</td>
            <td>{{($cVatRate>0)?$cVatRate:''}}</td>
        </tr>
        <tr>
            <th colspan="5">F-Form</th>
        </tr>        
        @if(isset($array5BDetails['data']['table']) && count($array5BDetails['data']['table'])>0)
            @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                @if(trim($tableData['type'])=='F')
                    @php 
                        $fAmount+=$tableData['amount'];
                        $fVatRate+=$tableData['vatRate'];
                    @endphp
                    <tr>
                        <td style="display:none">{{$f++}}</td>
                        <td style="display:none"> {{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                        <td>{{$tableData['tinIssuer']}}</td>
                        <td>{{$tableData['issuerName']}}</td>
						 <td>{{$tableData['formSerialNo']}}</td>
                        <td>{{$tableData['amount']}}</td>
                        <td>{{$tableData['vatRate']}}</td> 
                    </tr>
                @endif
            @endforeach
             @else
            <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif        
        <tr>
            <td colspan="3">Total</td>
            <td>{{($fAmount>0)?$fAmount:''}}</td>
            <td>{{($fVatRate>0)?$fVatRate:''}}</td>
        </tr>
        <tr>
            <th colspan="5">H/I-Form</th>
        </tr>        
        @if(isset($array5BDetails['data']['table']) && count($array5BDetails['data']['table'])>0)
            @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                @if(trim($tableData['type'])=='H'||trim($tableData['type'])=='I')
                    @php 
                        $hAmount+=$tableData['amount'];
                        $hVatRate+=$tableData['vatRate'];
                    @endphp
                    <tr>
                        <td style="display:none">{{$h++}}</td>
                        <td style="display:none">{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                        <td>{{$tableData['tinIssuer']}}</td>
                        <td>{{$tableData['issuerName']}}</td>
						 <td>{{$tableData['formSerialNo']}}</td>
                        <td>{{$tableData['amount']}}</td>
                        <td>{{$tableData['vatRate']}}</td> 
                    </tr>
                @endif
            @endforeach
             @else
            <tr class="emptyTr">
                <td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif       
        <tr>
            <td colspan="3">Total</td>
            <td>{{($hAmount>0)?$hAmount:''}}</td>
            <td>{{($hVatRate>0)?$hVatRate:''}}</td>
        </tr>
        <tr style="display:none">
            <th colspan="5">I-Form</th>
        </tr>        
        @if(isset($array5BDetails['data']['table']) && count($array5BDetails['data']['table'])>0)
            @foreach($array5BDetails['data']['table']   as $key=>$tableData)
                @if(trim($tableData['type'])=='I')
                    @php 
                        $iAmount+=$tableData['amount'];
                        $iVatRate+=$tableData['vatRate'];
                    @endphp
                    <tr style="display:none">
                        <td style="display:none">{{$i++}}</td>
                        <td>{{isset($tableData['formSerialNo'])?$tableData['formSerialNo']:''}}</td>
                        <td>{{$tableData['tinIssuer']}}</td>
                        <td>{{$tableData['issuerName']}}</td>
						 <td>{{$tableData['formSerialNo']}}</td>
                        <td>{{$tableData['amount']}}</td>
                        <td>{{$tableData['vatRate']}}</td> 
                    </tr>
                @endif
            @endforeach
             @else
            <tr class="emptyTr" style="display:none">
               <td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif        
        <tr style="display:none">
            <td colspan="2">Total</td>
            <td>{{($iAmount>0)?$iAmount:''}}</td>
            <td>{{($iVatRate>0)?$iVatRate:''}}</td>
        </tr>
    </tbody>
</table>