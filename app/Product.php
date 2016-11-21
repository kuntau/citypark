<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function purchases()
    {
      $this->belongsTo(Purchase::class);
    }
}
