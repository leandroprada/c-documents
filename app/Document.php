<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Area;
use App\Discipline;
use App\Status;
use App\Project;
use App\Transmittal;

class Document extends Model
{

protected $fillable =['title','number','project','division','discipline','area','revision','revision_date', 'user_id','area_id', 'discipline_id', 'status_id', 'project_id', 'transmittal_id'  ];


  public function user(){
  return $this->belongsTo('App\User');
}
  public function area(){
  return $this->belongsTo('App\Area');
}
  public function discipline(){
  return $this->belongsTo('App\Discipline');
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
