<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Partner extends Model implements HasMedia
{
    use Sluggable,GeneralMethod,HasMediaTrait;
    protected $fillable=["lang_id","position_id","title","body","order","slug","user_id","status"];
    public function path()
    {
        return "/partner/$this->slug";
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
