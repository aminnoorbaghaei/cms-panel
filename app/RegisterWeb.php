<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class RegisterWeb extends Model
{
    use Sluggable;
    protected $fillable=["lang_id","title","user_id","code",'address',"status"];
    public function path()
    {
        return "/registerweb/$this->slug";
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
