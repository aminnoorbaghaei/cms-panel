<?php

namespace App\Providers\front;

use App\Article;
use App\Cat;
use App\Customer;
use App\Information;
use App\Language;
use App\Menu;
use App\Option;
use App\Portfolio;
use App\Product;
use App\Question;
use App\Service;
use App\Setting;
use App\Slider;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

      if(hasTable_cms('languages'))
      {
          config()->set('list_lang', Language::latest()->get()->pluck('code')->toArray());
      }
       
        view()->composer('*' , function($view) {
            $current_user = auth()->user();
            $all_menu=Menu::whereStatus(1)->orderby('order','ASC')->get();
            $setting=Setting::first();
            $countUser=User::latest()->count();
            $countPortfolio=Portfolio::latest()->count();
            $countCustomer=Customer::latest()->count();
            $countArticle=Article::latest()->count();
            $lastArticles=Article::latest()->get();
            $sliders=Slider::latest()->get();
            $customers=Customer::latest()->get();
            $services=Service::latest()->get();
            $questions=Question::latest()->get();
            $news=Information::latest()->get();
            $populars=Product::latest()->get();
            $lastProducts=Product::latest()->get();
            $languages=Language::latest()->get();
            $options=Option::latest()->get();
            $cats=Cat::latest()->get();
            



            $view->with([
                'current_user' => $current_user,
                'setting'=>$setting,
                'all_menu'=>$all_menu,
                'countUser'=>$countUser,
                'countPortfolio'=>$countPortfolio,
                'countCustomer'=>$countCustomer,
                'countArticle'=>$countArticle,
                'lastArticles' => $lastArticles,
                'sliders'=>$sliders,
                'customers'=>$customers,
                'services'=>$services,
                'questions'=>$questions,
                'news'=>$news,
                'populars'=>$populars,
                'lastProducts'=>$lastProducts,
                'languages'=>$languages,
                'cats'=>$cats,
                'options'=>$options


            ]);
        });


        view()->composer('footer' , function($view) {
            $lastArticles=Article::latest()->get();



            $view->with([
                'lastArticles' => $lastArticles,




            ]);
        });


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
