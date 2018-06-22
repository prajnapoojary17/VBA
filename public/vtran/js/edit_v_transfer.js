var tbody = $('#5ATable').children('tbody');
    var table = tbody.length ? tbody : $('#5ATable');
    /*$('#addRow5A').click(function() {
     table.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="datepicker form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5A"><i class="material-icons">remove</i></button></td></tr>');
     })*/

    $('#addRow5A').click(function () {

        table.append('<tr><td style="display:none"><select name="nature_of_itc_5A" id="nature_of_itc_5A_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '" style="width:100%"><option selected disabled>-- Select--</option><option value="service_tax">Service Tax </option><option>Krishi Kalyan Cess  (not available to manufacturers)</option><option value="excise_reg">Central Excise</option><option>CVD under Customs Act</option><option>SAD under Customs Act (not available to service providers)</option><option>NCCD on inputs</option></select></td><td><input type="text" class="form-control" name="registration_number_5A" id="registration_number_5A_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"></td><td><input type="text" class="form-control tax_period" name="tax_period_5A"></td><td><input type="text" class="datepicker form-control" name="date_of_filling_5A" id="date_of_filling_5A_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"></td><td><input type="number" class="form-control calculateTotal" data-formname="5A" name="balance_cenvat_credit_5A" id="balance_cenvat_credit_5A_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"></td><td><input type="number" class="form-control calculateTotal" data-formname="5A" name="cenvat_credit_admissible_5A" id="cenvat_credit_admissible_5A_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
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
    $('#wizard').on('change', '.calculateTotal', function () {

        calculateTotal($(this).data("formname"), $(this).attr("name"));

    });

    $('#wizard #table5CCtbody').on('change', '.calculate5CC', function () {
      
        var total = 0;

        $('#table5CCtbody input[name="turnover_pending"]').each(function (index) {
            console.log(index);
            var q = $('#table5CCtbody input[name="turnover_pending"]').eq(index).closest('tr').find('.state_vat').val();
            console.log(q);
            total = (parseInt(q) * parseInt($(this).val())) - (parseInt($(this).val()) * 2 / 100);
            console.log(total);    
            if (isNaN(total)) {
                total = '';
            }
            $('#table5CCtbody input[name="tax_payble"]').eq(index).closest('.tax_payble').val(total);

        });
    });

    $('#wizard #table5CFtbody').on('change', '.calculate5CF', function () {
        var total = 0;
        $('#table5CFtbody input[name="turnover_pending"]').each(function (index) {
            console.log(index);
            var q = $('#table5CFtbody input[name="turnover_pending"]').eq(index).closest('tr').find('.state_vat').val();
            console.log(q);
            total = (parseInt(q) * parseInt($(this).val()));
            console.log(total);
            if (isNaN(total)) {
                total = '';
            }
            $('#table5CFtbody input[name="tax_payble"]').eq(index).closest('.tax_payble').val(total);

        });
    });

    $('#wizard #table5CItbody').on('change', '.calculate5CI', function () {

        var total = 0;

        $('#table5CItbody input[name="turnover_pending"]').each(function (index) {
            console.log(index);
            var q = $('#table5CItbody input[name="turnover_pending"]').eq(index).closest('tr').find('.state_vat').val();
            console.log(q);
            total = (parseInt(q) * parseInt($(this).val()));
            console.log(total);
            if (isNaN(total)) {
                total = '';
            }
            $('#table5CItbody input[name="tax_payble"]').eq(index).closest('.tax_payble').val(total);

        });
    });
    $('#wizard #table5CHtbody').on('change', '.calculate5CH', function () {

        var total = 0;

        $('#table5CHtbody input[name="turnover_pending"]').each(function (index) {
            console.log(index);
            var q = $('#table5CHtbody input[name="turnover_pending"]').eq(index).closest('tr').find('.state_vat').val();
            console.log(q);
            total = (parseInt(q) * parseInt($(this).val()));
            console.log(total);
            if (isNaN(total)) {
                total = '';
            }
            $('#table5CHtbody input[name="tax_payble"]').eq(index).closest('.tax_payble').val(total);

        });
    });
    //Calculate total
    function calculateTotal(form_name, inputName) {
        var total = 0;
        $('input[name="' + inputName + '"]').each(function (index) {
            total += Number($(this).val());
        });
        $('#' + inputName + '_total').html(total);
    }
    $('#table5Atbody').on('click', '.removeRow5A', function () {
        $(this).closest('tr').remove();
        calculateTotal('5A', 'balance_cenvat_credit_5A');
        calculateTotal('5A', 'cenvat_credit_admissible_5A');


    });
    $('#table5Ctbody').on('click', '.removeRow5C', function () {
        $(this).closest('tr').remove();
    });
    $('#table5Btbody').on('click', '.removeRow5B', function () {
        $(this).closest('tr').remove();


    });
    $('#table6Atbody').on('click', '.removeRow6A', function () {
        $(this).closest('tr').remove();
        calculateTotal('6A', 'capital_good_value_6A_totals');
        calculateTotal('6A', 'capital_good_cvd_6A_totals');
        calculateTotal('6A', 'capital_good_sad_6A_totals');
        calculateTotal('6A', 'eligible_cenvat_6A_totals');
        calculateTotal('6A', 'cenvat_credit_availed_6A_totals');
        calculateTotal('6A', 'cenvat_credit_unavailed_6A_6A_totals');
    });
    $('#table6Btbody').on('click', '.removeRow6B', function () {
        $(this).closest('tr').remove();
        calculateTotal('6B', 'capital_good_value_6B_total');
        calculateTotal('6B', 'capital_good_vat_6B_total');
        calculateTotal('6B', 'eligible_vat_6B_total');
        calculateTotal('6B', 'vatCredit_availed_6B_total');
        calculateTotal('6B', 'vat_credit_unavailed_6B_total');
    });
    $('#table7A7Atbody').on('click', '.removeRow7A7A', function () {
        $(this).closest('tr').remove();
    });
    $('#table7A7Btbody').on('click', '.removeRow7A7B', function () {
        $(this).closest('tr').remove();
    });
    $('#table7Btbody').on('click', '.removeRow7B', function () {
        $(this).closest('tr').remove();
    });
    $('#table7Ctbody').on('click', '.removeRow7C', function () {
        $(this).closest('tr').remove();
    });
    $('#table8tbody').on('click', '.removeRow8', function () {
        $(this).closest('tr').remove();
    });
    $('#table9Atbody').on('click', '.removeRow9A', function () {
        $(this).closest('tr').remove();
        calculateTotal('9A', 'unit_9A_total');
        calculateTotal('9A', 'quantity_9A_total');
        calculateTotal('9A', 'value_9A_total');
    });
    $('#table9Btbody').on('click', '.removeRow9B', function () {
        $(this).closest('tr').remove();
        calculateTotal('9B', 'unit_9B_total');
        calculateTotal('9B', 'quantity_9B_total');
        calculateTotal('9B', 'value_9B_total');
    });
    $('#table10Atbody').on('click', '.removeRow10A', function () {
        $(this).closest('tr').remove();
    });
    $('#table10Btbody').on('click', '.removeRow10B', function () {
        $(this).closest('tr').remove();
    });
    $('#table11tbody').on('click', '.removeRow11', function () {
        $(this).closest('tr').remove();
        calculateTotal('11', 'tax_paid_11_total');
        calculateTotal('11', 'tax_credit_11_total');
    });
    $('#table12tbody').on('click', '.removeRow12', function () {
        $(this).closest('tr').remove();
        calculateTotal('12', 'unit_12_total');
        calculateTotal('12', 'quantity_12_total');
        calculateTotal('12', 'value_12_total');
    });
    $(".btn-continue-to-next").click(function () {
        $("#" + $(this).attr("data-current-tab")).removeClass("active");
        $("#" + $(this).attr("data-next-tab")).addClass("active");

    });

    $('#table5CCtbody').on('click', '.removeRow5CC', function () {
        $(this).closest('tr').remove();

    });
    $('#table5CFtbody').on('click', '.removeRow5CF', function () {
        $(this).closest('tr').remove();

    });

    $('#table5CItbody').on('click', '.removeRow5CI', function () {
        $(this).closest('tr').remove();

    });

    $('#table5CHtbody').on('click', '.removeRow5CH', function () {
        $(this).closest('tr').remove();

    });




    $('#chkBoxG1ServiceProvider').change(function () {
        if ($(this).is(":checked")) {
            $('#7A7AQ14').slideDown();
        } else {
            $('#7A7AQ14').slideUp();
        }
    });

    //For csrf tocken global
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });




    $('#save_return_draft').click(function () {
        submitObject = {};
        fiveCC = [];
        $('#table5CCtbody select[name="type_of_tax"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CCtbody input[name="name_of_issuer"]:eq(' + index + ')').val();
            var turnoverPending = $('#table5CCtbody input[name="turnover_pending"]:eq(' + index + ')').val();
            var stateVat = $('#table5CCtbody input[name="state_vat"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CCtbody input[name="tax_payble"]:eq(' + index + ')').val()
            var taxAlreadyPaid = $('#table5CCtbody input[name="tax_already_paid"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CCtbody input[name="input_already_reversed"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CCtbody input[name="category_c"]').val();

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
                // console.log(item);
                fiveCC.push(item);
            }
        });

        $('#table5CFtbody select[name="type_of_tax"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CFtbody input[name="name_of_issuer"]:eq(' + index + ')').val();
            var turnoverPending = $('#table5CFtbody input[name="turnover_pending"]:eq(' + index + ')').val();
            var stateVat = $('#table5CFtbody input[name="state_vat"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CFtbody input[name="tax_payble"]:eq(' + index + ')').val();
            var taxAlreadyPaid = $('#table5CFtbody input[name="tax_already_paid"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CFtbody input[name="input_already_reversed"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CFtbody input[name="category_f"]').val();
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
                // console.log(item);

                fiveCC.push(item);
                // console.log(item);
            }
        });

        $('#table5CHtbody select[name="type_of_tax"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CHtbody input[name="name_of_issuer"]:eq(' + index + ')').val();
            var turnoverPending = $('#table5CHtbody input[name="turnover_pending"]:eq(' + index + ')').val();
            var stateVat = $('#table5CHtbody input[name="state_vat"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CHtbody input[name="tax_payble"]:eq(' + index + ')').val();
            var taxAlreadyPaid = $('#table5CHtbody input[name="tax_already_paid"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CHtbody input[name="input_already_reversed"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CHtbody input[name="category_h"]').val();
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
                // console.log(item);
                fiveCC.push(item);
            }
        });

        $('#table5CItbody select[name="type_of_tax"]').each(function (index) {
            var typeOfTax = $(this).val();
            var nameOfIssuer = $('#table5CItbody input[name="name_of_issuer"]:eq(' + index + ')').val();
            var turnoverPending = $('input[name="turnover_pending"]:eq(' + index + ')').val();
            var stateVat = $('#table5CItbody input[name="state_vat"]:eq(' + index + ')').val();
            var taxPayable = $('#table5CItbody input[name="tax_payble"]:eq(' + index + ')').val();
            var taxAlreadyPaid = $('#table5CItbody input[name="tax_already_paid"]:eq(' + index + ')').val();
            var inputAlreadyReversed = $('#table5CItbody input[name="input_already_reversed"]:eq(' + index + ')').val();
            var fiveCCategory = $('#table5CItbody input[name="category_i"]').val();
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
                // console.log(item);

                fiveCC.push(item);
            }
        });
        generalIem = {};
        var fiveCCategory = $('input[name="category_g"]').val();
        var sellerInState = $('input[name="seller_in_state"]').val();
        var sellerVatCarriedForward = $('input[name="seller_vat_carried_forward"]').val();
        var tinNumberInState = $('input[name="tin_no_seller_state"]').val();
        var vatCarriedForward = $('input[name="vat_carried_forward"]').val();
        if (fiveCCategory != '' & sellerInState != '' && sellerVatCarriedForward != '' && tinNumberInState != '' && vatCarriedForward != '') {

            generalIem['fiveCCategory'] = fiveCCategory;
            generalIem['sellerInState'] = sellerInState;
            generalIem['sellerVatCarriedForward'] = sellerVatCarriedForward;
            generalIem['tinNumberInState'] = tinNumberInState;
            generalIem['vatCarriedForward'] = vatCarriedForward;
            fiveCC.push(generalIem);

        }
        submitObject['fiveCC'] = fiveCC;
        console.log(submitObject);




        fiveA = [];

        $('input[name^="registration_number_5A"]').each(function (index) {

            item = {};
            var natureOfItc = $('select[name=nature_of_itc_5A]').eq(index).find("option:selected").text();
            var registrationNo = $(this).val();
            var taxPeriod = $('input[name="tax_period_5A"]:eq(' + index + ')').val();
            var dateFiling = $('input[name="date_of_filling_5A"]:eq(' + index + ')').val();
            var balanceCenvatCredit = $('input[name="balance_cenvat_credit_5A"]:eq(' + index + ')').val();
            var balanceCenvatAdmissible = $('input[name="cenvat_credit_admissible_5A"]:eq(' + index + ')').val();
            if ( registrationNo != '' && taxPeriod != '' && dateFiling != '' && balanceCenvatCredit != '' && balanceCenvatAdmissible != '') {
                item["natureOfItc"] = natureOfItc;
                item["registrationNo"] = registrationNo;
                item["taxPeriod"] = taxPeriod;
                item["dateFiling"] = dateFiling;
                item["balanceCenvatCredit"] = balanceCenvatCredit;
                item["balanceCenvatAdmissible"] = balanceCenvatAdmissible;
               console.log(item);

                fiveA.push(item);
            }
        });
        submitObject['fiveA'] = fiveA;

     

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
                    console.log(item);
                    fiveB.push(item);

                }else{
                  
                }
               
            });
        
            submitObject['fiveB'] = fiveB;
          //return false;
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
            var itcCarriedForward = $('select[name=itc_carried_forward_6A]').eq(index).find("option:selected").text();
             var capitalGood = $('input[name="capital_goods_6A"]:eq(' + index + ')').val();
            var invoiceDate = $('input[name="invoice_date_6A"]:eq(' + index + ')').val();
            var supplierRegNo = $('input[name="supplier_reg_no_6A"]:eq(' + index + ')').val();
            var recipientRegNo = $('input[name="recipient_regno_6A"]:eq(' + index + ')').val();
            var capitalGoodValue = $('input[name="capital_good_value_6A"]:eq(' + index + ')').val();
            var capitalGoodCvd = $('input[name="capital_good_cvd_6A"]:eq(' + index + ')').val();
            var capitalGoodSad = $('input[name="capital_good_sad_6A"]:eq(' + index + ')').val();
            var eligibleCenvat = $('input[name="eligible_cenvat_6A"]:eq(' + index + ')').val();
            var cenvatCreditAvailed = $('input[name="cenvat_credit_availed_6A"]:eq(' + index + ')').val();
            var cenvatCreditUnavailed = $('input[name="cenvat-credit_unavailed_6A"]:eq(' + index + ')').val();
            if (invoiceNo != ''&& invoiceDate != '' && supplierRegNo != '' && recipientRegNo != '' && capitalGoodValue != '' && capitalGoodCvd != '' && capitalGoodSad != ''
                    && eligibleCenvat != '' && cenvatCreditAvailed != '' && cenvatCreditUnavailed != '') {
               
                if(capitalGood){
                      item["capitalGood"] = capitalGood;
                }
                 if(itcCarriedForward){
                   item["itcCarriedForward"] = itcCarriedForward;
                }
                
                item["invoiceNo"] = invoiceNo;
               
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
        sixB = [];
        $('input[name^="invoice_no_6B"]').each(function (index) {
            item = {};
            var invoiceNo = $(this).val();
            var invoiceDate = $('input[name="invoice_date_6B"]:eq(' + index + ')').val();
            var capitalGoods = $('input[name="capital_goods_6B"]:eq(' + index + ')').val();
            var itcCarriedForward = $('.itc_carried_forward_6B select').eq(index).find("option:selected").text();
            var supplierRegNo = $('input[name="supplier_reg_no_6B"]:eq(' + index + ')').val();
            var recipientRegNo = $('input[name="recipient_reg_no_6B"]:eq(' + index + ')').val();
            var capitalGoodValue = $('input[name="capital_good_value_6B"]:eq(' + index + ')').val();
            var capitalGoodVat = $('input[name="capital_good_vat_6B"]:eq(' + index + ')').val();
            var eligibleVat = $('input[name="eligible_vat_6B"]:eq(' + index + ')').val();
            var vatCreditAvailed = $('input[name="vatCredit_availed_6B"]:eq(' + index + ')').val();
            var vatCreditUnavailed = $('input[name="vat_credit_unavailed_6B"]:eq(' + index + ')').val();

            if (invoiceNo != '' && invoiceDate != ''  && supplierRegNo != '' && recipientRegNo != ''
                    && capitalGoodValue != '' && capitalGoodVat != '' && eligibleVat != '' && vatCreditAvailed != '' && vatCreditUnavailed != '') {

                item["invoiceNo"] = invoiceNo;
                item["invoiceDate"] = invoiceDate;
                if(capitalGoods){
                      item["capitalGoods"] = capitalGoods;
                }
               if(itcCarriedForward){
                       item["itcCarriedForward"] = itcCarriedForward;
                }
               
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
        sevenA7A = [];
        $('input[name^="hsn_7A7A"]').each(function (index) {
            item = {};
            var hsn = $(this).val();
              var type = $('.nature_of_itc_7a7a select').eq(index).find("option:selected").text();
            var unit = $('input[name="unit_7A7A"]:eq(' + index + ')').val();
            var quantity = $('input[name="quantity_7A7A"]:eq(' + index + ')').val();
            var value = $('input[name="value_7A7A"]:eq(' + index + ')').val();
            var dutiesPaid = $('input[name="duties_paid_7A7A"]:eq(' + index + ')').val();
            if (hsn != '' && unit != '' && quantity != '' && value != '' && dutiesPaid != '') {
                  if(type){
                      item["type"] = type;
                }
                item["hsn"] = hsn;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["dutiesPaid"] = dutiesPaid;


                sevenA7A.push(item);
            }
            
        });
        submitObject['sevenA7A'] = sevenA7A;
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
                if(type){
                      item["type"] = type;
                }
              
                item["hsn"] = hsn;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["dutiesPaid"] = dutiesPaid;

                sevenA7B.push(item);
            }
         
        });
        submitObject['sevenA7B'] = sevenA7B;
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
               if(type){
                      item["type"] = type;
                }
               
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
        eight = [];
        $('input[name^="register_no_8"]').each(function (index) {
            item = {};

            var register_no = $(this).val();
            var taxPeriod = $('input[name="tax_period_8"]:eq(' + index + ')').val();
            var dateFilling = $('input[name="date_filling_8"]:eq(' + index + ')').val();
            var cenvatCredit = $('input[name="cenvat_credit_8"]:eq(' + index + ')').val();
            var itcCentralTax = $('input[name="itc_central_tax_8"]:eq(' + index + ')').val();
            var invoiceNo = $('input[name="invoice_no_8"]:eq(' + index + ')').val();
            var invoiceDate = $('input[name="invoice_date_8"]:eq(' + index + ')').val();
            var centralTaxTransfered = $('input[name="central_tax_transfered_8"]:eq(' + index + ')').val();
            if (register_no != '' && taxPeriod != '' && dateFilling != '' && cenvatCredit != '' && itcCentralTax != '' && invoiceNo != '' && invoiceDate != '' && centralTaxTransfered != '') {
                item["register_no"] = register_no;
                item["taxPeriod"] = taxPeriod;
                item["dateFilling"] = dateFilling;
                item["cenvatCredit"] = cenvatCredit;
                item["itcCentralTax"] = itcCentralTax;
                item["invoiceNo"] = invoiceNo;
                item["invoiceDate"] = invoiceDate;
                item["centralTaxTransfered"] = centralTaxTransfered;

                eight.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['eight'] = eight;
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
          
            
            if (challanNo != ''  && challanDate != '' && hsn != '' && description != '' && unit != '' && quantity != '' && value != '') {
                
                 
                  if(NameOfJobWorker){
                       item["jobWorkerName"] = NameOfJobWorker;
                }
                  if(gstnJobWorkerName){
                    item["gstnJobWorkerName"] = gstnJobWorkerName;
                }
                item["challanNo"] = challanNo;
               
                  
                
                item["typeOfGoods"] = typeOfGoods;
                item["challanDate"] = challanDate;
                item["goodsType"] = typeOfGoods;
                item["hsn"] = hsn;
                item["description"] = description;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;

                nineA.push(item);
                console.log(item);
            }
            //showSuccessMessage();
        });
        submitObject['nineA'] = nineA;
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
      
            console.log(NameOfPrincipal+''+GstnOfPrincipal+''+challanNo+''+challanDate+''+typeOfGoods+''+hsn+''+description+''+unit+''+quantity+''+value+''+goodsType);
            if (challanNo != '' && challanDate != '' && typeOfGoods != '' && hsn != '' && description != '' &&
                    unit != '' && quantity != '' && value != '') {
                
                  if(NameOfPrincipal){
                       item["NameOfPrincipal"] = NameOfPrincipal;
                }
                  if(GstnOfPrincipal){
                     item["GstnOfPrincipal"] = GstnOfPrincipal;
                }
             
               
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
            if (gstnPrincipal != ''  && descriptionOfGoods != '' && hsnCode != ''
                    && unit != '' && quantity != '' && value != '' && inputTaxTaken != '') {
              
                 if(nameOfPrincipal){
                   item["nameOfPrincipal"] = nameOfPrincipal;
               }
                  if(typeOfGoods){
                    item["typeOfGoods"] = typeOfGoods;
                      item["goodsType"] = typeOfGoods;
               }
                 if(descriptionOfTax){
                  item["descriptionOfTax"] = descriptionOfTax;
               }
                item["gstnPrincipal"] = gstnPrincipal;
               
                item["descriptionOfGoods"] = descriptionOfGoods;
               
                item["hsnCode"] = hsnCode;
              
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["inputTaxTaken"] = inputTaxTaken;
              
                tenA.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['tenA'] = tenA;
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
         
            if (gstnPrincipal != '' && descriptionOfGoods != ''  && hsnCode != '' && unit != '' &&
                    quantity != '' && value != '' && inputTaxTaken != '' ) {
                item["gstnPrincipal"] = gstnPrincipal;
                if(nameOfAgent){
                     item["nameOfAgent"] = nameOfAgent;
                }
               if(descriptionOfTax){
                   item["descriptionOfTax"] = descriptionOfTax;
               }
                if(typeOfGoods){
                    item["goodsType"] = typeOfGoods;
                     item["typeOfGoods"] = typeOfGoods;
               }
                item["descriptionOfGoods"] = descriptionOfGoods;
                
              
                item["hsnCode"] = hsnCode;
                item["unit"] = unit;
                item["quantity"] = quantity;
                item["value"] = value;
                item["inputTaxTaken"] = inputTaxTaken;
               

                tenB.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['tenB'] = tenB;
        eleven = [];
        $('input[name^="vat_reg_no_11"]').each(function (index) {
            item = {};
            var vatRegNo = $(this).val();
            var serviceTaxRegNo = $('input[name="service_tax_regno_11"]:eq(' + index + ')').val();
            var invoiceNo = $('input[name="invoice_no_11"]:eq(' + index + ')').val();
            var invoiceDate = $('input[name="invoice_date_11"]:eq(' + index + ')').val();
            var TaxPaid = $('input[name="tax_paid_11"]:eq(' + index + ')').val();
            var taxCredit = $('input[name="tax_credit_11"]:eq(' + index + ')').val();
            var vatTaxPaid = $('input[name="vat_tax_paid_11"]:eq(' + index + ')').val();
            var serviceTaxPaid = $('input[name="service_tax_paid_11"]:eq(' + index + ')').val();
  console.log(vatRegNo+'='+serviceTaxRegNo+'='+invoiceNo+'='+invoiceDate+'='+TaxPaid+'='+taxCredit+'='+vatTaxPaid+'='+serviceTaxPaid);
            if (vatRegNo != '' && serviceTaxRegNo != '' && invoiceNo != '' && invoiceDate != '' && TaxPaid != '' && taxCredit != '') {
                item["vatRegNo"] = vatRegNo;
                item["serviceTaxRegNo"] = serviceTaxRegNo;
                item["invoiceNo"] = invoiceNo;
                item["invoiceDate"] = invoiceDate;
                item["TaxPaid"] = TaxPaid;
                item["taxCredit"] = taxCredit;
                if(vatTaxPaid){
                    item["vatTaxPaid"] = vatTaxPaid;
                }
                 if(serviceTaxPaid){
                   item["serviceTaxPaid"] = serviceTaxPaid;
                }
 
                eleven.push(item);
            }
            //showSuccessMessage();
        });
        submitObject['eleven'] = eleven;
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
        // console.log(submitObject);
        data = JSON.stringify(submitObject);
        //  console.log(submitObject);
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
        // table2.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table2.append('<tr><td><select name="type_of_form_5B" id="type_of_form_5B_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"><option selected disabled>-- Select--</option><option>C </option><option>F</option><option>H</option><option>I</option></select></td><td><input type="text" class="form-control" name="form_serial_no_5B" id="form_serial_no_5B_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"/></td><td><input type="text" class="form-control" name="tin_issuer_5B" id="tin_issuer_5B_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"/></td><td><input type="text" class="form-control"  name="issuer_name_5B" id="issuer_name_5B_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"/></td><td><input type="number" name="sales_value_5B" class="form-control" id="sales_value_5B_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"/></td><td><input type="number" name="vat_rate_5B"  class="form-control" id="vat_rate_5B_' + Math.floor(Math.random() * (1000 - 10 + 1)) + 10 + '"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })
    //5B upload change function    
    $("#cfhi_forms_5B").change(function () {
        //$('#rootwizard').bootstrapWizard('show',4);
    });

    var tbody3 = $('#6ATable').children('tbody');
    var table3 = tbody3.length ? tbody3 : $('#6ATable');
    $('#addRow6A').click(function () {
        //table3.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table3.append('<tr><td style="display:none"><input type="text" name="capital_goods_6A" class="form-control" id="capital_goods_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="invoice_no_6A" class="form-control" id="invoice_no_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="invoice_date_6A" class="datepicker form-control" id="invoice_date_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="supplier_reg_no_6A" class="form-control" id="supplier_reg_no_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text"  name="recipient_regno_6A" class="form-control" id="recipient_regno_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display: none"><select name="itc_carried_forward_6A" id="itc_carried_forward_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'" ><option selected disabled>-- Select--</option><option>Central Excise</option><option>VAT</option><option>Entry Tax</option></select></td><td><input type="number" name="capital_good_value_6A" class="form-control calculateTotal" data-formname="6A" id="capital_good_value_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="capital_good_cvd_6A" class="form-control calculateTotal" data-formname="6A" id="capital_good_cvd_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="capital_good_sad_6A" class="form-control calculateTotal" data-formname="6A" id="capital_good_sad_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number"  name="eligible_cenvat_6A" class="form-control calculateTotal" data-formname="6A" id="eligible_cenvat_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="cenvat_credit_availed_6A" class="form-control calculateTotal" data-formname="6A" id="cenvat_credit_availed_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="cenvat_credit_unavailed_6A" class="form-control calculateTotal" data-formname="6A" id="cenvat_credit_unavailed_6A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
    $('select').selectpicker('refresh');
        callDatePicker();
    })

    var tbody4 = $('#6BTable').children('tbody');
    var table4 = tbody4.length ? tbody4 : $('#6BTable');
    $('#addRow6B').click(function () {
        //table4.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table4.append('<tr><td><input type="text" name="invoice_no_6B" class="form-control" id="invoice_no_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="invoice_date_6B" class="datepicker form-control" id="invoice_date_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display:none"><input type="text" class="form-control" name="capital_goods_6B" id="capital_goods_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display:none"><select class="itc_carried_forward_6B" name="itc_carried_forward_6B" id="itc_carried_forward_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"><option selected disabled>-- Select--</option><option>VAT</option><option>Entry Tax</option></select></td><td><input type="text" class="form-control" name="supplier_reg_no_6B" id="supplier_reg_no_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" class="form-control" name="recipient_reg_no_6B" id="recipient_reg_no_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="capital_good_value_6B" class="form-control calculateTotal" data-formname="6B" id="capital_good_value_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="capital_good_vat_6B" class="form-control calculateTotal" data-formname="6B" id="capital_good_vat_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="eligible_vat_6B" class="form-control calculateTotal" data-formname="6B" id="eligible_vat_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="vatCredit_availed_6B" class="form-control calculateTotal" data-formname="6B" id="vatCredit_availed_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number"  name="vat_credit_unavailed_6B" class="form-control calculateTotal" data-formname="6B" id="vat_credit_unavailed_6B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td> <td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow6B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
        callDatePicker();
    })

    var tbody5 = $('#7A7ATable').children('tbody');
    var table5 = tbody5.length ? tbody5 : $('#7A7ATable');
    $('#addRow7A7A').click(function() {
       // table5.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
       table5.append('<tr><td style="display:none"> <select name="nature_of_itc_7a7a" class="nature_of_itc_7a7a" id="nature_of_itc_7a7a_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'><option value="select" >-- Select--</option> </select></td><td><input type="text" name="hsn_7A7A" class="form-control" id="hsn_7A7A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" min="0" name="unit_7A7A" class="form-control" id="unit_7A7A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" min="0" class="form-control" name="quantity_7A7A" id="quantity_7A7A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" min="0"  name="value_7A7A" class="form-control" id="value_7A7A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="duties_paid_7A7A" class="form-control" id="duties_paid_7A7A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
    $('select').selectpicker('refresh');
    }) 
    
    var tbody6 = $('#7A7BTable').children('tbody');
    var table6 = tbody6.length ? tbody6 : $('#7A7BTable');
    $('#addRow7A7B').click(function () {
        //table6.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table6.append('<tr><td style="display:none"> <select name="nature_of_itc_7a7b" class="nature_of_itc_7a7b" id="nature_of_itc_7a7b_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'><option value="select" >-- Select--</option> </select></td><td><input type="text" class="form-control" name="hsn_7A7B" id="hsn_7A7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_7A7B" class="form-control" id="unit_7A7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_7A7B" class="form-control" id="quantity_7A7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="value_7A7B" class="form-control" id="value_7A7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" class="form-control" name="duties_paid_7A7B" id="duties_paid_7A7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7A7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
      $('select').selectpicker('refresh');
    })
 
                                       
                                     
                                         
                                           
                                         
                                    
    var tbody7 = $('#7BTable').children('tbody');
    var table7 = tbody7.length ? tbody7 : $('#7BTable');
    $('#addRow7B').click(function () {
        // table7.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        //table7.append('<tr><td><select name="eligble_duty_paid_7B"><option selected disabled>-- Select--</option><option>Duty of excise specified in the First & Second Schedule to the Central Excise Tariff Act, 1985;</option><option>Additional Duties of Excise (Goods of Special</option><option>Additional Duties of Excise (Textile and Textile</option><option>Additional duty leviable u/s 3(1)  & 3(5) of the</option><option>National Calamity Contingent Duty leviable under section 136 of the Finance Act, 2001,</option></select></td><td><input type="text" class="form-control" name="description_7B"  /></td><td><input type="number" name="unit_7B" class="form-control" /></td><td><input type="number" name="quantity_7B" class="form-control" /></td><td><input type="number" name="value_7B" class="form-control" /></td><td><input type="text" name="vat_7B" class="form-control" /></td><td><input type="text" name="tax_credit_claimed_7B" class="form-control" /></td><td><input type="text" name="tax_credit_exempt_7B" class="form-control" /></td><td><input type="text" name="tax_credit_admissible_7B" class="form-control" /></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        table7.append('<tr><td style="display:none"><select name="type_7b" class="type_7b" id="type_7b_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'><option value="select" >-- Select--</option></select></td><td><input type="text" class="form-control" name="description_7B"  id="description_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_7B" class="form-control" id="unit_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_7B" class="form-control" id="quantity_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="value_7B" class="form-control" id="value_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="vat_7B" class="form-control" id="vat_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="tax_credit_claimed_7B" class="form-control" id="tax_credit_claimed_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="tax_credit_exempt_7B" class="form-control"id="tax_credit_exempt_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'" /></td><td><input type="number" name="tax_credit_admissible_7B" class="form-control" id="tax_credit_admissible_7B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })

    var tbody8 = $('#7CTable').children('tbody');
    var table8 = tbody8.length ? tbody8 : $('#7CTable');
    $('#addRow7C').click(function () {
        // table8.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table8.append('<tr><td><input type="text" name="description_7C" class="form-control" id="description_7C_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_7C" class="form-control" id="unit_7C_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_7C" class="form-control" id="quantity_7C_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number"  name="value_7C"  class="form-control" id="value_7C_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="taxPaid_7C" class="form-control" id="taxPaid_7C_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow7C" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
    })

    var tbody9 = $('#8Table').children('tbody');
    var table9 = tbody9.length ? tbody9 : $('#8Table');
    $('#addRow8').click(function () {
        // table9.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table9.append(' <tr><td><input type="text" name="register_no_8" class="form-control" id="register_no_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="tax_period_8"  class="form-control" id="tax_period_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="date_filling_8" class="datepicker form-control" id="date_filling_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="cenvat_credit_8" class="form-control" id="cenvat_credit_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="itc_central_tax_8" class="form-control" id="itc_central_tax_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="invoice_no_8" class="form-control" id="invoice_no_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="invoice_date_8" class="datepicker form-control" id="invoice_date_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" min="0" name="central_tax_transfered_8" class="form-control" id="central_tax_transfered_8_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow8" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        callDatePicker();
    })

    var tbody10 = $('#9ATable').children('tbody');
    var table10 = tbody10.length ? tbody10 : $('#9ATable');
    $('#addRow9A').click(function () {
        // table10.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table10.append('<tr><td style="display:none"><input type="text" class="form-control" name="name_of_job_worker_9A" value="" id="name_of_job_worker_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"></td><td style="display:none"><input type="text" name="gstn_job_worker_9A" class="form-control" id="gstn_job_worker_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="challan_no_9A" class="form-control" id="challan_no_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="challan_date_9A" class="datepicker form-control" id="challan_date_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><select name="type_of_goods_9A" class="type_of_goods_9A" id="type_of_goods_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></td><td><input type="text" name="hsn_9A" class="form-control hsnCode9a" id="hsn_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="description_9A" class="form-control" id="description_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_9A" class="form-control calculateTotal" data-formname="9A" id="unit_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_9A" class="form-control calculateTotal" data-formname="9A" id="quantity_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="value_9A" class="form-control calculateTotal" data-formname="9A" id="value_9A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td> </tr>');
        $('select').selectpicker('refresh');
        callDatePicker();
    })

    var tbody11 = $('#9BTable').children('tbody');
    var table11 = tbody11.length ? tbody11 : $('#9BTable');
    $('#addRow9B').click(function () {
        //table11.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table11.append('<tr><td style="display:none"><input type="text" class="form-control" name="name_of_principal_9B" value="" id="name_of_principal_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display:none"><input type="text" class="form-control" name="gstn_of_principal_9B" value="" id="gstn_of_principal_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text"  name="challan_no_9B" class="form-control" id="challan_no_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="challan_date_9B" class="datepicker form-control" id="challan_date_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><select name="type_of_goods_9B"  class="type_of_goods_9B" id="type_of_goods_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></td><td><input type="text" class="form-control hsnCode9b" name="hsn_9B" id="hsn_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="description_9B" class="form-control" id="description_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_9B" class="form-control calculateTotal" data-formname="9B" id="unit_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_9B" class="form-control calculateTotal" data-formname="9B" id="quantity_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="value_9B" class="form-control calculateTotal" data-formname="9B" id="value_9B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow9B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
        callDatePicker();
    })

    var tbody12 = $('#10ATable').children('tbody');
    var table12 = tbody12.length ? tbody12 : $('#10ATable');
    $('#addRow10A').click(function () {
        //table12.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table12.append('<tr><td style="display:none"><input type="text" class="form-control" name="name_principal_10A" value="" id="name_principal_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="gstn_principal_10A" class="form-control" id="gstn_principal_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td> <td><input type="text" class="form-control" name="description_of_goods_10A" id="description_of_goods_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display:none"><input type="text" class="form-control" name="description_of_tax_10A" id="description_of_tax_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display:none"><select id="type_of_goods_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'" class="type_of_goods_10A" name="type_of_goods_10A"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></td><td><input type="text" class="form-control hsnCode10a" name="hsn_10A" id="hsn_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_10A" class="form-control" id="unit_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_10A" class="form-control" id="quantity_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="value_10A" class="form-control" id="value_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="input_tax_taken_10A" class="form-control" id="input_tax_taken_10A_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td>       <td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10A" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })

    var tbody13 = $('#10BTable').children('tbody');
    var table13 = tbody13.length ? tbody13 : $('#10BTable');
    $('#addRow10B').click(function () {
        // table13.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table13.append('<tr><td style="display:none"><input type="text" class="form-control" name="name_of_agent_10B" id="name_of_agent_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" name="gstn_agent_10B" class="form-control" id="gstn_agent_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="text" class="form-control" name="description_of_goods_10B" id="description_of_goods_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td> <td style="display:none"><input type="text" class="form-control" name="description_of_tax_10B" id="description_of_tax_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td style="display:none"><select name="type_of_goods_10B" class="type_of_goods_10B" id="type_of_goods_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"><option selected disabled>-- Select--</option><option>Inputs</option><option>Semi finished Goods</option><option>Finished Goods</option><option>Capital Goods</option></select></td> <td><input type="text" class="form-control hsnCode10b" name="hsn_code_10B" id="hsn_code_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="unit_10B" class="form-control" id="unit_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="quantity_10B" class="form-control" id="quantity_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="value_10B" class="form-control" id="value_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><input type="number" name="input_tax_taken_10B"  class="form-control" id="input_tax_taken_10B_'+Math.floor(Math.random() * (1000 - 10 + 1)) + 10+'"/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow10B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        $('select').selectpicker('refresh');
    })

    var tbody14 = $('#11Table').children('tbody');
    var table14 = tbody14.length ? tbody14 : $('#11Table');
    $('#addRow11').click(function () {
        //table14.append('<tr><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><input type="text" class="form-control"></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete Row" id="removeRow5C"><i class="material-icons">remove</i></button></td></tr>');
        table14.append('<tr><td><input type="text" name="vat_reg_no_11" class="form-control" /></td><td><input type="text" name="service_tax_regno_11" class="form-control" /></td><td><input type="text" class="form-control"  name="invoice_no_11"  /></td><td><input type="text" name="invoice_date_11" class="datepicker form-control" /></td><td><input type="number" name="tax_paid_11" class="form-control calculateTotal" data-formname="11" /></td><td ><input type="number" name="tax_credit_11" class="form-control calculateTotal" data-formname="11" /></td><td style="display:none"><input type="text" class="form-control" name="vat_tax_paid_11" value=""/></td><td style="display:none"><input type="text" class="form-control" name="service_tax_paid_11" value=""/></td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow11" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        callDatePicker();
    })

    var tbody15 = $('#12Table').children('tbody');
    var table15 = tbody15.length ? tbody15 : $('#12Table');
    $('#addRow12').click(function () {
        table15.append('<tr><td><input type="text"  name="document_no_12" class="form-control" /></td><td><input type="text" name="document_date_12" class="datepicker form-control" /></td><td><input type="text" name="gstn_number_12" class="form-control" /></td><td><input type="text" name="recipient_name_12" class="form-control" /></td><td><input type="text" name="hsn_12" class="form-control hsnCode12" /></td><td><input type="text" name="description_12" class="form-control" /></td><td><input type="number" name="unit_12" class="form-control calculateTotal" data-formname="12" /></td><td><input type="number" name="quantity_12" class="form-control calculateTotal" data-formname="12" /></td><td><input type="text" name="value_12" class="form-control calculateTotal" data-formname="12" /></td ><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow12" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr>');
        callDatePicker();
    })


    var tbody16 = $('#5CCTable').children('tbody');
    var table16 = tbody16.length ? tbody16 : $('#5CCTable');
    $('#addRow5CC').click(function () {

        table16.append('<tr><td><select name="type_of_tax" id="type_of_tax"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select></td><td><input type="text" class="form-control" name="name_of_issuer"/></td><td><input type="number" class="form-control calculate5CC turnover_pending" name="turnover_pending"/></td><td><input type="number" class="form-control calculate5CC state_vat" name="state_vat"/></td><td><input type="number" class="form-control tax_payble" name="tax_payble" readonly/></td><td><input type="number" class="form-control" name="tax_already_paid"/></td><td><input type="number" class="form-control" name="input_already_reversed"/></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CC" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })



    var tbody17 = $('#5CFTable').children('tbody');
    var table17 = tbody17.length ? tbody17 : $('#5CFTable');
    $('#addRow5CF').click(function () {

        table17.append('<tr><td><select name="type_of_tax" id="type_of_tax"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select></td><td><input type="text" class="form-control" name="name_of_issuer"/></td><td><input type="number" class="form-control calculate5CF turnover_pending" name="turnover_pending"/></td><td><input type="number" class="form-control calculate5CF state_vat" name="state_vat"/></td><td><input type="number" class="form-control tax_payble" name="tax_payble" readonly/></td><td><input type="number" class="form-control" name="tax_already_paid"/></td><td><input type="number" class="form-control" name="input_already_reversed"/></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CF" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })


    var tbody18 = $('#5CITable').children('tbody');
    var table18 = tbody18.length ? tbody18 : $('#5CITable');
    $('#addRow5CI').click(function () {

        table18.append('<tr><td><select name="type_of_tax" id="type_of_tax"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select></td><td><input type="text" class="form-control" name="name_of_issuer"/></td><td><input type="number" class="form-control calculate5CI turnover_pending" name="turnover_pending"/></td><td><input type="number" class="form-control calculate5CI state_vat" name="state_vat"/></td><td><input type="number" class="form-control tax_payble" name="tax_payble" readonly/></td><td><input type="number" class="form-control" name="tax_already_paid"/></td><td><input type="number" class="form-control" name="input_already_reversed"/></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CI" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
        callDatePicker();
        $('select').selectpicker('refresh');
    })
    var tbody19 = $('#5CHTable').children('tbody');
    var table19 = tbody19.length ? tbody19 : $('#5CHTable');
    $('#addRow5CH').click(function () {

        table19.append('<tr><td><select name="type_of_tax" id="type_of_tax"><option selected disabled value="select">-- Select--</option><option value="vat">VAT</option><option value="entry_tax">Entry Tax</option></select></td><td><input type="text" class="form-control" name="name_of_issuer"/></td><td><input type="number" class="form-control calculate5CH turnover_pending" name="turnover_pending"/></td><td><input type="number" class="form-control calculate5CH state_vat" name="state_vat"/></td><td><input type="number" class="form-control tax_payble" name="tax_payble" readonly/></td><td><input type="number" class="form-control" name="tax_already_paid"/></td><td><input type="number" class="form-control" name="input_already_reversed"/></td> </td><td><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CH" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button></td></tr></tr>');
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
        if (this.id == "group2No") {
            $("#ques3, #ques4").slideDown('slow');
            // $("#ques5").slideUp('slow');
        } else {
            $("#ques3, #ques4").slideUp('slow');
            //$("#ques5").slideDown('slow');
        }
    });

    $('.linkedRadioBtnQuestion').click(function () {
        var attr = $(this).attr("data-showQuestionId");
        var divArray = $(this).attr("data-hideQuestionId").split("@#@");
        $.each(divArray, function (i) {
            $("#" + divArray[i] + "").slideUp('slow');
        });
        if (typeof attr !== typeof undefined && attr !== false) {
            $("#" + $(this).attr("data-showQuestionId") + "").slideDown('slow');
        }

    });
    $('.linkedChkBoxQuestion').click(function () {
        if ($(this).is(":checked")) {
            $("#" + $(this).attr("data-showQuestionId") + "").slideDown('slow');
        } else {
            $("#" + $(this).attr("data-showQuestionId") + "").slideUp('slow');
        }
    });

    /* 6A */
    $('input[name=group6A1]').click(function () {
        if (this.id == "group6A1Yes") {
            $("#6AQ1").slideDown('slow');
        } else {
            $("#6AQ1").slideUp('slow');
        }
    });
    $('input[name=group6A2]').click(function () {
        if (this.id == "group6A2Yes") {
            $("#table6A").slideDown('slow');
        } else {
            $("#table6A").slideUp('slow');
        }
    });
    $('input[name=group6A2]').click(function () {
        if (this.id == "group6A2No") {
            $("#6AQ2").slideDown('slow');
        } else {
            $("#6AQ2").slideUp('slow');
        }
    });
    /* 7A */
    $('input[name=group7A1]').click(function () {
        if (this.id == "group7A1Yes") {
            $("#7AQ1").slideDown('slow');
        } else {
            $("#7AQ1").slideUp('slow');
        }
    });
    $('input[name=group7A2]').click(function () {
        if (this.id == "group7A2Yes") {
            $("#7AQ2").slideDown('slow');
        } else {
            $("#7AQ2").slideUp('slow');
        }
    });
    $('input[name=group7A3]').click(function () {
        if (this.id == "group7A3Yes") {
            $("#7AQ3").slideDown('slow');
        } else {
            $("#7AQ3").slideUp('slow');
        }
    });
    $('input[name=group7A4]').click(function () {
        if (this.id == "group7A4No") {
            $("#table7A").slideDown('slow');
        } else {
            $("#table7A").slideUp('slow');
        }
    });
    $('input[name=group7A4]').click(function () {
        if (this.id == "group7A4Yes") {
            $("#7AQ4").slideDown('slow');
        } else {
            $("#7AQ4").slideUp('slow');
        }
    });

    $('#upload_file').on('click', function (event)
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
        $('#pageLoader').show();
        var formData = new FormData();
        for (var i = 0; i < $('input[name="cfhi_forms_5B[]"]').get(0).files.length; ++i) {
            formData.append('file' + i, $('input[name="cfhi_forms_5B[]"]')[0].files[i]);
        }
        $.ajax({
            type: "POST",
            url: siteUrl + '/upload-5B-form-files',
            processData: false,
            data: formData,
            contentType: false,
            async: false,
            success: function (data) {
                $('#pageLoader').hide();
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
                        $('#table5Btbody').html('');
                        $('#table5Btbody').html(data);
                    }
                }
            },
            error: function () {

            }
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

    $('#textFieldId').on('change', function () {
        var hsnCodeNo = $('#textFieldId').val();
        var dataString = 'hsnCodeNo=' + hsnCodeNo;
        $.ajax
                ({
                    type: "POST",
                    async: false,
                    data: dataString,
                    url: siteUrl + "/getGSTDetails",
                    success: function (data)
                    {
                    }
                });
    })

}

$('#download_sample_form').click(function (e) {
    $('#sample_form').submit();
});
/**
 * Set HSN Code description
 */

$(function()
{    
    /**
     * HSN Code description for 9A
     */
    $('#nineAForm').on('change', '.hsnCode9a', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_9A"]').index(this);
        setHsnCode('nineAForm', 'description_9A', hsnCodeNo, fieldIndex,  'hsnError');
        
    });
    /**
     * HSN Code description for 9B
     */
    $('#9BTable').on('change', '.hsnCode9b', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_9B"]').index(this);
        setHsnCode('9BTable', 'description_9B', hsnCodeNo, fieldIndex,  'hsnError');        
    });
    /**
     * HSN Code description for 10A
     */
    $('#tenAForm').on('change', '.hsnCode10a', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_10A"]').index(this);        
        setHsnCode('tenAForm', 'description_of_goods_10A', hsnCodeNo, fieldIndex, 'hsnError');
    });
    /**
     * HSN Code description for 10B
     */
    $('#tenBForm').on('change', '.hsnCode10b', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_code_10B"]').index(this);
        setHsnCode('tenBForm', 'description_of_goods_10B', hsnCodeNo, fieldIndex,  'hsnError');
        
    });
    /** 
     * HSN Code description for 12 edit
     */
    $('#12Table').on('change', '.hsnCode12', function () 
    {
        var hsnCodeNo = $(this).val();
        var fieldIndex = $('input[name="hsn_12"]').index(this);
        setHsnCode('12Table', 'description_12', hsnCodeNo, fieldIndex,  'hsnError');
        
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
function setHsnCode(pageElement, elementName, hsnCode, fieldIndex, errorId)
{
    validateHSNCode(hsnCode, errorId);
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
function validateHSNCode(hsnCode, errorId)
{
    var regx = /^\d+(\.\d+)*$/;
    if(regx.test(hsnCode))
    {
        $('#'+errorId).html('');
        return true;
    }
    else
    {
        $('#'+errorId).html('Only number and dot(.) are allowed');
        return false;
    }
}


