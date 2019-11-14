<?php

namespace App\Http\Controllers\front;

use App\Article;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Information;
use App\Menu;
use App\Page;
use App\Product;
use App\Question;
use App\Service;
use App\Slider;
use Illuminate\Support\Facades\Request;
use SEOMeta;

class panelController extends Controller
{

    protected $template_name = 'company';


    function index()
    {

        SEOMeta::setTitle("خدمات صنعتی");
        SEOMeta::setKeywords("خدمات صنعتی");
        SEOMeta::setDescription("توضیحات سایت");

       

        return view('template.'.($this->template_name).'.index',compact('populars','lastProducts','news','customers','sliders','services','questions'));
    }
    function page($lang,$slug)
    {

       
        $page=Page::whereSlug($slug)->first();
        
       if($page){
           
           SEOMeta::setTitle("خدمات صنعتی");
           SEOMeta::setKeywords("خدمات صنعتی");
           SEOMeta::setDescription("توضیحات سایت");



           return view('template.'.($this->template_name).'.page',compact('populars','lastProducts','news','customers','sliders','services','questions','page'));
       }
    }
    function contact()
    {

        SEOMeta::setTitle("تماس با ما ");
        SEOMeta::setKeywords("تماس با ما");
        SEOMeta::setDescription("تماس با ما");


        return view('template.'.($this->template_name).'.contact',compact("menus"));
    }
    function about()
    {
        SEOMeta::setTitle("درباره ما ");
        SEOMeta::setKeywords("درباره ما");
        SEOMeta::setDescription("درباره ما");

        return view('template.'.($this->template_name).'.about');
    }
    function portfolio()
    {

        SEOMeta::setTitle("نمونه کار ها ");
        SEOMeta::setKeywords("نمونه کار ها");
        SEOMeta::setDescription("نمونه کار ها");

        return view('template.'.($this->template_name).'.portfolio');
    }
    function articles()
    {

        SEOMeta::setTitle("مقالات ");
        SEOMeta::setKeywords("مقالات");
        SEOMeta::setDescription("مقالات");

        $articles=Article::whereLang_id(find_item('code',get_segment(1),'\App\Language'))->whereStatus(1)->get();

        return view('template.'.($this->template_name).'.articles',compact("articles"));

    }
    function singleArticle( $article)
    {

        SEOMeta::setTitle($article->title);
        SEOMeta::setKeywords($article->keyword);
        SEOMeta::setDescription($article->description);

        $article= Article::find($article);


        return view('template.'.($this->template_name).'.article',compact("article"));

    }
    function singleNew( $new)
    {

        SEOMeta::setTitle($new->title);
        SEOMeta::setKeywords($new->keyword);
        SEOMeta::setDescription($new->description);

        $new= Information::find($new);


        return view('template.'.($this->template_name).'.new',compact("new"));
    }
    function news()
    {

        SEOMeta::setTitle("اخبار ");
        SEOMeta::setKeywords("اخبار");
        SEOMeta::setDescription("اخبار");

        $news=Information::whereLang_id(find_item('code',get_segment(1),'\App\Language'))->whereStatus(1);

        return view('template.'.($this->template_name).'.news',compact("news"));
    }
    function singleProduct( $product)
    {

        SEOMeta::setTitle($product->title);
        SEOMeta::setKeywords($product->keyword);
        SEOMeta::setDescription($product->description);

        $product= Product::find($product);
        $populars=Product::latest()->get();
        $products=Product::latest()->get();


        return view('template.'.($this->template_name).'.product',compact("product","products","populars"));
    }
    function products()
    {

        SEOMeta::setTitle("محصولات ");
        SEOMeta::setKeywords("محصولات");
        SEOMeta::setDescription("محصولات");

        $products=Product::whereLang_id(find_item('code',get_segment(1),'\App\Language'))->whereStatus(1);


        return view('template.'.($this->template_name).'.products',compact("products"));
    }









}
