<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Discipline;
use App\Document;

class Deliverable extends Model
{
  protected $fillable =['code','name', 'discipline_id'];


    public function documents(){
    return $this->hasMany('App\Document');
  }
    public function discipline(){
    return $this->belongsTo('App\Discipline');
  }


}
