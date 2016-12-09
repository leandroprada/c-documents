<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Project;
use App\Discipline;

class Division extends Model
{
  protected $fillable =['name','used_id','discipline_id'];


    public function users(){
    return $this->hasMany('App\User');
  }
    public function project(){
    return $this->belongsto('App\Project');
  }
    public function disciplines(){
    return $this->hasMany('App\Discipline');
  }
}
