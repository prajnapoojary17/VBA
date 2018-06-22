<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AnswerOption;
use App\Models\Question;
use App\Models\Tab;

class Category extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    
    
    protected $fillable = [];
    protected $guarded  = [];
    
    public static function retrieveQuestion(){
        
        
    }
    
    
    public static function retrieveAllTabs() {
        
        $data=Category::whereNotIn('CategoryName',['General'])->get();
        return $data;
    }
    
    public static function retrieveFilteredTab($questionId,$optionId){
        $catId=[];
        $incoming=[
                   ['questionId'=>1,'optionId'=>2],
                    ['questionId'=>3,'optionId'=>3],
                     ['questionId'=>1,'optionId'=>5],
                   ];
        foreach($incoming as $value){
             $allCategoryId=Tab::select('CategoryId')
             ->where([['questionId','=',$value['questionId']],['optionId','=',$value['optionId']]])->first();
          
             if($allCategoryId!=null){
                 array_push($catId, $allCategoryId->CategoryId);
                
             }
            
        }
       
      
		$customArray=[];
		$data=Category::whereNotIn('CategoryName',['General'])->get();
		$i=0;
		foreach($data as $key=>$value){
			$customArray[$i]=$value;
			if(in_array($value->CategoryId,$catId)){
			$customArray[$i]['filtered']='true';
			
			} else {
			$customArray[$i]['filtered']='false';
			}
		$i++;
		}
    
                
                return $customArray;
    }

}
