<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Information extends Model implements HasMedia
{
    use Sluggable,HasMediaTrait,GeneralMethod;

    protected $table="informations";

    protected $fillable=["lang_id","title","slug","user_id","body","status","order","target","keyword","description"];
    public function path()
    {
        return "/information/$this->slug";
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
