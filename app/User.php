<?php

namespace App;
use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function roles(){
      return $this->belongsToMany('App\Role');
    }

    /*validar usuario por rol si existe*/

    public function authorizeRoles($roles){
      if ($this->hasAnyRole($roles)) {
        return true;
      }
      abort(403, 'No posees permisos para acceder a este contenido. Por favor, contacta al administrador del sistema');
    }

    public function hasAnyRole($roles){ // Aqui valida si el user tiene 1 o varios roles
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;                // devuelve true si es un array de roles
          }
        }
      } else {
        if($this->hasRole($roles)){
          return true;                // devuelve true si es SOLO 1 rol
        }
      }
      return false;  // devuelve false porq no hay roles
    }

    public function hasRole($role){
      if ($this->roles()->where('name',$role)->first()) {
        return true;
      }
      return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','phone'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Query Scope

    public function scopeName($query, $name){
      if($name)
        return $query->where('name', 'LIKE', "%$name%");

    }

    public function scopeEmail($query, $email){
      if($email)
        return $query->where('email', 'LIKE', "%$email%");

    }

    public function scopeLastName($query, $lastName){
      if($lastName)
        return $query->where('lastName', 'LIKE', "%$lastName%");

    }
}
