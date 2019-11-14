<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Page extends Model implements HasMedia
{

    use Sluggable,HasMediaTrait,GeneralMethod;

    protected $fillable=['title','body','user_id','lang_id','order','status',"keyword","description"];


    public function path()
    {
        return "/page/$this->slug";
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
    public function addons()
    {
        return $this->belongsToMany(Addon::class);
    }

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {

    }
}
