<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
  protected $fillable =['code','name','user_id'];


  public function users(){
  return $this->hasMany('App\User');
}
}
