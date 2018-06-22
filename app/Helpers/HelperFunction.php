<?php

namespace App\Helpers;

class HelperFunction {

    public static function fiveCGroup($fiveCResult) {

        $fiveCResult = json_decode(json_encode((object) $fiveCResult), FALSE);
        $customArray = [];
        foreach ($fiveCResult as $key => $val) {

            if ($val->fiveCCategory == 'C') {
                $customArray['C'][] = [
                    'typeOfTax' => $val->typeOfTax,
                    'nameOfIssuer' => $val->nameOfIssuer,
                    'stateVat' => $val->stateVat,
                    'taxPayable' => $val->taxPayable,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'inputAlreadyReversed' => $val->inputAlreadyReversed,
                    'fiveCCategory' => $val->fiveCCategory,
                    'turnoverPending' => $val->turnoverPending,
                ];
            }
            if ($val->fiveCCategory == 'F') {
                $customArray['F'][] = [
                    'typeOfTax' => $val->typeOfTax,
                    'nameOfIssuer' => $val->nameOfIssuer,
                    'stateVat' => $val->stateVat,
                    'taxPayable' => $val->taxPayable,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'inputAlreadyReversed' => $val->inputAlreadyReversed,
                    'fiveCCategory' => $val->fiveCCategory,
                    'turnoverPending' => $val->turnoverPending,
                ];
            }


            if ($val->fiveCCategory == 'H') {
                $customArray['H'][] = [
                    'typeOfTax' => $val->typeOfTax,
                    'nameOfIssuer' => $val->nameOfIssuer,
                    'stateVat' => $val->stateVat,
                    'taxPayable' => $val->taxPayable,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'inputAlreadyReversed' => $val->inputAlreadyReversed,
                    'fiveCCategory' => $val->fiveCCategory,
                    'turnoverPending' => $val->turnoverPending,
                ];
            }
            if ($val->fiveCCategory == 'I') {
                $customArray['I'][] = [
                    'typeOfTax' => $val->typeOfTax,
                    'nameOfIssuer' => $val->nameOfIssuer,
                    'stateVat' => $val->stateVat,
                    'taxPayable' => $val->taxPayable,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'taxAlreadyPaid' => $val->taxAlreadyPaid,
                    'inputAlreadyReversed' => $val->inputAlreadyReversed,
                    'fiveCCategory' => $val->fiveCCategory,
                    'turnoverPending' => $val->turnoverPending,
                ];
            }
            if ($val->fiveCCategory == 'G') {
                $customArray['G'] = [
                    'fiveCCategory' => $val->fiveCCategory,
                    'sellerVatCarriedForward' => $val->sellerVatCarriedForward,
                    'tinNumberInState' => $val->tinNumberInState,
                    'vatCarriedForward' => $val->vatCarriedForward,
                    'sellerInState' => $val->sellerInState,
                ];
            }
        }

        return $customArray;
    }

