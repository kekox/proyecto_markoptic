<?php

class Descripcion extends Eloquent  {

	protected $table = 'descripciones';
	protected $fillable = array(
		'folio_proyecto',
		'descripcion_propuesta',
		'principales_actividades',
		'principales_entregables',
		'objetivo_gral',
		'resultados_esperados',
		'descripcion_estrategica_tec'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
