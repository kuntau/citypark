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

  protected $dates = [
    'from_at',
    'until_at'
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function product() {
    return $this->belongsTo(Product::class);
  }

  public function setFromAtAttribute($date) {
    $this->attributes['from_at'] = Carbon::createFromFormat('d/m/Y', $date);
  }

  public function setUntilAtAttribute($date) {
    $this->attributes['until_at'] = Carbon::createFromFormat('d/m/Y', $date);
  }
}
