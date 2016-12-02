<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = [
    'product_id',
    'price',
    'purpose',
    'location',
    'quantity_lot',
    'from_at',
    'until_at',
    'duration'
  ];

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
