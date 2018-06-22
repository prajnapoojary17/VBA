<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\AnswerOption;

class Tab extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tab';
    
     /**
     * Overriding defualt priamry key
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    
    protected $fillable = [];
    protected $guarded  = [];
    
   
    

}
