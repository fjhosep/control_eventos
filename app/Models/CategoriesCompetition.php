<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//
class CategoriesCompetition extends Model
{

    static $rules = [
        'category_id' => 'required',
        'competition_id' => 'required',
    ];

    protected $perPage = 20;

    //
    protected $fillable = [
        'category_id',
        'competition_id'
    ];

    //
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    //
    public function competition()
    {
        return $this->hasOne('App\Models\Competition', 'id', 'competition_id');
    }
}
