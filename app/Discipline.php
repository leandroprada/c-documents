<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Document;
use App\Deliverable;

class Discipline extends Model
{
  protected $fillable =['code','name', 'document_id', 'user_id', 'deliverable_id'];


    public function documents(){
    return $this->hasMany('App\Document');
  }
    public function users(){
    return $this->hasMany('App\User');
  }
  public function deliverables(){
  return $this->hasMany('App\Deliverables');
}
}
