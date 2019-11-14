<?php

namespace App;

use App\Http\General\GeneralMethod;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use GeneralMethod;
    protected $fillable=["name","code","icon","position"];
}
