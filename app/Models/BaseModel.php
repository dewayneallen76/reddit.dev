<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
	public function getCreatedAtAttributes($value) 
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttributes($value) 
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
	}

	public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = Hash::make($value);
	}

	public function getCreatedAtAtributes($value) 
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->format('l, F jS Y @ h:i:s A');
	}

	public function getUpdatedAtAtributes($value) 
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->format('l, F jS Y @ h:i:s A');
	}
}
