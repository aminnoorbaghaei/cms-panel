<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Doctor extends Model implements HasMedia
{

    protected $fillable = [
        'lang_id','user_id','health_id','specialty_id','nick_name','full_name','slug','last_name','first_name', 'email', 'password','likeCount','viewCount','commentCount','status','age','mobile','phone','resume','rank','addressCompany','addressHome'
    ];
    use Sluggable,HasMediaTrait,GeneralMethod;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }
    public static function FullName($firstName,$lastName){

        return $firstName . " " .$lastName;

    }
}
