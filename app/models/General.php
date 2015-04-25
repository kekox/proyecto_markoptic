<?php

class General extends Eloquent  {

	protected $table = 'generales';
	protected $fillable = array(
		'folio_proyecto',
		'nivel_de_tecnologia',
		'nivel_de_innovacion',
		'riesgo_tecnico',
		'principal_resultado',
		'presupuesto_de_proyecto',
		'administracion_del_proyecto',
		'disponibilidad_y_compatibilidad',
		'plan_de_proteccion',
		'generacion_de_ingresos'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
