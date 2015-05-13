<?php

class TrabajoDetallado extends Eloquent  {

	protected $table = 'trabajos_detallados';
	protected $fillable = array(
		'folio_proyecto',
		'plan_de_trabajo',
		'desc_justificacion_actividades',
		'producto_etapa',
		'desc_etapas',
		'presupuesto',
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
