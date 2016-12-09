<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Project;
use App\Role;
use App\Discipline;
use App\Document;
use App\Transmittal;
use App\Division;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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

public function Division(){
return $this->hasMany('App\Division');
}
}
