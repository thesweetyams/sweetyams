<?php

class Menu extends BaseModel
{
    protected $table = 'menu';

    public static $rules = array(

    );
    
    public function user()
    {
        return $this->belongsTo('User');
    }
}



?>
