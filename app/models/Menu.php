<?php

class Menu extends BaseModel
{
	protected $table = 'menu';
	public $timestamps = false;

	public function menuItems() 
	{
		return $this->hasMany('MenuItem');
	}
}