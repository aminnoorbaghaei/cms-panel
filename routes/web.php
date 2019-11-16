<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//----------------- front ----------------------


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;



$this->get('/t',function (){


    return $user= \App\Client::create([
        "first_name"=>"الهام",
        "last_name"=>"محبی",
        "full_name"=>"الهام محبی",
        "email"=>"mohebi.e2017@gmail.com",
        "password"=>bcrypt("123456"),
        "status"=>1,
        "lang_id"=>1,
        "api_token"=>Str::random(20)
    ]);


});



//        Route::get('/client',"ClientController@index")->name('client.dashboard');
       








//----------------- front ----------------------

Route::group(['namespace'=>'front',"prefix"=>'{lang?}',"middleware"=>["localization:web"]],function (){


    $this->get('/', "panelController@index")->name("front.website");
    $this->get(config('app.PageUrl').'/{slug}', "panelController@page");
    $this->get('about', "panelController@about")->name("front.website.about");
    $this->get('contact', "panelController@contact")->name("front.website.contact");
    $this->get('portfolio', "panelController@portfolio")->name("front.website.portfolio");
    $this->get('Articles', "panelController@articles")->name("front.website.articles");
    $this->get('Products', "panelController@products")->name("front.website.products");
    $this->get('news', "panelController@news")->name("front.website.news");
    $this->get('Article/{id}',"panelController@singleArticle")->name('front.single.article');
    $this->get('new/{id}',"panelController@singleNew")->name('front.single.new');
    $this->get('Product/{id}',"panelController@singleProduct")->name('front.single.product');
    $this->get('register-user',"UserController@registerPage")->name('register-user-account');

});


//------------------panel client ---------------------



Route::group(['namespace'=>'Auth',"prefix"=>'{lang?}/client',"middleware"=>["localization:web"]],function () {


    $this->get('/login','ClientLoginController@showLoginForm')->name('client.login');

    


});
Route::group(["middleware"=>["auth:client"]],function () {


    $this->get('/client/panel',"ClientController@index")->name('client.dashboard');
    $this->get('/client/panel/profile',"ClientController@profile")->name('client.profile');




});


Route::post('/client/login','Auth\ClientLoginController@login')->name('client.login.submit');
Route::get('/client/logout','Auth\ClientLoginController@logout')->name('client.logout');



//------------------panel admin ---------------------

