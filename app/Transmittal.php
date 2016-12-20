<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Document;

class Transmittal extends Model
{

    protected $fillable =['number','title',"discipline_id",'document_id'];

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
