<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatModel extends Model
{

    protected $table='Categories';

    protected $fillable = [
        'id', 'name',
    ];

}
