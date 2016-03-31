<?php

class Group extends Eloquent {
    
    protected $fillable = ['name'];

    protected $softDelete = true;

    public function resources()
    {
        return $this->belongsToMany("Resource")->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany("User")->withTimestamps();
    }




}