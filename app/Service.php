<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Service extends Model implements HasMedia
{
    use Sluggable,HasMediaTrait,GeneralMethod;
    protected $fillable=["lang_id","title","slug","user_id","description","order","slug","status","viewCount","likeCount","commentCount","icon"];
    public function path()
    {
        return "/service/$this->slug";
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
