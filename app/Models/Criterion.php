<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Criterion extends Model
{

  static $rules = [
    'name' => 'required',
    'assigned_score' => 'required',
  ];

  protected $perPage = 20;


  protected $fillable = [
    'name',
    'assigned_score',
  ];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function items()
  {
    return $this->hasMany(Item::class, 'criterion_id', 'id');
  }
}
