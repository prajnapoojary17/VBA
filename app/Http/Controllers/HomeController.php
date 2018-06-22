<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Api;
use App\Http\Requests\PaymentRequest;
use App\Http\Requests\LicenseRequest;
use Illuminate\Support\Facades\Auth;
use Session;
use Config;
use Datatables;
use Crypt;
use Log;
use App;
use PDF;
use View;
use Excel;
use Response;
use Mail;
use Illuminate\Support\Facades\Input;
use App\Helpers\HelperFunction;

class HomeController extends Controller {

    public function __construct() {
        
    }

    /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *VTRAN HOME PAGE
     * @param none
     * @return view
     */
    public function home() {

        return view('home.home');
    }
    
    /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *VTRAN Billing Address page
     * @param none
     * @return view
     */
    public function billingAddress() {
        $response = [];
        $isActiveUser = session()->get('userAuthDetail');
        if ($isActiveUser->status == 'active') {

            $urlGstnCount = 'get-user-detail/';
            $str_ = $isActiveUser->userId;
            $methodNameUser_ = 'GET';
            $response = Api::APIcall($urlGstnCount, $str_, $methodNameUser_);

            if ($response->status == 'success' && $response->message == 'USER_DETAIL_FOUND') {
                $response = $response->data;
            }
        }
        $data['txnid'] = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        return view('home.billing_address', ['txnid' => $data['txnid'], 'billing' => $response]);
    }

    /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *VTRAN HOME PAGE
     * @param none
     * @return view
     */
    public function dashboard() {

        $data = [];
        $user = session()->get('userAuthDetail');

        if ($user->totalLicenses == 1) {
            return redirect()->to('license');
        }

        $data['totalLicense'] = $user->totalLicenses;

        $urlGstnCount = 'total-gstn/';
        $str_ = $user->userId;
        $methodNameUser_ = 'GET';
        $response = Api::APIcall($urlGstnCount, $str_, $methodNameUser_);
        if ($response->status == 'success' && $response->message == 'GSTN_COUNT_FOR_USER') {
            $data['licenseInUse'] = $response->data->gstnCount;
        }

        return view('home.dashboard', ['gstnDetail' => $data]);
    }

    public function vTransferHome(Request $request, $registeredPersonId, $gstnId, $legalLicense) {
        $userId = $registeredPersonId;
        session(['gstnDetail' => ['registeredPersonId' => $registeredPersonId, 'gstnId' => $gstnId, 'legalName' => $legalLicense]]);
        $data = HelperFunction::retrieveVtranCategory($userId);
        $lastTabId = $request->get('tabId');
        $urlRegisteredPerson = 'registered-person-detail/';
        $methodName = 'GET';
        $response = Api::APIcall($urlRegisteredPerson, session()->get('gstnDetail')['registeredPersonId'], $methodName);
        if ($response->status == 'success') {
      //  dd($response->data);
            $data['registeredPersonDetail'] = $response->data;
            session(['registeredPersonDetail' => $response->data]);
            $registeredPersonId = $response->data->registeredPersonId;
            session(['registeredPersonId' => $registeredPersonId]);
        }

        if ($lastTabId == "" || $lastTabId != 18) {
            $lastTabId = 0;
        }
        $data['last_tab_id'] = $lastTabId;
        return view('home.v_transfer_home', $data);
    }

    /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *VTRAN HOME PAGE
     * @param none
     * @return view
     */
    public function saveVTransferData(Request $request) {
        $data = json_decode($request->jsonString);
        $methodName_ = 'POST';
        $signupUrl = "submit-all-tab-data";
        $str_ = '';
        $data->dumy = ['a' => 'n'];
        $post_data = ['registeredPersonId' => session()->get('registeredPersonId'), 'tab' => $data];
        $curlPostData = serialize($post_data);
        $signup = Api::APIcall($signupUrl, $str_, $methodName_, $curlPostData);

        if ($signup->status == 'success') {
            return response()->json(['status' => 'success']);
        }
    }

