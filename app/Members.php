<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
  protected $fillable = [
    'membershipNo',
    'name',
    'nric/passport',
    'category',
    'address',
    'postcode',
    'state',
    'mobile',
    'email',
    'dateJoined',
  ];
}
