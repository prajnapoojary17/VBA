<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helpers{
    
      private function customQuestionArray($data){
            
             $customArray = [];
            $questionId = [];
            $i = 0;
    
            foreach ($data['questions'] as $key => $value) {
    
                if (in_array($value->questionid, $questionId)) {
    
                    $customArray[$value->questionid]['answer'][] = [
                        'optionId' => $value->optionId, 'questionId' => $value->questionId, 'optionname' => $value->optionname,
                        'linkoption' => $value->linkoption, 'linkedQuestionId' => $value->linkedQuestionId, 'alertMessage' => $value->alertMessage
                    ];
                    
                } else {
                    $customArray[$value->questionid] = $value->toArray();
                    $customArray[$value->questionid]['answer'][] = [
                        'optionId' => $value->optionId, 'questionId' => $value->questionId, 'optionname' => $value->optionname, 'linkoption' => $value->linkoption,
                        'linkedQuestionId' => $value->linkedQuestionId, 'alertMessage' => $value->alertMessage
                    ];
                }
                if ($value->linkedQuestionId) {
                    $retriev = Question::where('questionid',$value->linkedQuestionId)->first();
                    $customArray[$value->questionid]['linked'] = $retriev->toArray();
           
                     $customArray[$value->questionid]['linked']['answer']=AnswerOption::where('questionId',$retriev->questionid)->get()->toArray();
                }
    
                // echo "<br><pre>";
                // print_r($customArray);
                array_push($questionId, $value->questionid);
                $i++;
            }
            
            return $customArray;
        }
}