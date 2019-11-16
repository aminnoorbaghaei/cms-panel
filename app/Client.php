<?php

namespace App;

use App\Http\General\GeneralMethod;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Client extends Authenticatable implements HasMedia
{
  use Notifiable,HasMediaTrait,GeneralMethod;
  
  protected $guard='client';
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
        'remember_token','password'
    ];
}
