<style>
    @media print {
    table {
        border: solid #000 !important;
        border-width: 1px 0 0 1px !important;
    }
    th, td {
        border: solid #000 !important;
        border-width: 0 1px 1px 0 !important;
		text-align:left !important;
		vertical-align:top !important;
    }
}
.emptyTr{
    height: 28px;
}
.vtranPreviewHeading{
    font-size: 16px;
    font-weight: 700;
}
.preview-main-heading{
    text-align: center;
    font-size: 18px;
    font-weight: 800;
    color: #000000;
}
.preview-sub-heading{
 text-align: center;
    font-size: 16px;
    color: #000000;
        font-style: italic;
}
.nineasubheader th{
     text-align: center;
}
.five_b_tab{
  margin-top: 1px;
}
#subHeading{
    text-align: center;
}
    </style>  
	<div class="preview-main-heading" >Form GST TRAN - 1</div>
	<div class="preview-sub-heading" >(See Rule -----)</div>
	<div class="preview-main-heading" >Transitional ITC / Stock Statement</div>
        1.&nbsp;&nbsp;GSTIN-{{session()->get('registeredPersonDetail')->gstnId}}<br><br>
2.&nbsp;&nbsp;Legal Name of the registered person-{{session()->get('registeredPersonDetail')->legalName}}<br/><br/>
3.&nbsp;&nbsp;Trade Name,if any -{{session()->get('registeredPersonDetail')->tradeName}}<br><br>
4.&nbsp;&nbsp;Whether all the returns required under existing law for the period of six months immediately precending the appointed date have been furnished:-{{session()->get('registeredPersonDetail')->taxCredit}}

<br/><br/>

@include('tabpreview.5a_preview')
@include('tabpreview.5b_preview')
@include('tabpreview.5c_preview')  
@include('tabpreview.6a_preview')
@include('tabpreview.6b_preview')     
@include('tabpreview.7a7a_preview')                                                 
@include('tabpreview.7a7b_preview')                                                  
@include('tabpreview.7b_preview')                                               
@include('tabpreview.7c_preview')   
@include('tabpreview.8_preview')                                                
@include('tabpreview.9a_preview')                                                      
@include('tabpreview.9b_preview')                                                         
@include('tabpreview.10a_preview')                                                         
@include('tabpreview.10b_preview')                                                          
@include('tabpreview.11_preview')                                                        
@include('tabpreview.12_preview')                                                      
                                                         
                                                   