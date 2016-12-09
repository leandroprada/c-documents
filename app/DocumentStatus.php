<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Document;
class DocumentStatus extends Model
{
  protected $fillable =[,'name', 'document_id', ]


    public function documents(){
    return $this->hasMany('App\Document');
  }
}
