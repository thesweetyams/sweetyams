<?php

class Contact 
{
    public static $rules = [
        'from'      => 'required|max:100',
        'email'       => 'required|max:100',
        'subject'      => 'required|max:100',
        'body'       => 'required'
    ];	
}