    public function upload5BFormFiles(Request $request) {
        $error = '';
        $data['uploadStatus'] = $request->uploadStatus;
        $formValues = $request->all();
        unset($formValues['uploadStatus']);
        foreach ($formValues as $key => $formFiles) {
            //Gt file details
            $file = $request->file($key);
            //Find temp path of file
            $path = $file->getRealPath();
            //Get extention of file
            $fileExt = Input::file($key)->getClientOriginalExtension();
            //Return error code 1 if invalid file
            if (!in_array($fileExt, ['xls', 'xlsx'])) {
                return $error = 1;
            }
            //Load excel file
            $excelData = Excel::load($path, function($reader) {
                        
                    })->get();
            $excelDetails = $excelData;
            //Get array details
            $arrayValues = $excelDetails->first()->toArray();
            if (count($arrayValues) > 0 && count($arrayValues[0]) > 0) {
                //Extract heading
                $heads = array_keys($arrayValues[0]);
                //Actual allowed heads
                $actualHeads = ['type_of_form_cfehi', 'form_no.', 'tin_no._of_issuer', 'name_of_issuer', 'sales_value', 'rate_under_vat'];
                //Check for difference from actual heads
                $fileFormatCheck = array_diff($heads, $actualHeads);
                //Error 2 if heads are different
                if (count($fileFormatCheck) > 0) {
                    return $error = 2;
                }
                //Create excel data array
                $data['details'][] = $excelData->first()->toArray();
            } else {
                return $error = 3;
            }
        }
        if ($error == '') {
            return view('home.uploaded_file_data_5b', $data);
        }
    }

