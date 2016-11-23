<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = [
    'product_id',
    'from_at',
    'until_at',
  ];

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
