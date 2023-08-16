<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Academy extends Model
{

  static $rules = [
    'name' => 'required',
    'director' => 'required',
    'address' => 'required',
    'city' => 'required',
    'province' => 'required',
    'country' => 'required',
    'phone_number' => 'required',
    'mobile_phone' => 'required',
    'email' => 'required',
  ];

  protected $perPage = 20;


  protected $fillable = [
    'name',
    'director',
    'address',
    'city',
    'province',
    'country',
    'phone_number',
    'mobile_phone',
    'email'
  ];
}
