<style>

    .dumy {page-break-after: always;}

</style>
<div class="dumy"></div>
<div class="vtranPreviewHeading">(c)&nbsp;&nbsp;&nbsp;Amount of tax credit carried forward to electronic credit ledger as State/UT Tax(For all registrations on the same PAN and in the same State)</div>
<table class="table table-bordered table-print table-striped table-hover dataTable" id="5CGTable">
    <thead>
        <tr>
            <th colspan="10" style="display:none"></th>
        </tr>
        <tr>
            <th rowspan="2">Registration No. in existing law</th>
            <th rowspan="2">Balance of ITC of VAT and [Entry Tax] in last return</th>
            <th colspan="2" style="text-align:center">C Forms</th>
            <th colspan="2" style="text-align:center">F Forms</th>
            <th rowspan="2">ITC reversal relatable to [(3)and] (5)</th>
            <th colspan="2" style="text-align:center">H/I Forms</th>
            <th rowspan="2" style="text-align:center">Transition ITC 2- (4+6+7+9)</th>
        </tr>
        <tr>
            <th>Turnover for which forms Pending</th>
            <th>Difference tax payable on(3)</th>
            <th>Turnover for which forms Pending</th>
            <th>Tax payable on (5)</th>
            <th>Turnover for which forms Pending</th>
            <th>Tax payable on (7)</th>
        </tr>
    </thead>
    <tbody id="table5CGtbody">
       	<tr {{(isset($fiveCView['vat']['cTurnoverPendingVat'])&&($fiveCView['vat']['cTurnoverPendingVat']>0))?'':'class=emptyTr'}}>
            <td >
                {{isset($fiveCView['vat']['vatTinNumber'])?$fiveCView['vat']['vatTinNumber']:''}}
            </td>
            <td>
                {{isset($fiveCView['vat']['vatCarryForward'])?$fiveCView['vat']['vatCarryForward']:''}}      
            </td>
            <td>
                {{(isset($fiveCView['vat']['cTurnoverPendingVat'])&&($fiveCView['vat']['cTurnoverPendingVat']>0))?$fiveCView['vat']['cTurnoverPendingVat']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['vat']['cDiffTaxPayable'])&&($fiveCView['vat']['cDiffTaxPayable']>0))?$fiveCView['vat']['cDiffTaxPayable']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['vat']['fTurnoverPendingVat'])&&($fiveCView['vat']['fTurnoverPendingVat']>0))?$fiveCView['vat']['fTurnoverPendingVat']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['vat']['fDiffTaxPayable'])&&($fiveCView['vat']['fDiffTaxPayable']>0))?$fiveCView['vat']['fDiffTaxPayable']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['vat']['itcReversal'])&&($fiveCView['vat']['itcReversal']>0))?$fiveCView['vat']['itcReversal']:''}} 
            </td>
            <td>
                {{(isset($fiveCView['vat']['hTurnoverPendingVat'])&&($fiveCView['vat']['hTurnoverPendingVat']>0))?$fiveCView['vat']['hTurnoverPendingVat']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['vat']['hDiffTaxPayable'])&&($fiveCView['vat']['hDiffTaxPayable']>0))?$fiveCView['vat']['hDiffTaxPayable']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['vat']['transition'])&&($fiveCView['vat']['transition']>0))?$fiveCView['vat']['transition']:''}}    
            </td>
        </tr>
        <tr {{(isset($fiveCView['entry_tax']['cTurnoverPendingVat'])&&($fiveCView['entry_tax']['cTurnoverPendingVat']>0))?'':'class=emptyTr'}}>
            <td>
                {{isset($fiveCView['entry_tax']['vatTinNumber'])?$fiveCView['entry_tax']['vatTinNumber']:''}}
            </td>
            <td>
                {{isset($fiveCView['entry_tax']['vatCarryForward'])?$fiveCView['entry_tax']['vatCarryForward']:''}}      
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['cTurnoverPendingVat'])&&($fiveCView['entry_tax']['cTurnoverPendingVat']>0))?$fiveCView['entry_tax']['cTurnoverPendingVat']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['cDiffTaxPayable'])&&($fiveCView['entry_tax']['cDiffTaxPayable']>0))?$fiveCView['entry_tax']['cDiffTaxPayable']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['fTurnoverPendingVat'])&&($fiveCView['entry_tax']['fTurnoverPendingVat']>0))?$fiveCView['entry_tax']['fTurnoverPendingVat']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['fDiffTaxPayable'])&&($fiveCView['entry_tax']['fDiffTaxPayable']>0))?$fiveCView['entry_tax']['fDiffTaxPayable']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['itcReversal'])&&($fiveCView['entry_tax']['itcReversal']>0))?$fiveCView['entry_tax']['itcReversal']:''}} 
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['hTurnoverPendingVat'])&&($fiveCView['entry_tax']['hTurnoverPendingVat']>0))?$fiveCView['entry_tax']['hTurnoverPendingVat']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['hDiffTaxPayable'])&&($fiveCView['entry_tax']['hDiffTaxPayable']>0))?$fiveCView['entry_tax']['hDiffTaxPayable']:''}}    
            </td>
            <td>
                {{(isset($fiveCView['entry_tax']['transition'])&&($fiveCView['entry_tax']['transition']>0))?$fiveCView['entry_tax']['transition']:''}}    
            </td>
        </tr>
    </tbody>
</table>