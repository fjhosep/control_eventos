<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

  static $rules = [
    'name' => 'required',
    'place' => 'required',
    'address' => 'required',
    'country' => 'required',
    'province' => 'required',
    'city' => 'required',
    'organizer' => 'required',
    'dateStart' => 'required',
    'dateEnd' => 'required',
  ];

  protected $perPage = 20;


  protected $fillable = [
    'name',
    'place',
    'address',
    'country',
    'province',
    'city',
    'organizer',
    'dateStart',
    'dateEnd'
  ];

  // ----------------------------------- RELACIONES -------------------------------
  public function competitions()
  {
    return $this->belongsToMany('App\Models\Competition', 'competing_events')->withTimestamps();
  }
}
