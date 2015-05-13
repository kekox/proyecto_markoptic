<?php

class Institucion extends Eloquent  {

	protected $table = 'instituciones';
	protected $fillable = array(
		'folio_proyecto',
		'registro',
		'equipamento',
		'diseño_o_prototipo',
		'realizaciones',
		'escalamiento_piloto',
		'grupo_trabajo_vinculacion',
		'esquema',
		'descripcion_actividades',
		'entregables',
		'descripcion_participacion',
		'informacion_contacto',
		'grupo_de_trabajo',
		'grado_academico',
		'producto',
		'informacion_participante',
		'actividades_especificos'
		
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
