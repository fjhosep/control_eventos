<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CategoryType extends Model
{

  static $rules = [
    'code' => 'required',
    'name' => 'required',
  ];

  protected $perPage = 20;

  protected $fillable = [
    'code',
    'name'
  ];

  public function categories()
  {
    return $this->hasMany('category_type_id', 'id');
  }
}
