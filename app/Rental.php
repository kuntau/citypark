<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //

  public function purchases()
  {
      $this->hasMany(Purchase::class);
  }
}
