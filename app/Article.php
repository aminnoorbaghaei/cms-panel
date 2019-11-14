<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Article extends Model implements HasMedia
{
    use Sluggable,HasMediaTrait,GeneralMethod;
    
    protected $fillable=["lang_id","title","order","slug","user_id","body","status","keyword","description","target"];
    
    public function path()
    {
        return "/article/$this->slug";
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
    static public function ReportExcel(){

        return [
            'title',
        ];
    }
   


}
