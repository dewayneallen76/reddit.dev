<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
    public function setCreatedAtAttribute($value) 
    {
    	$this->attributes['created_at'] = setTimezone('America/Chicago');
    }

    public function setUpdatedAtAttribute($value) 
    {
    	$this->attributes['updated_at'] = setTimezone('America/Chicago');
    }
}
