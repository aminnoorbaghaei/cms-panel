<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public  function load($lang)
    {

       return Export_category('App\Article',$lang);
    }
}
