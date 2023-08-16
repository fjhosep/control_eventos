<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{

  static $rules = [
    'name' => 'required',
    'assigned_score' => 'required',
    'criterion_id' => 'required',
  ];

  protected $perPage = 20;


  protected $fillable = [
    'name',
    'type',
    'assigned_score',
    'criterion_id'
  ];


  public function criterion()
  {
    return $this->hasOne('App\Models\Criterion', 'id', 'criterion_id');
  }
}
