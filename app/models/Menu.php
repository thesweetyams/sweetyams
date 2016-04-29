<?php

class Menu extends BaseModel
{
    protected $table = 'menu';

    public static $rules = array(
    'from'      => 'required|max:100',
    'email'       => 'required|max:100',
    'subject'      => 'required|max:100',
    'body'       => 'required'
    );

    public function user()
    {
        return $this->belongsTo('User');
    }
}



?>
