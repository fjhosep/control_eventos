<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Competition
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $created_at
 * @property $updated_at
 *
 * @property Category[] $categories
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Competition extends Model
{

  static $rules = [
    'name' => 'required',
    'code' => 'required',
  ];

  protected $perPage = 20;

  protected $fillable = [
    'name',
    'code'
  ];


  // -------------------------   Relaciones --------------------
  public function categories()
  {
    return $this->belongsToMany('App\Models\Category', 'categories_competitions')->withTimestamps();
  }

  public function events()
  {
    return $this->belongsToMany('App\Models\Event', 'competing_events')->withTimestamps();
  }

  // public function CetagoriesCompetition()
  // {
  //   return $this->HasMany('App\Models\CategoriesCompetition');
  // }

  public function competing_events()
  {
    return $this->hasOne('App\Models\CompetingEvent',  'competition_id', 'id');
  }
}
