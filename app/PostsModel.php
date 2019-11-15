<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    protected $table="Posts";

    protected $fillable = [
        'id', 'title', 'description', 'picture', 'catid'
    ];

    
}
