<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\Document;

class Area extends Model
{
  protected $fillable =['code','name','project_id'];




  public function documents(){
  return $this->hasMany('App\Document');
}
  public function project(){
  return $this->belongsTo('App\Project');
}
}
