<?php

namespace App;

use App\Http\General\GeneralMethod;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Question extends Model implements HasMedia
{
    use HasMediaTrait,GeneralMethod;

    protected $fillable=["lang_id","ask","status","order","answer","user_id","lang_id"];




}
