<?php

class Asesoria extends Eloquent  {

	protected $table = 'asesorias';
	protected $fillable = array(
		'folio_proyecto',
		'pregunta_1',
		'pregunta_2',
		'pregunta_3',
		'pregunta_4',
		'responsable_del_proyecto'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
