<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'project_id', 'division_id', 'role_id', 'discipline_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function division(){
    return $this->belongsto('App\Division');
  }
  public function project(){
  return $this->belongsto('App\Project');
}
    public function documents(){
    return $this->hasMany('App\Document');
  }

  public function transmittals(){
  return $this->hasMany('App\Transmittal');
}

public function role(){
return $this->belongsTo('App\Role');
}
public function discipline(){
return $this->belongsTo('App\Discipline');
}


}
