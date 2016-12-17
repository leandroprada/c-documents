<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Document;

class Transmittal extends Model
{

    protected $fillable =['number','document_id'];

    public function users(){
    return $this->belongsTo('App\User');
  }

      public function documents(){
      return $this->hasMany('App\Document');
    }
}
