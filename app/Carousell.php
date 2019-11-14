<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Carousell extends Model implements HasMedia
{
    use Sluggable,HasMediaTrait,GeneralMethod;
    
    protected $fillable=["lang_id","title","order","user_id","status","description","target","textBtn","linkBtn"];
    public function path()
    {
        return "/carousell/$this->slug";
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
