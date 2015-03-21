<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Perfil extends Eloquent  {

	public function usuarios(){
		return $this->hasMany('User','id_perfil');
	}
	protected $table = 'Perfiles';
    protected $fillable = array('id_perfil','nombre_perfil', 'desc_perfil');
}
