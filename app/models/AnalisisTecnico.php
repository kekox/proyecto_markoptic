<?php

class AnalisisTecnico extends Eloquent  {

	protected $table = 'analisis_tecnicos';
	protected $fillable = array(
		'folio_proyecto',
		'antecedentes',
		'edo_tec_1',
		'edo_tec_2',
		'edo_tec_3',
		'edo_tec_4',
		'edo_tec_5',
		'origen_de_la_tecnologia'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
