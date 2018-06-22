<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\AnswerOption;
use App\Models\Category;
use App\Models\FiveADetails;
use App\Models\EightDetails;
use App\Models\ElevenDetails;
use App\Models\FiveBDetails;
use App\Models\FiveCDetails;
use App\Models\NineADetails;
use App\Models\NineBDetails;
use App\Models\SevenADetails;
use App\Models\SevenA7ADetails;
use App\Models\SevenA7BDetails;
use App\Models\SevenBDetails;
use App\Models\SevenCDetails;
use App\Models\SixADetails;
use App\Models\SixBDetails;
use App\Models\TenADetails;
use App\Models\TenBDetails;
use App\Models\TwelveDetails;

class Question extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * Overriding defualt priamry key
     *
     * @var string
     */
    protected $primaryKey = 'questionId';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';

    protected $fillable = [];
    protected $guarded = [];

    public static function retrieveQuestion($registeredPersonId = 1,$categoryId = 16 ) {
        DB::enableQueryLog();
           
        
        $data = [];
        $data['registeredPersonId']=$registeredPersonId;
        $data['category'] = Category::where('categoryId', $categoryId)->first(['categoryId', 'categoryname']);

        $data['questions'] = Question:://join('category', 'questions.categoryId', '=', 'category.categoryId')
                join('answeroptions', 'questions.questionId', '=', 'answeroptions.questionId')
                ->leftJoin('answers', function ($join)  use ($registeredPersonId) {
                    $join->on('questions.questionId', '=', 'answers.questionId')
                    ->on('answeroptions.optionName', '=', 'answers.response')
                      ->where('answers.registeredPersonId', $registeredPersonId) ;
                })
                ->where('questions.categoryId', $categoryId)
                    ->orderBy('questions.sortOrder', 'ASC')->orderBy('answeroptions.optionId', 'ASC')
                ->get([
            //'category.categoryId', 'category.categoryname',
            'questions.questionId', 'questions.isLinked','questions.helpText',
            'questions.question', 'questions.questionType', 'answeroptions.optionId',
            'answeroptions.optionName', 'answeroptions.linkOption', 'answeroptions.linkedQuestionId',
            'answers.response'
        ]);

		
        switch ($data['category']->categoryname) {

          case 'General':
                $data['table'] = FiveADetails::where('registeredPersonId', $registeredPersonId)->get([
                    'registrationNo', 'taxPeriod', 'dateFiling', 'balanceCenvatCredit', 'balanceCenvatAdmissible'
                    ]);
                break;
            case '5A':
           case '5A':
                $data['table'] = FiveADetails::where('registeredPersonId', $registeredPersonId)->get([
                     'registrationNo', 'taxPeriod', 'dateFiling', 'balanceCenvatCredit', 'balanceCenvatAdmissible','natureOfItc'
                    ]);
                break;
            case '5B':
                $data['table'] = FiveBDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'tinIssuer','issuerName','formSerialNo','amount','vatRate','type','salesValue'
                ]);
                break;
             
	case '5C':
               
            
            
            
          $fiveCResult = FiveCDetails::where('registeredPersonId', $registeredPersonId)->get();
          
            
                    
           
               
            $data['table']=$fiveCResult;
        
               // if()
                break;	
            case '6A':
                $data['table'] = SixADetails::where('registeredPersonId', $registeredPersonId)->get([
                    'invoiceNo','invoiceDate','capitalGood','supplierRegNo','recipientRegNo','capitalGoodValue','capitalGoodCvd','capitalGoodSad','eligibleCenvat','cenvatCreditAvailed','cenvatCreditUnavailed','itcCarriedForward'
                ]);
                break;
            case '6B':
                $data['table'] = SixBDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'invoiceNo','invoiceDate','supplierRegNo','recipientRegNo','capitalGoodValue','capitalGoodVat','eligibleVat','vatCreditAvailed','vatCreditUnavailed','itcCarriedForward'
                ]);
                break;
             case '7A':
                 
                $data['table'] = SevenADetails::where('registeredPersonId', $registeredPersonId)->get([
                    'hsn','unit','quantity','value','dutiesPaid'
                ]);
                break;
              case '7A7A':
                 
                $data['table'] = SevenA7ADetails::where('registeredPersonId', $registeredPersonId)->get([
                    'hsn','unit','quantity','value','dutiesPaid','type','description'
                ]);
                break;
            case '7A7B':
                 
                $data['table'] = SevenA7BDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'hsn','unit','quantity','value','dutiesPaid','type'
                ]);
                break;
            case '7B':
                $data['table'] = SevenBDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'description','unit','quantity','value','vat','taxCreditClaimed','taxCreditExempt','taxCreditAdmissible','type'
                ]);
                break;
            case '7C':
              
                $data['table'] = SevenCDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'description','unit','quantity','value','taxPaid'
                ]);
              break;
                 
            case '8':
                $data['table'] = EightDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'registerNo','taxPeriod','dateFilling','cenvatCredit','itcCentralTax','invoiceNo','invoiceDate','centralTaxTransfered','typeOfTax'
                ]);
                break;
            case '9A':
                $data['table'] = NineADetails::where('registeredPersonId', $registeredPersonId)->get([
                    'challanNo','challanDate','goodsType','hsn','description','unit','quantity','value','typeOfGoods','jobWorkerName','gstnJobWorkerName'
                ]);
                break;
            case '9B':
                $data['table'] = NineBDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'challanNo','challanDate','goodsType','hsn','description','unit','quantity','value','typeOfGoods','nameOfPrincipal','gstnOfPrincipal'
                ]);
                break;
            case '10A':
                $data['table'] = TenADetails::where('registeredPersonId', $registeredPersonId)->get([
                    'gstnPrincipal','description','unit','quantity','value','inputTaxTaken','createdDate','updatedDate','typeOfGoods','nameOfPrincipal','gstnPrincipal','descriptionOfGoods','descriptionOfTax','hsnCode'
                    ]);
                break;
            case '10B':
                $data['table'] = TenBDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'gstnPrincipal','description','unit','quantity','value','inputTaxTaken','typeOfGoods','descriptionOfGoods','nameOfAgent','gstnPrincipal','hsnCode','descriptionOfTax'
                ]);
                break;
            case '11':
                $data['table'] = ElevenDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'vatRegNo','serviceTaxRegNo','invoiceNo','invoiceDate','TaxPaid','taxCredit','vatAsSgstCredit','servicetaxAsCgst','vatTaxPaid','serviceTaxPaid','typeOfTax','registrationNo'
                ]);
                break;
            case '12':
                $data['table'] = TwelveDetails::where('registeredPersonId', $registeredPersonId)->get([
                    'documentNo','documentDate','gstnNumber','RecipientName','description','hsn','unit','quantity','value',
                ]);
                break;
         
          

            default:'';
        }


        return $data;
    }

    public static function retrieveQuestionByCategory($id) {
        $data = Question::where('categoryid', $id)
                        ->join('answeroptions', 'questions.questionId', '=', 'answeroptions.questionId')
                        ->whereNotIn('questions.questionId', function($query) {
                            $query->select(DB::raw('answerOptions.linkedQuestionId'))
                            ->from('questions')
                            ->join('category', 'questions.categoryid', '=', 'category.CategoryId')
                            ->join('answeroptions', 'questions.questionId', '=', 'answeroptions.questionId')
                            ->where('category.CategoryName', 'General')
                            ->where('answeroptions.linkoption', 'linked_to_question');
                        })->get();

        return $data;
    }

}
