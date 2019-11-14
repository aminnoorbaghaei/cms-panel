

@extends("template.company.app")


@section("content")

    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="/public/template/company/img/heroslider-image-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>اخبار</h2>
                        <ul>
                            <li><a href="{{route("front.website")}}">صفحه اصلی</a></li>
                            <li>وبلاگ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Main Content -->
    <main class="main-content">



        <!-- Main Content -->
        <main class="main-content">

            <!-- Blog Area -->
            <div class="tm-section blogs-area bg-whtie tm-padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-1 order-lg-2">
                            <div class="blogitem">
                                <div class="blogitem-image">
                                    <a href="new.blade.php">
                                        <img src="{{ url("public".$new->getFirstMediaUrl('images'))}}" alt="blog image">
                                    </a>
                                    <span class="blogitem-date">شنبه، 12 مهر 1397</span>
                                </div>
                                <div class="blogitem-content">
                                    <div class="blogitem-contentheader">
                                        <div class="blogitem-meta">
                                            <span><i class="far fa-user"></i>توسط : <a href="blog.html">ADMIN</a></span>
                                            <span><i class="far fa-comments"></i><a href="blog-details.html">نظرات
                                                        (3)</a></span>
                                        </div>
                                        <div class="blogitem-share">
                                            <button class="blogitem-share-trigger">
                                                <i class="fas fa-share-alt"></i>
                                            </button>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="blog-details.html">{{$new->title}}</a></h5>
                               <p>
                                   {{$new->body}}
                               </p>
                                    <blockquote>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه .</p>
                                        <footer>توسط <a href="blog.html">رضا</a></footer>
                                    </blockquote>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                        جامعه و متخصصان را می طلبد</p>
                                </div>
                                <div class="blogitem-tags">
                                    <span class="blogitem-tags-title">
                                        <i class="fas fa-tags"></i>
                                    </span>
                                    <ul>
                                        <li><a href="blog.html">برنامه</a></li>
                                        <li><a href="blog.html">طراحی</a></li>
                                        <li><a href="blog.html">توسعه</a></li>
                                        <li><a href="blog.html">صفحه</a></li>
                                    </ul>
                                </div>

                                <div class="blogitem-pagination tm-pagination">
                                    <ul>
                                        <li>
                                            <a href="blog-details.html">مطلب قبلی</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">مطلب بعدی</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Blogitem Comments -->
                                <div class="blogitem-comments mt-50">
                                    <h5 class="small-title">نظرات (2)</h5>

                                    <div class="tm-comment-wrapper">

                                        <!-- Comment Single -->
                                        <div class="tm-comment">
                                            <div class="tm-comment-thumb">
                                                <img src="assets/images/blog/authors/author-image-1.png" alt="author image">
                                            </div>
                                            <div class="tm-comment-content">
                                                <h6 class="tm-comment-authorname"><a href="#">رضا جوادی</a></h6>
                                                <span class="tm-comment-date">شنبه، 12 مهر 1397 ، در ساعت 4 بعد ظهر</span>
                                                <a href="#" class="tm-comment-replybutton"><i class="fas fa-reply-all"></i>
                                                    پاسخ</a>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            </div>
                                        </div>
                                        <!--// Comment Single -->

                                        <!-- Comment Single -->
                                        <div class="tm-comment tm-comment-replypost">
                                            <div class="tm-comment-thumb">
                                                <img src="assets/images/blog/authors/author-image-2.png" alt="author image">
                                            </div>
                                            <div class="tm-comment-content">
                                                <h6 class="tm-comment-authorname"><a href="#">رضا جوادی</a></h6>
                                                <span class="tm-comment-date">شنبه، 12 مهر 1397 ، در ساعت 4 بعد ظهر</span>
                                                <a href="#" class="tm-comment-replybutton"><i class="fas fa-reply-all"></i>
                                                    پاسخ</a>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            </div>
                                        </div>
                                        <!--// Comment Single -->

                                        <!-- Comment Single -->
                                        <div class="tm-comment">
                                            <div class="tm-comment-thumb">
                                                <img src="assets/images/blog/authors/author-image-3.png" alt="author image">
                                            </div>
                                            <div class="tm-comment-content">
                                                <h6 class="tm-comment-authorname"><a href="#">رضا جوادی</a></h6>
                                                <span class="tm-comment-date">شنبه، 12 مهر 1397 ، در ساعت 8 بعد ظهر</span>
                                                <a href="#" class="tm-comment-replybutton"><i class="fas fa-reply-all"></i>
                                                    پاسخ</a>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                            </div>
                                        </div>
                                        <!--// Comment Single -->

                                    </div>

                                </div>
                                <!--// Blogitem Comments -->

                                <!-- Blogitem Commentbox -->
                                <div class="blogitem-commentbox mt-50">
                                    <h5 class="small-title">ارسال نظر</h5>
                                    <form action="#" class="tm-commentbox">
                                        <div class="tm-commentbox-singlefield">
                                            <p>آدرس ایمیل شما منتشر نخواهد شد .</p>
                                        </div>
                                        <div class="tm-commentbox-singlefield w-33">
                                            <label for="tm-comment-namefield">نام*</label>
                                            <input type="text" id="tm-comment-namefield">
                                        </div>
                                        <div class="tm-commentbox-singlefield w-33">
                                            <label for="tm-comment-email">ایمیل*</label>
                                            <input type="email" id="tm-comment-email">
                                        </div>
                                        <div class="tm-commentbox-singlefield w-33">
                                            <label for="tm-comment-website">سایت</label>
                                            <input type="text" id="tm-comment-website">
                                        </div>
                                        <div class="tm-commentbox-singlefield">
                                            <label for="tm-comment-textbox">متن نظر</label>
                                            <textarea name="tm-comment-textbox" id="tm-comment-textbox" cols="30" rows="7"></textarea>
                                        </div>
                                        <div class="tm-commentbox-singlefield">
                                            <button type="submit" class="tm-button">ارسال نظر <b></b></button>
                                        </div>
                                    </form>
                                </div>
                                <!--// Blogitem Commentbox -->

                            </div>
                        </div>

                        <div class="col-lg-4 order-2 order-lg-1">
                            <div class="widgets sidebar-widgets2 sticky-sidebar">

                                <!-- Single Widget -->
                                <div class="single-widget widget-search">
                                    <h5 class="widget-title">جستجو</h5>
                                    <form action="#" class="widget-search-form">
                                        <input type="text" placeholder="جستجو در سایت ...">
                                        <button type="submit"><i class="flaticon-magnifier"></i></button>
                                    </form>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-categories">
                                    <h5 class="widget-title">دسته بندی :</h5>
                                    <ul>
                                        <li><a href="blog.html">اخبار</a></li>
                                        <li><a href="blog.html">رشد شرکت</a></li>
                                        <li><a href="blog.html">استراتژی کسب و کار</a></li>
                                        <li><a href="blog.html">درآمد</a></li>
                                        <li><a href="blog.html">ایده خلاق</a></li>
                                        <li><a href="blog.html">فروش</a></li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-recentpost">
                                    <h5 class="widget-title">مطالب اخیر </h5>
                                    <ul>
                                        <li>
                                            <a href="blog-details.html" class="widget-recentpost-image">
                                                <img src="assets/images/blog/widget/blog-thumbnail-1.png"
                                                     alt="blog thumbnail">
                                            </a>
                                            <div class="widget-recentpost-content">
                                                <h6><a href="blog-details.html">عنوان مطلب</a></h6>
                                                <span>شنبه، 15 مهر 1397</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="blog-details.html" class="widget-recentpost-image">
                                                <img src="assets/images/blog/widget/blog-thumbnail-2.png"
                                                     alt="blog thumbnail">
                                            </a>
                                            <div class="widget-recentpost-content">
                                                <h6><a href="blog-details.html">عنوان مطلب</a></h6>
                                                <span>شنبه، 15 مهر 1397</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="blog-details.html" class="widget-recentpost-image">
                                                <img src="assets/images/blog/widget/blog-thumbnail-3.png"
                                                     alt="blog thumbnail">
                                            </a>
                                            <div class="widget-recentpost-content">
                                                <h6><a href="blog-details.html">عنوان مطلب</a></h6>
                                                <span>شنبه، 15 مهر 1397</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-archives">
                                    <h5 class="widget-title">بایگانی</h5>
                                    <ul>
                                        <li><a href="blog.html">فرورین 1398</a></li>
                                        <li><a href="blog.html">اردیبهشت 1398</a></li>
                                        <li><a href="blog.html">خرداد 1398</a></li>
                                        <li><a href="blog.html">تیر 1398</a></li>
                                        <li><a href="blog.html">مرداد 1398</a></li>
                                        <li><a href="blog.html">شهریور 1398</a></li>
                                        <li><a href="blog.html">دی 1398</a></li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                                <!-- Single Widget -->
                                <div class="single-widget widget-tags">
                                    <h5 class="widget-title">برچسب ها</h5>
                                    <ul>
                                        <li><a href="blog.html">شرکت</a></li>
                                        <li><a href="blog.html">ایده</a></li>
                                        <li><a href="blog.html">خدمات</a></li>
                                        <li><a href="blog.html">مشارکت</a></li>
                                        <li><a href="blog.html">انحصاری</a></li>
                                        <li><a href="blog.html">مشاوره</a></li>
                                        <li><a href="blog.html">ایده</a></li>
                                        <li><a href="blog.html">خلاق</a></li>
                                        <li><a href="blog.html">سرمایه</a></li>
                                        <li><a href="blog.html">شغل</a></li>
                                        <li><a href="blog.html">ایده</a></li>
                                    </ul>
                                </div>
                                <!--// Single Widget -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Blog Area -->

        </main>
        <!--// Main Content -->


    </main>
    <!--// Main Content -->

@endsection


