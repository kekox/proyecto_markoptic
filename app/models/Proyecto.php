<?php

class Proyecto extends Eloquent  {

	protected $table = 'proyectos';
	protected $fillable = array(
		'folio',
		'id_user',
		'modalidad',
		'nombre_proyecto',
		'tipo_de_proyecto',
		'contextualizacion',
		'propuesta',
		'area_industrial',
		'area_conocimiento',
		'palabras_ckave',
		'descripcion_innovacion',
		'tipo_innovacion',
		'grado_innovacion',
		'tipo_mercado'
		);

	/********************************************** Relaciones ***************************************************/
	public function users(){
		return $this->BelongsTo('User','id');
	}
	
	public function descripciones(){
		return $this->hasOne('Descripcion','folio_proyecto');
	}

	public function analisis_tecnicos(){
		return $this->hasOne('AnalisisTecnico','folio_proyecto');
	}

	public function analisis_comerciales(){
		return $this->hasOne('AnalisisComercial','folio_proyecto');
	}

	public function generales(){
		return $this->hasOne('General','folio_proyecto');
	}

	public function mercados(){
		return $this->hasOne('Mercado','folio_proyecto');
	}

	public function vinculaciones(){
		return $this->hasOne('vinculacion','folio_proyecto');
	}

	public function instituciones(){
		return $this->hasMany('Institucion','folio_proyecto');
	}

	public function trabajos_detallados(){
		return $this->hasOne('TrabajoDetallado','folio_proyecto');
	}

	public function asesorias(){
		return $this->hasOne('Asesoria','folio_proyecto');
	}

	/********************************************** Querys ***************************************************/

	public function scopeObtenerProyecto($query){
		$idselected = Auth::user()->id;
		return $query->orderBy('created_at','desc')->where('id_user','=',$idselected);
	}
}
