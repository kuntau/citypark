<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'title', 'description', 'price' ];

    public function purchases()
    {
      return $this->belongsToMany(Purchase::class);
    }
}
