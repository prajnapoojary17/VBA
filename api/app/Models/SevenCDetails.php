<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SevenCDetails extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'details7c';
    
     /**
     * Overriding defualt priamry key
     *
     * @var string
     */
    protected $primaryKey = '7CDetailId';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    
    protected $fillable = [];
    protected $guarded  = ['7CDetailId'];
}
