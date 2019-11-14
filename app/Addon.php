<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
}
