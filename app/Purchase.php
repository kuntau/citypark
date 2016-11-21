<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = [
    'user_id',
    'product_id',
    'from_at',
    'until_at',
    'created_at',
    'updated_at'
  ];

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
