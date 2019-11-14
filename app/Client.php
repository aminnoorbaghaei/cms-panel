<?php

namespace App;

use App\Http\General\GeneralMethod;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Client extends Model implements HasMedia
{
  use HasMediaTrait,GeneralMethod;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang_id','nick_name','full_name','last_name','first_name', 'email', 'password','likeCount','viewCount','commentCount','status','age','mobile','phone','api_token','avatar','resume','rank','addressCompany','addressHome'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
