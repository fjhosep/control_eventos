<?php

namespace App\Models;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

  static $rules = [
    'cardId' => 'required',
    'name' => 'required',
    'lastName' => 'required',
    'birthName' => 'required',
    'city' => 'required',
    'province' => 'required',
    'country' => 'required',
    'phone_number' => 'required',
    // 'mobile_phone' => 'required',
    'email' => 'required',
    'user' => 'required',
    'id_academy' => 'required',
  ];

  protected $perPage = 20;

  protected $fillable = [
    'cardId',
    'name',
    'lastName',
    'birthName',
    'city',
    'province',
    'country',
    'phone_number',
    'mobile_phone',
    'email',
    'user',
    'id_academy'
  ];

  public function academy()
  {
    return $this->hasOne('App\Models\Academy', 'id', 'id_academy');
  }

  // public function categories()
  // {
  //   //return $this->belongsToMany(Category::class);
  //   return $this->belongsToMany('App\Models\Category', 'category_id')->withTimestamps();
  //   // return $this->belongsToMany('App\Models\Category', 'categories_competitions')->withTimestamps();
  // }

  public function categories()
  {
    return $this->belongsToMany(Category::class, 'competing_participants', 'user', 'category_id');
  }

  public function competing_participants()
  {
    return $this->hasMany('App\Models\CompetingParticipant', 'user');
  }
}
