<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Document;
use App\Division;
use App\Deliverable;

class Discipline extends Model
{
  protected $fillable =['code','name', 'division_id'];


    public function documents(){
    return $this->hasMany('App\Document');
  }
    public function users(){
    return $this->hasMany('App\User');
  }
  public function deliverables(){
  return $this->hasMany('App\Deliverables');
}
public function division(){
return $this->belongsTo('App\Division');
}
}
