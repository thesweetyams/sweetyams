<?php

class Menu extends BaseModel
{
  public static $rules = array(
    'name'   => 'required|min:1',
    'description' => 'required',
    'price' => 'required'
  );
  protected $table = 'menu';
  public $timestamps = false;

  public function menuItems()
  {
    return $this->hasMany('MenuItem');
  }
}
