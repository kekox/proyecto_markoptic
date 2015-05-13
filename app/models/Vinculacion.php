<?php

class Vinculacion extends Eloquent  {

	protected $table = 'vinculaciones';
	protected $fillable = array(
		'folio_proyecto',
		'razones',
		'sinergias_marketing',
		'sinergias_tecnologias',
		'sinergias_produccion'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
