<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	protected $table = 'users';
	protected $hidden = array('id','password', 'remember_token');
	protected $fillable = array(
		'perfil_id',
		'nombre',
		'apellido_Paterno',
		'apellido_Materno',
		'email',
		'password'
		);

	public function perfiles(){
		return $this->BelongsTo('Perfil','id_perfil');
	}

	public function proyectos(){
		return $this->hasMany('Proyecto','id_user');
	}
	

	public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }

    /********************************************** Querys ***************************************************/
	public function scopeObtenerUsuarios($query){
		$myid  = Auth::user()->id;
		return $query->where('id','<>',$myid);
	}

}
