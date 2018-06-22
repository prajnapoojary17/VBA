<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\AnswerOption;
use \App\Http\Controllers\ApiController;
use App\Models\Category;
use App\Models\RegisteredPerson;
use App\Models\FiveADetails;
use App\Models\FiveBDetails;
use App\Models\FiveCDetails;
use App\Models\SixADetails;
use App\Models\SixBDetails;
use App\Models\SevenADetails;
use App\Models\SevenA7ADetails;
use App\Models\SevenA7BDetails;
use App\Models\SevenBDetails;
use App\Models\SevenCDetails;
use App\Models\NineBDetails;
use App\Models\TenADetails;
use App\Models\TenBDetails;
use App\Models\TwelveDetails;
use App\Models\NineADetails;
use App\Models\ElevenDetails;
use App\Models\EightDetails;
use App\Models\VtranJson;
use App\Models\Answer;
use DB;

class VTransferController extends ApiController {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function retrieveQuestion() {
        $data = Question::retrieveQuestion();

        $customArray = [];
        $questionId = [];
        $i = 0;
        $customArray['registeredPersonId'] = $data['registeredPersonId'];
        $customArray['category'] = $data['category'];
        
      

        foreach ($data['questions'] as $key => $value) {

            if (in_array($value->questionId, $questionId)) {

                $customArray['questions'][$value->questionId]['options'][] = [
                    'optionId' => $value->optionId,
                    'optionname' => $value->optionName, 'linkOption' => $value->linkOption,
                    'linkedQuestionId' => $value->linkedQuestionId, 'isSelected' => $value->response];
            } else {

                /* $parentId=AnswerOption::where('linkedQuestionId',$value->questionId)->first(['questionId']);
                  $resParent=(isset($parentId))? $parentId->questionId : null; */

                $customArray['questions'][$value->questionId] = [
                    'id' => $value->questionId, 'text' => $value->question,
                    'isLinked' => $value->isLinked, 'type' => $value->questionType, 'parentId' => $value->parentId];

                $customArray['questions'][$value->questionId]['options'][] = [
                    'optionId' => $value->optionId,
                    'optionname' => $value->optionName, 'linkOption' => $value->linkOption,
                    'linkedQuestionId' => $value->linkedQuestionId, 'isSelected' => $value->response
                ];

                array_push($questionId, $value->questionId);
            }

            $i++;
        }

