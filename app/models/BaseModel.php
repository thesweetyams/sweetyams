<?php
use Carbon\Carbon;
class BaseModel extends Eloquent
{
    public static $rules = [
        'from'      => 'required|max:100',
        'email'       => 'required|max:100',
        'subject'      => 'required|max:100',
        'body'       => 'required'
    ];

    public function getCreatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A');
    }
    public function getUpdatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
?>
