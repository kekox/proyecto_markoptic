<?php

class AnalisisComercial extends Eloquent  {

	protected $table = 'analisis_comerciales';
	protected $fillable = array(
		'folio_proyecto',
		'caracteristicas_empresa',
		'funciones_criticas',
		'experiencia_personal',
		'record_de_exito'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