    public static function fiveCType($fiveCResult) {

        $customArray = [];
        $cTurnoverPendingVat = 0;
        $fTurnoverPendingVat = 0;
        $hTurnoverPendingVat = 0;
        $cDiffTaxPayable = 0;
        $fDiffTaxPayable = 0;
        $hDiffTaxPayable = 0;
        $vatTinNumber = '';
        $sellerInState = '';
        $vatBalance = '';
        $entryTaxCarriedForward = '';
        $itcReversal = 0;


        $entitycTurnoverPendingVat = 0;
        $entityfTurnoverPendingVat = 0;
        $entityhTurnoverPendingVat = 0;
        $entitycDiffTaxPayable = 0;
        $entityfDiffTaxPayable = 0;
        $entityhDiffTaxPayable = 0;
        $entityvatTinNumber = '';
        $entitysellerInState = '';
        $entityvatBalance = '';
        $entityentryTaxCarriedForward = '';
        $entityitcReversal = 0;

        $fiveCResult = json_decode(json_encode((object) $fiveCResult), FALSE);



        foreach ($fiveCResult as $key => $value) {
            if (strtolower($value->typeOfTax) == 'vat') {
                if (strtolower($value->fiveCCategory) == 'c') {
                    $cTurnoverPendingVat+=$value->turnoverPending;
                    $cDiffTaxPayable+=$value->taxPayable;
                    $itcReversal+=$value->taxAlreadyPaid;
                    $itcReversal+=$value->inputAlreadyReversed;
                }
                if (strtolower($value->fiveCCategory) == 'f') {
                    $fTurnoverPendingVat+=$value->turnoverPending;
                    $fDiffTaxPayable+=$value->taxPayable;
                    $itcReversal+=$value->taxAlreadyPaid;
                    $itcReversal+=$value->inputAlreadyReversed;
                }
                if (strtolower($value->fiveCCategory) == 'h') {
                    $hTurnoverPendingVat+=$value->turnoverPending;
                    $hDiffTaxPayable+=$value->taxPayable;
                }
                if (strtolower($value->fiveCCategory) == 'i') {
                    $hTurnoverPendingVat+=$value->turnoverPending;

                    $hDiffTaxPayable+=$value->taxPayable;
                }
            }
            if (strtolower($value->typeOfTax) == 'entry_tax') {
                if (strtolower($value->fiveCCategory) == 'c') {
                    $entitycTurnoverPendingVat+=$value->turnoverPending;
                    $entitycDiffTaxPayable+=$value->taxPayable;
                    $entityitcReversal+=$value->taxAlreadyPaid;
                    $entityitcReversal+=$value->inputAlreadyReversed;
                }
                if (strtolower($value->fiveCCategory) == 'f') {
                    $entityfTurnoverPendingVat+=$value->turnoverPending;
                    $entityfDiffTaxPayable+=$value->taxPayable;
                    $entityitcReversal+=$value->taxAlreadyPaid;
                    $entityitcReversal+=$value->inputAlreadyReversed;
                }
                if (strtolower($value->fiveCCategory) == 'h') {
                    $entityhTurnoverPendingVat+=$value->turnoverPending;
                    $entityhDiffTaxPayable+=$value->taxPayable;
                }
                if (strtolower($value->fiveCCategory) == 'i') {
                    $entityhTurnoverPendingVat+=$value->turnoverPending;

                    $entityhDiffTaxPayable+=$value->taxPayable;
                }
            }
            if (strtolower($value->fiveCCategory) == 'g') {
                $vatTinNumber = $value->tinNumberInState;
                $sellerInState = $value->sellerInState;
                $vatBalance = $value->sellerVatCarriedForward;
                $entryTaxCarriedForward = $value->vatCarriedForward;
            }
        }


        $customArray['vat']['vatTinNumber'] = $sellerInState;
        $customArray['vat']['vatCarryForward'] = $vatBalance;
        $customArray['vat']['cDiffTaxPayable'] = $cDiffTaxPayable;
        $customArray['vat']['cTurnoverPendingVat'] = $cTurnoverPendingVat;
        $customArray['vat']['fTurnoverPendingVat'] = $fTurnoverPendingVat;
        $customArray['vat']['fDiffTaxPayable'] = $fDiffTaxPayable;
        $customArray['vat']['hTurnoverPendingVat'] = $hTurnoverPendingVat;
        $customArray['vat']['hDiffTaxPayable'] = $hDiffTaxPayable;
        $customArray['vat']['itcReversal'] = $itcReversal;
        $customArray['vat']['transition'] = $cDiffTaxPayable + $fDiffTaxPayable + $itcReversal + $hDiffTaxPayable;

        $customArray['entry_tax']['vatTinNumber'] = $vatTinNumber;
        $customArray['entry_tax']['vatCarryForward'] = $entryTaxCarriedForward;
        $customArray['entry_tax']['cDiffTaxPayable'] = $entitycDiffTaxPayable;
        $customArray['entry_tax']['cTurnoverPendingVat'] = $entitycTurnoverPendingVat;
        $customArray['entry_tax']['fTurnoverPendingVat'] = $entityfTurnoverPendingVat;
        $customArray['entry_tax']['fDiffTaxPayable'] = $entityfDiffTaxPayable;
        $customArray['entry_tax']['hTurnoverPendingVat'] = $entityhTurnoverPendingVat;
        $customArray['entry_tax']['hDiffTaxPayable'] = $entityhDiffTaxPayable;
        $customArray['entry_tax']['itcReversal'] = $entityitcReversal;
        $customArray['entry_tax']['transition'] = $entitycDiffTaxPayable + $entityfDiffTaxPayable + $entityitcReversal + $entityhDiffTaxPayable;
        return $customArray;
    }
    
    
   public static function retrieveVtranCategory($userId){
        $baseUrl = config('constant.API_BASE_URL');
        $jsonGDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/16'), true);
        $data['arrayGQuestions'] = json_encode($jsonGDetails['data']['questions']);
        $data['arrayGDetails'] = $jsonGDetails;

        $url5A = 'data/registeredUser/' . $userId . '/category/';
        $categoryId = 1;
        $methodName = 'GET';
        $response = Api::APIcall($url5A, $categoryId, $methodName);

        $json5ADetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/1'), true);
        $data['array5AQuestions'] = json_encode($json5ADetails['data']['questions']);
        $data['array5ADetails'] = $json5ADetails;

        $json5BDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/2'), true);
        $data['array5BQuestions'] = json_encode($json5BDetails['data']['questions']);
        $data['array5BDetails'] = $json5BDetails;

        $json5CDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/3'), true);
        $data['array5CQuestions'] = json_encode($json5CDetails['data']['questions']);
        $data['array5CDetails'] = $json5CDetails;

        $data['fiveC'] = HelperFunction::fiveCGroup($json5CDetails['data']['table']);
        $data['fiveCView'] = HelperFunction::fiveCType($json5CDetails['data']['table']);

        $json6ADetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/4'), true);
        $data['array6AQuestions'] = json_encode($json6ADetails['data']['questions']);
        $data['array6ADetails'] = $json6ADetails;

        $json6BDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/5'), true);
        $data['array6BQuestions'] = json_encode($json6BDetails['data']['questions']);
        $data['array6BDetails'] = $json6BDetails;

        $json7A7ADetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/6'), true);
        $data['array7A7AQuestions'] = json_encode($json7A7ADetails['data']['questions']);
        $data['array7A7ADetails'] = $json7A7ADetails;

        $json7A7BDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/17'), true);
        $data['array7A7BQuestions'] = json_encode($json7A7BDetails['data']['questions']);
        $data['array7A7BDetails'] = $json7A7BDetails;

        $json7BDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/7'), true);
        $data['array7BQuestions'] = json_encode($json7BDetails['data']['questions']);
        $data['array7BDetails'] = $json7BDetails;

        $json7CDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/8'), true);
        $data['array7CQuestions'] = json_encode($json7CDetails['data']['questions']);
        $data['array7CDetails'] = $json7CDetails;

        $json8Details = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/9'), true);
        $data['array8Questions'] = json_encode($json8Details['data']['questions']);
        $data['array8Details'] = $json8Details;

        $json9ADetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/10'), true);
        $data['array9AQuestions'] = json_encode($json9ADetails['data']['questions']);
        $data['array9ADetails'] = $json9ADetails;

        $json9BDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/11'), true);
        $data['array9BQuestions'] = json_encode($json9BDetails['data']['questions']);
        $data['array9BDetails'] = $json9BDetails;

        $json10ADetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/12'), true);
        $data['array10AQuestions'] = json_encode($json10ADetails['data']['questions']);
        $data['array10ADetails'] = $json10ADetails;

        $json10BDetails = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/13'), true);
        $data['array10BQuestions'] = json_encode($json10BDetails['data']['questions']);
        $data['array10BDetails'] = $json10BDetails;

        $json11Details = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/14'), true);
        $data['array11Questions'] = json_encode($json11Details['data']['questions']);
        $data['array11Details'] = $json11Details;

        $json12Details = json_decode(file_get_contents($baseUrl . 'data/registeredUser/' . $userId . '/category/15'), true);
        $data['array12Questions'] = json_encode($json12Details['data']['questions']);
        $data['array12Details'] = $json12Details;
        
        return $data;
   }

}
