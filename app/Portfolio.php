<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Portfolio extends Model implements HasMedia
{
    use Sluggable,HasMediaTrait,GeneralMethod;
    protected $fillable=["lang_id","title","customer_id","body","condition","order","slug","user_id","description","keyword","status","target","commentCount","viewCount","likeCount"];
    public function path()
    {
        return "/portfolio/$this->slug";
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

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {

    }
}
