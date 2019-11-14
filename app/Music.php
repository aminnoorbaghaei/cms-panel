<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use Sluggable;
    protected $fillable=["lang_id","title","body","order","slug","user_id","description","keyword","imageUrl","status"];
    public function path()
    {
        return "/music/$this->slug";
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
