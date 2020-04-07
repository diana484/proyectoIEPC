<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Towns extends Model
{
    //
    protected $table = 'towns';

    protected $fillable = ['name','state_id'];

}
