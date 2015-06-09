<?php

class Perfil extends Eloquent  {

	protected $table = 'perfiles';
    protected $fillable = array(
    	'id_perfil',
    	'nombre_perfil', 
    	'desc_perfil'
    	);
    /********************************************** Relaciones ***************************************************/
	public function user(){
		return $this->belongsTo('User','perfil_id');
	}

	/********************************************** Querys ***************************************************/
	public function scopeObtenerPerfil($query){
		$id       = Auth::user()->perfil_id;
		return $query->where('id_perfil','=',$id);
	}
	
}