        $customArray['table'] = $data['table'];
        if ($customArray) {

            return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $customArray);
        }
        return $this->respondWithError('FAILURE MESSGE', $customArray);
    }

    public function retrieveQuestionByCategory($registeredPersonId, $categoryId) {
        $data = Question::retrieveQuestion($registeredPersonId, $categoryId);
        $customArray = [];
        $questionId = [];
        $i = 0;
        $customArray['registeredPersonId'] = $data['registeredPersonId'];
        $customArray['category'] = $data['category'];

        if (isset($data['questions']) && count($data['questions']) > 0) {
            $questionHelpText=null;
            foreach ($data['questions'] as $key => $value) {
                if (in_array($value->questionId, $questionId)) {
					 if (empty($value->response)) {
                        $questionResponse = null;
                    } else {
                        $questionResponse = $value->response;
                    }
                    $customArray['questions'][$value->questionId]['options'][] = [
                        'optionId' => $value->optionId,
                        'optionname' => $value->optionName, 'linkOption' => $value->linkOption,
                        'linkedQuestionId' => $value->linkedQuestionId, 'isSelected' => $questionResponse];
                } else {
                  
                    if(empty($value->helpText)){
                        $questionHelpText=null;
                    } else{
                      $questionHelpText=  $value->helpText;
                    }
                     if (empty($value->response)) {
                        $questionResponse = null;
                    } else {
                        $questionResponse = $value->response;
                    }
                    $customArray['questions'][$value->questionId] = [
                        'id' => $value->questionId, 'text' => $value->question,'helpText'=>$questionHelpText,
                        'isLinked' => $value->isLinked, 'type' => $value->questionType, 'parentId' => $value->parentId];

                    $customArray['questions'][$value->questionId]['options'][] = [
                        'optionId' => $value->optionId,
                        'optionname' => $value->optionName, 'linkOption' => $value->linkOption,
                        'linkedQuestionId' => $value->linkedQuestionId, 'isSelected' => $questionResponse
                    ];

                    array_push($questionId, $value->questionId);
                }

                $i++;
            }
        } else {
            $customArray['questions'] = [];
        }
        $customArray['table'] = $data['table'];

        if ($customArray) {

            return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $customArray);
        }
        return $this->respondWithError('FAILURE MESSGE', $customArray);
    }

    public function insertVbillingData(Request $request) {

        debug($request->all());

        if (isset($request->data)) {
            
        }
    }

    public function getRegisteredId($gstnId) {
        $response = RegisteredPerson::where('registeredPersonId', $gstnId)->first();
        return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $response);
    }

    public function updateRegisteredPerson(Request $request) {
        $response = [];
        $updateRegisteredPerson = RegisteredPerson::where('gstnId', $registeredDetail['gstnId'])->update([
            'isManufacturer' => $registeredDetail['isManufacturer']?$registeredDetail['isManufacturer']:0,
            'isTrader' => $registeredDetail['isTrader']? $registeredDetail['isTrader']:0,
            'isServiceProvider' => $registeredDetail['isServiceProvider']?$registeredDetail['isServiceProvider']:0,
            'vatRegNo' => $registeredDetail['vatRegNo']?$registeredDetail['vatRegNo']:0,
            'serviceTaxRegNo' => $registeredDetail['serviceTaxRegNo']?$registeredDetail['serviceTaxRegNo']:0,
            'exciseRegNo' => $registeredDetail['exciseRegNo']?$registeredDetail['exciseRegNo']:0,
        ]);
        if ($updateRegisteredPerson) {
            $response['registeredPersonDetail'] = RegisteredPerson::where('gstnId', $registeredDetail['gstnId'])->first();
        }
        return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $request->tab['sixA']);
    }

    public function updateRegisteredPersonDetail(Request $request) {


          $updateRegisteredPerson = RegisteredPerson::where('gstnId', $request->registerPerson['gstnId'])->update([
                'isManufacturer' => $request->registerPerson['isManufacturer'],
                'isTrader' => $request->registerPerson['isTrader'],
                'isServiceProvider' => $request->registerPerson['isServiceProvider'],
                'vatRegNo' => isset($request->registerPerson['vatRegNo'])?$request->registerPerson['vatRegNo']:null,
                'serviceTaxRegNo' =>isset( $request->registerPerson['serviceTaxRegNo'])? $request->registerPerson['serviceTaxRegNo']:null,
                'exciseRegNo' =>isset($request->registerPerson['exciseRegNo'])?$request->registerPerson['exciseRegNo']:null,
               'taxCredit' =>isset($request->registerPerson['taxCredit'])?$request->registerPerson['taxCredit']:null,
               'entryTax' =>isset($request->registerPerson['entryTax'])?$request->registerPerson['entryTax']:null,
               'tinNoInState' =>isset($request->registerPerson['tinNoInState'])?$request->registerPerson['tinNoInState']:null,
                'amountVatCarriedForward' =>isset($request->registerPerson['amountVatCarriedForward'])?$request->registerPerson['amountVatCarriedForward']:null,
                'tinNoInEntryTax' =>isset($request->registerPerson['tinNoInEntryTax'])?$request->registerPerson['tinNoInEntryTax']:null,
                'entryTaxCarriedForward' =>isset($request->registerPerson['entryTaxCarriedForward'])?$request->registerPerson['entryTaxCarriedForward']:null,
            ]);
        if ($updateRegisteredPerson) {
            $response = RegisteredPerson::where('gstnId', $request->registerPerson['gstnId'])->first();
            return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $response);
        }
    }

    public function insertAllTabDetails(Request $request) {
    
   
        
        $registeredPersonId = $request->registeredPersonId;
    //    $keys = array_keys($request->tab);
        $data = [];
        $response = [];


        //deleting old data
        Answer::where('registeredPersonId', $registeredPersonId)->delete();
        FiveADetails::where('registeredPersonId', $registeredPersonId)->delete();
        FiveBDetails::where('registeredPersonId', $registeredPersonId)->delete();
        FiveCDetails::where('registeredPersonId', $registeredPersonId)->delete();
        SixADetails::where('registeredPersonId', $registeredPersonId)->delete();
        SixBDetails::where('registeredPersonId', $registeredPersonId)->delete();
        SevenA7ADetails::where('registeredPersonId', $registeredPersonId)->delete();
        SevenA7BDetails::where('registeredPersonId', $registeredPersonId)->delete();
        SevenBDetails::where('registeredPersonId', $registeredPersonId)->delete();
        SevenCDetails::where('registeredPersonId', $registeredPersonId)->delete();
        EightDetails::where('registeredPersonId', $registeredPersonId)->delete();
        NineADetails::where('registeredPersonId', $registeredPersonId)->delete();
        NineBDetails::where('registeredPersonId', $registeredPersonId)->delete();
        TenADetails::where('registeredPersonId', $registeredPersonId)->delete();
        TenBDetails::where('registeredPersonId', $registeredPersonId)->delete();
        ElevenDetails::where('registeredPersonId', $registeredPersonId)->delete();
        TwelveDetails::where('registeredPersonId', $registeredPersonId)->delete();
  
        //end of delete functionality
        //  return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$delete);
        if (isset($request->tab['generalQuestion'])&&count($request->tab['generalQuestion'])>0) {
            $registeredDetail = $request->tab['generalQuestion'][0];

           // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['generalQuestion']);

            $updateRegisteredPerson = RegisteredPerson::where('gstnId', $registeredDetail['gstnId'])->update([
                'isManufacturer' => $registeredDetail['isManufacturer'],
                'isTrader' => $registeredDetail['isTrader'],
                'isServiceProvider' => $registeredDetail['isServiceProvider'],
                'vatRegNo' => isset($registeredDetail['vatRegNo'])?$registeredDetail['vatRegNo']:null,
                'serviceTaxRegNo' =>isset( $registeredDetail['serviceTaxRegNo'])? $registeredDetail['serviceTaxRegNo']:null,
                'exciseRegNo' =>isset($registeredDetail['exciseRegNo'])?$registeredDetail['exciseRegNo']:null,
                'entryTax' =>isset($registeredDetail['entryTax'])?$registeredDetail['entryTax']:null,
                'taxCredit' =>isset($registeredDetail['taxCredit'])?$registeredDetail['taxCredit']:null,
                'tinNoInState' =>isset($registeredDetail['tinNoInState'])?$registeredDetail['tinNoInState']:null,
                'amountVatCarriedForward' =>isset($registeredDetail['amountVatCarriedForward'])?$registeredDetail['amountVatCarriedForward']:null,
                'tinNoInEntryTax' =>isset($registeredDetail['tinNoInEntryTax'])?$registeredDetail['tinNoInEntryTax']:null,
                'entryTaxCarriedForward' =>isset($registeredDetail['entryTaxCarriedForward'])?$registeredDetail['entryTaxCarriedForward']:null,
                'tabId' =>isset($registeredDetail['tabId'])?$registeredDetail['tabId']:null,
                'saveDraftDate' =>isset($registeredDetail['saveDraftDate'])?$registeredDetail['saveDraftDate']:null,
                 'saveBackButton' =>isset($registeredDetail['saveBackButton'])?$registeredDetail['saveBackButton']:null,
                
            ]);
            if ($updateRegisteredPerson) {
                $response['registeredPersonDetail'] = RegisteredPerson::where('gstnId', $registeredDetail['gstnId'])->first();
            }
        }
    
		  if (isset($request->tab['questionDetail']) && count($request->tab['questionDetail']) > 0) {
            //return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['questionDetail'] as $value) {

                $response['questionDetail'] = Answer::create([
                            'registeredPersonId' => $registeredPersonId,
                            'questionId' => $value['questionId'] ? $value['questionId'] : null,
                            'response' => $value['questionAnswer'] ? $value['questionAnswer'] : null,
                ]);
            }
        }
	
        if (isset($request->tab['fiveA'])&&count($request->tab['fiveA'])>0) {
            //return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['fiveA'] as $value) {

                $date = str_replace('/', '-', $value['dateFiling']);

                $response['fiveA'] = FiveADetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'registrationNo' => $value['registrationNo'] ? $value['registrationNo'] : null,
                            'taxPeriod' => $value['taxPeriod'] ? $value['taxPeriod'] : '',
                            'dateFiling' => date('Y-m-d', strtotime($date)),
                            'balanceCenvatCredit' => $value['balanceCenvatCredit'] ? $value['balanceCenvatCredit'] : null,
                            'balanceCenvatAdmissible' => isset($value['balanceCenvatAdmissible']) ? $value['balanceCenvatAdmissible'] : '',
                            'natureOfItc' => isset($value['natureOfItc']) ? $value['natureOfItc'] : '',
                ]);
            }
        }
        
        // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );
        if (isset($request->tab['fiveB'])&&count($request->tab['fiveB'])>0) {


            foreach ($request->tab['fiveB'] as $value) {


                $response['fiveB'] = FiveBDetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'type' => isset($value['type']) ? $value['type'] : '',
                            'tinIssuer' => isset($value['tinIssuer']) ? $value['tinIssuer'] : null,
                            'issuerName' => isset($value['issuerName']) ? $value['issuerName'] : '',
                            'salesValue' =>isset($value['salesValue']) ? $value['salesValue'] : '',
                            'formSerialNo' => isset($value['formSerialNo']) ? $value['formSerialNo'] : null,
                            'amount' => isset($value['amount']) ? $value['amount'] : null,
                            'vatRate' => isset($value['vatRate'] )? $value['vatRate'] : null,
                ]);
            }
        }
        
        
         if (isset($request->tab['fiveCC'])&&count($request->tab['fiveCC'])>0) {


            foreach ($request->tab['fiveCC'] as $value) {


                $response['fiveCC'] = FiveCDetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'fiveCCategory' =>isset($value['fiveCCategory']) ? $value['fiveCCategory'] : null,
                            'typeOfTax' => isset($value['typeOfTax']) ? $value['typeOfTax'] : null,
                            'nameOfIssuer' => isset($value['nameOfIssuer'] )? $value['nameOfIssuer'] : null,
                          'turnoverPending' => isset($value['turnoverPending']) ? $value['turnoverPending'] : null,
                            'stateVat' => isset($value['stateVat']) ? $value['stateVat'] : null,
                            'taxPayable' => isset($value['taxPayable']) ? $value['taxPayable'] : null,
                              'taxAlreadyPaid' =>isset($value['taxAlreadyPaid'] )? $value['taxAlreadyPaid'] : null,
                             'inputAlreadyReversed' => isset($value['inputAlreadyReversed']) ? $value['inputAlreadyReversed'] : null,
                            'sellerInState' => isset($value['sellerInState']) ? $value['sellerInState'] :null,
                            'sellerVatCarriedForward' => isset($value['sellerVatCarriedForward']) ? $value['sellerVatCarriedForward'] : null,
                            'tinNumberInState' => isset($value['tinNumberInState']) ? $value['tinNumberInState'] : null,
                            'vatCarriedForward' => isset($value['vatCarriedForward']) ? $value['vatCarriedForward'] : null,
                    
                      
                ]);
            }
        }

        

        if (isset($request->tab['sixA'])&&count($request->tab['sixA'])>0) {
            //  return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['sixA'] );

            foreach ($request->tab['sixA'] as $value) {


                $date = str_replace('/', '-', $value['invoiceDate']);

                $response['sixA'] = SixADetails::create([
                            'registeredPersonId' => $registeredPersonId,
                    
                       'capitalGood' =>isset( $value['capitalGood']) ? $value['capitalGood'] : null,
                            'invoiceNo' =>isset( $value['invoiceNo']) ? $value['invoiceNo'] : null,
                      'recipientRegNo' => isset($value['recipientRegNo']) ? $value['recipientRegNo'] : null,
                    'itcCarriedForward'=>isset($value['itcCarriedForward']) ? $value['itcCarriedForward'] : '',
                            'supplierRegNo' => isset($value['supplierRegNo']) ? $value['supplierRegNo'] : null,
                            'invoiceDate' => date('Y-m-d', strtotime($date)),
                            'capitalGoodValue' => isset($value['capitalGoodValue']) ? $value['capitalGoodValue'] : null,
                            'capitalGoodCvd' => isset($value['capitalGoodCvd']) ? $value['capitalGoodCvd'] : null,
                            'capitalGoodSad' => isset($value['capitalGoodSad']) ? $value['capitalGoodSad'] : null,
                            'capitalGoodSad' => isset($value['capitalGoodSad']) ? $value['capitalGoodSad'] : null,
                            'eligibleCenvat' => isset($value['eligibleCenvat']) ? $value['eligibleCenvat'] : null,
                            'cenvatCreditAvailed' => isset($value['cenvatCreditAvailed']) ? $value['cenvatCreditAvailed'] : null,
                               
                ]);
            }
        }

        if (isset($request->tab['sixB'])&&count($request->tab['sixB'])>0) {

            //  return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['sixB'] );
            foreach ($request->tab['sixB'] as $value) {

                $date = str_replace('/', '-', $value['invoiceDate']);

                $response['sixB'] = SixBDetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'invoiceNo' => isset($value['invoiceNo']) ? $value['invoiceNo'] : null,
                            'capitalGoods' => isset($value['capitalGoods']) ? $value['capitalGoods'] : '',
                            'invoiceDate' => date('Y-m-d', strtotime($date)),
                            'itcCarriedForward' => isset($value['itcCarriedForward']) ? $value['itcCarriedForward'] : '',
                            'supplierRegNo' => isset($value['supplierRegNo']) ? $value['supplierRegNo'] : null,
                            'recipientRegNo' => isset($value['recipientRegNo']) ? $value['recipientRegNo'] : null,
                            'capitalGoodValue' => isset($value['capitalGoodValue']) ? $value['capitalGoodValue'] : null,
                            'capitalGoodVat' => isset($value['capitalGoodVat']) ? $value['capitalGoodVat'] : null,
                            'eligibleVat' => isset($value['eligibleVat']) ? $value['eligibleVat'] : null,
                            'vatCreditAvailed' => isset($value['vatCreditAvailed']) ? $value['vatCreditAvailed'] : null,
                            'vatCreditUnavailed' => isset($value['vatCreditUnavailed']) ? $value['vatCreditUnavailed'] : null,
                ]);
            }
        }
        //  return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['sixB'] );
        if (isset($request->tab['sevenA7A'])&&count($request->tab['sevenA7A'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['sevenA7A'] as $value) {



                $response['sevenA7A'] = SevenA7ADetails::create([
                            'registeredPersonId' => $registeredPersonId,
							'type'=> isset($value['type']) ? $value['type'] : null,
                            'hsn' => isset($value['hsn']) ? $value['hsn'] : null,
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'dutiesPaid' => isset($value['dutiesPaid']) ? $value['dutiesPaid'] : null,
                     'description' => isset($value['description']) ? $value['description'] : null
                ]);
            }
        }

        if (isset($request->tab['sevenA7B'])&&count($request->tab['sevenA7B'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['sevenA7B'] as $value) {



                $response['sevenA7B'] = SevenA7BDetails::create([
                            'registeredPersonId' => $registeredPersonId,
							'type'=> isset($value['type']) ? $value['type'] : null,
                            'hsn' => isset($value['hsn']) ? $value['hsn'] : null,
                            'unit' =>isset( $value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'dutiesPaid' => isset($value['dutiesPaid']) ? $value['dutiesPaid'] : null,
                ]);
            }
        }

        if (isset($request->tab['sevenB'])&&count($request->tab['sevenB'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['sevenB'] as $value) {



                $response['sevenB'] = SevenBDetails::create([
                            'registeredPersonId' => $registeredPersonId,
							 'type' =>isset( $value['type']) ? $value['type'] : '',
                            'description' =>isset( $value['description']) ? $value['description'] : '',
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'vat' => isset($value['vat']) ? $value['vat'] : null,
                            'taxCreditClaimed' => isset($value['taxCreditClaimed']) ? $value['taxCreditClaimed'] : null,
                            'taxCreditExempt' => isset($value['taxCreditExempt']) ? $value['taxCreditExempt'] : null,
                            'taxCreditAdmissible' => isset($value['taxCreditAdmissible']) ? $value['taxCreditAdmissible'] : null,
                ]);
            }
        }

        if (isset($request->tab['sevenC'])&&count($request->tab['sevenC'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['sevenC'] as $value) {



                $response['sevenC'] = SevenCDetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'description' => isset($value['description']) ? $value['description'] : '',
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'taxPaid' => isset($value['taxPaid']) ? $value['taxPaid'] : null
                ]);
            }
        }

        if (isset($request->tab['eight'])&&count($request->tab['eight'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['eight'] as $value) {

                $date = str_replace('/', '-', $value['dateFilling']);
                $invoiceDate = str_replace('/', '-', $value['invoiceDate']);
                $response['eight'] = EightDetails::create([
                            'typeOfTax'=>isset($value['typeOfTax']) ? $value['typeOfTax'] : null,
                            'registeredPersonId' => $registeredPersonId,
                            'registerNo' => isset($value['register_no']) ? $value['register_no'] : null,
                            'taxPeriod' => isset($value['taxPeriod']) ? $value['taxPeriod'] : null,
                            'dateFilling' => date('Y-m-d', strtotime($date)),
                            'cenvatCredit' => isset($value['cenvatCredit']) ? $value['cenvatCredit'] : null,
                            'itcCentralTax' => isset($value['itcCentralTax']) ? $value['itcCentralTax'] : null,
                            'invoiceNo' => isset($value['invoiceNo']) ? $value['invoiceNo'] : null,
                            'invoiceDate' => date('Y-m-d', strtotime($invoiceDate)),
                            'centralTaxTransfered' =>isset( $value['centralTaxTransfered']) ? $value['centralTaxTransfered'] : null,
                ]);
            }
        }

        if (isset($request->tab['nineA'])&&count($request->tab['nineA'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['nineA'] as $value) {

                $date = str_replace('/', '-', $value['challanDate']);

                $response['nineA'] = NineADetails::create([
                    'jobWorkerName'=>isset($value['jobWorkerName']) ? $value['jobWorkerName'] : '',
                       'gstnJobWorkerName'=>isset($value['gstnJobWorkerName']) ? $value['gstnJobWorkerName'] : '',
                    
                            'registeredPersonId' => $registeredPersonId,
                            'challanNo' => isset($value['challanNo']) ? $value['challanNo'] : null,
                            'goodsType' => isset($value['goodsType']) ? $value['goodsType'] : '',
                            'challanDate' => date('Y-m-d', strtotime($date)),
                            'hsn' => isset($value['hsn']) ? $value['hsn'] : null,
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' =>isset( $value['value']) ? $value['value'] : null,
                    'description' => isset($value['description']) ? $value['description'] :'',
                       'typeOfGoods' => isset($value['typeOfGoods']) ? $value['typeOfGoods'] :'',
                    
                ]);
            }
        }

        if (isset($request->tab['nineB'])&&count($request->tab['nineB'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['nineB'] as $value) {

                $date = str_replace('/', '-', $value['challanDate']);

                $response['nineB'] = NineBDetails::create([
                     'nameOfPrincipal'=>isset($value['NameOfPrincipal']) ? $value['NameOfPrincipal'] : '',
                       'gstnOfPrincipal'=>isset($value['GstnOfPrincipal']) ? $value['GstnOfPrincipal'] : '',
                            'registeredPersonId' => $registeredPersonId,
                            'challanNo' => isset($value['challanNo']) ? $value['challanNo'] : null,
                         'typeOfGoods' => isset($value['typeOfGoods']) ? $value['typeOfGoods'] :'',
                            'challanDate' => date('Y-m-d', strtotime($date)),
                           // 'goodsType' => $value['goodsType'] ? $value['goodsType'] : '',
                            'hsn' => isset($value['hsn']) ? $value['hsn'] : null,
                            'description' =>isset( $value['description']) ? $value['description'] :'',
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                ]);
            }
        }

        if (isset($request->tab['tenA'])&&count($request->tab['tenA'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['tenA'] as $value) {



                $response['tenA'] = TenADetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'gstnPrincipal' => isset($value['gstnPrincipal']) ? $value['gstnPrincipal'] : '',
							 'nameOfPrincipal' => isset($value['nameOfPrincipal']) ? $value['nameOfPrincipal'] : '',
							  'descriptionOfTax' => isset($value['descriptionOfTax']) ? $value['descriptionOfTax'] : '',
							   'descriptionOfGoods' => isset($value['descriptionOfGoods']) ? $value['descriptionOfGoods'] : '',
							 
                            'hsnCode' => isset($value['hsnCode']) ? $value['hsnCode'] :null,
                          'typeOfGoods' => isset($value['typeOfGoods']) ? $value['typeOfGoods'] :'',
                            'unit' =>isset( $value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'inputTaxTaken' => isset($value['inputTaxTaken']) ? $value['inputTaxTaken'] : null,
                ]);
            }
        }

        if (isset($request->tab['tenB'])&&count($request->tab['tenB'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['tenB'] as $value) {



                $response['tenB'] = TenBDetails::create([
				
				
				
                            'registeredPersonId' => $registeredPersonId,
                            'gstnPrincipal' => isset($value['gstnPrincipal']) ? $value['gstnPrincipal'] : null,
							 'nameOfAgent' => isset($value['nameOfAgent']) ? $value['nameOfAgent'] : '',
							  'descriptionOfGoods' => isset($value['descriptionOfGoods']) ? $value['descriptionOfGoods'] : '',
							   'descriptionOfTax' => isset($value['descriptionOfTax']) ? $value['descriptionOfTax'] : '',
                            'goodsType' =>isset( $value['typeOfGoods'] )? $value['typeOfGoods'] : '',
                            'hsnCode' => isset($value['hsnCode']) ? $value['hsnCode'] : null,
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'inputTaxTaken' => isset($value['inputTaxTaken']) ? $value['inputTaxTaken'] : null,
                     'typeOfGoods' => isset($value['typeOfGoods']) ? $value['typeOfGoods'] :'',
                ]);
            }
        }


        if (isset($request->tab['eleven'])&&count($request->tab['eleven'])>0) {
            // return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$request->tab['fiveA'] );

            foreach ($request->tab['eleven'] as $value) {

                $date = str_replace('/', '-', $value['invoiceDate']);

                $response['eleven'] = ElevenDetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'vatRegNo' => isset($value['vatRegNo']) ? $value['vatRegNo'] : null,
                            'serviceTaxRegNo' => isset($value['serviceTaxRegNo']) ? $value['serviceTaxRegNo'] : null,
                            'invoiceNo' => isset($value['invoiceNo']) ? $value['invoiceNo'] : null,
                            'invoiceDate' => date('Y-m-d', strtotime($date)),
                            'TaxPaid' => isset($value['TaxPaid']) ? $value['TaxPaid'] : null,
                            'taxCredit' => isset($value['taxCredit']) ? $value['taxCredit'] : null,
							'vatTaxPaid' => isset($value['vatTaxPaid']) ? $value['vatTaxPaid'] : null,
							'serviceTaxPaid' =>isset( $value['serviceTaxPaid']) ? $value['serviceTaxPaid'] : null,
                    'typeOfTax' => isset($value['typeOfTax']) ? $value['typeOfTax'] : null,
                      'registrationNo' => isset($value['registrationNo']) ? $value['registrationNo'] : null,
                ]);
            }
        }


        if (isset($request->tab['twelve'])&&count($request->tab['twelve'])>0) {
         
            foreach ($request->tab['twelve'] as $value) {

                $date = str_replace('/', '-', $value['documentDate']);

                $response['twelve'] = TwelveDetails::create([
                            'registeredPersonId' => $registeredPersonId,
                            'documentNo'=>isset($value['documentNo']) ? $value['documentNo'] : null,
                            'documentDate' => date('Y-m-d', strtotime($date)),
                            'gstnNumber' => isset($value['gstnNumber']) ? $value['gstnNumber'] : null,
                            'RecipientName' => isset($value['RecipientName']) ? $value['RecipientName'] : null,
                            'hsn' => isset($value['hsn']) ? $value['hsn'] : null,
                            'unit' => isset($value['unit']) ? $value['unit'] : null,
                            'quantity' => isset($value['quantity']) ? $value['quantity'] : null,
                            'value' => isset($value['value']) ? $value['value'] : null,
                            'description' =>isset( $value['description']) ? $value['description'] :'',
                ]);
            }
        }
        return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $response);
       
    }

    public function tabDataByRegisteredId($registeredPersonId) {
        $response = [];

        $response['fiveA'] = FiveADetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['fiveB'] = FiveBDetails::where('registeredPersonId', $registeredPersonId)->get();
         $response['fiveC'] = FiveCDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['sixA'] = SixADetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['sixB'] = SixBDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['sevenA7A'] = SevenA7ADetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['sevenA7B'] = SevenA7BDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['sevenB'] = SevenBDetails::where('registeredPersonId', $registeredPersonId)->get();
          $response['sevenC'] = SevenCDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['eight'] = EightDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['nineA'] = NineADetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['nineB'] = NineBDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['tenA'] = TenADetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['tenB'] = TenBDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['eleven'] = ElevenDetails::where('registeredPersonId', $registeredPersonId)->get();
        $response['twelve'] = TwelveDetails::where('registeredPersonId', $registeredPersonId)->get();
        return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY', $response);
    }
    
    
    public function getGstnDetailById($id){
        
         $gstnDetail = RegisteredPerson::where('registeredPersonId',$id)->first();
         if($gstnDetail){
              return $this->respondWithSuccess('RETRIEVED SUCCESSFULLY',$gstnDetail);
         }
        
    }
    
    public function retrieveAllTabs() {

        $tabList = [];
        $tabList['allTab'] = Category::retrieveAllTabs();
        $tabList['filteredTab'] = Category::retrieveFilteredTab(3, 3);

        if ($tabList) {

            return $this->respondWithSuccess('RETRIEVED TAB LIST SUCCESSFULLY', $tabList);
        }
    }

    public function retrieveTabDetailById($id) {

        $data = Question::retrieveQuestionByCategory($id);

        $response = $this->customQuestionArray($data);

        if ($response) {

            return $this->respondWithSuccess('RETRIEVED TAB LIST SUCCESSFULLY', $response);
        }
        if (empty($response)) {
            return $this->respondWithSuccess('RETRIEVED TAB LIST SUCCESSFULLY', $response);
        }
        return $this->respondWithError('FAILURE MESSGE', $response);
    }

    public function retrieveTabDetails($gstn = 1) {
        $data = [];
        $data['5ADetails'] = DB::table('5ADetails')->first();
        $data['5BDetails'] = DB::table('5BDetails')->first();
        $data['6ADetails'] = DB::table('6ADetails')->first();
        $data['6BDetails'] = DB::table('6BDetails')->first();
        if ($data) {

            return $this->respondWithSuccess('SUCCESS', 'RETRIEVED TAB LIST SUCCESSFULLY', $data);
        }
    }
    /**
     * Vinod
     * June 29, 2017
     * Get gst details based on 'hsnCodeNo'
     * @param type $hsnCodeNo
     * @return type
     */
    public function getCommodity($hsnCodeNo)
    {
        if($hsnCodeNo == '' || $hsnCodeNo == null)
        {
            return $this->respondWithError('ERROR MESSAGE', ['Error' => 'Please enter hsnCodeNo']);
        }
        else
        {
            $hsnCodeNo = str_replace(".","",$hsnCodeNo);
            $details = DB::table('gstongoods')
                ->select('hsncode','nameOfCommodity','chapterNo','sch','gst')
                 ->where(DB::raw("replace(hsncode, '.', '')") , $hsnCodeNo)->first();
            if(count($details) > 0)
            {
                return $this->respondWithSuccess($details);
            }
            else
            {
                return $this->respondWithSuccess('No Data', []);
            }
        }
    }
    public function updateLicenseDetail(Request $request){
        
        $data=RegisteredPerson::where('registeredPersonId',$request->registeredPersonId)->update(['legalName'=>$request->legalName,'tradeName'=>$request->tradeName]);
        if ($data) {

            return $this->respondWithSuccess('SUCCESS', 'UPDATED SUCCESSFULLY', []);
        }
    }
    //public function 
    
    public function storeJson(Request $request){
        
         
       $response=VtranJson::create(['gstnId'=>$request->registeredPersonId,'tabeJson'=>serialize($request->tab)]);
   
   //    $responseFromDb=VtranJson::where('vtranJsonId',$response->vtranJsonId)->first();
       $response->tabeJson=unserialize($response->tabeJson);
         return $this->respondWithSuccess('UPDATED SUCCESSFULLY',$response);
    }
    
    public function checkGstnJsonExist($gstnId){
        
        
         $response=VtranJson::where('gstnId',$gstnId)->first();
           
           
         if($response){
             $response->tabeJson=unserialize($response->tabeJson);
             return $this->respondWithSuccess('GSTN_JSON_EXIST', $response->tabeJson);
         }else{
             return $this->respondWithSuccess('GSTN_JSON_NOT_EXIST',[]);
         }
         
    }
    
}
