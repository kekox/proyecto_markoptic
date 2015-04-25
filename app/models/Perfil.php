<?php

class Perfil extends Eloquent  {

	protected $table = 'perfiles';
    protected $fillable = array(
    	'id_perfil',
    	'nombre_perfil', 
    	'desc_perfil'
    	);
    
	public function usuarios(){
		return $this->hasMany('User','perfil_id');
	}
	
}