    public function upload5CFormFiles(Request $request) {
        $error = '';
        $details = [];
        $uploadStatus = $request->uploadStatus;
        $formValues = $request->all();
        unset($formValues['uploadStatus']);
        foreach ($formValues as $key => $formFiles) {
            //Gt file details
            $file = $request->file($key);
            //Find temp path of file
            $path = $file->getRealPath();
            //Get extention of file
            $fileExt = Input::file($key)->getClientOriginalExtension();
            //Return error code 1 if invalid file
            if (!in_array($fileExt, ['xls', 'xlsx'])) {
                return $error = 1;
            }
            //Load excel file
            $excelData = Excel::load($path, function($reader) {
                        
                    })->get();
            $excelDetails = $excelData;
            //Get array details
            $arrayValues = $excelDetails->first()->toArray();
            if (count($arrayValues) > 0 && count($arrayValues[0]) > 0) {
                //Extract heading
                $heads = array_keys($arrayValues[0]);
                //Actual allowed heads
                $actualHeads = ['type_of_form_cfhi', 'type_of_tax',
                    'name_of_issuer', 'turnover_for_which_c_forms_are_pending', 'rate_under_respective_state_vat',
                    'tax_payable_under_existing_laws_if_sold_without_such_forms', 'tax_paid_under_existing_laws'
                    , 'inputs_already_reversed_under_existing_laws'];
                //Check for difference from actual heads
                $fileFormatCheck = array_diff($heads, $actualHeads);
                //Error 2 if heads are different
                if (count($fileFormatCheck) > 0) {
                    return $error = 2;
                }
                //Create excel data array
                $details[] = $excelData->first()->toArray();
                //$formFiles->move(public_path("/uploads/form5B"), $key . '.xlsx');
            } else {
                return $error = 3;
            }
        }
        if ($error != '') {
            return $error;
        } else {
            if (count($details) > 0) {
                $tableCRows = '';
                $tableFRows = '';
                $tableHRows = '';
                $tableIRows = '';
                $c = 0;
                $f = 0;
                $h = 0;
                $i = 0;
                $n = 0;
                foreach ($details as $key => $value) {
                    foreach ($value as $key1 => $details) {
                        if (strtolower($details['type_of_tax']) == 'vat') {
                            $vatSelected = 'selected';
                            $entryTaxSelected = '';
                        } else if (strtolower($details['type_of_tax']) == 'entry tax') {
                            $vatSelected = '';
                            $entryTaxSelected = 'selected';
                        } else {
                            $vatSelected = '';
                            $entryTaxSelected = '';
                        }
                        //For table C
                        if (strtolower($details['type_of_form_cfhi']) == 'c') {
                            //State vat
                            //Multiply with hundred because it is coming as percentage
                            //Excel column should be percentage format
                            $stateVat = $details['rate_under_respective_state_vat'] * 100;
                            $stateVat = round($stateVat, 2);
                            //Calculate Tax payable under existing laws if sold without such forms
                            //F=(D*E)-(D*2%) 
                            $taxPayable = (($details['turnover_for_which_c_forms_are_pending'] * $details['rate_under_respective_state_vat']) - ($details['turnover_for_which_c_forms_are_pending'] * 0.02));
                            $taxPayable = round($taxPayable, 2);
                            $tableCRows .= '<tr class="5c_file_' . $uploadStatus . '_' . $n . '">' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<select name="type_of_tax_5cc" id="type_of_tax_5cc_' . $c . '">' .
                                    '<option selected disabled value="select">-- Select--</option>' .
                                    '<option value="vat" ' . $vatSelected . '>VAT</option>' .
                                    '<option value="entry_tax" ' . $entryTaxSelected . '>Entry Tax</option>' .
                                    '</select>' .
                                    '</div><label class="error error_type_of_tax_5cc" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['name_of_issuer'] . '"  type="text" class="form-control" name="name_of_issuer_5cc" id="name_of_issuer_5cc_' . $c . '"/>' .
                                    '</div><label class="error error_name_of_issuer_5cc" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $details['turnover_for_which_c_forms_are_pending'] . '" type="number" class="form-control calculate5CC turnover_pending" name="turnover_pending_5cc" id="turnover_pending_5cc_' . $c . '"/>' .
                                    '</div><label class="error error_turnover_pending_5cc" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $stateVat . '"  type="number" class="form-control calculate5CC state_vat" name="state_vat_5cc" id="state_vat_5cc_' . $c . '"/>' .
                                    '</div><label class="error error_state_vat_5cc" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $taxPayable . '" type="number" class="form-control tax_payble" name="tax_payble" readonly id="tax_payble_' . $c . '"/>' .
                                    '</div></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['tax_paid_under_existing_laws'] . '" type="number" class="form-control" name="tax_already_paid_5cc" id="tax_already_paid_5cc_' . $c . '"/>' .
                                    '</div><label class="error error_tax_already_paid_5cc" style="display: none;">This field is required.</label></div></td>' .
                                    ' <td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['inputs_already_reversed_under_existing_laws'] . '" type="number" class="form-control" name="input_already_reversed_5cc" id="input_already_reversed_5cc_' . $c . '"/>' .
                                    '</div><label class="error error_input_already_reversed_5cc" style="display: none;">This field is required.</label></div></td>' .
                                    '<td>' .
                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CC" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>' .
                                    '</td>' .
                                    '</tr>';
//                            if($c > 0)
//                            {
//                               $tableCRows .=  '<td>'.
//                                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CC" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>'.
//                                                '</td>'.
//                                            '</tr>';
//                            }
//                            else
//                            {
//                                '</tr>';
//                            }                                            
                            $c++;
                        }
                        //For table F
                        if (strtolower($details['type_of_form_cfhi']) == 'f') {
                            //State vat
                            //Multiply with hundred because it is coming as percentage
                            //Excel column should be percentage format
                            $stateVat = $details['rate_under_respective_state_vat'] * 100;
                            $stateVat = round($stateVat, 2);
                            //Calculate Tax payable under existing laws if sold without such forms
                            //F=(D*E)-(D*2%) 
                            $taxPayable = ($details['turnover_for_which_c_forms_are_pending'] * $details['rate_under_respective_state_vat']);
                            $taxPayable = round($taxPayable, 2);
                            $tableFRows .= '<tr class="5c_file_' . $uploadStatus . '_' . $n . '">' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<select name="type_of_tax_5cf" id="type_of_tax_' . $f . '">' .
                                    '<option selected disabled value="select">-- Select--</option>' .
                                    '<option value="vat" ' . $vatSelected . '>VAT</option>' .
                                    '<option value="entry_tax" ' . $entryTaxSelected . '>Entry Tax</option>' .
                                    '</select>' .
                                    '</div><label class="error error_type_of_tax_5cf" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['name_of_issuer'] . '"  type="text" class="form-control" name="name_of_issuer_5cf" id="name_of_issuer_5cf_' . $f . '"/>' .
                                    '</div><label class="error error_name_of_issuer_5cf" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $details['turnover_for_which_c_forms_are_pending'] . '" type="number" class="form-control calculate5CF turnover_pending" name="turnover_pending_5cf" id="turnover_pending_5cf_' . $f . '"/>' .
                                    '</div><label class="error error_turnover_pending_5cf" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $stateVat . '"  type="number" class="form-control calculate5CF state_vat" name="state_vat_5cf" id="state_vat_5cf_' . $f . '"/>' .
                                    '</div><label class="error error_state_vat_5cf" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $taxPayable . '" type="number" class="form-control tax_payble" name="tax_payble" readonly id="tax_payble_' . $f . '" />' .
                                    '</div></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['tax_paid_under_existing_laws'] . '" type="number" class="form-control" name="tax_already_paid_5cf" id="tax_already_paid_5cf_' . $f . '" />' .
                                    '</div><label class="error error_tax_already_paid_5cf" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['inputs_already_reversed_under_existing_laws'] . '" type="number" class="form-control" name="input_already_reversed_5cf" id="input_already_reversed_5cf_' . $f . '" />' .
                                    '</div><label class="error error_input_already_reversed_5cf" style="display: none;">This field is required.</label></div></td>' .
                                    '<td>' .
                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CF" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>' .
                                    '</td>' .
                                    '</tr>';
//                            if($f > 0)
//                            {
//                               $tableFRows .=  '<td>'.
//                                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CF" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>'.
//                                                '</td>'.
//                                            '</tr>';
//                            }
//                            else
//                            {
//                                '</tr>';
//                            } 

                            $f++;
                        }
                        //For table H
                        if (strtolower($details['type_of_form_cfhi']) == 'h') {
                            //State vat
                            //Multiply with hundred because it is coming as percentage
                            //Excel column should be percentage format
                            $stateVat = $details['rate_under_respective_state_vat'] * 100;
                            $stateVat = round($stateVat, 2);
                            //Calculate Tax payable under existing laws if sold without such forms
                            //F=(D*E)-(D*2%) 
                            $taxPayable = ($details['turnover_for_which_c_forms_are_pending'] * $details['rate_under_respective_state_vat']);
                            $taxPayable = round($taxPayable, 2);
                            $tableHRows .= '<tr  class="5c_file_' . $uploadStatus . '_' . $n . '">' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<select name="type_of_tax_5ch" id="type_of_tax_' . $h . '">' .
                                    '<option selected disabled value="select">-- Select--</option>' .
                                    '<option value="vat" ' . $vatSelected . '>VAT</option>' .
                                    '<option value="entry_tax" ' . $entryTaxSelected . '>Entry Tax</option>' .
                                    '</select>' .
                                    '</div><label class="error error_type_of_tax_5ch" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['name_of_issuer'] . '"  type="text" class="form-control" name="name_of_issuer_5ch" id="name_of_issuer_5ch_' . $h . '"/>' .
                                    '</div><label class="error error_name_of_issuer_5ch" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $details['turnover_for_which_c_forms_are_pending'] . '" type="number" class="form-control calculate5CH turnover_pending" name="turnover_pending_5ch" id="turnover_pending_5ch_' . $h . '"/>' .
                                    '</div><label class="error error_turnover_pending_5ch" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $stateVat . '"  type="number" class="form-control calculate5CH state_vat" name="state_vat_5ch" id="state_vat_5ch_' . $h . '" />' .
                                    '</div><label class="error error_state_vat_5ch" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $taxPayable . '" type="number" class="form-control tax_payble" name="tax_payble" readonly id="tax_payble_' . $h . '"/>' .
                                    '</div></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['tax_paid_under_existing_laws'] . '" type="number" class="form-control" name="tax_already_paid_5ch" id="tax_already_paid_5ch_' . $h . '" />' .
                                    '</div><label class="error error_tax_already_paid_5ch" style="display: none;">This field is required.</label></div></td>' .
                                    ' <td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['inputs_already_reversed_under_existing_laws'] . '" type="number" class="form-control" name="input_already_reversed_5ch" id="input_already_reversed_5ch_' . $h . '" />' .
                                    '</div><label class="error error_input_already_reversed_5ch" style="display: none;">This field is required.</label></div></td>' .
                                    '<td>' .
                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CH" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>' .
                                    '</td>' .
                                    '</tr>';
//                            if($h > 0)
//                            {
//                               $tableHRows .=  '<td>'.
//                                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CH" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>'.
//                                                '</td>'.
//                                            '</tr>';
//                            }
//                            else
//                            {
//                                '</tr>';
//                            } 
                            $h++;
                        }
                        //For table I
                        if (strtolower($details['type_of_form_cfhi']) == 'i') {
                            //State vat
                            //Multiply with hundred because it is coming as percentage
                            //Excel column should be percentage format
                            $stateVat = $details['rate_under_respective_state_vat'] * 100;
                            $stateVat = round($stateVat, 2);
                            //Calculate Tax payable under existing laws if sold without such forms
                            //F=(D*E)-(D*2%) 
                            $taxPayable = ($details['turnover_for_which_c_forms_are_pending'] * $details['rate_under_respective_state_vat']);
                            $taxPayable = round($taxPayable, 2);
                            $tableIRows .= '<tr class="5c_file_' . $uploadStatus . '_' . $n . '">' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<select name="type_of_tax_5ci" id="type_of_tax_' . $i . '">' .
                                    '<option selected disabled value="select">-- Select--</option>' .
                                    '<option value="vat" ' . $vatSelected . '>VAT</option>' .
                                    '<option value="entry_tax" ' . $entryTaxSelected . '>Entry Tax</option>' .
                                    '</select>' .
                                    '</div><label class="error error_type_of_tax_5ci" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['name_of_issuer'] . '"  type="text" class="form-control" name="name_of_issuer_5ci" id="name_of_issuer_5ci_' . $i . '" />' .
                                    '</div><label class="error error_name_of_issuer_5ci" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $details['turnover_for_which_c_forms_are_pending'] . '" type="number" class="form-control calculate5CI turnover_pending" name="turnover_pending_5ci" id="turnover_pending_5ci_' . $i . '" />' .
                                    '</div><label class="error error_turnover_pending_5ci" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input  value="' . $stateVat . '"  type="number" class="form-control calculate5CI state_vat" name="state_vat_5ci" id="state_vat_5ci_' . $i . '" />' .
                                    '</div><label class="error error_state_vat_5ci" style="display: none;">This field is required.</label></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $taxPayable . '" type="number" class="form-control tax_payble" name="tax_payble" readonly id="tax_payble_' . $i . '" />' .
                                    '</div></div></td>' .
                                    '<td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['tax_paid_under_existing_laws'] . '" type="number" class="form-control" name="tax_already_paid_5ci" id="tax_already_paid_5ci_' . $i . '" />' .
                                    '</div><label class="error error_tax_already_paid_5ci" style="display: none;">This field is required.</label></div></td>' .
                                    ' <td><div class="form-group"><div class="form-line">' .
                                    '<input value="' . $details['inputs_already_reversed_under_existing_laws'] . '" type="number" class="form-control" name="input_already_reversed_5ci" id="input_already_reversed_5ci_' . $i . '" />' .
                                    '</div><label class="error error_input_already_reversed_5ci" style="display: none;">This field is required.</label></div></td>' .
                                    '<td>' .
                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CI" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>' .
                                    '</td>' .
                                    '</tr>';
//                            if($i > 0)
//                            {
//                               $tableIRows .=  '<td>'.
//                                                    '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5CI" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>'.
//                                                '</td>'.
//                                            '</tr>';
//                            }
//                            else
//                            {
//                                '</tr>';
//                            } 
                            $i++;
                        }
                    }
                    $n++;
                }
            }
            return $tableCRows . '~~!' . $tableFRows . '~~!' . $tableHRows . '~~!' . $tableIRows;
            //return json_encode(['tableC' => $tableCRows, 'tableF' => $tableFRows, 'tableH' => $tableHRows, 'tableI' => $tableIRows]);
        }
    }