Route::group(["namespace"=>"admin","middleware"=>["auth:web"],"prefix"=>"admin"] , function (){
    $this->get('users/exportExcel/{data}','UserController@exportExcel')->name('export.user.Excel');
    $this->get('users/exportCsv/{data}','UserController@exportCsv')->name('export.user.Csv');
    $this->get('articles/exportExcel/{data}','ArticleController@exportExcel')->name('export.article.Excel');
    $this->get('articles/exportCsv/{data}','ArticleController@exportCsv')->name('export.article.Csv');
    $this->get('panel', 'PanelController@index')->name("panel.website");
    $this->resource("articles","ArticleController");
    $this->resource("menus","MenuController");
    $this->resource("carousells","CarousellController");
    $this->resource("doctors","DoctorController");
    $this->resource("pages","PageController");
    $this->get("addons","AddonController@show")->name("show.addon.list");
    $this->get("options/show","OptionController@show")->name('options.show');
    $this->resource("cats","CatController");
    $this->get("menu/list","MenuController@load");
    $this->get("health/list/{lang}","HealthController@loadHealth");
    $this->get("role/list/{lang}","UserController@loadRole");
    $this->get("permission/list/{lang}","UserController@loadPermission");
    $this->get("specialty/list/{lang}","SpecialtyController@loadSpecialty");
    $this->get("cat/article/list/{lang}","CatController@loadCatArticle");
    $this->get("cat/product/list/{lang}","CatController@loadCatProduct");
    $this->get("cat/information/list/{lang}","CatController@loadCatInformation");
    $this->get("cat/portfolio/list/{lang}","CatController@loadCatPortfolio");
    $this->get("cat/service/list/{lang}","CatController@loadCatService");
    $this->get("cat/job/list/{lang}","CatController@loadCatJob");
    $this->get("cat/active/list/product/{id}","CatController@ActiveCatProduct");
    $this->get("cat/active/list/article/{id}","CatController@ActiveCatArticle");
    $this->get("cat/active/list/information/{id}","CatController@ActiveCatInformation");
    $this->get("cat/active/list/service/{id}","CatController@ActiveCatService");
    $this->get("cat/active/list/Portfolio/{id}","CatController@ActiveCatPortfolio");
    $this->get("cat/active/list/job/{id}","CatController@ActiveCatJob");
    $this->get("position/list/{lang}","PositionController@ListPosition");
    $this->get("menu/list/{lang}","MenuController@loadMenu");
    $this->get("category/list/{lang}","CategoryController@load");
    $this->resource("templates","TemplateController");
    $this->resource("users","UserController");
    $this->resource("products","ProductController");
    $this->resource("customers","CustomerController");
    $this->resource("portfolios","PortfolioController");
    $this->resource("musics","MusicController");
    $this->resource("informations","InformationController");
    $this->resource("categories","CategoryController");
    $this->resource("registerwebs","RegisterWebController");
    $this->resource("jobs","JobController");
    $this->resource("languages","LanguageController");
    $this->resource("services","ServiceController");
    $this->resource("partners","PartnerController");
    $this->resource("questions","QuestionController");
    $this->get("website","WebsiteController@show")->name('website.information.show');
    $this->get("website/update","WebsiteController@update")->name('website.information.update');
    $this->post("insert/role","UserController@insertRole")->name("insert.role");
    $this->post("insert/cat/article","CatController@insertArticle")->name("cat.insert.article");
    $this->post("insert/cat/product","CatController@insertProduct")->name("cat.insert.product");
    $this->post("insert/cat/information","CatController@insertInformation")->name("cat.insert.information");
    $this->post("insert/cat/portfolio","CatController@insertPortfolio")->name("cat.insert.portfolio");
    $this->post("insert/cat/service","CatController@insertService")->name("cat.insert.service");
    $this->post("insert/cat/job","CatController@insertJob")->name("cat.insert.job");
    $this->post("insert/position","PositionController@insertPosition")->name("position.insert");
    $this->post("insert/specialty","SpecialtyController@insertSpecialtyDoctor")->name("specialty.doctor.insert");
    $this->post("insert/health","HealthController@insertHealth")->name("health.insert");
    $this->get("article/filterCount/{count}","ArticleController@changCount")->name("article.change.count");
    $this->get("article/getDefault","ArticleController@getDefault")->name("article.get.default");
    $this->get("information/filterCount/{count}","InformationController@changCount")->name("information.change.count");
    $this->get("information/getDefault","InformationController@getDefault")->name("infromation.get.default");
    $this->get("product/filterCount/{count}","ProductController@changCount")->name("product.change.count");
    $this->get("product/getDefault","ProductController@getDefault")->name("product.get.default");
    $this->get("jon/filterCount/{count}","JobController@changCount")->name("job.change.count");
    $this->get("job/getDefault","JobController@getDefault")->name("job.get.default");
    $this->get("service/filterCount/{count}","ServiceController@changCount")->name("service.change.count");
    $this->get("service/getDefault","ServiceController@getDefault")->name("service.get.default");
    $this->get("portfolio/filterCount/{count}","PortfolioController@changCount")->name("portfolio.change.count");
    $this->get("portfolio/getDefault","PortfolioController@getDefault")->name("portfolio.get.default");
    $this->get("partner/filterCount/{count}","PartnerController@changCount")->name("partner.change.count");
    $this->get("partner/getDefault","PartnerController@getDefault")->name("partner.get.default");
    $this->get("carousell/filterCount/{count}","CarousellController@changCount")->name("carousell.change.count");
    $this->get("carousell/getDefault","CarousellController@getDefault")->name("carousell.get.default");
    $this->get("page/filterCount/{count}","PageController@changCount")->name("page.change.count");
    $this->get("page/getDefault","PageController@getDefault")->name("page.get.default");
    $this->get("menu/filterCount/{count}","MenuController@changCount")->name("menu.change.count");
    $this->get("menu/getDefault","MenuController@getDefault")->name("menu.get.default");
    $this->get("customer/filterCount/{count}","CustomerController@changCount")->name("customer.change.count");
    $this->get("customer/getDefault","CustomerController@getDefault")->name("customer.get.default");
    $this->get("language/filterCount/{count}","LanguageController@changCount")->name("language.change.count");
    $this->get("language/getDefault","LanguageController@getDefault")->name("language.get.default");
    $this->get("question/filterCount/{count}","QuestionController@changCount")->name("question.change.count");
    $this->get("question/getDefault","QuestionController@getDefault")->name("question.get.default");
    $this->get("user/filterCount/{count}","UserController@changCount")->name("user.change.count");
    $this->get("user/getDefault","UserController@getDefault")->name("user.get.default");
    $this->get("doctor/filterCount/{count}","DoctorController@changCount")->name("doctor.change.count");
    $this->get("doctor/getDefault","DoctorController@getDefault")->name("doctor.get.default");
    $this->get("health/filterCount/{count}","HealthController@changCount")->name("health.change.count");
    $this->get("health/getDefault","HealthController@getDefault")->name("health.get.default");
    $this->get("addon/filterCount/{count}","AddonController@changCount")->name("addon.change.count");
    $this->get("addon/getDefault","AddonController@getDefault")->name("addon.get.default");


//------------------ Factor ---------------------


    $this->get("product/factor","ProductController@ShowFactor")->name('product.factor.show');




});

Route::group(["namespace"=>"admin","middleware"=>["auth:web"],"prefix"=>"admin/user"] , function (){

    $this->get('/contact', 'UserController@contact')->name("panel.website.contact");
    $this->get('/profile', 'UserController@profile')->name("panel.website.profile");
    $this->get('/personal', 'UserController@personal')->name("panel.website.personal");

});





Route::group(["namespace"=>"Auth","prefix"=>'{lang?}',"middleware"=>["localization:web"]],function (){

    $this->get('login', 'LoginController@showLoginForm')->name('login');


    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');



});

Route::group(["namespace"=>"Auth"],function (){


    $this->post('login', 'LoginController@login');
    $this->post('logout', 'LoginController@adminLogout')->name('logout');


    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');


});


































