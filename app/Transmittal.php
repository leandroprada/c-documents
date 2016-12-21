<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Document;
use App\Discipline;

class Transmittal extends Model
{

    protected $fillable =['number','title',"user_id",'discipline_id'];

    public function users(){
    return $this->belongsTo('App\User');
  }
    public function disciplines(){
    return $this->belongsTo('App\Discipline');
  }

      public function documents(){
      return $this->hasMany('App\Document');
    }
}
