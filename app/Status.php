<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Document;
class Status extends Model
{
  protected $fillable =['code','name'];


    public function documents(){
    return $this->hasMany('App\Document');
  }
}
