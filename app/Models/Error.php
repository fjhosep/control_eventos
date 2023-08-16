<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{

  static $rules = [
    'name' => 'required',
    'assigned_score' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'assigned_score'];
}
