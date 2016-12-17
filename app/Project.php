<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Area;
use App\User;
use App\Document;
use App\Division;
use App\Transmittal;

class Project extends Model
{
  protected $fillable =['code','name','user_id','division_id','area_id','document_id','transmittal_id'];


    public function users(){
    return $this->hasMany('App\User');
  }

  public function divisions(){
  return $this->hasMany('App\Division');
}
  public function areas(){
  return $this->hasMany('App\Area');
}
  public function documents(){
  return $this->hasMany('App\Document');
}
  public function transmittals(){
  return $this->hasMany('App\Transmittal');
}


}
