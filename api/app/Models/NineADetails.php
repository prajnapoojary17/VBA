<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NineADetails extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'details9a';
    
     /**
     * Overriding defualt priamry key
     *
     * @var string
     */
    protected $primaryKey = '9ADetailsId';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    
    protected $fillable = [];
    protected $guarded  = ['9ADetailsId'];
}
