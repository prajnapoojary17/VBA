<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredPerson extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registeredpersons';
    
     /**
     * Overriding defualt priamry key
     *
     * @var string
     */
    protected $primaryKey = 'registeredPersonId';

    /**
     * changind defualt created_at and updated_at
     *
     * @var string
     */
    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    
    protected $fillable = [];
    protected $guarded  = ['registeredPersonId'];
}
