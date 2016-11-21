<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function purchases()
    {
      return $this->belongsTo(Purchase::class);
    }
}
