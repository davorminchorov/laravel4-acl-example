<?php

class Resource extends \Eloquent {
	protected $fillable = ['name', 'pattern', 'target', 'secure'];

	protected $softDelete = true;

	public function groups()
	{
		return $this->belongsToMany("Group")->withTimestamps();
	}
}