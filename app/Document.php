<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Area;
use App\Discipline;
use App\Division;
use App\Status;
use App\Project;
use App\Transmittal;

class Document extends Model
{

protected $fillable =['title','number','client_code','revision','revision_date'];


  public function user(){
  return $this->belongsTo('App\User');
}
  public function area(){
  return $this->belongsTo('App\Area');
}
  public function discipline(){
  return $this->belongsTo('App\Discipline');
}
public function division(){
  return $this->belongsTo('App\Division');
}
  public function status(){
  return $this->hasOne('App\Status');
}
  public function project(){
  return $this->belongsTo('App\Project');
}
  public function transmittal(){
  return $this->belongsTo('App\Transmittal');
}

}
