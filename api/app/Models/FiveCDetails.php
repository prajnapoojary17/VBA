<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiveCDetails extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'detials5c';
    
     /**
     * Overriding defualt priamry key
     *
     * @var string
     */
    protected $primaryKey = '5CDetailId';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    
    protected $fillable = [];
    protected $guarded  = ['5CDetailId'];
}