    /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function editVTransfer($registeredPersonId, $gstnId, $legalLicense) {
        $data = [];
        $registeredPersonId = session()->get('gstnDetail')['registeredPersonId'];

        //check if gstn json exist 
        $urlCheckGstnJsonExist = 'check-gstn-json/';
        $str_ = $registeredPersonId;
        $methodName_ = 'GET';
        $responseCheckGstnJson = Api::APIcall($urlCheckGstnJsonExist, $str_, $methodName_);

        if ($responseCheckGstnJson->status == 'success' && $responseCheckGstnJson->message == 'GSTN_JSON_EXIST') {
            $array = json_decode(json_encode($responseCheckGstnJson->data), true);
            return view('home.edit_v_transfer', $array);
        }
        //if json doesnt exist then insert into json 
        $urlretirveGstn = 'all-tab-data/';
        $str_ = $registeredPersonId;
        $methodName_ = 'GET';
        $response = Api::APIcall($urlretirveGstn, $str_, $methodName_);
        if (isset($response->data->fiveC)) {
            $data['fiveC'] = HelperFunction::fiveCGroup($response->data->fiveC);
            $data['fiveCView'] = HelperFunction::fiveCType($response->data->fiveC);
        }
        $array = json_decode(json_encode($response->data), true);
        $array['fiveCCustom'] = $data;

        $methodName_ = 'POST';
        $signupUrl = "store-tab-json";
        $str_ = '';
        $post_data = ['registeredPersonId' => session()->get('registeredPersonId'), 'tab' => $array];
        $curlPostData = serialize($post_data);
        $signup = Api::APIcall($signupUrl, $str_, $methodName_, $curlPostData);
        $array = json_decode(json_encode($signup->data->tabeJson), true);
        return view('home.edit_v_transfer', $array);
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function vTransferLandingPage() {

        return view('home.v_transfer_landing_page');
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function license() {

        $id = session()->get('userAuthDetail')->userId;
        $urlGstnExist = 'gstn-exist/';
        $str_ = $id;
        $methodNameUser_ = 'GET';
        $response = Api::APIcall($urlGstnExist, $str_, $methodNameUser_);
        /* echo "<pre>";
          print_r($response); exit(); */
        if ($response->status == 'success' && $response->message == 'GSTN_EXIST_FOR_USER') {
            //redirect to dashboard 1 
            return redirect()->to('license-detail');
        } else if ($response->status == 'success' && $response->message == 'GSTN_NOT_EXIST_FOR_USER') {
            return view('home.license');
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function licenseDetail() {
        $userId = session()->get('userAuthDetail')->userId;
        $urlretirveGstn = 'gstn-detail/';
        $str_ = $userId;
        $methodName_ = 'GET';
        $response = Api::APIcall($urlretirveGstn, $str_, $methodName_);
        if ($response->status == 'success' && $response->message == 'LICENSE_DETAILS_FOUND') {
            return view('home.license_detail', ['licenseDetail' => $response->data]);
        } else {
            return redirect()->to('license');
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function getHash(PaymentRequest $request) {
        session(['paymentDetail' => $request->all()]);
        //Initialize hash string
        $hash_string = '';
        //If hash value is empty and post value is available
        if (empty($request->hash) && count($request->all()) > 0) {
            //If post value is available
            if (!empty($request->all())) {
                //Go through post value
                foreach ($request->all() as $key => $value) {
                    //Create new array
                    $posted[$key] = $value;
                }
            }
            //Checking madatory fields
            if (empty($posted['key']) || empty($posted['txnid']) || empty($posted['amount']) || empty($posted['firstname']) || empty($posted['email']) || empty($posted['phone']) || empty($posted['productinfo'])) {
                //Return error message
                return "error";
            } else {
                //Explode hash sequences. See config/constant.php for declaration
                $hashVarsSeq = explode('|', Config::get('constant.HASH_SEQUENCE'));
                //Go through hash sequences 
                foreach ($hashVarsSeq as $hash_var) {
                    //Get hash values
                    $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                    //Add pipe symbol
                    $hash_string .= '|';
                }
                //Get salt 
                $hash_string .= Config::get('constant.SALT');
                //Create hash
                $hash = strtolower(hash('sha512', $hash_string));
                //Return hash
                return $hash;
            }
        }
        //If hash is there
        elseif (!empty($request->hash)) {
            return $hash = $request->hash;
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function paymentStatus(PaymentRequest $request) {

        $licensecount = empty(session()->get('paymentDetail')['noOfLicence']) ? '' : session()->get('paymentDetail')['noOfLicence'];
        $isActiveUser = session()->get('userAuthDetail');
        if ($isActiveUser->status == 'active') {
            $licensecount += $isActiveUser->totalLicenses;
        }

        $post_data = [
            'userId' => session()->get('userAuthDetail')->userId,
            'mode' => $request['mode'],
            'txnId' => $request['txnid'],
            'bankRefNum' => $request['bank_ref_num'],
            'issuingBank' => $request['issuing_bank'],
            'cardType' => $request['card_type'],
            'amount' => $request['amount'],
            'totalLicenses' => $licensecount,
            'firstName' => $request['firstname'],
            'lastName' => $request['lastname'],
            'address1' => $request['address1'],
            'address2' => $request['address2'],
            'city' => $request['city'],
            'state' => $request['state'],
            'pinCode' => $request['zipcode'],
            'phoneNumber' => $request['phone'],
        ];

        //print_r($post_data);
        $methodName_ = 'POST';
        $paymentUrl = "payment-detial";
        $str_ = '';

        $curlPostData = serialize($post_data);

        $paymentDetail = Api::APIcall($paymentUrl, $str_, $methodName_, $curlPostData);

        session(['userAuthDetail' => $paymentDetail->data->user]);

        if ($paymentDetail->status == 'success' && $paymentDetail->message == 'PAYMENT_HISTORY_RECORDED') {
            return view('home.thank_you');
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function submitLicense(LicenseRequest $request) {
        $userId = session()->get('userAuthDetail')->userId;
        $methodName_ = 'POST';
        $licenseUrl = "insert-license-detail";
        $str_ = '';
        $post_data = ['userId' => $userId, 'gstnId' => $request->gstnId, 'legalName' => $request->legalName, 'tradeName' => $request->tradeName];


        $curlPostData = serialize($post_data);
        $license = Api::APIcall($licenseUrl, $str_, $methodName_, $curlPostData);

        if ($license->status == 'success' && $license->message == 'LICENSE_DETAILS_INSERTED') {
            // return redirect()->to('license-detail');
            return response()->json(['status' => 'success', 'redirect' => 'license-detail']);
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function getStarted() {
        $totalLicenses = session()->get('userAuthDetail')->totalLicenses;

        if ($totalLicenses == 1) {
            return redirect()->to('license');
        } else if ($totalLicenses > 1) {
            return redirect()->to('dashboard');
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function licenseListDataTable() {

        $userId = session()->get('userAuthDetail')->userId;
        $urlretirveGstn = 'gstn-details/';
        $str_ = $userId;
        $methodName_ = 'GET';
        $response = Api::APIcall($urlretirveGstn, $str_, $methodName_);

        if ($response->status == 'success' && $response->message == 'LICENSE_DETAILS_FOUND') {
            return Datatables::of($response->data)
                            ->addColumn('action', ' <button type="button" onclick="editGstn({!! $registeredPersonId !!})" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button> 
                                            <a href="' . url('/v-transfer-home/{!! $registeredPersonId !!}/{!!$gstnId !!}/{!!$legalName !!}') . '" class="btn bg-green btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">arrow_forward</i>
                                            </a>')->make(true);
        }
    }

    public function printVtransferDetails() {

        $registeredPersonId = session()->get('gstnDetail')['registeredPersonId'];
        $urlretirveGstn = 'all-tab-data/';
        $str_ = $registeredPersonId;
        $methodName_ = 'GET';
        $response = Api::APIcall($urlretirveGstn, $str_, $methodName_);

        if ($response->status == 'success') {
            $array = json_decode(json_encode($response->data), true);
            $pdf = PDF::loadView("home.print_v_transfer_detail", $array);
            $pdf->setPaper('A4', 'landscape');
            return $pdf->stream();
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function updateRegisterPersonDetail(Request $request) {

        $methodName_ = 'POST';
        $signupUrl = "update-register-person-detail";
        $str_ = '';

        $curlPostData = serialize($request->all());
        $signup = Api::APIcall($signupUrl, $str_, $methodName_, $curlPostData);
        if (isset($sinup->status) && $sinup->status == 'success') {
            session(['registeredPersonDetail' => $signup->data]);

            return response()->json(['status' => 'success']);
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function editGstnDetail($id) {
        $urlretirveGstn = 'gstn-detail-by-registered-user-id/';
        $methodName_ = 'GET';
        $response = Api::APIcall($urlretirveGstn, $id, $methodName_);
        if ($response->status == 'success') {
            return view('home.edit_gstn_details', ['gstn' => $response->data]);
        }
    }

     /**
     * JOHN PRAKASH LOBO
     * July 10, 2017
     *
     * @param 
     * @return 
     */
    public function updateLicenseDetail(Request $request) {

        $methodName_ = 'POST';
        $signupUrl = "update-license-detail";
        $str_ = '';

        $curlPostData = serialize($request->all());
        $updateLicense = Api::APIcall($signupUrl, $str_, $methodName_, $curlPostData);
        if (isset($updateLicense->status) && $updateLicense->status == 'success') {
            return response()->json(['status' => 'success']);
        }
    }

    /**
     * Vinod
     * June 29, 2017
     * Get gst details based on 'hsnCodeNo'
     * @param type $hsnCodeNo
     * @return type
     */
    public function getGSTDetails(Request $request) {
        $methodName_ = 'GET';
        $gstApi = "get-commodity/";
        $hsnCodeNo = $request->hsnCodeNo;
        $response = Api::APIcall($gstApi, $hsnCodeNo, $methodName_);
        return json_encode($response);
    }

    /**
     * Vinod
     * June 30, 2017
     * Get sample form to upload
     * @param type $hsnCodeNo
     * @return type
     */
    public function fileDownload(Request $request) {
        $fileName = $request->fileName;
        $filePath = $request->filePath;
        $download_path = public_path("/" . $filePath . "/" . $fileName);
        $headers = array('Content-Type' => 'application/octet-stream');
        return response()->download($download_path, $fileName, $headers);
    }

    /**
     * Vinod
     * July 1, 2017
     * Get preview of submission
     * @param type $request
     * @return type
     */
    public function printPreview(Request $request, $registeredPersonId, $gstnId, $legalLicense) {

        $userId = $registeredPersonId;
        session(['gstnDetail' => ['registeredPersonId' => $registeredPersonId, 'gstnId' => $gstnId, 'legalName' => $legalLicense]]);
        $data = HelperFunction::retrieveVtranCategory($userId);
        $lastTabId = $request->get('tabId');
        $urlRegisteredPerson = 'registered-person-detail/';
        $methodName = 'GET';
        $response = Api::APIcall($urlRegisteredPerson, session()->get('gstnDetail')['registeredPersonId'], $methodName);
        if ($response->status == 'success') {
            $data['registeredPersonDetail'] = $response->data;
            session(['registeredPersonDetail' => $response->data]);
            $registeredPersonId = $response->data->registeredPersonId;
            session(['registeredPersonId' => $registeredPersonId]);
        }

        if ($lastTabId == "" || $lastTabId != 18) {
            $lastTabId = 0;
        }
        $data['last_tab_id'] = 18;
        //return view('home.v_transfer_home', $data);
        $file_name = "Preview of file.pdf";
        $pdf = PDF::loadView('vtransfertab.tab_preview', $data);
        return $pdf->download($file_name);
    }

    /**
     * Vinod
     * July 10, 2017
     * Get preview of submission
     * @param type $request
     * @return type
     */
    public function getInTouchWithUs(Request $request) {
        $sub = 'GSTTran Feedback';
        $to = 'vinod.v@glowtouch.com';
        $from = $request->email;
        $message = 'Name : ' . $request->name . '<br />Email: ' . $request->email . '<br />Phone : ' . $request->phone . '<br />Message : ' . $request->message;
        Mail::send(array(), array(), function ($email) use($to, $from, $sub, $message) {
            $email->to($to)->from($from)->subject($sub);
            $email->setBody($message, 'text/html');
        });
    }

}
