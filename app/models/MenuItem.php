<?php

class MenuItem extends BaseModel
{
	protected $table = 'menu_items';

	public function menu() 
	{
		return $this->belongsTo('Menu');
	}

}