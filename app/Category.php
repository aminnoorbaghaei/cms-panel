<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['user_id','cat_id','model_number','model_type','status','target','viewCount','likeCount','icon','commentCount'];
}
