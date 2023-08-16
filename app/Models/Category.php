<?php

namespace App\Models;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  static $rules = [
    'code' => 'required',
    'name' => 'required',
    'level' => 'required',
    'gender' => 'required',
    'participants' => 'required',
    'cost' => 'required|numeric|regex:/^[\d]{0,10}(\.[\d]{1,2})?$/',
    'category_type_id' => 'required',
  ];

  protected $perPage = 20;


  protected $fillable = [
    'code',
    'name',
    'style',
    'level',
    'gender',
    'participants',
    'cost',
    'category_type_id'
  ];


  // ---------------------------------------- Relaciones --------------------------------
  public function category_type()
  {
    return $this->hasOne('App\Models\CategoryType', 'id', 'category_type_id');
  }

  public function participants()
  {
    return $this->belongsToMany(Participant::class, 'competing_participants', 'user', 'category_id');
  }

  public function categories_competitions()
  {
    return $this->hasOne('App\Models\CategoriesCompetition',  'category_id', 'id');
  }

  public function competing_participants()
  {
    return $this->hasOne('App\Models\CompetingParticipant',  'category_id', 'id');
  }


  public function competitions()
  {
    // return $this->belongsToMany(Competition::class, 'categories_competitions')->withTimestamps();
    // return $this->belongsToMany(Competition::class, 'categories_competitions', 'competition_id', 'categories_id')->withTimestamps();
    return $this->belongsToMany('App\Models\Competition', 'categories_competitions')->withTimestamps();
  }

  // ---------------------------------------  Scope ----------------------------------
  public function scopeName($query, $name)
  {
    if ($name) {
      return $query->where('name', 'Like', "%$name%");
    }
  }
}
