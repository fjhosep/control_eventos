<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetingParticipant extends Model
{

  static $rules = [
    'participant_id' => 'required',
    'user' => 'required',
    'category_id' => 'required',
  ];

  protected $perPage = 20;

  protected $fillable = [
    'participant_id',
    'user',
    'category_id'
  ];

  public function categoriesSize()
  {
    return $this->categories->count();
  }

  public function total()
  {
    return $this->categories()->sum('cost');
  }


  //..........................   Relaciones ............................
  public function participants()
  {
    return $this->belongsToMany('App\Models\Participant', 'user');
  }

  //
  // public function categories()
  // {
  //   return $this->hasOne('App\Models\Category', 'id', 'category_id');
  // }
  // public function categories()
  // {
  //   return $this->hasOne('App\Models\Category', 'id', 'category_id');
  // }


}
