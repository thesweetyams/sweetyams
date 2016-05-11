<?php

class MenuItem extends Eloquent
{
  protected $table = 'menu_items';

  public static $rules = array(
    'name'   => 'required|min:1',
    'description' => 'required',
    'price' => 'required'
  );

  public function menu()
  {
    return $this->belongsTo('Menu');
  }

  public function addOns()
  {
    return $this->hasMany('AddOn');
  }

  public function orderItems()
  {
    return $this->hasMany('OrderItem');
  }
  public function price()
  {
    return number_format((float)($this->price / 100), 2, '.', '');
  }

}
