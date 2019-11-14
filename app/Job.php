<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Job extends Model implements HasMedia
{
    use Sluggable,HasMediaTrait,GeneralMethod;
    protected $fillable=["lang_id","title","slug","body","number","user_id","description","keyword","status","email","address","mobile","phone","order"];
    public function path()
    {
        return "/job/$this->slug";
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
