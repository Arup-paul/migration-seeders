<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
       'user_id','categories_id','title','content','thumbnail_path','status'
    ];
}
