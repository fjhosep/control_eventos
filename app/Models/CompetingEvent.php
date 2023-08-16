<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CompetingEvent extends Model
{

  static $rules = [
    'event_id' => 'required',
    'competition_id' => 'required',
  ];

  protected $perPage = 20;


  protected $fillable = [
    'event_id',
    'competition_id'
  ];
}
