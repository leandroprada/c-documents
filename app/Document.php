<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Area;
use App\Discipline;
use App\DocumentStatus;
use App\Project;
use App\Transmittal;

class Document extends Model
{

protected $fillable =['title','number','project','division','discipline','area','revision','revision_date', 'used_id','area_id', 'discipline_id', 'documentStatus_id', 'project_id'  ];


  public function user(){
  return $this->belongsTo('App\User');
}
  public function area(){
  return $this->belongsTo('App\Area');
}
  public function discipline(){
  return $this->belongsTo('App\Discipline');
}
  public function documentStatus(){
  return $this->hasOne('App\DocumentStatus');
}
  public function project(){
  return $this->belongsTo('App\Project');
}
  public function transmittal(){
  return $this->belongsTo('App\Transmittal');
}

}
