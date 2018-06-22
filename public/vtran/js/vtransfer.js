$(document).ready(function() { 
     savedTabArray   =   [];    
    //Form rules array based on tabs
     var warningStatus6A=true;
      var warningStatus6B=true;
    var tabIdArr=["1","2","G","5A","5B","5C","6A","6B","7A7A","7A7B","7B","7C","8","9A","9B","10A","10B","11","12"];    
    var formRulesTabArr     =   {
                                    "5A":[
                                        {"ruleId":"1", "destinationTab":"table"}, 
                                        {"ruleId":"0", "destinationTab":"4"}
                                    ],
                                    "5ATable":[
                                        {"ruleId":"45", "destinationTab":"2"},
                                        {"ruleId":"0", "destinationTab":"4"}
                                    ],
                                    "6A":[
                                        //{"ruleId":"2", "destinationTab":"table"},
                                        //{"ruleId":"0", "destinationTab":"6"}
                                    ],
                                    "6ATable":[],
                                    "7A7A":[
                                        {"ruleId":"3", "destinationTab":"table"},
                                        {"ruleId":"4", "destinationTab":"7"},
                                        {"ruleId":"5", "destinationTab":"table"},
                                        {"ruleId":"6", "destinationTab":"8"},
                                        {"ruleId":"7", "destinationTab":"7"},
                                        {"ruleId":"8", "destinationTab":"7"},
                                        {"ruleId":"9", "destinationTab":"table"},
                                        {"ruleId":"10", "destinationTab":"7"},
                                        {"ruleId":"11", "destinationTab":"table"},
                                        {"ruleId":"16", "destinationTab":"table"},
                                        {"ruleId":"17", "destinationTab":"8"},
                                        {"ruleId":"18", "destinationTab":"table"},
                                        {"ruleId":"19", "destinationTab":"table"},
                                        {"ruleId":"20", "destinationTab":"8"},
                                        {"ruleId":"21", "destinationTab":"table"},
                                        {"ruleId":"0", "destinationTab":"10"}
                                    ],
                                    "7A7ATable":[
                                        {"ruleId":"12", "destinationTab":"9"},
                                        {"ruleId":"13", "destinationTab":"8"},
                                        {"ruleId":"14", "destinationTab":"8"},
                                        {"ruleId":"15", "destinationTab":"8"}
                                    ],
                                    "7A7B":[],
                                    "7A7BTable":[
                                       {"ruleId":"22", "destinationTab":"9"},
                                       {"ruleId":"23", "destinationTab":"9"},
                                       {"ruleId":"24", "destinationTab":"9"},
                                       {"ruleId":"25", "destinationTab":"9"}
                                    ],
                                    "8":[
                                        {"ruleId":"36", "destinationTab":"table"}
                                        //{"ruleId":"0", "destinationTab":"12"} 
                                    ],
                                    "8Table":[],
                                    "9A":[
                                        {"ruleId":"37", "destinationTab":"table"}
                                        //{"ruleId":"0", "destinationTab":"13"} 
                                    ],
                                    "9ATable":[],
                                    "9B":[
                                        {"ruleId":"38", "destinationTab":"table"}
                                        //{"ruleId":"0", "destinationTab":"14"} 
                                    ],
                                    "9BTable":[],
                                    "10A":[
                                        {"ruleId":"39", "destinationTab":"table"}
                                        //{"ruleId":"0", "destinationTab":"15"} 
                                    ],
                                    "10ATable":[],
                                    "10B":[
                                        {"ruleId":"40", "destinationTab":"table"},
                                        {"ruleId":"43", "destinationTab":"15"},
                                        {"ruleId":"44", "destinationTab":"15"},
                                        {"ruleId":"0", "destinationTab":"16"}
                                        //{"ruleId":"0", "destinationTab":"16"} 
                                    ],
                                    "10BTable":[
                                        {"ruleId":"43", "destinationTab":"15"},
                                        {"ruleId":"44", "destinationTab":"15"},
                                        {"ruleId":"0", "destinationTab":"16"}
                                    ],
                                    "11":[
                                        {"ruleId":"41", "destinationTab":"table"}
                                        //{"ruleId":"0", "destinationTab":"17"} 
                                    ],
                                    "11Table":[],
                                    "12":[
                                        {"ruleId":"42", "destinationTab":"table"}                                        
                                    ],
                                    "12Table":[]
                                };
    var questionRulesArray  =   {
                                    "1":[
                                        {"inputControlId":"group5A68"}, 
                                        //{"inputControlId":"group5A715"},
                                        {"inputControlId":"group5A818"}
                                    ],
                                    "2":[
                                        {"inputControlId":"group6A2145"}, 
                                        {"inputControlId":"group6A1021"}
                                    ],
                                    "3":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"},
                                        {"inputControlId":"group7A7A2759"}
                                    ],
                                    "4":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"},
                                        {"inputControlId":"group7A7A2760"}
                                    ],
                                    "5":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"},
                                        {"inputControlId":"group7A7A2761"}
                                    ],
                                    "6":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2657"},
                                        {"inputControlId":"group7A7A2759"}
                                    ],
                                    "7":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2657"},
                                        {"inputControlId":"group7A7A2760"}
                                    ],
                                    "8":[                                        
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2657"},
                                        {"inputControlId":"group7A7A2761"}
                                    ],
                                    "9":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"},
                                        {"inputControlId":"group7A7A2759"}
                                    ],
                                    "10":[                                        
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"},
                                        {"inputControlId":"group7A7A2760"}
                                    ],
                                    "11":[                                        
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"},
                                        {"inputControlId":"group7A7A2761"}
                                    ],
                                    "12":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"},
                                        {"inputControlId":"group7A7A2759"}
                                    ],
                                    "13":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"},
                                        {"inputControlId":"group7A7A2759"}
                                    ],
                                    "14":[
                                        {"inputControlId":"chkBoxG1ServiceProvider"}
                                    ],
                                    "15":[
                                        {"inputControlId":"chkBoxG1Manufacturer"}
                                    ],
                                    "16":[
                                        {"inputControlId":"chkBoxG1ServiceProvider"},
                                        {"inputControlId":"group7A7A1429"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"}
                                    ], 
                                    "17":[
                                        {"inputControlId":"chkBoxG1ServiceProvider"},
                                        {"inputControlId":"group7A7A1429"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2657"}
                                    ],
                                    "18":[
                                        {"inputControlId":"chkBoxG1ServiceProvider"},
                                        {"inputControlId":"group7A7A1429"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"}
                                    ],
                                    "19":[
                                        {"inputControlId":"chkBoxG1Manufacturer"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"}
                                    ],
                                    "20":[                                        
                                        {"inputControlId":"chkBoxG1Manufacturer"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2657"}
                                    ],
                                    "21":[                                        
                                        {"inputControlId":"chkBoxG1Manufacturer"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"}
                                    ],
                                    "22":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"},
                                        {"inputControlId":"group7A7A2760"} 
                                    ],
                                    "23":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2656"},
                                        {"inputControlId":"group7A7A2761"}
                                    ],
                                    "24":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2657"},
                                        {"inputControlId":"group7A7A2760"}
                                    ],
                                    "25":[
                                        {"inputControlId":"chkBoxG1Trader"},
                                        {"inputControlId":"group7A7A1225"},
                                        {"inputControlId":"group7A7A1123"},
                                        {"inputControlId":"group7A7A1327"},
                                        {"inputControlId":"group7A7A2554"},
                                        {"inputControlId":"group7A7A2658"},
                                        {"inputControlId":"group7A7A2760"}
                                    ],
                                    "36":[
                                        {"inputControlId":"group81838"}
                                    ],
                                    "37":[
                                        {"inputControlId":"group9A1634"}
                                    ],
                                    "38":[
                                        {"inputControlId":"group9B1736"}
                                    ],
                                    "39":[
                                        {"inputControlId":"group10A1941"}
                                    ],
                                    "40":[
                                        {"inputControlId":"group10B2043"}
                                    ],
                                    "41":[
                                        {"inputControlId":"group112248"},
                                        {"inputControlId":"group112350"}
                                    ],
                                    "42":[
                                        {"inputControlId":"group122452"}
                                    ],
                                    "43":[
                                        {"inputControlId":"group2Yes"},
                                        {"inputControlId":"group3VAT"} 
                                    ],
                                    "44":[
                                        {"inputControlId":"group2Yes"},
                                        {"inputControlId":"group3ServiceTax"}
                                    ],
                                    "45":[
                                        {"inputControlId":"group2Yes"},
                                        {"inputControlId":"group3VAT"}
                                    ]
                                };    
    $('#rootwizard').bootstrapWizard({
        onNext: function (tab, navigation, index) {
            $('.error').hide();
            switch (index) {
                case 1:
                    $('#save_return_draft').show();
                    $('#preview').show();
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    break;
                case 2:
                    if($('#inputGeneralQuestionsContinue').val() == '0') {
                        var validateStatus  =   validateRadioBtnQuestions('G');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }
                    //if ($("#group2No").is(":checked")) {
                        //$('#rootwizard').bootstrapWizard('show', 11);
                    //}else {
                    var errorStatus =   0;
                    if ($("#group3VAT").is(":checked")) {
                       
                        if(!$("#vatRegNo").val()){
                            $("#error_vat_reg_GQ").html('This field is required');
                            $("#error_vat_reg_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[A-Za-z0-9 _.-]+$/.test($("#vatRegNo").val())){
                                $("#error_vat_reg_GQ").html('Only AlphaNumberic Allowed');
                                $("#error_vat_reg_GQ").slideDown();
                            errorStatus =   1;
                        }
                        
                        if(($('.vatchoice:checked').val()=='normal_registration') && !$("#TinNoInState").val()){
                            $("#error_tin_no_in_state").html('This field is required');
                            $("#error_tin_no_in_state").slideDown();
                            errorStatus =   1;
                        }else if($('.vatchoice:checked').val()=='normal_registration' && !/^[0-9]{1,45}$/.test($("#TinNoInState").val())){
                                $("#error_tin_no_in_state").html('Only Numberic Allowed');
                                $("#error_tin_no_in_state").slideDown();
                            errorStatus =   1;
                        }
                    }
                    
                    
                     if ($("#group3EntryTax").is(":checked")) {
                       
                        if(!$("#entryTax").val()){
                            $("#error_entry_tax_GQ").html('This field is required');
                            $("#error_entry_tax_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[A-Za-z0-9 _.-]+$/.test($("#entryTax").val())){
                                $("#error_entry_tax_GQ").html('Only AlphaNumberic Allowed');
                                $("#error_entry_tax_GQ").slideDown();
                            errorStatus =   1;
                        }
                        
                        if(($('.entrytaxchoice:checked').val()=='normal_registration') &&!$("#AmountEntryCarriedForward").val()){
                            $("#error_amount_entry_caarried_forward").html('This field is required');
                            $("#error_amount_entry_caarried_forward").slideDown();
                            errorStatus =   1;
                        }else if(($('.entrytaxchoice:checked').val()=='normal_registration') && !/^[0-9]{1,45}$/.test($("#AmountEntryCarriedForward").val())){
                                $("#error_amount_entry_caarried_forward").html('Only Numberic Allowed');
                                $("#error_amount_entry_caarried_forward").slideDown();
                            errorStatus =   1;
                        }
                    }
                    
                    if ($("#group3ServiceTax").is(":checked")) {
                       if(!$("#serviceTaxRegNo").val()) {
                            $("#error_service_tax_GQ").html('This field is required');
                            $("#error_service_tax_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}['ST'|'SD']{2}[0-9]{3}$/.test($("#serviceTaxRegNo").val())){
                            $("#error_service_tax_GQ").html('Invalid input given');
                            $("#error_service_tax_GQ").slideDown();
                            errorStatus =   1;
                        }
                        if(($('.servicechoice:checked').val()=='normal_registration') && !$("#AmountVatCarriedForward").val()){
                            $("#error_AmountVatCarriedForward").html('This field is required');
                            $("#error_AmountVatCarriedForward").slideDown();
                            errorStatus =   1;
                        }else if(($('.servicechoice:checked').val()=='normal_registration') && isNaN($("#AmountVatCarriedForward").val())) {
                            $("#error_AmountVatCarriedForward").html('Accepet only numbers');
                            $("#error_AmountVatCarriedForward").slideDown();
                            errorStatus =   1;
                        }
                    }
                    if ($("#group3Excise").is(":checked")) {
                        if(!$("#exciseRegNo").val()) {
                            $("#error_excise_reg_no_GQ").html('This field is required');
                            $("#error_excise_reg_no_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}['EM'|'ED']{2}[0-9]{3}$/.test($("#exciseRegNo").val())){
                            $("#error_excise_reg_no_GQ").html('Invalid input given');
                            $("#error_excise_reg_no_GQ").slideDown();
                            errorStatus =   1;
                        }
                        if(($('.excisechoice:checked').val()=='normal_registration') && !$("#TinNoInStateEntryTax").val()){
                            $("#error_TinNoInStateEntryTax").html('This field is required');
                            $("#error_TinNoInStateEntryTax").slideDown();
                            errorStatus =   1;
                        }else if(($('.excisechoice:checked').val()=='normal_registration') && isNaN($("#TinNoInStateEntryTax").val())) {
                            $("#error_TinNoInStateEntryTax").html('Accepet only numbers');
                            $("#error_TinNoInStateEntryTax").slideDown();
                            errorStatus =   1;
                        }
                    }
                    if(errorStatus ==   1) {
                       return false; 
                    }         
                    //}
                    var jsonQuestions = $('#inputGeneralQuestions').val();
                    if(savedTabArray[savedTabArray.length-1] != index){    
                        savedTabArray.push(index);
                    }
                    break;
                case 3:
                    if($('#input5AQuestionsContinue').val() == '0') {
                        var validateStatus  =   validateRadioBtnQuestions('5A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }else {
                        //Validate table input valuse
                        var validateStatus  =   validateTableInputs('5A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                        if(savedTabArray[savedTabArray.length-1] != index){
                            savedTabArray.push(index);
                        }
                    } 
                    
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }                     
                    break;
                case 4:
                    $('.fileUploadRows').show();
                    
                    if ($('#input5BQuestionsContinue').val() == '0') {
                        $("#table5B").slideDown('slow');
                        $("#questions5B").slideUp('slow');
                        $("#uploadFileSection5B").slideUp('slow');
                        $('#input5BQuestionsContinue').val('1')

                        return false;
                    }
                    //Validate table input valuse
                    var validateStatus  =   validateTableInputs('5B');                        
                    if(!validateStatus) {                            
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    break;
                case 5:
                    //populate vat and entity tax detials from geenral tab
                    var vatRegNo=$('#vatRegNo').val();
                    var TinNoInState=$('#TinNoInState').val();
                    var entryTax=$('#entryTax').val();
                    var AmountEntryCarriedForward=$('#AmountEntryCarriedForward').val();
                    if(vatRegNo){
                         $('input[name="seller_in_state_5cg"]').val(vatRegNo);
                    }
                     if(TinNoInState){
                    $('input[name="seller_vat_carried_forward_5cg"]').val(TinNoInState);
                }
                      if(entryTax){
                    $('input[name="tin_no_seller_state_5cg"]').val(entryTax);
                }
                      if(AmountEntryCarriedForward){
                    $('input[name="vat_carried_forward_5cg"]').val(AmountEntryCarriedForward);
                }
                    
                    if ($('#input5CQuestionsContinue').val() == '0') {
                        $("#5Ccontainer").slideDown('slow');
                        $("#uploadFileSection5C").slideUp('slow');
                        $('#input5CQuestionsContinue').val('1')                        
                        return false;
                    }
                    /*
                     * 5CC form validation                     
                     */
                    var validateStatusC  =   validateTableInputs('5CC');                        
                    /*
                     * 5CF form validation                     
                     */
                    var validateStatusF  =   validateTableInputs('5CF');                         
                    /*
                     * 5CH form validation                     
                     */
                    var validateStatusH  =   validateTableInputs('5CH');                        
                    /*
                     * 5CH form validation                     
                     */
                    var validateStatusI  =   validateTableInputs('5CI');   
                    //Total 5C validation
                    if($('#input5CQuestionsContinue').val() == '1')
                    {
                        if(!validateStatusC || !validateStatusF || !validateStatusH || !validateStatusI ) {                            
                            return false;

                        }
                        if(savedTabArray[savedTabArray.length-1] != index){
                            savedTabArray.push(index);
                        }
                    }
                    /*
                     * 5CG form validation                     
                     */
//                    var validateStatusG  =   validateTableInputs('5CG');                        
//                    if(!validateStatusG) {                            
//                        return false;
//                    }                    
                   /* var jsonQuestions = $('#input5CQuestions').val();
                    var tablestatus = 1;
                    var linkTable = 0;
                    if (jsonQuestions) {
                        var questionDetails = JSON.parse(jsonQuestions);
                        $.each(questionDetails, function (arrindex, element) {
                            if (element.isLinked) {
                                $.each(element.options, function (optionindex, optionelement) {
                                    if (optionelement.linkOption == 'linkedtable') {
                                        linkTable = 1;
                                        if (element.type == 'radiobutton') {
                                            if (!$("#group5C" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        } else {
                                            if (!$("#chkBox5C" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    } else {
                        tablestatus = 0;
                    }                    
                    if (tablestatus == 1 && $('#input5CQuestionsContinue').val() == '0' && linkTable == 1) {
                        $("#table5C").slideDown('slow');
                        $("#questions5C").slideUp('slow');
                        $('#input5CQuestionsContinue').val('1')                        
                        return false;
                    }  */                  
                    break;
                case 6:                     
                    $('#5cBack').hide();
                    /*if($('#input6AQuestionsContinue').val() == '0') {
                        var validateStatus  =   validateRadioBtnQuestions('6A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }  else { 
                        //Validate table input valuse
                        var validateStatus  =   validateTableInputs('6A');                        
                        if(!validateStatus) {                            
                            return false;
                        }else  if($('input[name="invoice_no_6A"]').val()&&warningStatus6A){
                        $('#6A_warning_alert').slideDown('slow');
                        warningStatus6A=false;
                          setTimeout(function() {
                            $('#6A_warning_alert').slideUp('slow');
                        },6000);
                        return false;
                        }
                        if(savedTabArray[savedTabArray.length-1] != index){
                            savedTabArray.push(index);
                        }
                    } */
                     //Validate table input valuse
                    var validateStatus  =   validateTableInputs('6A');                        
                    if(!validateStatus) {                            
                        return false;
                    }else  if($('input[name="invoice_no_6A"]').val()&&warningStatus6A){
                        $('#6A_warning_alert').slideDown('slow');
                        warningStatus6A=false;
                          setTimeout(function() {
                            $('#6A_warning_alert').slideUp('slow');
                        },6000);
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }                     
                break;
                case 7:                      
                    //Validate table input valuse
                    var validateStatus  =   validateTableInputs('6B');                        
                    if(!validateStatus) {                            
                        return false;
                    }else  if($('input[name="invoice_no_6B"]').val()&&warningStatus6B){
                          $('#6B_warning_alert').slideDown('slow');
                           warningStatus6B=false;
                        setTimeout(function() {
                            $('#6B_warning_alert').slideUp('slow');
                        },6000);
                        return false;
                        }
                    /*var jsonQuestions   =   $('#input6BQuestions').val();
                    var tablestatus =   1;
                    var linkTable   =   0;
                    if(jsonQuestions) {                            
                        var questionDetails =   JSON.parse(jsonQuestions);                             
                        $.each(questionDetails, function(arrindex, element) {
                           if(element.isLinked) {                                   
                               $.each(element.options, function(optionindex, optionelement) {
                                   if(optionelement.linkOption  ==  'linkedtable'){
                                       linkTable    =   1;
                                       if(element.type  ==  'radiobutton') {
                                            if(!$("#group6B"+element.id+optionelement.optionId+"").is(":checked")) {
                                               tablestatus =   0;
                                            }
                                        } else {
                                            if (!$("#chkBox6B" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    } else {
                        tablestatus = 0;
                    }
                    if (tablestatus == 1 && $('#input6BQuestionsContinue').val() == '0' && linkTable == 1) {
                        $("#table6B").slideDown('slow');
                        $("#questions6B").slideUp('slow');
                        $('#input6BQuestionsContinue').val('1')
                        return false;

                    }*/
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                break;
                case 8: 
                    if($('#input7A7AQuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('7A7A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } else {                    
                        var validateStatus  =   validateTableInputs('7A7A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 9:                    
                    var validateStatus  =   validateTableInputs('7A7B');                        
                    if(!validateStatus) {                            
                        return false;
                    }
                    $('#input7A7BQuestionsContinue').val('1');
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }                    
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    break;
                case 10:                    
                    var validateStatus  =   validateTableInputs('7B');                        
                    if(!validateStatus) {                            
                        return false;
                    }
                    /*var jsonQuestions = $('#input7BQuestions').val();
                    var tablestatus = 1;
                    var linkTable = 0;
                    if (jsonQuestions) {
                        var questionDetails = JSON.parse(jsonQuestions);
                        $.each(questionDetails, function (arrindex, element) {
                            if (element.isLinked) {
                                $.each(element.options, function (optionindex, optionelement) {
                                    if (optionelement.linkOption == 'linkedtable') {
                                        linkTable = 1;
                                        if (element.type == 'radiobutton') {
                                            if (!$("#group7B" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        } else {
                                            if (!$("#chkBox7B" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    } else {
                        tablestatus = 0;
                    }
                    if (tablestatus == 1 && $('#input7BQuestionsContinue').val() == '0' && linkTable == 1) {
                        $("#table7B").slideDown('slow');
                        $("#questions7B").slideUp('slow');
                        $('#input7BQuestionsContinue').val('1')
                        return false;
                    }*/
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    break;
                case 11:                    
                    var validateStatus  =   validateTableInputs('7C');                        
                    if(!validateStatus) {                            
                        return false;
                    }
                    /*var jsonQuestions = $('#input7CQuestions').val();
                    var tablestatus = 1;
                    var linkTable = 0;
                    if (jsonQuestions) {
                        var questionDetails = JSON.parse(jsonQuestions);
                        $.each(questionDetails, function (arrindex, element) {
                            if (element.isLinked) {
                                $.each(element.options, function (optionindex, optionelement) {
                                    if (optionelement.linkOption == 'linkedtable') {
                                        linkTable = 1;
                                        if (element.type == 'radiobutton') {
                                            if (!$("#group7C" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        } else {
                                            if (!$("#chkBox7C" + element.id + optionelement.optionId + "").is(":checked")) {
                                                tablestatus = 0;
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    } else {
                        tablestatus = 0;
                    }
                    if (tablestatus == 1 && $('#input7CQuestionsContinue').val() == '0' && linkTable == 1) {
                        $("#table7C").slideDown('slow');
                        $("#questions7C").slideUp('slow');
                        $('#input7CQuestionsContinue').val('1')
                        return false;
                    }*/
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    break;
                case 12:
                    if($('#input8QuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('8');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } else {
                        var validateStatus  =   validateTableInputs('8');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } 
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 13:
                    if($('#input9AQuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('9A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } else {
                        var validateStatus  =   validateTableInputs('9A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } 
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 14:
                    if($('#input9BQuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('9B');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } else {
                        var validateStatus  =   validateTableInputs('9B');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }   
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 15:
                    if($('#input10AQuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('10A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } else {
                        var validateStatus  =   validateTableInputs('10A');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } 
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 16:
                    if($('#input10BQuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('10B');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } else {
                        var validateStatus  =   validateTableInputs('10B');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    } 
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 17:
                    if($('#input11QuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('11');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }else {
                        var validateStatus  =   validateTableInputs('11');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }                    
                    break;
                case 18:
                    if($('#input12QuestionsContinue').val() == '0') {
                        validateStatus  =   validateRadioBtnQuestions('12');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }else {
                        var validateStatus  =   validateTableInputs('12');                        
                        if(!validateStatus) {                            
                            return false;
                        }
                    }
                    if(!checkQuestionsRule(index)) {
                        return false;
                    }else {
                        if(savedTabArray[savedTabArray.length-1] != index){
                            savedTabArray.push(index);
                        }
                        $('#save_return_draft').trigger("click");
                        $('.page-loader-wrapper').show();
                        setTimeout(function () {
                            location.href = location.href + '?tabId=18';
                        }, 1000);
                    }                    
                    break;
                default:

                    break;

            }
        },
        onTabShow: function (tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index + 1;
            var $percent = ($current / $total) * 100;
            $('#rootwizard .progress-bar').css({width: $percent + '%'});
            if ($current >= $total) {
                $('#rootwizard').find('.pager .save').hide();
            } else {
                $('#rootwizard').find('.pager .save').show();
            }
        },
        onTabClick: function (tab, navigation, index) {
            return false;
        }
    });

    //Jump to last saved tab section
    $('#rootwizard').bootstrapWizard('show', $('#last_tab_id').val());

    /* Main Tab Wizzard */   
    $('#rootwizard2').bootstrapWizard({
        onTabShow: function (tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index + 1;
            if ($current >= $total) {
                $('#rootwizard2').find('.pager .save').hide();
            } else {
                $('#rootwizard2').find('.pager .save').show();
            }
        },
        onTabClick: function (tab, navigation, index) {
            return false;
        },
        'tabClass': 'nav nav-pills',
        'onNext': function (tab, navigation, index) {
            /* var $valid = $("#commentForm").valid();
             if (!$valid) {
             $validator.focusInvalid();
             return false;
             }
             */
        }
    });



    /*SHOW ALL TABLES*/
    $("#removeHide").change(function () {
        if (this.checked) {
            $('.nav-tabs > li, .tab-pane').removeClass('hide');
        } else {
            $('.nav-tabs > li.extra-tables, .tab-pane.extra-tables ').addClass('hide');
        }
    });




    /*ADD NEW ROW*/
    var tbody = $('#5ATable').children('tbody');
    var table = tbody.length ? tbody : $('#5ATable');
    /*$('#addRow5A').click(function() {
     table.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="datepicker form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5A"><i class="material-icons">remove</i></button></td></tr>');
     })*/

    $('#addRow5A').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table.append('<tr><td><div class="form-group"><div class="form-line"><select class="nature_of_itc_5A" name="nature_of_itc_5A" id="nature_of_itc_5A_' + randomNumber + '" style="width:100%"><option selected value="">-- Select--</option><option value="service_tax">Service Tax </option><option>Krishi Kalyan Cess  (not available to manufacturers)</option><option value="cental_excise">Central Excise</option><option>CVD under Customs Act</option><option>SAD under Customs Act (not available to service providers)</option><option>NCCD on inputs</option></select></div> <label class="error error_nature_of_itc_5A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control registrationNumberFormat" name="registration_number_5A" id="registration_number_5A_' + randomNumber + '"></div><label class="error error_registration_number_5A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control tax_period" name="tax_period_5A"></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="datepicker form-control" name="date_of_filling_5A" id="date_of_filling_5A_' + randomNumber + '"></div><label class="error error_date_of_filling_5A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" id="balance_cenvat_credit_5A_' + randomNumber + '"></div><label class="error error_balance_cenvat_credit_5A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" id="cenvat_credit_admissible_5A_' + randomNumber + '"></div><label class="error error_cenvat_credit_admissible_5A" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
        callDatePicker();
        resetFormValidator('fiveAForm');

    });
    function callDatePicker() {
        $('.datepicker').bootstrapMaterialDatePicker({
            // format: 'dddd DD MMMM YYYY',
            format: 'DD/MM/YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
           
        });
    }
    
     function callInvoiceDatePicker() {
        $('.invoiceDatepicker').bootstrapMaterialDatePicker({
           format : 'DD/MM/YYYY',
            clearButton: true,
            weekStart: 1,
            time: false,
            maxDate :'30/06/2017',
        });
    }
    $('#wizard').on('change', '.calculateTotal', function () {

        calculateTotal($(this).data("formname"), $(this).attr("name"));

    });
    
    $('#wizard').on('change', '.calculateValue', function () {
        var formName    =   $(this).data("formname")
        var totalValue       =   0;
        if($(this).attr("name") ==  'unit_'+formName){
            var index   =   $('input[name="unit_'+formName+'"]').index(this);
        }else {
            var index   =   $('input[name="quantity_'+formName+'"]').index(this);
        }
        totalValue   =  $('input[name="unit_'+formName+'"]').eq(index).val()* $('input[name="quantity_'+formName+'"]').eq(index).val();
        $('input[name="value_'+formName+'"]').eq(index).val(totalValue);   
        $('input[name="value_'+formName+'"]').eq(index).trigger("change");
    });
    
    /**
     * Vinod
     * July 11, 2017
     */
    $('#wizard #table5CCtbody').on('change', '.calculate5CC', function () 
    {
        var varturnover_pending = $(this).closest('tr').find('.turnover_pending').val();
        var state_vat = $(this).closest('tr').find('.state_vat').val();
        var total = (parseFloat(varturnover_pending) * (parseFloat(state_vat)/100)) - (parseFloat(varturnover_pending) * (2 / 100)).toFixed(2);        
        if (isNaN(total)) 
        {
            //do nothing
              $(this).closest('tr').find('.tax_payble').val('');
        }
        else
        {
            $(this).closest('tr').find('.tax_payble').val(total);
        }
    });
     
    /**
     * Vinod
     * July 11, 2017
     */
    $('#wizard #table5CFtbody').on('change', '.calculate5CF', function () 
    {
        var varturnover_pending = $(this).closest('tr').find('.turnover_pending').val();
        var state_vat = $(this).closest('tr').find('.state_vat').val();
        var total = ((parseFloat(varturnover_pending)) * ((parseFloat(state_vat)/100))).toFixed(2);        
        if (isNaN(total)) 
        {
            //do nothing
              $(this).closest('tr').find('.tax_payble').val('');
        }
        else
        {
            $(this).closest('tr').find('.tax_payble').val(total);
        }
    });
    /**
     * Vinod
     * July 11, 2017
     */

    $('#wizard #table5CItbody').on('change', '.calculate5CI', function () 
    {
        var varturnover_pending = $(this).closest('tr').find('.turnover_pending').val();
        var state_vat = $(this).closest('tr').find('.state_vat').val();
        var total = ((parseFloat(varturnover_pending)) * ((parseFloat(state_vat)/100))).toFixed(2);        
        if (isNaN(total)) 
        {
            //do nothing
            $(this).closest('tr').find('.tax_payble').val('');
        }
        else
        {
            $(this).closest('tr').find('.tax_payble').val(total);
        }
    });
    /**
     * Vinod
     * July 11, 2017
     */

    $('#wizard #table5CHtbody').on('change', '.calculate5CH', function () 
    {
        var varturnover_pending = $(this).closest('tr').find('.turnover_pending').val();
        var state_vat = $(this).closest('tr').find('.state_vat').val();
        var total = ((parseFloat(varturnover_pending)) * ((parseFloat(state_vat)/100))).toFixed(2);        
        if (isNaN(total)) 
        {
            //do nothing
              $(this).closest('tr').find('.tax_payble').val('');
        }
        else
        {
            $(this).closest('tr').find('.tax_payble').val(total);
        }
    });
    
    //cenvat_credit_unavailed_6A val based on 
     $('#wizard #table6Atbody').on('change', '.calculateCenvatCredit', function () 
    {
        var eligible_cenvat_6A= $(this).closest('tr').find('.eligible_cenvat_6A').val();
        var cenvat_credit_availed_6A=$(this).closest('tr').find('.cenvat_credit_availed_6A').val();
       
        var total = ((parseFloat(eligible_cenvat_6A))-(parseFloat(cenvat_credit_availed_6A)));        
        if (isNaN(total)) 
        {
            //do nothing
              $(this).closest('tr').find('.cenvat_credit_unavailed_6A').val('');
        }
        else
        {
            if(total < 0)
            {
                total = 0;
            }
            $(this).closest('tr').find('.cenvat_credit_unavailed_6A').val(total);
        //calculateTotal('6A', 'eligible_cenvat_6A_totals');
        //calculateTotal('6A', 'cenvat_credit_availed_6A_totals');
      
        }
          calculateTotal('6A', 'cenvat_credit_unavailed_6A');
    });
    
    //Calculate total
    function calculateTotal(form_name, inputName) {
        var total = 0;
        $('input[name="' + inputName + '"]').each(function (index) {
            total += Number($(this).val());
        });
        if(form_name == '6A' && inputName == 'cenvat_credit_unavailed_6A')
        {
            if(total < 0)
            {
                total = 0;
            }
        }
        $('#' + inputName + '_total').html(total);
    }
    $('#table5Atbody').on('click', '.removeRow5A', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('5A', 'balance_cenvat_credit_5A');
        calculateTotal('5A', 'cenvat_credit_admissible_5A');


    });
    $('#table5Ctbody').on('click', '.removeRow5C', function () {
        $(this).closest('tr').remove();
    });
    $('#table5Btbody').on('click', '.removeRow5B', function () {
         $(this).tooltip('hide');
        $(this).closest('tr').remove();
        var fileRowClass = $.trim($(this).attr('fileClass'));
        var fileRowLength = $('.'+fileRowClass).length;
        if(fileRowLength == '0')
        {
            $('#'+fileRowClass).remove();
        }        
        var totalRows = $('input[name^="form_serial_no_5B"]').length;
        if(totalRows == 0)
        {
            var tbody2 = $('#5BTable').children('tbody');
            var table2 = tbody2.length ? tbody2 : $('#5BTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table2.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_form_5B" id="type_of_form_5B_' + randomNumber + '"><option selected disabled>-- Select--</option><option>C </option><option>F</option><option>H</option><option>I</option></select></div><label class="error error_type_of_form_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="form_serial_no_5B" id="form_serial_no_5B_' + randomNumber + '"/></div><label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="tin_issuer_5B" id="tin_issuer_5B_' + randomNumber + '"/></div><label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control"  name="issuer_name_5B" id="issuer_name_5B_' + randomNumber + '"/></div><label class="error error_issuer_name_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="sales_value_5B" class="form-control" id="sales_value_5B_' + randomNumber + '"/></div><label class="error error_sales_value_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="vat_rate_5B"  class="form-control" id="vat_rate_5B_' + randomNumber + '"/></div><label class="error error_vat_rate_5B" style="display: none;">This field is required.</label></div></td></tr>');
            $('select').selectpicker('refresh');
        }

    });
    $('#clearAllRows5B').click(function () 
    {
        var confirmDelete = confirm("Are you want to clear all rows?")
        if(confirmDelete)
        {
            $('#table5Btbody').empty();
            $('#uploadedFile').empty();
            $('#fileAddingStatus').val(0);
            var tbody2 = $('#5BTable').children('tbody');
            var table2 = tbody2.length ? tbody2 : $('#5BTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table2.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_form_5B" id="type_of_form_5B_' + randomNumber + '"><option selected disabled>-- Select--</option><option>C </option><option>F</option><option>H</option><option>I</option></select></div><label class="error error_type_of_form_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="form_serial_no_5B" id="form_serial_no_5B_' + randomNumber + '"/></div><label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="tin_issuer_5B" id="tin_issuer_5B_' + randomNumber + '"/></div><label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control"  name="issuer_name_5B" id="issuer_name_5B_' + randomNumber + '"/></div><label class="error error_issuer_name_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="sales_value_5B" class="form-control" id="sales_value_5B_' + randomNumber + '"/></div><label class="error error_sales_value_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="vat_rate_5B"  class="form-control" id="vat_rate_5B_' + randomNumber + '"/></div><label class="error error_vat_rate_5B" style="display: none;">This field is required.</label></div></td></tr>');
            $('select').selectpicker('refresh');
        }

    });    
    
    $('#table6Atbody').on('click', '.removeRow6A', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('6A', 'capital_good_value_6A_totals');
        calculateTotal('6A', 'capital_good_cvd_6A_totals');
        calculateTotal('6A', 'capital_good_sad_6A_totals');
        calculateTotal('6A', 'eligible_cenvat_6A_totals');
        calculateTotal('6A', 'cenvat_credit_availed_6A_totals');
        calculateTotal('6A', 'cenvat_credit_unavailed_6A_6A_totals');
    });
    $('#table6Btbody').on('click', '.removeRow6B', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('6B', 'capital_good_value_6B_total');
        calculateTotal('6B', 'capital_good_vat_6B_total');
        calculateTotal('6B', 'eligible_vat_6B_total');
        calculateTotal('6B', 'vatCredit_availed_6B_total');
        calculateTotal('6B', 'vat_credit_unavailed_6B_total');
    });
    $('#table7A7Atbody').on('click', '.removeRow7A7A', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table7A7Btbody').on('click', '.removeRow7A7B', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table7Btbody').on('click', '.removeRow7B', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table7Ctbody').on('click', '.removeRow7C', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table8tbody').on('click', '.removeRow8', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table9Atbody').on('click', '.removeRow9A', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('9A', 'unit_9A');
        calculateTotal('9A', 'quantity_9A');
        calculateTotal('9A', 'value_9A');
    });
    $('#table9Btbody').on('click', '.removeRow9B', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('9B', 'unit_9B');
        calculateTotal('9B', 'quantity_9B');
        calculateTotal('9B', 'value_9B');
    });
    $('#table10Atbody').on('click', '.removeRow10A', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table10Btbody').on('click', '.removeRow10B', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
    });
    $('#table11tbody').on('click', '.removeRow11', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('11', 'tax_paid_11');
        calculateTotal('11', 'tax_credit_11');
    });
    $('#table12tbody').on('click', '.removeRow12', function () {
        $(this).tooltip('hide');
        $(this).closest('tr').remove();
        calculateTotal('12', 'unit_12');
        calculateTotal('12', 'quantity_12');
        calculateTotal('12', 'value_12');
    });
    $(".btn-continue-to-next").click(function () {
        $("#" + $(this).attr("data-current-tab")).removeClass("active");
        $("#" + $(this).attr("data-next-tab")).addClass("active");

    });
    
    
    $('#chkBoxG1ServiceProvider').change(function () {
        if ($(this).is(":checked")) {
            $('#7A7AQ14').slideDown();
            $('#7A7AQ12').slideUp();
        } else {
            $('#7A7AQ14').slideUp();
            $('#7A7AQ12').slideDown();
        }
    });

    //For csrf tocken global
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });


    $('#continue').on('click', function () {
        if ($('.nav-pills li.active a').attr('href') == '#tab1') {    
           
            questionIem = {};
            
            questionIem["gstnId"] = $('input[name="gstnId"]').val();
           
           saveGenralTabDetails();
         
            // data=JSON.stringify(questionIem);
            $('.page-loader-wrapper').show();
            $.ajax({
                type: 'POST',
                url: siteUrl + '/updated-register-person-detail',
                data: {'registerPerson': questionIem},
                success: function (data) {
                    // alert(data);
                    $('.page-loader-wrapper').hide();
                    console.log(data);

                    // showSuccessMessage();
                },
                error: function () {
                    return false;
                }
            });           
        }
        
    });


    $('#save_return_draft').click(function () {
        submitObject = {};
        questionIem = {};
        questionDetailArray = [];
       // if ($('.nav-pills li.active a').attr('href') == '#tab1') {
            var errorStatus =   0;
                    if ($("#group3VAT").is(":checked")) {
                       
                        if(!$("#vatRegNo").val()){
                            $("#error_vat_reg_GQ").html('This field is required');
                            $("#error_vat_reg_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[A-Za-z0-9 _.-]+$/.test($("#vatRegNo").val())){
                                $("#error_vat_reg_GQ").html('Only AlphaNumberic Allowed');
                                $("#error_vat_reg_GQ").slideDown();
                            errorStatus =   1;
                        }
                        
                        if(($('.vatchoice:checked').val()=='normal_registration') && !$("#TinNoInState").val()){
                            $("#error_tin_no_in_state").html('This field is required');
                            $("#error_tin_no_in_state").slideDown();
                            errorStatus =   1;
                        }else if($('.vatchoice:checked').val()=='normal_registration' && !/^[0-9]{1,45}$/.test($("#TinNoInState").val())){
                                $("#error_tin_no_in_state").html('Only Numberic Allowed');
                                $("#error_tin_no_in_state").slideDown();
                            errorStatus =   1;
                        }
                    }
                    
                    
                     if ($("#group3EntryTax").is(":checked")) {
                       
                        if(!$("#entryTax").val()){
                            $("#error_entry_tax_GQ").html('This field is required');
                            $("#error_entry_tax_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[A-Za-z0-9 _.-]+$/.test($("#entryTax").val())){
                                $("#error_entry_tax_GQ").html('Only AlphaNumberic Allowed');
                                $("#error_entry_tax_GQ").slideDown();
                            errorStatus =   1;
                        }
                        
                        if(($('.entrytaxchoice:checked').val()=='normal_registration') &&!$("#AmountEntryCarriedForward").val()){
                            $("#error_amount_entry_caarried_forward").html('This field is required');
                            $("#error_amount_entry_caarried_forward").slideDown();
                            errorStatus =   1;
                        }else if(($('.entrytaxchoice:checked').val()=='normal_registration') && !/^[0-9]{1,45}$/.test($("#AmountEntryCarriedForward").val())){
                                $("#error_amount_entry_caarried_forward").html('Only Numberic Allowed');
                                $("#error_amount_entry_caarried_forward").slideDown();
                            errorStatus =   1;
                        }
                    }
                    
                    if ($("#group3ServiceTax").is(":checked")) {
                       if(!$("#serviceTaxRegNo").val()) {
                            $("#error_service_tax_GQ").html('This field is required');
                            $("#error_service_tax_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}['ST'|'SD']{2}[0-9]{3}$/.test($("#serviceTaxRegNo").val())){
                            $("#error_service_tax_GQ").html('Invalid input given');
                            $("#error_service_tax_GQ").slideDown();
                            errorStatus =   1;
                        }
                        if(($('.servicechoice:checked').val()=='normal_registration') && !$("#AmountVatCarriedForward").val()){
                            $("#error_AmountVatCarriedForward").html('This field is required');
                            $("#error_AmountVatCarriedForward").slideDown();
                            errorStatus =   1;
                        }else if(($('.servicechoice:checked').val()=='normal_registration') && isNaN($("#AmountVatCarriedForward").val())) {
                            $("#error_AmountVatCarriedForward").html('Accepet only numbers');
                            $("#error_AmountVatCarriedForward").slideDown();
                            errorStatus =   1;
                        }
                    }
                    if ($("#group3Excise").is(":checked")) {
                        if(!$("#exciseRegNo").val()) {
                            $("#error_excise_reg_no_GQ").html('This field is required');
                            $("#error_excise_reg_no_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}['EM'|'ED']{2}[0-9]{3}$/.test($("#exciseRegNo").val())){
                            $("#error_excise_reg_no_GQ").html('Invalid input given');
                            $("#error_excise_reg_no_GQ").slideDown();
                            errorStatus =   1;
                        }
                        if(($('.excisechoice:checked').val()=='normal_registration') && !$("#TinNoInStateEntryTax").val()){
                            $("#error_TinNoInStateEntryTax").html('This field is required');
                            $("#error_TinNoInStateEntryTax").slideDown();
                            errorStatus =   1;
                        }else if(($('.excisechoice:checked').val()=='normal_registration') && isNaN($("#TinNoInStateEntryTax").val())) {
                            $("#error_TinNoInStateEntryTax").html('Accepet only numbers');
                            $("#error_TinNoInStateEntryTax").slideDown();
                            errorStatus =   1;
                        }
                    }
                    if(errorStatus ==   1) {
                       return false; 
                    }
            questionIemArray = [];
            questionIem = {};
            
            saveGenralTabDetails();
            questionIemArray.push(questionIem);
            submitObject['generalQuestion'] = questionIemArray;

            
           
     // } 
        fiveCC = [];
        $('#table5CCtbody select[name="type_of_tax_5cc"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CCtbody input[name="name_of_issuer_5cc"]:eq(' + index + ')').val();
            var turnoverPending = $('#table5CCtbody input[name="turnover_pending_5cc"]:eq(' + index + ')').val();
            var stateVat = $('#table5CCtbody input[name="state_vat_5cc"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CCtbody input[name="tax_payble"]:eq(' + index + ')').val()
            var taxAlreadyPaid = $('#table5CCtbody input[name="tax_already_paid_5cc"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CCtbody input[name="input_already_reversed_5cc"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CCtbody input[name="category_5cc"]').val();

            item = {};
            if (typeOfTax != '' && nameOfIssuer != '' && turnoverPending != '' && stateVat != '' && taxPayable != '' && taxAlreadyPaid != '' && inputAlreadyReversed != '' && fiveCCategory != '') {
                item["typeOfTax"] = typeOfTax;
                item["nameOfIssuer"] = nameOfIssuer;
                item["turnoverPending"] = turnoverPending;
                item["stateVat"] = stateVat;
                item["taxPayable"] = taxPayable;
                item["taxAlreadyPaid"] = taxAlreadyPaid;
                item["inputAlreadyReversed"] = inputAlreadyReversed;
                item["fiveCCategory"] = fiveCCategory;
                
                fiveCC.push(item);
            }
        });

        $('#table5CFtbody select[name="type_of_tax_5cf"]').each(function (index) {
           // alert(index);
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CFtbody input[name="name_of_issuer_5cf"]:eq(' + index + ')').val();
            var turnoverPending = $('#table5CFtbody input[name="turnover_pending_5cf"]:eq(' + index + ')').val();
            var stateVat = $('#table5CFtbody input[name="state_vat_5cf"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CFtbody input[name="tax_payble"]:eq(' + index + ')').val();
            var taxAlreadyPaid = $('#table5CFtbody input[name="tax_already_paid_5cf"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CFtbody input[name="input_already_reversed_5cf"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CFtbody input[name="category_5cf"]').val();
          
            item = {};

            if (typeOfTax != '' && nameOfIssuer != '' && turnoverPending != '' && stateVat != '' && taxPayable != '' && taxAlreadyPaid != '' && inputAlreadyReversed != '' && fiveCCategory != '') {
                item["typeOfTax"] = typeOfTax;
                item["nameOfIssuer"] = nameOfIssuer;
                item["turnoverPending"] = turnoverPending;
                item["stateVat"] = stateVat;
                item["taxPayable"] = taxPayable;
                item["taxAlreadyPaid"] = taxAlreadyPaid;
                item["inputAlreadyReversed"] = inputAlreadyReversed;
                item["fiveCCategory"] = fiveCCategory;
                

                fiveCC.push(item);
                // console.log(item);
            }
        });

        $('#table5CHtbody select[name="type_of_tax_5ch"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CHtbody input[name="name_of_issuer_5ch"]:eq(' + index + ')').val();
            var turnoverPending = $('#table5CHtbody input[name="turnover_pending_5ch"]:eq(' + index + ')').val();
            var stateVat = $('#table5CHtbody input[name="state_vat_5ch"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CHtbody input[name="tax_payble"]:eq(' + index + ')').val();
            var taxAlreadyPaid = $('#table5CHtbody input[name="tax_already_paid_5ch"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CHtbody input[name="input_already_reversed_5ch"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CHtbody input[name="category_5ch"]').val();
            item = {};
            if (typeOfTax != '' && nameOfIssuer != '' && turnoverPending != '' && stateVat != '' && taxPayable != '' && taxAlreadyPaid != '' && inputAlreadyReversed != '' && fiveCCategory != '') {
                item["typeOfTax"] = typeOfTax;
                item["nameOfIssuer"] = nameOfIssuer;
                item["turnoverPending"] = turnoverPending;
                item["stateVat"] = stateVat;
                item["taxPayable"] = taxPayable;
                item["taxAlreadyPaid"] = taxAlreadyPaid;
                item["inputAlreadyReversed"] = inputAlreadyReversed;
                item["fiveCCategory"] = fiveCCategory;
            
                fiveCC.push(item);
            }
        });

        $('#table5CItbody select[name="type_of_tax_5ci"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CItbody input[name="name_of_issuer_5ci"]:eq(' + index + ')').val();
            var turnoverPending = $('input[name="turnover_pending_5ci"]:eq(' + index + ')').val();
            var stateVat = $('#table5CItbody input[name="state_vat_5ci"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CItbody input[name="tax_payble"]:eq(' + index + ')').val();
            var taxAlreadyPaid = $('#table5CItbody input[name="tax_already_paid_5ci"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CItbody input[name="input_already_reversed_5ci"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CItbody input[name="category_5ci"]').val();
            item = {};
            if (typeOfTax != '' && nameOfIssuer != '' && turnoverPending != '' && stateVat != '' && taxPayable != '' && taxAlreadyPaid != '' && inputAlreadyReversed != '' && fiveCCategory != '') {
                item["typeOfTax"] = typeOfTax;
                item["nameOfIssuer"] = nameOfIssuer;
                item["turnoverPending"] = turnoverPending;
                item["stateVat"] = stateVat;
                item["taxPayable"] = taxPayable;
                item["taxAlreadyPaid"] = taxAlreadyPaid;
                item["inputAlreadyReversed"] = inputAlreadyReversed;
                item["fiveCCategory"] = fiveCCategory;
           

                fiveCC.push(item);
            }
        });
        
        generalIem = {};
        var fiveCCategory = $('input[name="category_5cg"]').val();
        var sellerInState = $('input[name="seller_in_state_5cg"]').val();
        var sellerVatCarriedForward = $('input[name="seller_vat_carried_forward_5cg"]').val();
        var tinNumberInState = $('input[name="tin_no_seller_state_5cg"]').val();
        var vatCarriedForward = $('input[name="vat_carried_forward_5cg"]').val();
        if (fiveCCategory != '' & sellerInState != '' && sellerVatCarriedForward != '' && tinNumberInState != '' && vatCarriedForward != '') {

            generalIem['fiveCCategory'] = fiveCCategory;
            generalIem['sellerInState'] = sellerInState;
            generalIem['sellerVatCarriedForward'] = sellerVatCarriedForward;
            generalIem['tinNumberInState'] = tinNumberInState;
            generalIem['vatCarriedForward'] = vatCarriedForward;
            fiveCC.push(generalIem);

        }
        submitObject['fiveCC'] = fiveCC;

        fiveA = [];

        $('input[name^="registration_number_5A"]').each(function (index) {

            item = {};
            var natureOfItc = $('select[name=nature_of_itc_5A]').eq(index).find("option:selected").text();
            var registrationNo = $(this).val();
            var taxPeriod = $('input[name="tax_period_5A"]:eq(' + index + ')').val();
            var dateFiling = $('input[name="date_of_filling_5A"]:eq(' + index + ')').val();
            var balanceCenvatCredit = $('input[name="balance_cenvat_credit_5A"]:eq(' + index + ')').val();
            var balanceCenvatAdmissible = $('input[name="cenvat_credit_admissible_5A"]:eq(' + index + ')').val();
            if (natureOfItc != '' && registrationNo != '' && taxPeriod != '' && dateFiling != '' && balanceCenvatCredit != '' && balanceCenvatAdmissible != '') {
                item["natureOfItc"] = natureOfItc;
                item["registrationNo"] = registrationNo;
                item["taxPeriod"] = taxPeriod;
                item["dateFiling"] = dateFiling;
                item["balanceCenvatCredit"] = balanceCenvatCredit;
                item["balanceCenvatAdmissible"] = balanceCenvatAdmissible;
             

                fiveA.push(item);
            }
        });
        submitObject['fiveA'] = fiveA;

     saveQuestionDetail('5A');

            fiveB = [];
            $('input[name^="tin_issuer_5B"]').each(function (index) {

                item = {};
                var type = $('select[name=type_of_form_5B]').eq(index).find("option:selected").text();
                var tinIssuer = $(this).val();
                var issuerName = $('input[name="issuer_name_5B"]:eq(' + index + ')').val();
                var salesValue = $('input[name="sales_value_5B"]:eq(' + index + ')').val();
                var formSerialNo = $('input[name="form_serial_no_5B"]:eq(' + index + ')').val();
                var vatRate = $('input[name="vat_rate_5B"]:eq(' + index + ')').val();
              
               // console.log(type+'='+tinIssuer+'='+issuerName+'='+salesValue+'=');
                if (type != '' && tinIssuer != '' && issuerName != '' && salesValue != '' && formSerialNo != '' && vatRate != '') {
                   
                    item["type"] = type;
                    item["tinIssuer"] = tinIssuer;
                    item["issuerName"] = issuerName;
                    item["salesValue"] = salesValue;

                    item["formSerialNo"] = formSerialNo;
                    item["amount"] = 2;
                    item["vatRate"] = vatRate;
                   
                    fiveB.push(item);

                }else{
                  
                }
               
            });
        
            submitObject['fiveB'] = fiveB;
            
            saveQuestionDetail('5B');
        
          if ($('input[name^="cfhi_forms_5B"]').val()) {
           
            var formData = new FormData();
            for (var i = 0; i < $('input[name="cfhi_forms_5B[]"]').get(0).files.length; ++i) {
                formData.append('file' + i, $('input[name="cfhi_forms_5B[]"]')[0].files[i]);
                //alert('here');
            }
                
            $.ajax({
                type: 'POST',
                url: siteUrl+'/upload-5B-form-files',
                processData: false,
                data: formData,
                contentType: false,
                async: false,
                success: function (data) {

                },
                error: function () {

                }
            });




        }
      //return false;

        fiveC = [];
        $('input[name^="registration_no_5C"]').each(function (index) {
            item = {};
            var registration_no = $(this).val();
            var itc_balance = $('input[name="itc_balance_5C"]:eq(' + index + ')').val();
            var cForm_pending = $('input[name="cForm_pending_5C"]:eq(' + index + ')').val();
            var diff_tax_payable = $('input[name="diff_tax_payable_5C"]:eq(' + index + ')').val();
            var fForm_pending = $('input[name="fForm_pending_5C"]:eq(' + index + ')').val();
            var fTax_payable = $('input[name="fTax_payable_5C"]:eq(' + index + ')').val();
            var itc_reversal = $('input[name="itc_reversal_5C"]:eq(' + index + ')').val();
            var hForm_pedning = $('input[name="hForm_pedning_5C"]:eq(' + index + ')').val();
            var hTax_payable = $('input[name="hTax_payable_5C"]:eq(' + index + ')').val();
            var transition = $('input[name="transition_5C"]:eq(' + index + ')').val();
            if (registration_no != '' && itc_balance != '' && cForm_pending != '' && diff_tax_payable != '' && fForm_pending != ''
                    && fTax_payable != '' && itc_reversal != '' && itc_reversal != '' && hForm_pedning != '' && hTax_payable != '' && transition != '') {
                item["registration_no"] = registration_no;
                item["itc_balance"] = itc_balance;
                item["cForm_pending"] = cForm_pending;
                item["diff_tax_payable"] = diff_tax_payable;
                item["fForm_pending"] = fForm_pending;
                item["fTax_payable"] = fTax_payable;
                item["itc_reversal"] = itc_reversal;
                item["hForm_pedning"] = hForm_pedning;
                item["hTax_payable"] = hTax_payable;
                item["transition"] = transition;
                // item["fTax_payable"] = $('input[name="fTax_payable"]:eq('+index+')').val();
                fiveC.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['fiveC'] = fiveC;
        sixA = [];
        $('input[name^="invoice_no_6A"]').each(function (index) {
            item = {};

            var invoiceNo = $(this).val();
             var capitalGood = $('input[name="capital_goods_6A"]:eq(' + index + ')').val();
           
            //var itcCarriedForward = $('select[name=itc_carried_forward_6A]').eq(index).find("option:selected").text();
            var itcCarriedForward='null';
            var invoiceDate = $('input[name="invoice_date_6A"]:eq(' + index + ')').val();
            var supplierRegNo = $('input[name="supplier_reg_no_6A"]:eq(' + index + ')').val();
            var recipientRegNo = $('input[name="recipient_regno_6A"]:eq(' + index + ')').val();
            var capitalGoodValue = $('input[name="capital_good_value_6A"]:eq(' + index + ')').val();
            var capitalGoodCvd = $('input[name="capital_good_cvd_6A"]:eq(' + index + ')').val();
            var capitalGoodSad = $('input[name="capital_good_sad_6A"]:eq(' + index + ')').val();
            var eligibleCenvat = $('input[name="eligible_cenvat_6A"]:eq(' + index + ')').val();
            var cenvatCreditAvailed = $('input[name="cenvat_credit_availed_6A"]:eq(' + index + ')').val();
            var cenvatCreditUnavailed = $('input[name="cenvat-credit_unavailed_6A"]:eq(' + index + ')').val();
            if (invoiceNo != '' && itcCarriedForward != '' && invoiceDate != '' && supplierRegNo != '' && recipientRegNo != '' && capitalGoodValue != '' && capitalGoodCvd != '' && capitalGoodSad != ''
                    && eligibleCenvat != '' && cenvatCreditAvailed != '' && cenvatCreditUnavailed != '') {
                item["invoiceNo"] = invoiceNo;
                 item["capitalGood"] = capitalGood;
                item["itcCarriedForward"] = itcCarriedForward;
                item["invoiceDate"] = invoiceDate;
                item["supplierRegNo"] = supplierRegNo;
                item["recipientRegNo"] = recipientRegNo;
                item["capitalGoodValue"] = capitalGoodValue;
                item["capitalGoodCvd"] = capitalGoodCvd;
                item["capitalGoodSad"] = capitalGoodSad;
                item["eligibleCenvat"] = eligibleCenvat;
                item["cenvatCreditAvailed"] = cenvatCreditAvailed;
                item["cenvatCreditUnavailed"] = cenvatCreditUnavailed;
              
                sixA.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['sixA'] = sixA;
          saveQuestionDetail('6A');
          
        sixB = [];
        $('input[name^="invoice_no_6B"]').each(function (index) {
            item = {};
            var invoiceNo = $(this).val();
            var invoiceDate = $('input[name="invoice_date_6B"]:eq(' + index + ')').val();
            var capitalGoods = $('input[name="capital_goods_6B"]:eq(' + index + ')').val();
          //  var itcCarriedForward = $('.itc_carried_forward_6B select').eq(index).find("option:selected").text();
             var itcCarriedForward = 'NONE';
            var supplierRegNo = $('input[name="supplier_reg_no_6B"]:eq(' + index + ')').val();
          //  var recipientRegNo = $('input[name="recipient_reg_no_6B"]:eq(' + index + ')').val();
           var recipientRegNo ='123456';
            var capitalGoodValue = $('input[name="capital_good_value_6B"]:eq(' + index + ')').val();
            var capitalGoodVat = $('input[name="capital_good_vat_6B"]:eq(' + index + ')').val();
            var eligibleVat = $('input[name="eligible_vat_6B"]:eq(' + index + ')').val();
            var vatCreditAvailed = $('input[name="vatCredit_availed_6B"]:eq(' + index + ')').val();
            var vatCreditUnavailed = $('input[name="vat_credit_unavailed_6B"]:eq(' + index + ')').val();

            if (invoiceNo != '' && invoiceDate != '' && capitalGoods != '' && itcCarriedForward != '' && supplierRegNo != '' && recipientRegNo != ''
                    && capitalGoodValue != '' && capitalGoodVat != '' && eligibleVat != '' && vatCreditAvailed != '' && vatCreditUnavailed != '') {

                item["invoiceNo"] = invoiceNo;
                item["invoiceDate"] = invoiceDate;
                item["capitalGoods"] = capitalGoods;
                item["itcCarriedForward"] = itcCarriedForward;
                item["supplierRegNo"] = supplierRegNo;
                item["recipientRegNo"] = recipientRegNo;
                item["capitalGoodValue"] = capitalGoodValue;
                item["capitalGoodVat"] = capitalGoodVat;
                item["eligibleVat"] = eligibleVat
                item["vatCreditAvailed"] = vatCreditAvailed;
                item["vatCreditUnavailed"] = vatCreditUnavailed;

                sixB.push(item);
            }
         
        });
        submitObject['sixB'] = sixB;
         saveQuestionDetail('6B');
        sevenA7A = [];
        $('select[name^="nature_of_itc_7a7a"]').each(function (index) {
            item = {};
            var hsn =$('input[name="hsn_7A7A"]:eq(' + index + ')').val();
              var type =  $(this).val();
            //$('.nature_of_itc_7a7a select').eq(index).find("option:selected").text();
            var unit = $('input[name="unit_7A7A"]:eq(' + index + ')').val();
            var description = $('input[name="hsn_7A7A_desc"]:eq(' + index + ')').val();
            
            var quantity = $('input[name="quantity_7A7A"]:eq(' + index + ')').val();
            var value = $('input[name="value_7A7A"]:eq(' + index + ')').val();
            var dutiesPaid = $('input[name="duties_paid_7A7A"]:eq(' + index + ')').val();
            if (hsn != '' && unit != '' && quantity != '' && value != '' && dutiesPaid != '') {
                  item["type"] = type;
                item["hsn"] = hsn;
                item["unit"] = unit;
                item["description"] = description;
                item["quantity"] = quantity;
                item["value"] = value;
                item["dutiesPaid"] = dutiesPaid;
                sevenA7A.push(item);
            }
            
        });
        submitObject['sevenA7A'] = sevenA7A;
         saveQuestionDetail('7A7A');
        sevenA7B = [];
        $('input[name^="hsn_7A7B"]').each(function (index) {
            item = {};
            var hsn = $(this).val();
            
            var type = $('.nature_of_itc_7a7b select').eq(index).find("option:selected").text();
            var unit = $('input[name="unit_7A7B"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_7A7B"]:eq(' + index + ')').val();
            var value = $('input[name="value_7A7B"]:eq(' + index + ')').val();
            var dutiesPaid = $('input[name="duties_paid_7A7B"]:eq(' + index + ')').val();
          
            if (hsn != '' && unit != '' && quantity != '' && value != '' && dutiesPaid != '') {
                item["type"] = type;
                item["hsn"] = hsn;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["dutiesPaid"] = dutiesPaid;
                sevenA7B.push(item);
            }
         
        });
        submitObject['sevenA7B'] = sevenA7B;
       
         saveQuestionDetail('7A7B');
        sevenB = [];
        $('input[name^="description_7B"]').each(function (index) {
            item = {};

            var description = $(this).val();
                 var type = $('.type_7b select').eq(index).find("option:selected").text();
            var unit = $('input[name="unit_7B"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_7B"]:eq(' + index + ')').val();
            var value = $('input[name="value_7B"]:eq(' + index + ')').val();
            var vat = $('input[name="vat_7B"]:eq(' + index + ')').val();
            var taxCreditClaimed = $('input[name="tax_credit_claimed_7B"]:eq(' + index + ')').val();
            var taxCreditExempt = $('input[name="tax_credit_exempt_7B"]:eq(' + index + ')').val();
            var taxCreditAdmissible = $('input[name="tax_credit_admissible_7B"]:eq(' + index + ')').val();
            if (description != '' && unit != '' && quantity != '' && value != '' && vat != '' && taxCreditClaimed != '' && taxCreditExempt != '' && taxCreditAdmissible != '') {
                  item["type"] = type;
                item["description"] = description;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["vat"] = vat;
                item["taxCreditClaimed"] = taxCreditClaimed;
                item["taxCreditExempt"] = taxCreditExempt
                item["taxCreditAdmissible"] = taxCreditAdmissible;
                sevenB.push(item);
            }
          
        });
        submitObject['sevenB'] = sevenB;
         saveQuestionDetail('7B');
        sevenC = [];
        $('input[name^="description_7C"]').each(function (index) {
            item = {};

            var description = $(this).val();
            var unit = $('input[name="unit_7C"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_7C"]:eq(' + index + ')').val();
            var value = $('input[name="value_7C"]:eq(' + index + ')').val();
            var taxPaid = $('input[name="taxPaid_7C"]:eq(' + index + ')').val();
            var eligibleDutyPaid = $('input[name="eligble_duty_paid_7B"]:eq(' + index + ')').val();
            if (description != '' && unit != '' && quantity != '' && value != '' && taxPaid != '' && eligibleDutyPaid != '') {
                item["description"] = description;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["taxPaid"] = taxPaid;
                item["eligibleDutyPaid"] = eligibleDutyPaid;
                sevenC.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['sevenC'] = sevenC;
         saveQuestionDetail('7C');
        eight = [];
        $('select[name^="type_of_tax_8"]').each(function (index) {
            item = {};
            var typeOfTax=$(this).val();
         var register_no = $('input[name="register_no_8"]:eq(' + index + ')').val()?$('input[name="register_no_8"]:eq(' + index + ')').val():'none';
            var taxPeriod = $('input[name="tax_period_8"]:eq(' + index + ')').val();
            var dateFilling = $('input[name="date_filling_8"]:eq(' + index + ')').val();
           var cenvatCredit = $('input[name="cenvat_credit_8"]:eq(' + index + ')').val()?$('input[name="cenvat_credit_8"]:eq(' + index + ')').val():'none';
           // var cenvatCredit = 1234;
            var itcCentralTax = $('input[name="itc_central_tax_8"]:eq(' + index + ')').val();
            var invoiceNo = $('input[name="invoice_no_8"]:eq(' + index + ')').val();
            var invoiceDate = $('input[name="invoice_date_8"]:eq(' + index + ')').val();
            var centralTaxTransfered = $('input[name="central_tax_transfered_8"]:eq(' + index + ')').val();
            if (typeOfTax!='' && register_no != '' && taxPeriod != '' && dateFilling != '' && cenvatCredit != '' && itcCentralTax != '' && invoiceNo != '' && invoiceDate != '' && centralTaxTransfered != '') {
               
                item["typeOfTax"] = typeOfTax;
                
                item["register_no"] = register_no;
           
                item["taxPeriod"] = taxPeriod;
                item["dateFilling"] = dateFilling;
                
                
                item["cenvatCredit"] = cenvatCredit;
           
                item["itcCentralTax"] = itcCentralTax;
                item["invoiceNo"] = invoiceNo;
                item["invoiceDate"] = invoiceDate;
                item["centralTaxTransfered"] = centralTaxTransfered;
console.log('8 tab');
console.log(item);
                eight.push(item);
            }
             
            //showSuccessMessage();
        });
        submitObject['eight'] = eight;
        console.log('8th tab');
        console.log(submitObject);
    //  return false;
         saveQuestionDetail('8');
        nineA = [];
        $('input[name^="name_of_job_worker_9A"]').each(function (index) {
            item = {};

        
            var NameOfJobWorker = $(this).val();
              var gstnJobWorkerName =$('input[name="gstn_job_worker_9A"]:eq(' + index + ')').val();
         
              var challanNo =  $('input[name="challan_no_9A"]:eq(' + index + ')').val();
            var typeOfGoods = $('.type_of_goods_9A select').eq(index).find("option:selected").text();
            
            var challanDate = $('input[name="challan_date_9A"]:eq(' + index + ')').val();
            var goodsType = $('input[name="gstn_job_worker_9A"]:eq(' + index + ')').val();
            var hsn = $('input[name="hsn_9A"]:eq(' + index + ')').val();
            var description = $('input[name="description_9A"]:eq(' + index + ')').val();
            var unit = $('input[name="unit_9A"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_9A"]:eq(' + index + ')').val();
            var value = $('input[name="value_9A"]:eq(' + index + ')').val();
          
            
            if (challanNo != '' && NameOfJobWorker != ''  && challanDate != '' && hsn != '' && description != '' && unit != '' && quantity != '' && value != '') {
                item["challanNo"] = challanNo;
                item["jobWorkerName"] = NameOfJobWorker;
                  item["gstnJobWorkerName"] = gstnJobWorkerName;
                
                item["typeOfGoods"] = typeOfGoods;
                item["challanDate"] = challanDate;
                item["goodsType"] = typeOfGoods;
                item["hsn"] = hsn;
                item["description"] = description;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;

                nineA.push(item);
               
            }
            //showSuccessMessage();
        });
        submitObject['nineA'] = nineA;
         saveQuestionDetail('9A');
        nineB = [];
        $('input[name^="name_of_principal_9B"]').each(function (index) {
            item = {};
            var NameOfPrincipal =  $(this).val();
            var GstnOfPrincipal = $('input[name="gstn_of_principal_9B"]:eq(' + index + ')').val();
            var challanNo =  $('input[name="challan_no_9B"]:eq(' + index + ')').val();
            var challanDate = $('input[name="challan_date_9B"]:eq(' + index + ')').val();
            var typeOfGoods = $('.type_of_goods_9B select').eq(index).find("option:selected").text();
            var goodsType = $('input[name="goods_type_9B"]:eq(' + index + ')').val();
            var hsn = $('input[name="hsn_9B"]:eq(' + index + ')').val();
            var description = $('input[name="description_9B"]:eq(' + index + ')').val();
            var unit = $('input[name="unit_9B"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_9B"]:eq(' + index + ')').val();
            var value = $('input[name="value_9B"]:eq(' + index + ')').val();
         
            
            if (NameOfPrincipal != '' && GstnOfPrincipal != '' && challanNo != '' && challanDate != '' && typeOfGoods != '' && hsn != '' && description != '' &&
                    unit != '' && quantity != '' && value != '') {
                
                item["NameOfPrincipal"] = NameOfPrincipal;
                item["GstnOfPrincipal"] = GstnOfPrincipal;
                item["challanNo"] = challanNo;
                item["challanDate"] = challanDate;
                item["typeOfGoods"] = typeOfGoods;
                item["goodsType"] = typeOfGoods;
                item["hsn"] = hsn;
                item["description"] = description;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;

                nineB.push(item);

            }
            //showSuccessMessage();
        });
        submitObject['nineB'] = nineB;
         saveQuestionDetail('9B');
        tenA = [];
        $('input[name^="name_principal_10A"]').each(function (index) {
            item = {};
   var nameOfPrincipal = $(this).val();
            var gstnPrincipal =$('input[name="gstn_principal_10A"]:eq(' + index + ')').val();
            var nameOfPrincipal = $('input[name="name_principal_10A"]:eq(' + index + ')').val();
            var descriptionOfGoods = $('input[name="description_of_goods_10A"]:eq(' + index + ')').val();
            var descriptionOfTax = $('input[name="description_of_tax_10A"]:eq(' + index + ')').val();
            var hsnCode = $('input[name="hsn_10A"]:eq(' + index + ')').val();
            var typeOfGoods = $('.type_of_goods_10A select').eq(index).find("option:selected").text();
            var unit = $('input[name="unit_10A"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_10A"]:eq(' + index + ')').val();
            var value = $('input[name="value_10A"]:eq(' + index + ')').val();
            var inputTaxTaken = $('input[name="input_tax_taken_10A"]:eq(' + index + ')').val();
            var goodsType = $('.type_of_goods_10A').eq(index).find("option:selected").text();
            
             console.log(gstnPrincipal+'='+nameOfPrincipal+'='+descriptionOfGoods+'='+descriptionOfTax+'='+hsnCode+'='+typeOfGoods+'='+unit+'='+quantity+'='+value+'='+inputTaxTaken+'='+goodsType);
            if (gstnPrincipal != '' && nameOfPrincipal != '' && descriptionOfGoods != '' && descriptionOfTax != '' && hsnCode != '' && typeOfGoods != ''
                    && unit != '' && quantity != '' && value != '' && inputTaxTaken != '') {
                item["gstnPrincipal"] = gstnPrincipal;
                item["nameOfPrincipal"] = nameOfPrincipal;
                item["descriptionOfGoods"] = descriptionOfGoods;
                item["descriptionOfTax"] = descriptionOfTax;
                item["hsnCode"] = hsnCode;
                item["typeOfGoods"] = typeOfGoods;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["inputTaxTaken"] = inputTaxTaken;
                item["goodsType"] = typeOfGoods;
                tenA.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['tenA'] = tenA;
         saveQuestionDetail('10A');
        tenB = [];
        $('input[name^="name_of_agent_10B"]').each(function (index) {
            item = {};
             var nameOfAgent =$(this).val();
            var gstnPrincipal = $('input[name="gstn_agent_10B"]:eq(' + index + ')').val();
          
            var descriptionOfGoods = $('input[name="description_of_goods_10B"]:eq(' + index + ')').val();
            var descriptionOfTax = $('input[name="description_of_tax_10B"]:eq(' + index + ')').val();
            var goodsType = $('#type_of_goods_10B').eq(index).find("option:selected").text();
            var hsnCode = $('input[name="hsn_code_10B"]:eq(' + index + ')').val();
            var unit = $('input[name="unit_10B"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_10B"]:eq(' + index + ')').val();
            var value = $('input[name="value_10B"]:eq(' + index + ')').val();
            var inputTaxTaken = $('input[name="input_tax_taken_10B"]:eq(' + index + ')').val();
            var typeOfGoods = $('.type_of_goods_10B select').eq(index).find("option:selected").text();
         
            if (gstnPrincipal != '' && nameOfAgent != '' && descriptionOfGoods != '' && descriptionOfTax != '' && hsnCode != '' && unit != '' &&
                    quantity != '' && value != '' && inputTaxTaken != '' && typeOfGoods != '') {
                item["gstnPrincipal"] = gstnPrincipal;
                item["nameOfAgent"] = nameOfAgent;
                item["descriptionOfGoods"] = descriptionOfGoods;
                item["descriptionOfTax"] = descriptionOfTax;
                item["goodsType"] = typeOfGoods;
                item["hsnCode"] = hsnCode;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["inputTaxTaken"] = inputTaxTaken;
                item["typeOfGoods"] = typeOfGoods;

                tenB.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['tenB'] = tenB;
         saveQuestionDetail('10B');
        eleven = [];
        $('input[name^="registration_no_11"]').each(function (index) {
            item = {};
           // var vatRegNo = $(this).val();
           // var serviceTaxRegNo = $('input[name="service_tax_regno_11"]:eq(' + index + ')').val();
            var vatRegNo ='none';
            var serviceTaxRegNo ='none';
            var typeOfTax= $('select[name=type_of_tax_11]').eq(index).find("option:selected").text();
            var registrationNo=$(this).val();
            var invoiceNo = $('input[name="invoice_no_11"]:eq(' + index + ')').val();
            var invoiceDate = $('input[name="invoice_date_11"]:eq(' + index + ')').val();
            var TaxPaid = $('input[name="tax_paid_11"]:eq(' + index + ')').val();
            var taxCredit = $('input[name="tax_credit_11"]:eq(' + index + ')').val();
            var vatTaxPaid = $('input[name="vat_tax_paid_11"]:eq(' + index + ')').val();
            var serviceTaxPaid = $('input[name="service_tax_paid_11"]:eq(' + index + ')').val();
 
            if (vatRegNo != '' && serviceTaxRegNo != '' && invoiceNo != '' && invoiceDate != '' && TaxPaid != '' && taxCredit != '' && vatTaxPaid != '' && serviceTaxPaid != '') {
                item["vatRegNo"] = vatRegNo;
                item["serviceTaxRegNo"] = serviceTaxRegNo;
                item["typeOfTax"] = typeOfTax;
                item["registrationNo"] = registrationNo;
                item["invoiceNo"] = invoiceNo;
                item["invoiceDate"] = invoiceDate;
                item["TaxPaid"] = TaxPaid;
                item["taxCredit"] = taxCredit;
                item["vatTaxPaid"] = vatTaxPaid;
                item["serviceTaxPaid"] = serviceTaxPaid;


                eleven.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['eleven'] = eleven;
         saveQuestionDetail('11');
        twelve = [];
        $('input[name^="document_no_12"]').each(function (index) {
            item = {};
            var documentNo = $(this).val();
            var documentDate = $('input[name="document_date_12"]:eq(' + index + ')').val();
            var gstnNumber = $('input[name="gstn_number_12"]:eq(' + index + ')').val();
            var RecipientName = $('input[name="recipient_name_12"]:eq(' + index + ')').val();
            var hsn = $('input[name="hsn_12"]:eq(' + index + ')').val();
            var description = $('input[name="description_12"]:eq(' + index + ')').val();
            var unit = $('input[name="unit_12"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_12"]:eq(' + index + ')').val();
            var value = $('input[name="value_12"]:eq(' + index + ')').val();
            if (documentNo != '' && documentDate != '' && gstnNumber != '' && RecipientName != '' && hsn != '' && description != '' && unit != '' && quantity != '' && value != '') {

                item["documentNo"] = documentNo;
                item["documentDate"] = documentDate
                item["gstnNumber"] = gstnNumber;
                item["RecipientName"] = RecipientName;
                item["hsn"] = hsn;
                item["description"] = description;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;

                twelve.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['twelve'] = twelve;
         saveQuestionDetail('12');
        // console.log(submitObject);
        data = JSON.stringify(submitObject);
          console.log(submitObject);
         
        $('.page-loader-wrapper').show();
        $.ajax({
            type: 'POST',
            url: siteUrl + '/save-VTransfer-Data',
            data: {'jsonString': data},
            success: function (data) {
                // alert(data);
                console.log(data);

                if (data.status == 'success') {
                    $('.page-loader-wrapper').hide();
                    //  alert(json.status);
                    swal("Done!", "It was succesfully Saved!", "success");
                }

            },
            error: function (request, status, error) {
                   $('.page-loader-wrapper').hide();
            //    alert(request.responseText);
            }
        });


        return false;
    });

    var tbody1 = $('#5CTable').children('tbody');
    var table1 = tbody1.length ? tbody1 : $('#5CTable');
    $('#addRow5C').click(function () {
        table1.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
    })

    var tbody2 = $('#5BTable').children('tbody');
    var table2 = tbody2.length ? tbody2 : $('#5BTable');
    $('#addRow5B').click(function () {        
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table2.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_form_5B" id="type_of_form_5B_' + randomNumber + '"><option selected disabled>-- Select--</option><option>C </option><option>F</option><option>H</option><option>I</option></select></div><label class="error error_type_of_form_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="form_serial_no_5B" id="form_serial_no_5B_' + randomNumber + '"/></div><label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="tin_issuer_5B" id="tin_issuer_5B_' + randomNumber + '"/></div><label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control"  name="issuer_name_5B" id="issuer_name_5B_' + randomNumber + '"/></div><label class="error error_issuer_name_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="sales_value_5B" class="form-control" id="sales_value_5B_' + randomNumber + '"/></div><label class="error error_sales_value_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group has-feedback"><div class="form-line"><input type="number"  min="0" name="vat_rate_5B"  class="form-control" id="vat_rate_5B_' + randomNumber + '"/> <span class="form-control-feedback">%</span></div><label class="error error_vat_rate_5B" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })
    //5B upload change function    
    $("#cfhi_forms_5B").change(function () {
        //$('#rootwizard').bootstrapWizard('show',4);
    });

    var tbody3 = $('#6ATable').children('tbody');
    var table3 = tbody3.length ? tbody3 : $('#6ATable');
    $('#addRow6A').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table3.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" name="capital_goods_6A" class="form-control" id="capital_goods_6A_'+randomNumber+'"/></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="invoice_no_6A" class="form-control" id="invoice_no_6A_'+randomNumber+'"/></div><label class="error error_invoice_no_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="invoice_date_6A" class="invoiceDatepicker form-control" id="invoice_date_6A_'+randomNumber+'"/></div><label class="error error_invoice_date_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="supplier_reg_no_6A" class="form-control registrationNumberFormat" id="supplier_reg_no_6A_'+randomNumber+'"/></div><label class="error error_supplier_reg_no_6A" style="display: none;">This field is required.</label></div></td><td style="display: none"><div class="form-group"><div class="form-line"><select name="itc_carried_forward_6A" class="itc_carried_forward_6A" id="itc_carried_forward_6A_'+randomNumber+'" ><option selected disabled>-- Select--</option><option value="central_excise">Central Excise</option><option value="sad">SAD</option><option value="cvd">CVD</option></select></div></div></td><td><div class="form-group"><div class="form-line"><input type="text"  name="recipient_regno_6A" class="form-control registrationNumberFormat" id="recipient_regno_6A_'+randomNumber+'"/></div><label class="error error_recipient_regno_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="capital_good_value_6A" class="form-control calculateTotal" data-formname="6A" id="capital_good_value_6A_'+randomNumber+'"/></div><label class="error error_capital_good_value_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="capital_good_cvd_6A" class="form-control calculateTotal" data-formname="6A" id="capital_good_cvd_6A_'+randomNumber+'"/></div><label class="error error_capital_good_cvd_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="capital_good_sad_6A" class="form-control calculateTotal" data-formname="6A" id="capital_good_sad_6A_'+randomNumber+'"/></div><label class="error error_capital_good_sad_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0"  name="eligible_cenvat_6A" class="form-control calculateTotal calculateCenvatCredit eligible_cenvat_6A" data-formname="6A" id="eligible_cenvat_6A_'+randomNumber+'"/></div><label class="error error_eligible_cenvat_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="cenvat_credit_availed_6A" class="form-control calculateTotal calculateCenvatCredit cenvat_credit_availed_6A" data-formname="6A" id="cenvat_credit_availed_6A_'+randomNumber+'"/></div><label class="error error_cenvat_credit_availed_6A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="cenvat_credit_unavailed_6A" class="form-control calculateTotal cenvat_credit_unavailed_6A" data-formname="6A" id="cenvat_credit_unavailed_6A_'+randomNumber+'"/></div><label class="error error_cenvat_credit_unavailed_6A" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
        callInvoiceDatePicker();
    })

    var tbody4 = $('#6BTable').children('tbody');
    var table4 = tbody4.length ? tbody4 : $('#6BTable');
    $('#addRow6B').click(function () {        
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table4.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" name="invoice_no_6B" class="form-control" id="invoice_no_6B_'+randomNumber+'"/></div><label class="error error_invoice_no_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="invoice_date_6B" class="invoiceDatepicker form-control" id="invoice_date_6B_'+randomNumber+'"/></div><label class="error error_invoice_date_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="capital_goods_6B" id="capital_goods_6B_'+randomNumber+'"/></div></div></td><td style="display: none"><div class="form-group"><div class="form-line"><select class="itc_carried_forward_6B" name="itc_carried_forward_6B" id="itc_carried_forward_6B_'+randomNumber+'"><option selected disabled>-- Select--</option><option>VAT</option><option>Entry Tax</option></select></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control registrationNumberFormat" name="supplier_reg_no_6B" id="supplier_reg_no_6B_'+randomNumber+'"/></div><label class="error error_supplier_reg_no_6B" style="display: none;">This field is required.</label></div></td><td style="display: none"><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="recipient_reg_no_6B" id="recipient_reg_no_6B_'+randomNumber+'"/></div><label class="error error_recipient_reg_no_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="capital_good_value_6B" class="form-control calculateTotal" data-formname="6B" id="capital_good_value_6B_'+randomNumber+'"/></div><label class="error error_capital_good_value_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="capital_good_vat_6B" class="form-control calculateTotal" data-formname="6B" id="capital_good_vat_6B_'+randomNumber+'"/></div><label class="error error_capital_good_vat_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="eligible_vat_6B" class="form-control calculateTotal" data-formname="6B" id="eligible_vat_6B_'+randomNumber+'"/></div><label class="error error_eligible_vat_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="vatCredit_availed_6B" class="form-control calculateTotal" data-formname="6B" id="vatCredit_availed_6B_'+randomNumber+'"/></div><label class="error error_vatCredit_availed_6B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0"  name="vat_credit_unavailed_6B" class="form-control calculateTotal" data-formname="6B" id="vat_credit_unavailed_6B_'+randomNumber+'"/></div><label class="error error_vat_credit_unavailed_6B" style="display: none;">This field is required.</label></div></td> <td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
        callInvoiceDatePicker();
    })

    var tbody5 = $('#7A7ATable').children('tbody');
    var table5 = tbody5.length ? tbody5 : $('#7A7ATable');
    $('#addRow7A7A').click(function() {       
       var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
       table5.append('<tr><td><div class="form-group"><div class="form-line"><select name="nature_of_itc_7a7a" class="nature_of_itc_7a7a" id="nature_of_itc_7a7a_'+randomNumber+'"><option value="" >-- Select--</option> <option >Inputs</option> <option >Semi-finished</option> <option >Finished</option></select></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="hsn_7A7A" class="form-control hsnCode7a7a" id="hsn_7A7A_'+randomNumber+'"/></div><label class="error error_hsn_7A7A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="hsn_7A7A_desc" class="form-control" id="hsn_7A7A_desc_'+randomNumber+'"/></div><label class="error error_hsn_7A7A_desc" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number" name="unit_7A7A" class="form-control calculateValue" data-formname="7A7A" id="unit_7A7A_'+randomNumber+'"/></div><label class="error error_unit_7A7A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number" class="form-control calculateValue" name="quantity_7A7A" data-formname="7A7A" id="quantity_7A7A_'+randomNumber+'"/></div><label class="error error_quantity_7A7A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  name="value_7A7A" class="form-control" id="value_7A7A_'+randomNumber+'" readonly/></div><label class="error error_value_7A7A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="duties_paid_7A7A" class="form-control" id="duties_paid_7A7A_'+randomNumber+'"/></div><label class="error error_duties_paid_7A7A" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
    $('select').selectpicker('refresh');
    }) 
    
    var tbody6 = $('#7A7BTable').children('tbody');
    var table6 = tbody6.length ? tbody6 : $('#7A7BTable');
    $('#addRow7A7B').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));        
        table6.append('<tr><td><div class="form-group"><div class="form-line"> <select name="nature_of_itc_7a7b" class="nature_of_itc_7a7b" id="nature_of_itc_7a7b_'+randomNumber+'"><option value="" >-- Select--</option> <option >Inputs</option> <option >Semi-finished</option> <option >Finished</option></select></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control hsnCode7a7b" name="hsn_7A7B" id="hsn_7A7B_'+randomNumber+'"/></div><label class="error error_hsn_7A7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="hsn_7A7B_desc" id="hsn_7A7B_desc_'+randomNumber+'"/></div><label class="error error_hsn_7A7B_desc" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_7A7B" class="form-control calculateValue" data-formname="7A7B" id="unit_7A7B_'+randomNumber+'"/></div><label class="error error_unit_7A7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_7A7B" class="form-control calculateValue" data-formname="7A7B" id="quantity_7A7B_'+randomNumber+'"/></div><label class="error error_quantity_7A7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="value_7A7B" class="form-control" id="value_7A7B_'+randomNumber+'" readonly/></div><label class="error error_value_7A7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="duties_paid_7A7B" id="duties_paid_7A7B_'+randomNumber+'"/></div><label class="error error_duties_paid_7A7B" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
      $('select').selectpicker('refresh');
    })
                            
    var tbody7 = $('#7BTable').children('tbody');
    var table7 = tbody7.length ? tbody7 : $('#7BTable');
    $('#addRow7B').click(function () {        
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table7.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_7b" class="type_7b" id="type_7b_'+randomNumber+'"><option value="" >-- Select--</option> <option >Inputs</option> <option >Semi finished Goods</option> <option >Finished</option></select></div></div></td><td><div class="form-group"><div class="form-line"> <input type="text" class="form-control" name="description_7B"  id="description_7B_'+randomNumber+'"/></div><label class="error error_description_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="unit_7B" class="form-control calculateValue" data-formname="7B" id="unit_7B_'+randomNumber+'"/></div><label class="error error_unit_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="quantity_7B" class="form-control calculateValue" data-formname="7B" id="quantity_7B_'+randomNumber+'"/></div><label class="error error_quantity_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="value_7B" class="form-control" id="value_7B_'+randomNumber+'" readonly/></div><label class="error error_value_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="vat_7B" class="form-control" id="vat_7B_'+randomNumber+'"/></div><label class="error error_vat_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="tax_credit_claimed_7B" class="form-control" id="tax_credit_claimed_7B_'+randomNumber+'"/></div><label class="error error_tax_credit_claimed_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="tax_credit_exempt_7B" class="form-control"id="tax_credit_exempt_7B_'+randomNumber+'" /></div><label class="error error_tax_credit_exempt_7B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"> <input type="number"  min="0" name="tax_credit_admissible_7B" class="form-control" id="tax_credit_admissible_7B_'+randomNumber+'"/></div><label class="error error_tax_credit_admissible_7B" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })

    var tbody8 = $('#7CTable').children('tbody');
    var table8 = tbody8.length ? tbody8 : $('#7CTable');
    $('#addRow7C').click(function () {        
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table8.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" name="description_7C" class="form-control" id="description_7C_'+randomNumber+'"/></div><label class="error error_description_7C" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_7C" data-formname="7C" class="form-control calculateValue" id="unit_7C_'+randomNumber+'"/></div><label class="error error_unit_7C" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_7C" class="form-control calculateValue" data-formname="7C" id="quantity_7C_'+randomNumber+'"/></div><label class="error error_quantity_7C" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0"  name="value_7C"  class="form-control" id="value_7C_'+randomNumber+'" readonly/></div><label class="error error_value_7C" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="taxPaid_7C" class="form-control" id="taxPaid_7C_'+randomNumber+'"/></div><label class="error error_taxPaid_7C" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
    })

    var tbody9 = $('#8Table').children('tbody');
    var table9 = tbody9.length ? tbody9 : $('#8Table');
    $('#addRow8').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table9.append(' <tr><td><div class="form-group"><div class="form-line"><select id="type_of_tax_8_'+randomNumber+'" class="type_of_tax_8" name="type_of_tax_8"><option selected disabled>-- Select--</option> <option value="excise">Excise</option><option value="service_tax">Service Tax</option></select></div><label class="error error_type_of_tax_8" style="display: none;">This field is required.</label></div><input type="hidden" class="form-control" name="register_no_8" value="" id="register_no_8_'+randomNumber+'"/></td><td style="display: none"><div class="form-group"><div class="form-line"><input type="text" name="registere_no_8" class="form-control" id="register_no_8_'+randomNumber+'"/></div><label class="error error_register_no_8" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="tax_period_8"  class="form-control" id="tax_period_8_'+randomNumber+'"/></div><label class="error error_tax_period_8" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="datepicker form-control" name="date_filling_8"  id="date_filling_8_'+randomNumber+'"/></div><label class="error error_date_filling_8" style="display: none;">This field is required.</label></div></td><td style="display: none"><div class="form-group"><div class="form-line"><input type="number"  min="0" name="cenvat_credit_8" class="form-control" id="cenvat_credit_8_'+randomNumber+'"/></div><label class="error error_cenvat_credit_8" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="itc_central_tax_8" class="form-control" id="itc_central_tax_8_'+randomNumber+'"/></div><label class="error error_itc_central_tax_8" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="invoice_no_8" class="form-control" id="invoice_no_8_'+randomNumber+'"/></div><label class="error error_invoice_no_8" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="invoice_date_8" class="invoiceDatepicker form-control" id="invoice_date_8_'+randomNumber+'"/></div><label class="error error_invoice_date_8" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="central_tax_transfered_8" class="form-control" id="central_tax_transfered_8_'+randomNumber+'"/></div><label class="error error_central_tax_transfered_8" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow8" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
       callDatePicker();
       callInvoiceDatePicker();
        $('select').selectpicker('refresh');
    })

    var tbody10 = $('#9ATable').children('tbody');
    var table10 = tbody10.length ? tbody10 : $('#9ATable');
    $('#addRow9A').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table10.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" class="form-control hsnJobWorkder9a" name="name_of_job_worker_9A" value="" id="name_of_job_worker_9A_'+randomNumber+'"></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="gstn_job_worker_9A" class="form-control" id="gstn_job_worker_9A_'+randomNumber+'"/></div> <label class="error error_gstn_job_worker_9A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="challan_no_9A" class="form-control" id="challan_no_9A_'+randomNumber+'"/></div><label class="error error_challan_no_9A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="challan_date_9A" class="invoiceDatepicker form-control" id="challan_date_9A_'+randomNumber+'"/></div><label class="error error_challan_date_9A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><select name="type_of_goods_9A" class="type_of_goods_9A" id="type_of_goods_9A_'+randomNumber+'"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></div><label class="error error_type_of_goods_9A" style="display: none;">This field is required.</label></div></td><td> <div class="form-group"><div class="form-line"><input type="text" name="hsn_9A" class="form-control hsnCode9a" id="hsn_9A_'+randomNumber+'"/></div><label class="error error_hsn_9A" style="display: none;">This field is required.</label></div><span style="color: red;"></span></td><td><div class="form-group"><div class="form-line"><input type="text" name="description_9A" class="form-control" id="description_9A_'+randomNumber+'"/></div><label class="error error_description_9A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_9A" class="form-control calculateTotal calculateValue" data-formname="9A" id="unit_9A_'+randomNumber+'"/></div><label class="error error_unit_9A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_9A" class="form-control calculateTotal calculateValue" data-formname="9A" id="quantity_9A_'+randomNumber+'"/></div><label class="error error_quantity_9A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="value_9A" class="form-control calculateTotal" data-formname="9A" id="value_9A_'+randomNumber+'" readonly /></div><label class="error error_value_9A" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td> </tr>');
        $('select').selectpicker('refresh');
       callInvoiceDatePicker();
    })

    var tbody11 = $('#9BTable').children('tbody');
    var table11 = tbody11.length ? tbody11 : $('#9BTable');
    $('#addRow9B').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table11.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_principal_9B" value="" id="name_of_principal_9B_'+randomNumber+'"/></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="gstn_of_principal_9B" value="" id="gstn_of_principal_9B_'+randomNumber+'"/></div> <label class="error error_gstn_of_principal_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text"  name="challan_no_9B" class="form-control" id="challan_no_9B_'+randomNumber+'"/></div><label class="error error_challan_no_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="challan_date_9B" class="invoiceDatepicker form-control" id="challan_date_9B_'+randomNumber+'"/></div><label class="error error_challan_date_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><select name="type_of_goods_9B"  class="type_of_goods_9B" id="type_of_goods_9B_'+randomNumber+'"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></div><label class="error error_type_of_goods_9B" style="display: none;">This field is required.</label></div></td><td> <div class="form-group"><div class="form-line"><input type="text" class="form-control hsnCode9b" name="hsn_9B" id="hsn_9B_'+randomNumber+'"/></div><label class="error error_hsn_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="description_9B" class="form-control" id="description_9B_'+randomNumber+'"/></div><label class="error error_description_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_9B" class="form-control calculateTotal calculateValue" data-formname="9B" id="unit_9B_'+randomNumber+'"/></div><label class="error error_unit_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_9B" class="form-control calculateTotal calculateValue" data-formname="9B" id="quantity_9B_'+randomNumber+'"/></div><label class="error error_quantity_9B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="value_9B" class="form-control calculateTotal" data-formname="9B" id="value_9B_'+randomNumber+'" readonly/></div><label class="error error_value_9B" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
      callInvoiceDatePicker();
    })

    var tbody12 = $('#10ATable').children('tbody');
    var table12 = tbody12.length ? tbody12 : $('#10ATable');
    $('#addRow10A').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table12.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_principal_10A" value="" id="name_principal_10A_'+randomNumber+'"/></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="gstn_principal_10A" class="form-control" id="gstn_principal_10A_'+randomNumber+'"/></div><label class="error error_gstn_principal_10A" style="display: none;">This field is required.</label></div></td> <td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="description_of_goods_10A" id="description_of_goods_10A_'+randomNumber+'"/></div><label class="error error_description_of_goods_10A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="description_of_tax_10A" id="description_of_tax_10A_'+randomNumber+'"/></div></div></td><td><div class="form-group"><div class="form-line"><select id="type_of_goods_10A_'+randomNumber+'" class="type_of_goods_10A" name="type_of_goods_10A"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control hsnCode10a" name="hsn_10A" id="hsn_10A_'+randomNumber+'"/></div><label class="error error_hsn_10A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_10A" class="form-control calculateValue" data-formname="10A" id="unit_10A_'+randomNumber+'"/></div><label class="error error_unit_10A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_10A" class="form-control calculateValue" data-formname="10A" id="quantity_10A_'+randomNumber+'"/></div><label class="error error_quantity_10A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="value_10A" class="form-control" id="value_10A_'+randomNumber+'" readonly/></div><label class="error error_value_10A" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="input_tax_taken_10A" class="form-control" id="input_tax_taken_10A_'+randomNumber+'"/></div><label class="error error_input_tax_taken_10A" style="display: none;">This field is required.</label></div></td>       <td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })

    var tbody13 = $('#10BTable').children('tbody');
    var table13 = tbody13.length ? tbody13 : $('#10BTable');
    $('#addRow10B').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table13.append('<tr><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_agent_10B" id="name_of_agent_10B_'+randomNumber+'"/></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="gstn_agent_10B" class="form-control" id="gstn_agent_10B_'+randomNumber+'"/></div><label class="error error_gstn_agent_10B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="description_of_goods_10B" id="description_of_goods_10B_'+randomNumber+'"/></div></div></td> <td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="description_of_tax_10B" id="description_of_tax_10B_'+randomNumber+'"/></div><label class="error error_description_of_tax_10B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><select name="type_of_goods_10B" class="type_of_goods_10B" id="type_of_goods_10B_'+randomNumber+'"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></div></div></td> <td><div class="form-group"><div class="form-line"><input type="text" class="form-control hsnCode10b" name="hsn_code_10B" id="hsn_code_10B_'+randomNumber+'"/></div><label class="error error_hsn_code_10B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_10B" class="form-control calculateValue" data-formname="10B" id="unit_10B_'+randomNumber+'"/></div><label class="error error_unit_10B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_10B" class="form-control calculateValue" data-formname="10B" id="quantity_10B_'+randomNumber+'"/></div><label class="error error_quantity_10B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="value_10B" class="form-control" id="value_10B_'+randomNumber+'" readonly/></div><label class="error error_value_10B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="input_tax_taken_10B"  class="form-control" id="input_tax_taken_10B_'+randomNumber+'"/></div><label class="error error_input_tax_taken_10B" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })

    var tbody14 = $('#11Table').children('tbody');
    var table14 = tbody14.length ? tbody14 : $('#11Table');
    $('#addRow11').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table14.append('<tr><td style="display: none"><div class="form-group"><div class="form-line"><input type="text" name="vat_reg_no_11" class="form-control" /></div><label class="error error_vat_reg_no_11" style="display: none;">This field is required.</label></div></td><td style="display: none"><div class="form-group"><div class="form-line"><input type="text" name="service_tax_regno_11" class="form-control" /></div><label class="error error_service_tax_regno_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><select id="type_of_tax_11" class="type_of_tax_11" name="type_of_tax_11"> <option value="" selected disabled>-- Select--</option> <option value="vat">VAT</option> <option value="service_tax">Service Tax</option></select></div><label class="error error_type_of_tax_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control registrationNumberFormat" name="registration_no_11" /></div><label class="error error_registration_no_11" style="display: none;">This field is required.</label></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control"  name="invoice_no_11"  /></div><label class="error error_invoice_no_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="invoice_date_11" class="invoiceDatepicker form-control" /></div><label class="error error_invoice_date_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="tax_paid_11" class="form-control calculateTotal" data-formname="11" /></div><label class="error error_tax_paid_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="tax_credit_11" class="form-control calculateTotal" data-formname="11" /></div><label class="error error_tax_credit_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number" class="form-control" name="vat_tax_paid_11" value=""/></div><label class="error error_vat_tax_paid_11" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number" class="form-control" name="service_tax_paid_11" value=""/></div><label class="error error_service_tax_paid_11" style="display: none;">This field is required.</label></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
      callInvoiceDatePicker();
         $('select').selectpicker('refresh');
    })

    var tbody15 = $('#12Table').children('tbody');
    var table15 = tbody15.length ? tbody15 : $('#12Table');
    $('#addRow12').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table15.append('<tr><td><div class="form-group"><div class="form-line"><input type="text"  name="document_no_12" class="form-control" /></div><label class="error error_document_no_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="document_date_12" class="invoiceDatepicker form-control" /></div><label class="error error_document_date_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="gstn_number_12" class="form-control" /></div><label class="error error_gstn_number_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="recipient_name_12" class="form-control" /></div><label class="error error_recipient_name_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="hsn_12" class="form-control hsnCode12" /></div><label class="error error_hsn_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="description_12" class="form-control" /></div><label class="error error_description_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="unit_12" class="form-control calculateTotal calculateValue" data-formname="12" /></div><label class="error error_unit_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="quantity_12" class="form-control calculateTotal calculateValue" data-formname="12" /></div><label class="error error_quantity_12" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="value_12" class="form-control calculateTotal" data-formname="12" readonly/></div><label class="error error_value_12" style="display: none;">This field is required.</label></div></td ><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow12" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        callInvoiceDatePicker();
    })

    var tbody16 = $('#5CCTable').children('tbody');
    var table16 = tbody16.length ? tbody16 : $('#5CCTable');
    $('#addRow5CC').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table16.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cc"  id="type_of_tax_5cc_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="name_of_issuer_5cc" class="form-control" id="name_of_issuer_5cc_'+ randomNumber + '" /><label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="turnover_pending_5cc" id="turnover_pending_5cc_'+ randomNumber + '" class="form-control calculate5CC turnover_pending"/><label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="state_vat_5cc" id="state_vat_5cc_'+ randomNumber + '" class="form-control calculate5CC state_vat" /><label class="error error_state_vat_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="tax_already_paid_5cc" id="tax_already_paid_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="input_already_reversed_5cc" id="input_already_reversed_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label></div></div></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CC" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })

    var tbody17 = $('#5CFTable').children('tbody');
    var table17 = tbody17.length ? tbody17 : $('#5CFTable');
    $('#addRow5CF').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table17.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cf" id="type_of_tax_5cf_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5cf" id="name_of_issuer_5cf_'+ randomNumber + '"/><label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF turnover_pending" name="turnover_pending_5cf" id="turnover_pending_5cf_'+ randomNumber + '" /><label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF state_vat" name="state_vat_5cf" id="state_vat_5cf_'+ randomNumber + '"/><label class="error error_state_vat_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5cf" id="tax_already_paid_5cf_'+ randomNumber + '"/><label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5cf" id="input_already_reversed_5cf_'+ randomNumber + '"/><label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label></div></div></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CF" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })

    var tbody18 = $('#5CITable').children('tbody');
    var table18 = tbody18.length ? tbody18 : $('#5CITable');
    $('#addRow5CI').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table18.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ci" id="type_of_tax_5ci_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ci" id="name_of_issuer_5ci_'+ randomNumber + '" /><label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI turnover_pending" name="turnover_pending_5ci" id="turnover_pending_5ci_'+ randomNumber + '" /> <label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI state_vat" name="state_vat_5ci" id="state_vat_5ci_'+ randomNumber + '" /><label class="error error_state_vat_5ci" style="display: none;">This field is required.</label></div></div></td><td> <div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ci" id="tax_already_paid_5ci_'+ randomNumber + '" /><label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ci" id="input_already_reversed_5ci_'+ randomNumber + '" /><label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label></div></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CI" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })
    var tbody19 = $('#5CHTable').children('tbody');
    var table19 = tbody19.length ? tbody19 : $('#5CHTable');
    $('#addRow5CH').click(function () {
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table19.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ch" id="type_of_tax_5ch_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ch" id="name_of_issuer_5ch_'+ randomNumber + '"/><label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH turnover_pending" name="turnover_pending_5ch" id="turnover_pending_5ch_'+ randomNumber + '"/><label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH state_vat" name="state_vat_5ch" id="state_vat_5ch_'+ randomNumber + '"/><label class="error error_state_vat_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ch" id="tax_already_paid_5ch_'+ randomNumber + '"/><label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ch" id="input_already_reversed_5ch_'+ randomNumber + '"/><label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label></div></div></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CH" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })

    /*ADD NEXT BUTTON TO INNER TAB*/
    $('.btnNext').click(function () {
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    /*PRINT RETURN */
    $(function () {
        $("#printMe").click(function () {
            var contents = $("#tab3").html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({
                "position": "absolute",
                "top": "-1000000px"
            });
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
            frameDoc.document.open();
            //Create a new HTML document.
            frameDoc.document.write('<html><head><title>DIV Contents</title>');
            frameDoc.document.write('</head><body>');
            //Append the external CSS file.
            frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
            //Append the DIV contents.
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
        });
    });

    /* Questions Initial */
    $('input[name=group2]').click(function () {
        if (this.id == "group2Yes") {
            $("#ques3, #ques4").slideDown('slow');
            // $("#ques5").slideUp('slow');
        } else {
            $("#ques3, #ques4").slideUp('slow');
            //$("#ques5").slideDown('slow');
        }
    });

    $('.linkedRadioBtnQuestion').click(function () {
//        var attr = $(this).attr("data-showQuestionId");
//        var divArray = $(this).attr("data-hideQuestionId").split("@#@");
//        $.each(divArray, function (i) {
//            $("#" + divArray[i] + "").slideUp('slow');
//        });
//        if (typeof attr !== typeof undefined && attr !== false) {
//            $("#" + $(this).attr("data-showQuestionId") + "").slideDown('slow');
//        }
        var attr = $(this).data("showquestionid");
        if (typeof attr !== typeof undefined && attr !== false) {
            var showQstArray = $(this).data("showquestionid").split("@#@");
            $.each(showQstArray, function (i) {
                $("#" + showQstArray[i] + "").slideDown('slow');                
                var chk = $("#" + showQstArray[i] +" input:radio:checked");
                chk.prop('checked', false);
                
            });
        }
        var attr = $(this).data("hidequestionid");
        if (typeof attr !== typeof undefined && attr !== false) {
            var hideQstArray = $(this).data("hidequestionid").split("@#@");        
            $.each(hideQstArray, function (i) {
                $("#" + hideQstArray[i] + "").slideUp('slow');
            });
        }
    });
    $('.linkedChkBoxQuestion').click(function () {
        if ($(this).is(":checked")) {
            $("#" + $(this).attr("data-showQuestionId") + "").slideDown('slow');
        } else {
            $("#" + $(this).attr("data-showQuestionId") + "").slideUp('slow');
        }
    });   

    $('#cfhi_forms_5B').on('change', function (event)
    {   var getFile = $('#cfhi_forms_5B').val();
        if(getFile == 'undefiend' || getFile == '')
        {
            $('#upload_file_error').html('Please select a file');
        }
        else
        {
            $('#upload_file_error').html('');
            $('#fileUploadForm5B').submit();
        }
    });
    $('#fileUploadForm5B').on('submit', function (event)
    {
        event.preventDefault();
        $('#fileUploadLoader').show();
        var uploadedFileList = '';
        var formData = new FormData();
        var uploadStatus = $('#fileAddingStatus').val();        
        for (var i = 0; i < $('input[name="cfhi_forms_5B[]"]').get(0).files.length; ++i) {
            formData.append('file' + i, $('input[name="cfhi_forms_5B[]"]')[0].files[i]);
            uploadedFileList += '<span class="file-name" id="5b_file_'+uploadStatus+'_'+i+'">'+$('input[name="cfhi_forms_5B[]"]')[0].files[i].name+'<span onclick="delete5BFiledata('+uploadStatus+','+i+')"><i class="material-icons">close</i></span></span>';
        }
        formData.append('uploadStatus', uploadStatus);
        $.ajax({
            type: "POST",
            url: siteUrl + '/upload-5B-form-files',
            processData: false,
            data: formData,
            contentType: false,
            async: false,
            success: function (data) {
                $('#fileUploadLoader').hide();
                 $('#cfhi_forms_5B').val('');
                if (data != '' && data != null)
                {
                    if (data == '1')
                    {
                        $('#upload_file_error').html('Invalid file extention. xls, xlsx are allowed');
                    }
                    else if (data == '2')
                    {
                        $('#upload_file_error').html('File format changed');
                    }
                    else if(data == '3')
                    {
                        $('#upload_file_error').html('Empty file');
                    }
                    else
                    {
                        $('#upload_file_error').html('');
                        var uploadStatus = $('#fileAddingStatus').val();
                        if(uploadStatus == '0')
                        {
                            $('#table5Btbody').html('');                           
                        }
                        $('#table5Btbody').append(data);
                        $('#fileUploadSuccess').show();
                        setTimeout(function(){$('#fileUploadSuccess').hide(); }, 2000);
                        $('#uploadedFile').append(uploadedFileList);
                          $('select').selectpicker('refresh');
                        uploadStatus++;
                        $('#fileAddingStatus').val(uploadStatus);
                    }
                    setTimeout(function(){$('#upload_file_error').html(''); }, 2000);
                }
            },
            error: function () {

            }
        });
    });
    
    $('#cfhi_forms_5C').on('change', function (event)
    {   var getFile = $('#cfhi_forms_5C').val();
        if(getFile == 'undefiend' || getFile == '')
        {
            $('#upload_file_error_5C').html('Please select a file');
        }
        else
        {
            $('#upload_file_error_5C').html('');
            $('#fileUploadForm5C').submit();
        }
    });
    
    $('#fileUploadForm5C').on('submit', function (event)
    {
        event.preventDefault();
        $('#fileUploadLoader1').show();
        var formData = new FormData();
        var uploadStatus = $('#fileAddingStatus_5C').val();
        var uploadedFileList = '';
        for (var i = 0; i < $('input[name="cfhi_forms_5C[]"]').get(0).files.length; ++i) {
            formData.append('file' + i, $('input[name="cfhi_forms_5C[]"]')[0].files[i]);
            uploadedFileList += '<span class="file-name" id="5c_file_'+uploadStatus+'_'+i+'">'+$('input[name="cfhi_forms_5C[]"]')[0].files[i].name+'<span onclick="delete5CFiledata('+uploadStatus+','+i+')"><i class="material-icons">close</i></span></span>';
        }
        formData.append('uploadStatus', uploadStatus);
        $.ajax({
            type: "POST",
            url: siteUrl + '/upload-5C-form-files',
            processData: false,
            data: formData,
            contentType: false,
            async: false,
            success: function (data) {
                $('#fileUploadLoader1').hide();
                if (data != '' && data != null)
                {
                    if (data == '1')
                    {
                        $('#upload_file_error_5C').html('Invalid file extention. xls, xlsx are allowed');
                    }
                    else if (data == '2')
                    {
                        $('#upload_file_error_5C').html('File format changed');
                    }
                    else if(data == '3')
                    {
                        $('#upload_file_error_5C').html('Empty file');
                    }
                    else
                    {
                        var tableData = data.split('~~!');
                        $('#upload_file_error_5C').html('');
                        var uploadStatus = $('#fileAddingStatus_5C').val();
                        if(uploadStatus == '0')
                        {
                            $('#table5CCtbody').html('');
                            $('#table5CFtbody').html('');
                            $('#table5CHtbody').html('');
                            $('#table5CItbody').html('');
                            $('#fileUploadSuccess1').show();
                        }                        
                        $('#table5CCtbody').append(tableData[0]);                        
                        $('#table5CFtbody').append(tableData[1]);                        
                        $('#table5CHtbody').append(tableData[2]);                        
                        $('#table5CItbody').append(tableData[3]);                        
                        setTimeout(function(){$('#fileUploadSuccess1').hide(); }, 2000); 
                        $('#uploadedFile_5C').append(uploadedFileList);
                        uploadStatus++;
                        $('#fileAddingStatus_5C').val(uploadStatus);
                    }
                    setTimeout(function(){$('#upload_file_error_5C').html(''); }, 2000);
                }
            },
            error: function (request,status,errorThrown) {
                
  $('#fileUploadLoader1').hide();
  console.log(request);
    console.log(status);
     console.log(errorThrown);
            }
        });
    });
    
    function checkQuestionsRule(index) {
        if($('#input'+tabIdArr[index]+'QuestionsContinue').val() == '0') {
            for (var key in formRulesTabArr[tabIdArr[index]]) {
                var ruleId  =   formRulesTabArr[tabIdArr[index]][key].ruleId;
                var destinationTab  =   formRulesTabArr[tabIdArr[index]][key].destinationTab;
                    var rulePassed  =   'Yes';
                    for (var qstKey in questionRulesArray[ruleId]) {                                    
                        var inputControlId  =   questionRulesArray[ruleId][qstKey].inputControlId; 
                        if (!$("#"+inputControlId+"").is(":checked")) {
                            rulePassed  =   'No';
                        }
                        /*var action          =   questionRulesArray[ruleId][qstKey].action;
                        if(action   ==  'checked') {
                            if (!$("#"+inputControlId+"").is(":checked")) {
                                rulePassed  =   'No';
                            }
                        }else {
                            if ( $("#"+inputControlId+"").is(":checked")) {
                                rulePassed  =   'No';
                            }
                        }*/
                    }
                if(rulePassed   ==  'Yes') {
                    if(destinationTab   ==  'table') {
                        $("#table"+tabIdArr[index]+"").slideDown('slow');
                        $("#questions"+tabIdArr[index]+"").slideUp('slow');
                        $('#input'+tabIdArr[index]+'QuestionsContinue').val('1')
                        return false;
                    }else {
                        if(savedTabArray[savedTabArray.length-1] != index){
                            savedTabArray.push(index);
                        }
                        $('#rootwizard').bootstrapWizard('show', destinationTab);
                        break;
                    }
                }
            }   
            return true;
        }
        else
            {
            for (var key in formRulesTabArr[tabIdArr[index]+"Table"]) {
                var ruleId  =   formRulesTabArr[tabIdArr[index]+"Table"][key].ruleId;
                var destinationTab  =   formRulesTabArr[tabIdArr[index]+"Table"][key].destinationTab;
                    var rulePassed  =   'Yes';
                    for (var qstKey in questionRulesArray[ruleId]) {
                        //questionId":"68", "responseText":"Yes
                        var inputControlId  =   questionRulesArray[ruleId][qstKey].inputControlId; 
                        if (!$("#"+inputControlId+"").is(":checked")) {
                            rulePassed  =   'No';
                        }
                        /*var action          =   questionRulesArray[ruleId][qstKey].action;
                        if(action   ==  'checked') {
                            if (!$("#"+inputControlId+"").is(":checked")) {
                                rulePassed  =   'No';
                            }
                        }else {
                            if ( $("#"+inputControlId+"").is(":checked")) {
                                rulePassed  =   'No';
                            }
                        } */   
                    }
                if(rulePassed   ==  'Yes') {    
                    if(savedTabArray[savedTabArray.length-1] != index){
                        savedTabArray.push(index);
                    }
                    $('#rootwizard').bootstrapWizard('show', destinationTab);
                    break;
                }
            }
            return true;
        }
    }
    
$('#commonBack').click(function()
    { 
        //Get current tab
        var currentTab = $('div.tab-pane.active').attr('id');
        if(currentTab == 'tab0')
        {
            window.location.href = siteUrl+'/dashboard';            
        }
        if(currentTab == 'tab1')
        {
            $('#preview').hide();
            $('#save_return_draft').hide();
        }
        //Get last value from array
        var lastIndexOfArray = savedTabArray[savedTabArray.length -1];   
        //Current page
        var currentPageId = tabIdArr[parseInt(lastIndexOfArray)+1];
        //Previous page id
        var previousPageId = tabIdArr[parseInt(lastIndexOfArray)];
        if(previousPageId == '5B' || currentPageId == '5B')
        {
            $('#uploadFileSection5B').show();
            $('#table5B').hide();
        }
        if(previousPageId == '5C' || currentPageId == '5C')
        {
            $('#uploadFileSection5C').show();
            $('#5Ccontainer').hide();
        }
        //Set current page button click to 0
        $('#input'+currentPageId+'QuestionsContinue').val('0');
        //Set current page button click to 0
        $('#input'+previousPageId+'QuestionsContinue').val('0');
        //Show current page question 
        $('#questions'+currentPageId).show();        
        //Show current page question 
        $('#questions'+previousPageId).show();
        if(currentPageId == '7B' || currentPageId == '7C' || currentPageId == '6B')
        {
             //Show current page table
            $('#table'+currentPageId).show();
        }
        else
        {
            //Hide current page table
            $('#table'+currentPageId).hide();
        }        
        if(previousPageId == '7B' || previousPageId == '7C' || previousPageId == '6B')
        {
             //Show current page table
            $('#table'+previousPageId).show();   
        }
        else
        {
            //Hide current page table
            $('#table'+previousPageId).hide();   
        }
             
        //Clear values
        $('div.tab-pane.active div table th.clearAll').html('');
        $('div.tab-pane.active label.error').attr('style', 'display:none');
        $('div.tab-pane.active').find(':input').each(function() 
        {
            switch(this.type) {
                case 'number':
                    $(this).val('');
                    break;
                case 'password':
                    $(this).val('');
                    break;
                case 'text':
                    $(this).val('');
                    break;
                case 'textarea':
                    $(this).val('');
                    break;
                case 'file':
                    $(this).val('');
                    break;
                case 'select':       
                    $(this).val('');
                    break;
                case 'checkbox':
                    $(this).attr('checked', false);
                    break;
                case 'radio':
                    this.checked = false;
            }
        });
        //Remove last element from array
        savedTabArray.pop();
        $('#rootwizard').bootstrapWizard('show', parseInt(lastIndexOfArray) - 1);
        return false;
    });

});


jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");


jQuery.validator.addMethod("indianDate", function (value, element) {
    // return Date.parseExact(value, "d/M/yyyy");
});
jQuery.validator.addMethod("validDate", function (value, element) {
    return this.optional(element) || moment(value, "DD/MM/YYYY").isValid();
}, "Please enter a valid date in the format DD/MM/YYYY");

$.validator.addMethod("selectNotEqual", function (value, element, arg) {
    return arg != value;
}, "Value must not equal arg.");

jQuery.validator.addMethod('selectcheck', function (value) {

    return (value != 'select');
}, "year required");

jQuery.validator.addMethod('validateHsn', function (value) {
    var test = testHSNCode(value);
    if(test == 1)
        return true;
}, "Use number or dot(.) only");

jQuery.validator.addMethod('dbCheckHsn', function (value) {
    var test = checkHsnCode(value);
    if(test == 0)
        return true;
}, "Invalid HSN");

function genealQuestionValidation() {



}
function resetFormValidator(formId) {
    $(formId).removeData('validator');
    $(formId).removeData('unobtrusiveValidation');
    $.validator.unobtrusive.parse(formId);
}
function fiveAValidation() {
    //  $('input[name^="registration_number_5A"]').each(function(index) { 
    $validator = $("#fiveAForm").validate({
        rules: {
            registration_number_5A: {
                required: true,
            },
            date_of_filling_5A: {
                required: true,
            },
            balance_cenvat_credit_5A: {
                required: true,
                number: true,
            },
            cenvat_credit_admissible_5A: {
                required: true,
                number: true,
            },
            nature_of_itc_5A: {
                required: true,
                selectcheck: true
            }


        }
    });

    $('.tax_period').each(function () {
        $(this).rules("add", {
            required: true
        });
    });

    /*  $("[name^=registration_number_5A]").each(function () {
     alert();
     $(this).rules("add", {
     required: true,
     
     });
     });*/
}

$('#download_sample_form_5b').click(function (e) {
    $('#sample_form_5b').submit();
});
$('#download_sample_form_5c').click(function (e) {
    $('#sample_form_5c').submit();
});

/**
 * Set HSN Code description
 */

$(function()
{
    /**
     * HSN Code description for 7A7A
     */
    $('#sevenAAForm').on('change', '.hsnCode7a7a', function () 
    { 
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_7A7A"]').index(this);
        setHsnCode('sevenAAForm', 'hsn_7A7A_desc', hsnCodeNo, fieldIndex);
        
    });
    /**
     * HSN Code description for 7A7B
     */
    $('#sevenABForm').on('change', '.hsnCode7a7b', function () 
    { 
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_7A7B"]').index(this);
        setHsnCode('sevenABForm', 'hsn_7A7B_desc', hsnCodeNo, fieldIndex);
        
    });
    /**
     * HSN Code description for 9A
     */
    $('#nineAForm').on('change', '.hsnCode9a', function () 
    { 
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_9A"]').index(this);
        setHsnCode('nineAForm', 'description_9A', hsnCodeNo, fieldIndex);
        
    });
    /**
     * HSN Code description for 9B
     */
    $('#table9B').on('change', '.hsnCode9b', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_9B"]').index(this);
        setHsnCode('table9B', 'description_9B', hsnCodeNo, fieldIndex);
        
    });
    /**
     * HSN Code description for 10A
     */
    $('#tenAForm').on('change', '.hsnCode10a', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_10A"]').index(this);        
        setHsnCode('tenAForm', 'description_of_goods_10A', hsnCodeNo, fieldIndex);
    });
    /**
     * HSN Code description for 10B
     */
    $('#tenBForm').on('change', '.hsnCode10b', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_code_10B"]').index(this);
        setHsnCode('tenBForm', 'description_of_tax_10B', hsnCodeNo, fieldIndex);
        
    });
    /**
     * HSN Code description for 12
     */
    $('#table12').on('change', '.hsnCode12', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_12"]').index(this);
        setHsnCode('table12', 'description_12', hsnCodeNo, fieldIndex);
        
    });
});

/**
 * Vinod
 * July 04, 2017
 * Auto populate HSN Description
 * @param {type} pageElement - Element id of page or form or table
 * @param {type} elementName - Description field name
 * @param {type} hsnCode     - HSN Code
 * @param {type} fieldIndex  - Index of selected field
 * @returns {undefined}
 */
function setHsnCode(pageElement, elementName, hsnCode, fieldIndex)
{
    var dataString = 'hsnCodeNo=' + hsnCode;
    var index = parseInt(fieldIndex);
    $.ajax
    ({
        type: "POST",
        async: false,
        data: dataString,
        dataType: 'json',
        url: siteUrl + "/getGSTDetails",
        success: function(data)
        {
            if(data.message != 'No Data' && data.message != '' && data.message != 'undefiend' && data.message != null)
            {
                $('#'+pageElement+' input[name="'+elementName+'"]').eq(index).attr('value', data.message.nameOfCommodity)
            }
            else
            {
                $('#'+pageElement+' input[name="'+elementName+'"]').eq(index).attr('value', '')
            }
        }
    });
}
/**
 * Vinod
 * July 07, 2017
 * Auto populate HSN Description
 * @param {type} pageElement - Element id of page or form or table
 * @param {type} elementName - Description field name
 * @param {type} hsnCode     - HSN Code
 * @param {type} fieldIndex  - Index of selected field
 * @returns {undefined}
 */
function checkHsnCode(hsnCode, handleData)
{
    var dataString = 'hsnCodeNo=' + hsnCode;
    $.ajax
            ({
                type: "POST",
                async: false,
                data: dataString,
                dataType: 'json',
                url: siteUrl + "/getGSTDetails",
                success: function(data)
                {
                    if(data.message.nameOfCommodity != 'undefiend')
                    {
                        handleData(1);
                    }
                    else
                    {
                       handleData(1);
                    }
                }
            });
}

function testHSNCode(hsnCode)
{
    var regx = /^\d+(\.\d+)*$/;
    if(regx.test(hsnCode))
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function validateRadioBtnQuestions(formName) {
    //Check 7A7A no condition
    if(formName ==  '7A7A'  &&  ($('#group7A7A1430').is(":checked") ||  $('#group7A7A1226').is(":checked") ||  $('#group7A7A1124').is(":checked") ||  $('#group7A7A1328').is(":checked") ||  $('#group7A7A2555').is(":checked"))) {
        return true;
    }
    var errorStatus   =   0;
    for (i = 1; i <= $('#questionCount'+formName).val(); i++) { 
        if ($('.groupRadioBtn'+formName+'_'+i+':checked').length <= 0) {             
            if(formName ==  '7A7A'  &&  i   ==  1) {
                if($('#chkBoxG1ServiceProvider').is(":checked")){
                    $('.errorLabel'+formName).eq(i-1).html('Please answer this question');
                    $('.errorLabel'+formName).eq(i-1).slideDown('slow');
                    errorStatus   =   1;   
                }
            }else {
                $('.errorLabel'+formName).eq(i-1).html('Please answer this question');
                $('.errorLabel'+formName).eq(i-1).slideDown('slow');
                errorStatus   =   1; 
            }           
        }
    }  
    if(errorStatus   ==   1) {                            
        return false;
    }else {
        return true;
    }
}
function validateTableInputs(formName) {
    var errorStatus   =   0;
    switch(formName) {
        case '5A':            
            $('input[name^="registration_number_5A"]').each(function (index) {                 
                //check any of the input field is filled
                if($('select[name="nature_of_itc_5A"]:eq(' + index + ')').val() ||  $('input[name="registration_number_5A"]:eq(' + index + ')').val()   ||  $('input[name="tax_period_5A"]:eq(' + index + ')').val()     ||  $('input[name="date_of_filling_5A"]:eq(' + index + ')').val()    ||  $('input[name="balance_cenvat_credit_5A"]:eq(' + index + ')').val()   ||  $('input[name="cenvat_credit_admissible_5A"]:eq(' + index + ')').val()  ) {                  
                    if(!$('input[name="registration_number_5A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_registration_number_5A:eq(' + index + ')').html('This field is required.');
                        $('.error_registration_number_5A:eq(' + index + ')').slideDown('slow');
                    }else if(!/^[A-Z0-9]*$/.test($('input[name="registration_number_5A"]:eq(' + index + ')').val())) {
                        errorStatus =   1;
                        $('.error_registration_number_5A:eq(' + index + ')').html('Only alpha numeric characters accepts.');
                        $('.error_registration_number_5A:eq(' + index + ')').slideDown('slow');
                    }                    
                    if(!$('select[name="nature_of_itc_5A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_nature_of_itc_5A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="date_of_filling_5A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_date_of_filling_5A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="balance_cenvat_credit_5A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_balance_cenvat_credit_5A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="cenvat_credit_admissible_5A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_cenvat_credit_admissible_5A:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;
        case '5B':            
            $('input[name^="form_serial_no_5B"]').each(function (index) {                 
                //check any of the input field is filled
                if($('select[name="type_of_form_5B"]:eq(' + index + ')').val() ||  $('input[name="form_serial_no_5B"]:eq(' + index + ')').val()   ||  $('input[name="tin_issuer_5B"]:eq(' + index + ')').val()     ||  $('input[name="issuer_name_5B"]:eq(' + index + ')').val()    ||  $('input[name="sales_value_5B"]:eq(' + index + ')').val()   ||  $('input[name="vat_rate_5B"]:eq(' + index + ')').val()  ) {                  
                    if(!$('select[name="type_of_form_5B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_type_of_form_5B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="form_serial_no_5B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_form_serial_no_5B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="tin_issuer_5B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                         $('.error_tin_issuer_5B:eq(' + index + ')').html('This field is required.');
                        $('.error_tin_issuer_5B:eq(' + index + ')').slideDown('slow');
                    } else if(isNaN($('input[name="tin_issuer_5B"]:eq(' + index + ')').val())){
                         errorStatus =   1;
                          $('.error_tin_issuer_5B:eq(' + index + ')').html('TIN Number Must be an Number');
                        $('.error_tin_issuer_5B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="issuer_name_5B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_issuer_name_5B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="sales_value_5B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_sales_value_5B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="vat_rate_5B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_vat_rate_5B:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;
        case '5CC':            
            $('input[name^="name_of_issuer_5cc"]').each(function (index) 
            {                 
                //check any of the input field is filled
                if($('select[name="type_of_tax_5cc"]:eq(' + index + ')').val() 
                        ||  $('input[name="name_of_issuer_5cc"]:eq(' + index + ')').val() 
                        ||  $('input[name="turnover_pending_5cc"]:eq(' + index + ')').val()   
                        ||  $('input[name="state_vat_5cc"]:eq(' + index + ')').val())     
//                        ||  $('input[name="tax_already_paid_5cc"]:eq(' + index + ')').val()    
//                        ||  $('input[name="input_already_reversed_5cc"]:eq(' + index + ')').val())
                {
                    if(!$('select[name="type_of_tax_5cc"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_type_of_tax_5cc:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="name_of_issuer_5cc"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_name_of_issuer_5cc:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="turnover_pending_5cc"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_turnover_pending_5cc:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="state_vat_5cc"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_state_vat_5cc:eq(' + index + ')').slideDown('slow');
                    }
//                    if(!$('input[name="tax_already_paid_5cc"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_tax_already_paid_5cc:eq(' + index + ')').slideDown('slow');
//                    }
//                    if(!$('input[name="input_already_reversed_5cc"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_input_already_reversed_5cc:eq(' + index + ')').slideDown('slow');
//                    }                    
                }
            });
            break;
        case '5CF':            
            $('input[name^="name_of_issuer_5cf"]').each(function (index) 
            {                 
                //check any of the input field is filled
                if($('select[name="type_of_tax_5cf"]:eq(' + index + ')').val() 
                        || $('input[name="name_of_issuer_5cf"]:eq(' + index + ')').val() 
                        ||  $('input[name="turnover_pending_5cf"]:eq(' + index + ')').val()   
                        ||  $('input[name="state_vat_5cf"]:eq(' + index + ')').val())     
//                        ||  $('input[name="tax_already_paid_5cf"]:eq(' + index + ')').val()    
//                        ||  $('input[name="input_already_reversed_5cf"]:eq(' + index + ')').val())
                {
                    if(!$('select[name="type_of_tax_5cf"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_type_of_tax_5cf:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="name_of_issuer_5cf"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_name_of_issuer_5cf:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="turnover_pending_5cf"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_turnover_pending_5cf:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="state_vat_5cf"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_state_vat_5cf:eq(' + index + ')').slideDown('slow');
                    }
//                    if(!$('input[name="tax_already_paid_5cf"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_tax_already_paid_5cf:eq(' + index + ')').slideDown('slow');
//                    }
//                    if(!$('input[name="input_already_reversed_5cf"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_input_already_reversed_5cf:eq(' + index + ')').slideDown('slow');
//                    }                    
                }
            });
            break;
        case '5CH':            
            $('input[name^="name_of_issuer_5ch"]').each(function (index) 
            {                 
                //check any of the input field is filled
                if($('select[name="type_of_tax_5ch"]:eq(' + index + ')').val() 
                        || $('input[name="name_of_issuer_5ch"]:eq(' + index + ')').val() 
                        ||  $('input[name="turnover_pending_5ch"]:eq(' + index + ')').val()   
                        ||  $('input[name="state_vat_5ch"]:eq(' + index + ')').val())     
//                        ||  $('input[name="tax_already_paid_5ch"]:eq(' + index + ')').val()    
//                        ||  $('input[name="input_already_reversed_5ch"]:eq(' + index + ')').val())
                {
                    if(!$('select[name="type_of_tax_5ch"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_type_of_tax_5ch:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="name_of_issuer_5ch"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_name_of_issuer_5ch:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="turnover_pending_5ch"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_turnover_pending_5ch:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="state_vat_5ch"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_state_vat_5ch:eq(' + index + ')').slideDown('slow');
                    }
//                    if(!$('input[name="tax_already_paid_5ch"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_tax_already_paid_5ch:eq(' + index + ')').slideDown('slow');
//                    }
//                    if(!$('input[name="input_already_reversed_5ch"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_input_already_reversed_5ch:eq(' + index + ')').slideDown('slow');
//                    } 
                }
            });
            break;
        case '5CI':            
            $('input[name^="name_of_issuer_5ci"]').each(function (index) 
            {                 
                //check any of the input field is filled
                if($('select[name="type_of_tax_5ci"]:eq(' + index + ')').val() 
                        || $('input[name="name_of_issuer_5ci"]:eq(' + index + ')').val() 
                        ||  $('input[name="turnover_pending_5ci"]:eq(' + index + ')').val()   
                        ||  $('input[name="state_vat_5ci"]:eq(' + index + ')').val())     
//                        ||  $('input[name="tax_already_paid_5ci"]:eq(' + index + ')').val()    
//                        ||  $('input[name="input_already_reversed_5ci"]:eq(' + index + ')').val())
                {
                    if(!$('select[name="type_of_tax_5ci"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_type_of_tax_5ci:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="name_of_issuer_5ci"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_name_of_issuer_5ci:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="turnover_pending_5ci"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_turnover_pending_5ci:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="state_vat_5ci"]:eq(' + index + ')').val()) 
                    {
                        errorStatus =   1;
                        $('.error_state_vat_5ci:eq(' + index + ')').slideDown('slow');
                    }
//                    if(!$('input[name="tax_already_paid_5ci"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_tax_already_paid_5ci:eq(' + index + ')').slideDown('slow');
//                    }
//                    if(!$('input[name="input_already_reversed_5ci"]:eq(' + index + ')').val()) 
//                    {
//                        errorStatus =   1;
//                        $('.error_input_already_reversed_5ci:eq(' + index + ')').slideDown('slow');
//                    }                    
                }
            });
            break;
//        case '5CG':                             
//            //check any of the input field is filled
//            if($('select[name="seller_in_state_5cg"]:eq(' + index + ')').val() 
//                    || $('select[name="seller_vat_carried_forward_5cg"]:eq(' + index + ')').val() 
//                    ||  $('input[name="tin_no_seller_state_5cg"]:eq(' + index + ')').val()   
//                    ||  $('input[name="vat_carried_forward_5cg"]:eq(' + index + ')').val())                    
//            {
//                if(!$('select[name="seller_in_state_5cg"]:eq(' + index + ')').val()) 
//                {
//                    errorStatus =   1;
//                    $('.error_seller_in_state_5cg:eq(' + index + ')').slideDown('slow');
//                }
//                if(!$('select[name="seller_vat_carried_forward_5cg"]:eq(' + index + ')').val()) 
//                {
//                    errorStatus =   1;
//                    $('.error_seller_vat_carried_forward_5cg:eq(' + index + ')').slideDown('slow');
//                }
//                if(!$('input[name="tin_no_seller_state_5cg"]:eq(' + index + ')').val()) 
//                {
//                    errorStatus =   1;
//                    $('.error_tin_no_seller_state_5cg:eq(' + index + ')').slideDown('slow');
//                }
//                if(!$('input[name="vat_carried_forward_5cg"]:eq(' + index + ')').val()) 
//                {
//                    errorStatus =   1;
//                    $('.error_vat_carried_forward_5cg:eq(' + index + ')').slideDown('slow');
//                }                                 
//            }
//        break;
        case '6A':            
            $('input[name^="invoice_no_6A"]').each(function (index) {                 
                //check any of the input field is filled
                //||  $('select[name="itc_carried_forward_6A"]:eq(' + index + ')').val()
                if($('input[name="invoice_no_6A"]:eq(' + index + ')').val() ||  $('input[name="capital_goods_6A"]:eq(' + index + ')').val()   ||  $('input[name="invoice_date_6A"]:eq(' + index + ')').val()     ||  $('input[name="supplier_reg_no_6A"]:eq(' + index + ')').val()   ||  $('input[name="recipient_regno_6A"]:eq(' + index + ')').val()   ||  $('input[name="capital_good_value_6A"]:eq(' + index + ')').val()   ||  $('input[name="capital_good_cvd_6A"]:eq(' + index + ')').val()   ||  $('input[name="capital_good_sad_6A"]:eq(' + index + ')').val()   ||  $('input[name="eligible_cenvat_6A"]:eq(' + index + ')').val()   ||  $('input[name="cenvat_credit_availed_6A"]:eq(' + index + ')').val()   ||  $('input[name="cenvat_credit_unavailed_6A"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="invoice_no_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_no_6A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="invoice_date_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_date_6A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="supplier_reg_no_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_supplier_reg_no_6A:eq(' + index + ')').html('This field is required.');
                        $('.error_supplier_reg_no_6A:eq(' + index + ')').slideDown('slow');
                    }else if(!/^[A-Z0-9]*$/.test($('input[name="supplier_reg_no_6A"]:eq(' + index + ')').val())) {
                        errorStatus =   1;
                        $('.error_supplier_reg_no_6A:eq(' + index + ')').html('Only alpha numeric characters accepts.');
                        $('.error_supplier_reg_no_6A:eq(' + index + ')').slideDown('slow');
                    }  
                    if(!$('input[name="recipient_regno_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_recipient_regno_6A:eq(' + index + ')').html('This field is required.');
                        $('.error_recipient_regno_6A:eq(' + index + ')').slideDown('slow');
                    }else if(!/^[A-Z0-9]*$/.test($('input[name="recipient_regno_6A"]:eq(' + index + ')').val())) {
                        errorStatus =   1;
                        $('.error_recipient_regno_6A:eq(' + index + ')').html('Only alpha numeric characters accepts.');
                        $('.error_recipient_regno_6A:eq(' + index + ')').slideDown('slow');
                    }  
                    if(!$('input[name="capital_good_value_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_capital_good_value_6A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="capital_good_cvd_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_capital_good_cvd_6A:eq(' + index + ')').slideDown('slow');
                    }
                    
                    if(!$('input[name="capital_good_sad_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_capital_good_sad_6A:eq(' + index + ')').slideDown('slow');
                    }
                    var eligibleCenvat=$('input[name="eligible_cenvat_6A"]:eq(' + index + ')').val();
                    var capitalGoodsCvd=$('input[name="capital_good_cvd_6A"]:eq(' + index + ')').val();
                    var capitalGoodsSad=$('input[name="capital_good_sad_6A"]:eq(' + index + ')').val();
                    var totCvdSad=parseInt(capitalGoodsCvd)+parseInt(capitalGoodsSad);
                    if(!$('input[name="eligible_cenvat_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                          $('.error_eligible_cenvat_6A:eq(' + index + ')').html('This field is required.');
                        $('.error_eligible_cenvat_6A:eq(' + index + ')').slideDown('slow');
                    } else if(parseInt(eligibleCenvat) > totCvdSad){
                       
                          errorStatus =   1;
                              $('.error_eligible_cenvat_6A:eq(' + index + ')').html(' Should not be greater than  capital goods on which credit has been partially availed');
                        $('.error_eligible_cenvat_6A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="cenvat_credit_availed_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_cenvat_credit_availed_6A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="cenvat_credit_unavailed_6A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_cenvat_credit_unavailed_6A:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;  
        case '6B':            
            $('input[name^="invoice_no_6B"]').each(function (index) {                 
                //check any of the input field is filled
                //  $('select[name="itc_carried_forward_6B"]:eq(' + index + ')').val()    || 
                // ||  $('input[name="recipient_reg_no_6B"]:eq(' + index + ')').val()  
                if($('input[name="invoice_no_6B"]:eq(' + index + ')').val() ||  $('input[name="invoice_date_6B"]:eq(' + index + ')').val()   ||  $('input[name="capital_goods_6B"]:eq(' + index + ')').val()     || $('input[name="supplier_reg_no_6B"]:eq(' + index + ')').val()  ||  $('input[name="capital_good_value_6B"]:eq(' + index + ')').val()    ||  $('input[name="capital_good_vat_6B"]:eq(' + index + ')').val()  ||  $('input[name="eligible_vat_6B"]:eq(' + index + ')').val()  ||  $('input[name="vatCredit_availed_6B"]:eq(' + index + ')').val() ||  $('input[name="vat_credit_unavailed_6B"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="invoice_no_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_no_6B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="invoice_date_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_date_6B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="supplier_reg_no_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_supplier_reg_no_6B:eq(' + index + ')').html('This field is required.');
                        $('.error_supplier_reg_no_6B:eq(' + index + ')').slideDown('slow');
                    }else if(!/^[A-Z0-9]*$/.test($('input[name="supplier_reg_no_6B"]:eq(' + index + ')').val())) {
                        errorStatus =   1;
                        $('.error_supplier_reg_no_6B:eq(' + index + ')').html('Only alpha numeric characters accepts.');
                        $('.error_supplier_reg_no_6B:eq(' + index + ')').slideDown('slow');
                    } 
                 /*   if(!$('input[name="recipient_reg_no_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_recipient_reg_no_6B:eq(' + index + ')').slideDown('slow');
                    }*/
                    if(!$('input[name="capital_good_value_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_capital_good_value_6B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="capital_good_vat_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_capital_good_vat_6B:eq(' + index + ')').slideDown('slow');
                    }
                    var capitalGoodVat=$('input[name="capital_good_vat_6B"]:eq(' + index + ')').val();
                    var eligibleVat=$('input[name="eligible_vat_6B"]:eq(' + index + ')').val();
                    if(!$('input[name="eligible_vat_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                         $('.eligible_vat_6B:eq(' + index + ')').html('This field is required.');
                        $('.error_eligible_vat_6B:eq(' + index + ')').slideDown('slow');
                    } /*else if(parseInt(eligibleVat)>parseInt(capitalGoodVat)){
                         errorStatus =   1;
                           $('.error_eligible_vat_6B:eq(' + index + ')').html(' Should not be greater than  capital goods on which credit has been partially availed');
                        $('.error_eligible_vat_6B:eq(' + index + ')').slideDown('slow');
                    }*/
                    if(!$('input[name="vatCredit_availed_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_vatCredit_availed_6B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="vat_credit_unavailed_6B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_vat_credit_unavailed_6B:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;  
        case '7A7A':            
            $('input[name^="hsn_7A7A"]').each(function (index) {                 
                //check any of the input field is filled
                if($('select[name="nature_of_itc_7a7a"]:eq(' + index + ')').val() ||  $('input[name="hsn_7A7A"]:eq(' + index + ')').val()   ||  $('input[name="hsn_7A7A_desc"]:eq(' + index + ')').val()     ||  $('input[name="unit_7A7A"]:eq(' + index + ')').val()    ||  $('input[name="quantity_7A7A"]:eq(' + index + ')').val()   ||  $('input[name="value_7A7A"]:eq(' + index + ')').val()   ||  $('input[name="duties_paid_7A7A"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="hsn_7A7A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_7A7A:eq(' + index + ')').html('This field is required.');
                        $('.error_hsn_7A7A:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_7A7A"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_7A7A:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_7A7A:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_7A7A:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_7A7A:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="hsn_7A7A_desc"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_7A7A_desc:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_7A7A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_7A7A:eq(' + index + ')').html('This fied is required');
                        $('.error_unit_7A7A:eq(' + index + ')').slideDown('slow');
                    } else if(!/^[0-9]+$/.test($('input[name="unit_7A7A"]:eq(' + index + ')').val())){
                         errorStatus =   1;
                        $('.error_unit_7A7A:eq(' + index + ')').html('Only Numbers are Allowed');
                        $('.error_unit_7A7A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_7A7A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_7A7A:eq(' + index + ')').html('This fied is required');
                        $('.error_quantity_7A7A:eq(' + index + ')').slideDown('slow');
                    } else if(!/^[0-9]+$/.test($('input[name="quantity_7A7A"]:eq(' + index + ')').val())){
                        
                         errorStatus =   1;
                        $('.error_quantity_7A7A:eq(' + index + ')').html('Only Numbers are Allowed');
                        $('.error_quantity_7A7A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_7A7A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_7A7A:eq(' + index + ')').html('This fied is required');
                        $('.error_value_7A7A:eq(' + index + ')').slideDown('slow');
                    } else if(!/^[0-9]+$/.test($('input[name="value_7A7A"]:eq(' + index + ')').val())){
                         errorStatus =   1;
                        $('.error_value_7A7A:eq(' + index + ')').html('Only Numbers are Allowed');
                        $('.error_value_7A7A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="duties_paid_7A7A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_duties_paid_7A7A:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break; 
        case '7A7B':            
            $('input[name^="hsn_7A7B"]').each(function (index) {                 
                //check any of the input field is filled
                if($('select[name="nature_of_itc_7a7b"]:eq(' + index + ')').val() ||  $('input[name="hsn_7A7B"]:eq(' + index + ')').val()   ||  $('input[name="hsn_7A7B_desc"]:eq(' + index + ')').val()     ||  $('input[name="unit_7A7B"]:eq(' + index + ')').val()    ||  $('input[name="quantity_7A7B"]:eq(' + index + ')').val()   ||  $('input[name="value_7A7B"]:eq(' + index + ')').val()   ||  $('input[name="duties_paid_7A7B"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="hsn_7A7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_7A7B:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_7A7B"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_7A7B:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_7A7B:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_7A7B:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_7A7B:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="hsn_7A7B_desc"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_7A7B_desc:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_7A7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_7A7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_7A7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_7A7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_7A7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_7A7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="duties_paid_7A7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_duties_paid_7A7B:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;
        case '7B':            
            $('input[name^="description_7B"]').each(function (index) {                 
                //check any of the input field is filled
                if($('select[name="type_7b"]:eq(' + index + ')').val() ||  $('input[name="description_7B"]:eq(' + index + ')').val()   ||  $('input[name="unit_7B"]:eq(' + index + ')').val()     ||  $('input[name="quantity_7B"]:eq(' + index + ')').val()    ||  $('input[name="value_7B"]:eq(' + index + ')').val()   ||  $('input[name="vat_7B"]:eq(' + index + ')').val()   ||  $('input[name="tax_credit_claimed_7B"]:eq(' + index + ')').val()   ||  $('input[name="tax_credit_exempt_7B"]:eq(' + index + ')').val()   ||  $('input[name="tax_credit_admissible_7B"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="description_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="vat_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_vat_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="tax_credit_claimed_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_tax_credit_claimed_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="tax_credit_exempt_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_tax_credit_exempt_7B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="tax_credit_admissible_7B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_tax_credit_admissible_7B:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break; 
        case '7C':            
            $('input[name^="description_7C"]').each(function (index) {                 
                //check any of the input field is filled
                if($('input[name="description_7C"]:eq(' + index + ')').val()   ||  $('input[name="unit_7C"]:eq(' + index + ')').val()     ||  $('input[name="quantity_7C"]:eq(' + index + ')').val()    ||  $('input[name="value_7C"]:eq(' + index + ')').val()   ||  $('input[name="taxPaid_7C"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="description_7C"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_7C:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_7C"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_7C:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_7C"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_7C:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_7C"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_7C:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="taxPaid_7C"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_taxPaid_7C:eq(' + index + ')').slideDown('slow');
                    }                    
                }
            });
            break;
        case '8':            
            $('input[name^="register_no_8"]').each(function (index) {                 
                //check any of the input field is filled
                //$('input[name="register_no_8"]:eq(' + index + ')').val() || 
                //||  $('input[name="cenvat_credit_8"]:eq(' + index + ')').val()  
                if( $('input[name="tax_period_8"]:eq(' + index + ')').val()   ||  $('input[name="date_filling_8"]:eq(' + index + ')').val()  ||  $('input[name="itc_central_tax_8"]:eq(' + index + ')').val()   ||  $('input[name="invoice_no_8"]:eq(' + index + ')').val()   ||  $('input[name="invoice_date_8"]:eq(' + index + ')').val()   ||  $('input[name="central_tax_transfered_8"]:eq(' + index + ')').val()) {                  
                  /*  if(!$('input[name="register_no_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_register_no_8:eq(' + index + ')').slideDown('slow');
                    }*/
                    if(!$('input[name="tax_period_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_tax_period_8:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="date_filling_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_date_filling_8:eq(' + index + ')').slideDown('slow');
                    }
                    /*if(!$('input[name="cenvat_credit_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_cenvat_credit_8:eq(' + index + ')').slideDown('slow');
                    }*/
                    if(!$('input[name="itc_central_tax_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_itc_central_tax_8:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="invoice_no_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_no_8:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="invoice_date_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_date_8:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="central_tax_transfered_8"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_central_tax_transfered_8:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;
        case '9A':            
            $('input[name^="challan_no_9A"]').each(function (index) {                 
                //check any of the input field is filled
                if($('input[name="name_of_job_worker_9A"]:eq(' + index + ')').val() ||  $('input[name="gstn_job_worker_9A"]:eq(' + index + ')').val()   ||  $('input[name="challan_no_9A"]:eq(' + index + ')').val()     ||  $('input[name="challan_date_9A"]:eq(' + index + ')').val()    ||  $('select[name="type_of_goods_9A"]:eq(' + index + ')').val()   ||  $('input[name="hsn_9A"]:eq(' + index + ')').val()   ||  $('input[name="description_9A"]:eq(' + index + ')').val()   ||  $('input[name="unit_9A"]:eq(' + index + ')').val()   ||  $('input[name="quantity_9A"]:eq(' + index + ')').val()   ||  $('input[name="value_9A"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="challan_no_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_challan_no_9A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="challan_date_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_challan_date_9A:eq(' + index + ')').slideDown('slow');
                    }
                     if(!$('input[name="gstn_job_worker_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                           $('.error_gstn_job_worker_9A:eq(' + index + ')').html('This field is required');
                        $('.error_gstn_job_worker_9A:eq(' + index + ')').slideDown('slow');
                    } else if(!/^[0-9]{2}[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[0-9]{1}['Z']{1}[0-9]{1}$/.test($('input[name="gstn_job_worker_9A"]:eq(' + index + ')').val())){
                          errorStatus =   1;
                            $('.error_gstn_job_worker_9A:eq(' + index + ')').html('Please Enter Valid GSTN Number');
                        $('.error_gstn_job_worker_9A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('select[name="type_of_goods_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_type_of_goods_9A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="hsn_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_9A:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_9A"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_9A:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_9A:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_9A:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_9A:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="description_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_9A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_9A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_9A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_9A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_9A:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;
        case '9B':            
            $('input[name^="name_of_principal_9B"]').each(function (index) {                 
                //check any of the input field is filled
                if($('input[name="name_of_principal_9B"]:eq(' + index + ')').val() ||  $('input[name="gstn_of_principal_9B"]:eq(' + index + ')').val()   ||  $('input[name="challan_no_9B"]:eq(' + index + ')').val()     ||  $('input[name="challan_date_9B"]:eq(' + index + ')').val()    ||  $('select[name="type_of_goods_9B"]:eq(' + index + ')').val()   ||  $('input[name="hsn_9B"]:eq(' + index + ')').val()   ||  $('input[name="description_9B"]:eq(' + index + ')').val()   ||  $('input[name="unit_9B"]:eq(' + index + ')').val()   ||  $('input[name="quantity_9B"]:eq(' + index + ')').val()   ||  $('input[name="value_9B"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="challan_no_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_challan_no_9B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="challan_date_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_challan_date_9B:eq(' + index + ')').slideDown('slow');
                    }
                    
                     if(!$('input[name="gstn_of_principal_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                           $('.error_gstn_of_principal_9B:eq(' + index + ')').html('This field is required');
                        $('.error_gstn_of_principal_9B:eq(' + index + ')').slideDown('slow');
                    } else if(!/^[0-9]{2}[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[0-9]{1}['Z']{1}[0-9]{1}$/.test($('input[name="gstn_of_principal_9B"]:eq(' + index + ')').val())){
                          errorStatus =   1;
                            $('.error_gstn_of_principal_9B:eq(' + index + ')').html('Please Enter Valid GSTN Number');
                        $('.error_gstn_of_principal_9B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('select[name="type_of_goods_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_type_of_goods_9B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="hsn_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_9B:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_9B"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_9B:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_9B:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_9B:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_9B:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="description_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_9B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_9B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_9B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_9B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_9B:eq(' + index + ')').slideDown('slow');
                    }
                }
            });
            break;   
        case '10A':            
            $('input[name^="name_principal_10A"]').each(function (index) {                 
                //check any of the input field is filled
                if($('input[name="name_principal_10A"]:eq(' + index + ')').val() ||  $('input[name="gstn_principal_10A"]:eq(' + index + ')').val()   ||  $('input[name="description_of_goods_10A"]:eq(' + index + ')').val()     ||  $('input[name="description_of_tax_10A"]:eq(' + index + ')').val()    ||  $('select[name="type_of_goods_10A"]:eq(' + index + ')').val()   ||  $('input[name="hsn_10A"]:eq(' + index + ')').val()   ||  $('input[name="unit_10A"]:eq(' + index + ')').val()   ||  $('input[name="quantity_10A"]:eq(' + index + ')').val()   ||  $('input[name="value_10A"]:eq(' + index + ')').val()   ||  $('input[name="input_tax_taken_10A"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="gstn_principal_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_gstn_principal_10A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="hsn_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_10A:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_10A"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_10A:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_10A:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_10A:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_10A:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="description_of_goods_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_of_goods_10A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_10A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_10A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_10A:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="input_tax_taken_10A"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_input_tax_taken_10A:eq(' + index + ')').slideDown('slow');
                    }                    
                }
            });
            break; 
        case '10B':            
            $('input[name^="name_of_agent_10B"]').each(function (index) {                 
                //check any of the input field is filled
                if($('input[name="name_of_agent_10B"]:eq(' + index + ')').val() ||  $('input[name="gstn_agent_10B"]:eq(' + index + ')').val()   ||  $('input[name="description_of_goods_10B"]:eq(' + index + ')').val()     ||  $('input[name="description_of_tax_10B"]:eq(' + index + ')').val()    ||  $('select[name="type_of_goods_10B"]:eq(' + index + ')').val()   ||  $('input[name="hsn_code_10B"]:eq(' + index + ')').val()   ||  $('input[name="unit_10B"]:eq(' + index + ')').val()   ||  $('input[name="quantity_10B"]:eq(' + index + ')').val()   ||  $('input[name="value_10B"]:eq(' + index + ')').val()   ||  $('input[name="input_tax_taken_10B"]:eq(' + index + ')').val()) {                  
                    if(!$('input[name="gstn_agent_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_gstn_agent_10B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="hsn_code_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_code_10B:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_code_10B"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_code_10B:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_code_10B:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_code_10B:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_code_10B:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="description_of_tax_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_of_tax_10B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_10B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="quantity_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_10B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="value_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_10B:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="input_tax_taken_10B"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_input_tax_taken_10B:eq(' + index + ')').slideDown('slow');
                    }                    
                }
            });
            break;  
        case '11':            
            $('input[name^="vat_reg_no_11"]').each(function (index) {                 
                //check any of the input field is filled
                //$('input[name="vat_reg_no_11"]:eq(' + index + ')').val() ||  $('input[name="service_tax_regno_11"]:eq(' + index + ')').val()   ||  
                
             if($('input[name="invoice_no_11"]:eq(' + index + ')').val()     || $('input[name="registration_no_11"]:eq(' + index + ')').val()     ||$('select[name="type_of_tax_11"]:eq(' + index + ')').val()     || $('input[name="invoice_date_11"]:eq(' + index + ')').val()    ||  $('input[name="tax_paid_11"]:eq(' + index + ')').val()   ||  $('input[name="tax_credit_11"]:eq(' + index + ')').val()   ||  $('input[name="vat_tax_paid_11"]:eq(' + index + ')').val()   ||  $('input[name="service_tax_paid_11"]:eq(' + index + ')').val()) {                  

               // if($('select[name="type_of_tax_11"]:eq(' + index + ')').val()     ||  $('input[name="registration_no_11"]:eq(' + index + ')').val()     ||  $('input[name="invoice_no_11"]:eq(' + index + ')').val()     ||  $('input[name="invoice_date_11"]:eq(' + index + ')').val()    ||  $('input[name="tax_paid_11"]:eq(' + index + ')').val()   ||  $('input[name="tax_credit_11"]:eq(' + index + ')').val()   ||  $('input[name="vat_tax_paid_11"]:eq(' + index + ')').val()   ||  $('input[name="service_tax_paid_11"]:eq(' + index + ')').val()) {                  

                   /* if(!$('input[name="vat_reg_no_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_vat_reg_no_11:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="service_tax_regno_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_service_tax_regno_11:eq(' + index + ')').slideDown('slow');
                    }*/
                    if(!$('select[name="type_of_tax_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_type_of_tax_11:eq(' + index + ')').slideDown('slow');
                    }
                  
                    if(!$('input[name="registration_no_11"]:eq(' + index + ')').val()) {                        
                        errorStatus =   1;
                        $('.error_registration_no_11:eq(' + index + ')').html("This field is required.");
                        $('.error_registration_no_11:eq(' + index + ')').slideDown('slow');
                    }else if(!/^[A-Z0-9]*$/.test($('input[name="registration_no_11"]:eq(' + index + ')').val())) {
                        errorStatus =   1;
                        $('.error_registration_no_11:eq(' + index + ')').html('Only alpha numeric characters accepts.');
                        $('.error_registration_no_11:eq(' + index + ')').slideDown('slow');
                    } 
                    if(!$('input[name="invoice_no_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_no_11:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="invoice_date_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_invoice_date_11:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="tax_paid_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_tax_paid_11:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="tax_credit_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_tax_credit_11:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="vat_tax_paid_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_vat_tax_paid_11:eq(' + index + ')').slideDown('slow');
                    } 
                    if(!$('input[name="service_tax_paid_11"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_service_tax_paid_11:eq(' + index + ')').slideDown('slow');
                    } 
                }
            });
            break; 
        case '12':            
            $('input[name^="document_no_12"]').each(function (index) {                 
                //check any of the input field is filled
                if($('input[name="document_no_12"]:eq(' + index + ')').val() ||  $('input[name="document_date_12"]:eq(' + index + ')').val()   ||  $('input[name="gstn_number_12"]:eq(' + index + ')').val()     ||  $('input[name="recipient_name_12"]:eq(' + index + ')').val()    ||  $('input[name="hsn_12"]:eq(' + index + ')').val()   ||  $('input[name="description_12"]:eq(' + index + ')').val()   ||  $('input[name="unit_12"]:eq(' + index + ')').val()   ||  $('input[name="quantity_12"]:eq(' + index + ')').val()   ||  $('input[name="value_12"]:eq(' + index + ')').val()) {                                      
                    if(!$('input[name="document_no_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_document_no_12:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="document_date_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_document_date_12:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="gstn_number_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                           $('.error_gstn_number_12:eq(' + index + ')').html('This field is required');
                        $('.error_gstn_number_12:eq(' + index + ')').slideDown('slow');
                    } else if(!/^[0-9]{2}[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[0-9]{1}['Z']{1}[0-9]{1}$/.test($('input[name="gstn_number_12"]:eq(' + index + ')').val())){
                          errorStatus =   1;
                            $('.error_gstn_number_12:eq(' + index + ')').html('Please Enter Valid GSTN Number');
                        $('.error_gstn_number_12:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="recipient_name_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_recipient_name_12:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="hsn_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_hsn_12:eq(' + index + ')').slideDown('slow');
                    }else {
                        var hsnCode =   $('input[name="hsn_12"]:eq(' + index + ')').val();
                        var hsnNumberWithoutDot  =  hsnCode.replace(/\./g,'');                        
                        if(!/^\d+(\.\d+)*$/.test(hsnCode)) {
                            errorStatus =   1;
                            $('.error_hsn_12:eq(' + index + ')').html('Use number or dot(.) only.');
                            $('.error_hsn_12:eq(' + index + ')').slideDown('slow');
                        }else if(hsnNumberWithoutDot.length <   6   ||  hsnNumberWithoutDot.length >   8){
                            errorStatus =   1;
                            $('.error_hsn_12:eq(' + index + ')').html('Number of digits should be between 6 and 8.');
                            $('.error_hsn_12:eq(' + index + ')').slideDown('slow');
                        }
                    }
                    if(!$('input[name="description_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_description_12:eq(' + index + ')').slideDown('slow');
                    }
                    if(!$('input[name="unit_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_unit_12:eq(' + index + ')').slideDown('slow');
                    } 
                    if(!$('input[name="quantity_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_quantity_12:eq(' + index + ')').slideDown('slow');
                    } 
                    if(!$('input[name="value_12"]:eq(' + index + ')').val()) {
                        errorStatus =   1;
                        $('.error_value_12:eq(' + index + ')').slideDown('slow');
                    } 
                }
            });
            break;
        default:
            break;        
    }
    if(errorStatus   ==   1) {                            
        return false;
    }else {
        return true;
    }
}

$(function(){
    
    $('#5bBack').click(function()
    {
        $('#input5BQuestionsContinue').val(0);
        $("#table5B").slideUp('slow');
        $("#questions5B").slideDown('slow');
        $("#uploadFileSection5B").slideDown('slow');
        $('#cfhi_forms_5B').val('');
        $('#uploadedFile').empty();
        return false;                       
    });
    
    $('#5cBack').click(function()
    {
        $('#input5CQuestionsContinue').val(0);
        $("#5Ccontainer").slideUp('slow');
        $("#uploadFileSection5C").slideDown('slow');
        $('#cfhi_forms_5C').val('');
        $('#uploadedFile_5C').empty();
        return false;  
    });
    
       
    $('#table5CCtbody').on('click', '.removeRow5CC', function () {
        $(this).closest('tr').remove();
        var totalRows_5cc = $('input[name^="name_of_issuer_5cc"]').length;
        if(totalRows_5cc == 0)
        {
            var tbody16 = $('#5CCTable').children('tbody');
            var table16 = tbody16.length ? tbody16 : $('#5CCTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table16.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cc"  id="type_of_tax_5cc_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="name_of_issuer_5cc" class="form-control" id="name_of_issuer_5cc_'+ randomNumber + '" /><label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="turnover_pending_5cc" id="turnover_pending_5cc_'+ randomNumber + '" class="form-control calculate5CC turnover_pending"/><label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="state_vat_5cc" id="state_vat_5cc_'+ randomNumber + '" class="form-control calculate5CC state_vat" /><label class="error error_state_vat_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="tax_already_paid_5cc" id="tax_already_paid_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="input_already_reversed_5cc" id="input_already_reversed_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label></div></div></td> </td></tr></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }

    });
    $('#table5CFtbody').on('click', '.removeRow5CF', function () {
        $(this).closest('tr').remove();
        var totalRows_5cf = $('input[name^="name_of_issuer_5cf"]').length;
        if(totalRows_5cf == 0)
        {
            var tbody17 = $('#5CFTable').children('tbody');
            var table17 = tbody17.length ? tbody17 : $('#5CFTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table17.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cf" id="type_of_tax_5cf_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5cf" id="name_of_issuer_5cf_'+ randomNumber + '"/><label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF turnover_pending" name="turnover_pending_5cf" id="turnover_pending_5cf_'+ randomNumber + '" /><label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF state_vat" name="state_vat_5cf" id="state_vat_5cf_'+ randomNumber + '"/><label class="error error_state_vat_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5cf" id="tax_already_paid_5cf_'+ randomNumber + '"/><label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5cf" id="input_already_reversed_5cf_'+ randomNumber + '"/><label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label></div></div></td> </td></tr></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }
    });

    $('#table5CItbody').on('click', '.removeRow5CI', function () {
        $(this).closest('tr').remove();
        var totalRows_5ci = $('input[name^="name_of_issuer_5ci"]').length;
        if(totalRows_5ci == 0)
        {
            var tbody18 = $('#5CITable').children('tbody');
            var table18 = tbody18.length ? tbody18 : $('#5CITable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table18.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ci" id="type_of_tax_5ci_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ci" id="name_of_issuer_5ci_'+ randomNumber + '" /><label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI turnover_pending" name="turnover_pending_5ci" id="turnover_pending_5ci_'+ randomNumber + '" /> <label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI state_vat" name="state_vat_5ci" id="state_vat_5ci_'+ randomNumber + '" /><label class="error error_state_vat_5ci" style="display: none;">This field is required.</label></div></div></td><td> <div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ci" id="tax_already_paid_5ci_'+ randomNumber + '" /><label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ci" id="input_already_reversed_5ci_'+ randomNumber + '" /><label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label></div></div></td></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }
    });

    $('#table5CHtbody').on('click', '.removeRow5CH', function () {
        $(this).closest('tr').remove();
        var totalRows_5ch = $('input[name^="name_of_issuer_5ch"]').length;
        if(totalRows_5ch == 0)
        {
            var tbody19 = $('#5CHTable').children('tbody');
            var table19 = tbody19.length ? tbody19 : $('#5CHTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table19.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ch" id="type_of_tax_5ch_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ch" id="name_of_issuer_5ch_'+ randomNumber + '"/><label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH turnover_pending" name="turnover_pending_5ch" id="turnover_pending_5ch_'+ randomNumber + '"/><label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH state_vat" name="state_vat_5ch" id="state_vat_5ch_'+ randomNumber + '"/><label class="error error_state_vat_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ch" id="tax_already_paid_5ch_'+ randomNumber + '"/><label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ch" id="input_already_reversed_5ch_'+ randomNumber + '"/><label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label></div></div></td> </td></tr></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }
    });
    
    $('#clearAllRows5CC').click(function () 
    {
        var confirmDelete = confirm("Are you want to clear all rows?")
        if(confirmDelete)
        {
            $('#table5CCtbody').empty();
            var tbody16 = $('#5CCTable').children('tbody');
            var table16 = tbody16.length ? tbody16 : $('#5CCTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table16.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cc"  id="type_of_tax_5cc_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="name_of_issuer_5cc" class="form-control" id="name_of_issuer_5cc_'+ randomNumber + '" /><label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="turnover_pending_5cc" id="turnover_pending_5cc_'+ randomNumber + '" class="form-control calculate5CC turnover_pending"/><label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="state_vat_5cc" id="state_vat_5cc_'+ randomNumber + '" class="form-control calculate5CC state_vat" /><label class="error error_state_vat_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="tax_already_paid_5cc" id="tax_already_paid_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="input_already_reversed_5cc" id="input_already_reversed_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label></div></div></td> </td></tr></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }

    });
    $('#clearAllRows5CF').click(function () 
    {
        var confirmDelete = confirm("Are you want to clear all rows?")
        if(confirmDelete)
        {
            $('#table5CFtbody').empty();
            var tbody17 = $('#5CFTable').children('tbody');
            var table17 = tbody17.length ? tbody17 : $('#5CFTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table17.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cf" id="type_of_tax_5cf_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5cf" id="name_of_issuer_5cf_'+ randomNumber + '"/><label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF turnover_pending" name="turnover_pending_5cf" id="turnover_pending_5cf_'+ randomNumber + '" /><label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF state_vat" name="state_vat_5cf" id="state_vat_5cf_'+ randomNumber + '"/><label class="error error_state_vat_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5cf" id="tax_already_paid_5cf_'+ randomNumber + '"/><label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5cf" id="input_already_reversed_5cf_'+ randomNumber + '"/><label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label></div></div></td> </td></tr></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }

    });  
    $('#clearAllRows5CH').click(function () 
    {
        var confirmDelete = confirm("Are you want to clear all rows?")
        if(confirmDelete)
        {
            $('#table5CHtbody').empty();
            var tbody19 = $('#5CHTable').children('tbody');
            var table19 = tbody19.length ? tbody19 : $('#5CHTable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table19.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ch" id="type_of_tax_5ch_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ch" id="name_of_issuer_5ch_'+ randomNumber + '"/><label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH turnover_pending" name="turnover_pending_5ch" id="turnover_pending_5ch_'+ randomNumber + '"/><label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH state_vat" name="state_vat_5ch" id="state_vat_5ch_'+ randomNumber + '"/><label class="error error_state_vat_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ch" id="tax_already_paid_5ch_'+ randomNumber + '"/><label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ch" id="input_already_reversed_5ch_'+ randomNumber + '"/><label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label></div></div></td> </td></tr></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }

    });  
    $('#clearAllRows5CI').click(function () 
    {
        var confirmDelete = confirm("Are you want to clear all rows?")
        if(confirmDelete)
        {
            $('#table5CItbody').empty();
            var tbody18 = $('#5CITable').children('tbody');
            var table18 = tbody18.length ? tbody18 : $('#5CITable');
            var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
            table18.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ci" id="type_of_tax_5ci_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ci" id="name_of_issuer_5ci_'+ randomNumber + '" /><label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI turnover_pending" name="turnover_pending_5ci" id="turnover_pending_5ci_'+ randomNumber + '" /> <label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI state_vat" name="state_vat_5ci" id="state_vat_5ci_'+ randomNumber + '" /><label class="error error_state_vat_5ci" style="display: none;">This field is required.</label></div></div></td><td> <div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ci" id="tax_already_paid_5ci_'+ randomNumber + '" /><label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ci" id="input_already_reversed_5ci_'+ randomNumber + '" /><label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label></div></div></td></tr>');
            callDatePicker();
            $('select').selectpicker('refresh');
        }

    }); 
});

function delete5BFiledata(status, id)
{
    var confirmMsg = confirm("Are you want to delete the file?");
    if(confirmMsg)
    {
        $('.5b_file_'+status+'_'+id).remove();
        $('#5b_file_'+status+'_'+id).remove();
    }
    var totalRows = $('input[name^="form_serial_no_5B"]').length;
    alert(totalRows)
    if(totalRows == 0)
    {
        var tbody2 = $('#5BTable').children('tbody');
        var table2 = tbody2.length ? tbody2 : $('#5BTable');
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table2.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_form_5B" id="type_of_form_5B_' + randomNumber + '"><option selected disabled>-- Select--</option><option>C </option><option>F</option><option>H</option><option>I</option></select></div><label class="error error_type_of_form_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="form_serial_no_5B" id="form_serial_no_5B_' + randomNumber + '"/></div><label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="tin_issuer_5B" id="tin_issuer_5B_' + randomNumber + '"/></div><label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control"  name="issuer_name_5B" id="issuer_name_5B_' + randomNumber + '"/></div><label class="error error_issuer_name_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="sales_value_5B" class="form-control" id="sales_value_5B_' + randomNumber + '"/></div><label class="error error_sales_value_5B" style="display: none;">This field is required.</label></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="vat_rate_5B"  class="form-control" id="vat_rate_5B_' + randomNumber + '"/></div><label class="error error_vat_rate_5B" style="display: none;">This field is required.</label></div></td></tr>');
        $('select').selectpicker('refresh');
    }
    
}

function delete5CFiledata(status, id)
{
    var confirmMsg = confirm("Are you want to delete the file?");
    if(confirmMsg)
    {
        $('.5c_file_'+status+'_'+id).remove();
        $('#5c_file_'+status+'_'+id).remove();
    }
    var totalRows_5cc = $('input[name^="name_of_issuer_5cc"]').length;
    if(totalRows_5cc == 0)
    {
        var tbody16 = $('#5CCTable').children('tbody');
        var table16 = tbody16.length ? tbody16 : $('#5CCTable');
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table16.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cc"  id="type_of_tax_5cc_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" name="name_of_issuer_5cc" class="form-control" id="name_of_issuer_5cc_'+ randomNumber + '" /><label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="turnover_pending_5cc" id="turnover_pending_5cc_'+ randomNumber + '" class="form-control calculate5CC turnover_pending"/><label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="state_vat_5cc" id="state_vat_5cc_'+ randomNumber + '" class="form-control calculate5CC state_vat" /><label class="error error_state_vat_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="tax_already_paid_5cc" id="tax_already_paid_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" name="input_already_reversed_5cc" id="input_already_reversed_5cc_'+ randomNumber + '" class="form-control" /><label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label></div></div></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CC" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    }
    var totalRows_5cf = $('input[name^="name_of_issuer_5cc"]').length;
    if(totalRows_5cf == 0)
    {
        var tbody17 = $('#5CFTable').children('tbody');
        var table17 = tbody17.length ? tbody17 : $('#5CFTable');
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table17.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5cf" id="type_of_tax_5cf_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5cf" id="name_of_issuer_5cf_'+ randomNumber + '"/><label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF turnover_pending" name="turnover_pending_5cf" id="turnover_pending_5cf_'+ randomNumber + '" /><label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CF state_vat" name="state_vat_5cf" id="state_vat_5cf_'+ randomNumber + '"/><label class="error error_state_vat_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5cf" id="tax_already_paid_5cf_'+ randomNumber + '"/><label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5cf" id="input_already_reversed_5cf_'+ randomNumber + '"/><label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label></div></div></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CF" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    }
    var totalRows_5ch = $('input[name^="name_of_issuer_5ch"]').length;
    if(totalRows_5ch == 0)
    {
        var tbody19 = $('#5CHTable').children('tbody');
        var table19 = tbody19.length ? tbody19 : $('#5CHTable');
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table19.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ch" id="type_of_tax_5ch_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select><label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ch" id="name_of_issuer_5ch_'+ randomNumber + '"/><label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH turnover_pending" name="turnover_pending_5ch" id="turnover_pending_5ch_'+ randomNumber + '"/><label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CH state_vat" name="state_vat_5ch" id="state_vat_5ch_'+ randomNumber + '"/><label class="error error_state_vat_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ch" id="tax_already_paid_5ch_'+ randomNumber + '"/><label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ch" id="input_already_reversed_5ch_'+ randomNumber + '"/><label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label></div></div></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CH" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    }
    var totalRows_5ci = $('input[name^="name_of_issuer_5ci"]').length;
    if(totalRows_5ci == 0)
    {
        var tbody18 = $('#5CITable').children('tbody');
        var table18 = tbody18.length ? tbody18 : $('#5CITable');
        var randomNumber    =   Math.floor(Math.random() * (1000 - 10 + 1)) + Math.floor(Math.random() * (1000 - 10 + 1));
        table18.append('<tr><td><div class="form-group"><div class="form-line"><select name="type_of_tax_5ci" id="type_of_tax_5ci_'+ randomNumber + '"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select> <label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="text" class="form-control" name="name_of_issuer_5ci" id="name_of_issuer_5ci_'+ randomNumber + '" /><label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI turnover_pending" name="turnover_pending_5ci" id="turnover_pending_5ci_'+ randomNumber + '" /> <label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control calculate5CI state_vat" name="state_vat_5ci" id="state_vat_5ci_'+ randomNumber + '" /><label class="error error_state_vat_5ci" style="display: none;">This field is required.</label></div></div></td><td> <div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control tax_payble" name="tax_payble" readonly/> </div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="tax_already_paid_5ci" id="tax_already_paid_5ci_'+ randomNumber + '" /><label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label></div></div></td><td><div class="form-group"><div class="form-line"><input type="number"  min="0" class="form-control" name="input_already_reversed_5ci" id="input_already_reversed_5ci_'+ randomNumber + '" /><label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label></div></div></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CI" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    }
} 
function saveQuestionDetail(tabName){
    $('#questions'+tabName+' input[name^="questionId"]').each(function (index) {
        var  questionDetailObject={};
        var i=index+1;
        var questionId=$(this).val();
        var questionAnswer=$('.groupRadioBtn'+tabName+'_'+i+':checked').val();
        if(questionId&&questionAnswer){
            questionDetailObject['questionId']=questionId;
            questionDetailObject['questionAnswer']=questionAnswer;
            questionDetailArray.push(questionDetailObject);
        }
  });
   submitObject['questionDetail']=questionDetailArray;
}

$(document).ready(function() {
    $("input[type='number']").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
    $('#preview').click(function()
    {
        var currentUrl = window.location.href; 
        currentUrl = currentUrl+'?tabId=18';
        window.open(currentUrl, '_blank');
    })
});

function saveGenralTabDetails(){
      questionIem["saveBackButton"] =JSON.stringify(savedTabArray);
      questionIem["tabId"] = $('#rootwizard').bootstrapWizard('currentIndex');
      questionIem["saveDraftDate"] =$('#save_draft_date').val();
      questionIem["gstnId"] = $('input[name="gstnId"]').val();
        if ($('#chkBoxG1Manufacturer').is(":checked")) {
                questionIem["isManufacturer"] = 1;
            } else {
                questionIem["isManufacturer"] = 0;
            }
            if ($('#chkBoxG1Trader').is(":checked")) {
                questionIem["isTrader"] = 1;
            } else {
                questionIem["isTrader"] = 0;
            }
            if ($('#chkBoxG1ServiceProvider').is(":checked")) {
                questionIem["isServiceProvider"] = 1;
            } else {
                questionIem["isServiceProvider"] = 0;
            }
            if ($('#group3VAT').is(":checked")) {
                if($('input[name="vat_reg_GQ"]').val()){
                    questionIem["vatRegNo"] = $('input[name="vat_reg_GQ"]').val();
                } else{
                    questionIem["vatRegNo"] = null;
                }
            
                if($('input[name="tin_no_in_state"]').val()&& ($('.vatchoice:checked').val()=='normal_registration')){
                    questionIem["tinNoInState"] = $('input[name="tin_no_in_state"]').val();
                }
                else {
                 questionIem["tinNoInState"] = null;
                }
            }
            if ($('#group3ServiceTax').is(":checked")) {
                if($('input[name="service_tax_GQ"]').val()){
                    questionIem["serviceTaxRegNo"] = $('input[name="service_tax_GQ"]').val();
                }else{
                    questionIem["serviceTaxRegNo"] = null;
                }
                if($('input[name="amount_vat_caarried_forward"]').val()&&($('.servicechoice:checked').val()=='normal_registration')){
                     questionIem["amountVatCarriedForward"] = $('input[name="amount_vat_caarried_forward"]').val();
                }else {
                
                    questionIem["amountVatCarriedForward"] = null;
                }
                
            } 
            if ($('#group3Excise').is(":checked")) {
                if($('input[name="excise_reg_no_GQ"]').val()){
                     questionIem["exciseRegNo"] = $('input[name="excise_reg_no_GQ"]').val();
                }else{
                     questionIem["exciseRegNo"] = null;
                }
               if($('input[name="entry_tax_tin_no"]').val()&&($('.excisechoice:checked').val()=='normal_registration')){
                    questionIem["tinNoInEntryTax"] = $('input[name="entry_tax_tin_no"]').val();
               } else {
                      questionIem["tinNoInEntryTax"] = null;
               }
                
            } 
             if ($('#group3EntryTax').is(":checked")) {
                 if($('input[name="entry_tax_GQ"]').val()){
                        questionIem["entryTax"] = $('input[name="entry_tax_GQ"]').val();
                 } else {
                       questionIem["entryTax"] = null;
                 }
             if($('input[name="amount_entry_caarried_forward"]').val()&&($('.entrytaxchoice:checked').val()=='normal_registration')){
                 questionIem["entryTaxCarriedForward"] = $('input[name="amount_entry_caarried_forward"]').val();
             }else{
                  questionIem["entryTaxCarriedForward"] = null;
             }
                
            } 
             if ($('#groupG5Yes').is(":checked")) {
               
                questionIem["taxCredit"] = $('#groupG5Yes').val();
            } else {

                questionIem["taxCredit"] = 'No';
            }

           
}

function validateGenralTabInputs(){
      
                    var errorStatus =   0;
                    if ($("#group3VAT").is(":checked")) {
                       
                        if(!$("#vatRegNo").val()){
                            $("#error_vat_reg_GQ").html('This field is required');
                            $("#error_vat_reg_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[A-Za-z0-9 _.-]+$/.test($("#vatRegNo").val())){
                                $("#error_vat_reg_GQ").html('Only AlphaNumberic Allowed');
                                $("#error_vat_reg_GQ").slideDown();
                            errorStatus =   1;
                        }
                        
                        if(($('.vatchoice:checked').val()=='normal_registration') && !$("#TinNoInState").val()){
                            $("#error_tin_no_in_state").html('This field is required');
                            $("#error_tin_no_in_state").slideDown();
                            errorStatus =   1;
                        }else if($('.vatchoice:checked').val()=='normal_registration' && !/^[0-9]{1,45}$/.test($("#TinNoInState").val())){
                                $("#error_tin_no_in_state").html('Only Numberic Allowed');
                                $("#error_tin_no_in_state").slideDown();
                            errorStatus =   1;
                        }
                    }
                    
                    
                     if ($("#group3EntryTax").is(":checked")) {
                       
                        if(!$("#entryTax").val()){
                            $("#error_entry_tax_GQ").html('This field is required');
                            $("#error_entry_tax_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[A-Za-z0-9 _.-]+$/.test($("#entryTax").val())){
                                $("#error_entry_tax_GQ").html('Only AlphaNumberic Allowed');
                                $("#error_entry_tax_GQ").slideDown();
                            errorStatus =   1;
                        }
                        
                        if(($('.entrytaxchoice:checked').val()=='normal_registration') &&!$("#AmountEntryCarriedForward").val()){
                            $("#error_amount_entry_caarried_forward").html('This field is required');
                            $("#error_amount_entry_caarried_forward").slideDown();
                            errorStatus =   1;
                        }else if(($('.entrytaxchoice:checked').val()=='normal_registration') && !/^[0-9]{1,45}$/.test($("#AmountEntryCarriedForward").val())){
                                $("#error_amount_entry_caarried_forward").html('Only Numberic Allowed');
                                $("#error_amount_entry_caarried_forward").slideDown();
                            errorStatus =   1;
                        }
                    }
                    
                    if ($("#group3ServiceTax").is(":checked")) {
                       if(!$("#serviceTaxRegNo").val()) {
                            $("#error_service_tax_GQ").html('This field is required');
                            $("#error_service_tax_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}['ST'|'SD']{2}[0-9]{3}$/.test($("#serviceTaxRegNo").val())){
                            $("#error_service_tax_GQ").html('Invalid input given');
                            $("#error_service_tax_GQ").slideDown();
                            errorStatus =   1;
                        }
                        if(($('.servicechoice:checked').val()=='normal_registration') && !$("#AmountVatCarriedForward").val()){
                            $("#error_AmountVatCarriedForward").html('This field is required');
                            $("#error_AmountVatCarriedForward").slideDown();
                            errorStatus =   1;
                        }else if(($('.servicechoice:checked').val()=='normal_registration') && isNaN($("#AmountVatCarriedForward").val())) {
                            $("#error_AmountVatCarriedForward").html('Accepet only numbers');
                            $("#error_AmountVatCarriedForward").slideDown();
                            errorStatus =   1;
                        }
                    }
                    if ($("#group3Excise").is(":checked")) {
                        if(!$("#exciseRegNo").val()) {
                            $("#error_excise_reg_no_GQ").html('This field is required');
                            $("#error_excise_reg_no_GQ").slideDown();
                            errorStatus =   1;
                        }else if(!/^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}['EM'|'ED']{2}[0-9]{3}$/.test($("#exciseRegNo").val())){
                            $("#error_excise_reg_no_GQ").html('Invalid input given');
                            $("#error_excise_reg_no_GQ").slideDown();
                            errorStatus =   1;
                        }
                        if(($('.excisechoice:checked').val()=='normal_registration') && !$("#TinNoInStateEntryTax").val()){
                            $("#error_TinNoInStateEntryTax").html('This field is required');
                            $("#error_TinNoInStateEntryTax").slideDown();
                            errorStatus =   1;
                        }else if(($('.excisechoice:checked').val()=='normal_registration') && isNaN($("#TinNoInStateEntryTax").val())) {
                            $("#error_TinNoInStateEntryTax").html('Accepet only numbers');
                            $("#error_TinNoInStateEntryTax").slideDown();
                            errorStatus =   1;
                        }
                    }
                    if(errorStatus ==   1) {
                       return false; 
                    }
}
