<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Document;

class Transmittal extends Model
{

    protected $fillable =['number','user_id','document_id'];

    public function users(){
    return $this->hasMany('App\User');
  }

      public function documents(){
      return $this->hasMany('App\Document');
    }
}
