<?php

class Mercado extends Eloquent  {

	protected $table = 'mercados';
	protected $fillable = array(
		'folio_proyecto',
		'mercado',
		'modelo_de_negocio',
		'precio',
		'proyecciones',
		'enfoque_de_insercion',
		'cliente_objetivo',
		'beneficios',
		'competencia',
		'patentes_similares',
		'barreras'
		);

	public function proyectos(){
		return $this->BelongsTo('Proyecto','folio');
	}
	
}
