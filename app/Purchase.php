<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

  public function setFromAtAttribute($date) {
    $this->attributes['from_at'] = Carbon::parse($date);
    // $this->attributes['from_at'] = Carbon\Carbon::createFromFormat('d-m-Y', $date);
  }
}
