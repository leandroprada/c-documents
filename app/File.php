<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $fillable = ['href'];

  public function document()
  {
    return $this->belongsTo('App\Document');
  }
}
