<?php

class Menu extends BaseModel
{
	protected $table = 'menu';

	public function menuItems() 
	{
		return $this->hasMany('MenuItem');
	}
}