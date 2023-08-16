<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $code
 * @property $name
 * @property $level
 * @property $style
 * @property $gender
 * @property $participants
 * @property $cost
 * @property $category_type_id
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoriesCompetition[] $categoriesCompetitions
 * @property CategoryType $categoryType
 * @property InShoppingCart[] $inShoppingCarts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
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
        'level',
        'style',
        'gender',
        'participants',
        'cost',
        'category_type_id'
    ];


    // ---------------------------- Relaciones ---------------------------



    public function categoriesCompetitions()
    {
        return $this->hasMany('App\Models\CategoriesCompetition', 'category_id', 'id');
    }


    public function categoryType()
    {
        return $this->hasOne('App\Models\CategoryType', 'id', 'category_type_id');
    }

    public function participant()
    {
        return $this->belongsToMany(Participant::class, 'competing_participants', 'user', 'category_id');
    }


    public function inShoppingCarts()
    {
        return $this->hasMany('App\Models\InShoppingCart', 'category_id', 'id');
    }
}
