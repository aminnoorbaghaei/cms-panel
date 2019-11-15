<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable =["model_type","model_number","likeCount","viewCount","commentCount"];
}
