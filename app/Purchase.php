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

  public function users() {
    return $this->belongsToMany(User::class);
  }

  public function product() {
    return $this->hasOne(Product::class);
  }

  public function setFromAtAttribute($date) {
    $this->attributes['from_at'] = Carbon::createFromFormat('d/m/Y', $date);
  }

  public function setUntilAtAttribute($date) {
    $this->attributes['until_at'] = Carbon::createFromFormat('d/m/Y', $date);
  }
}
