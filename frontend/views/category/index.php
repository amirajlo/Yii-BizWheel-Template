<?php

use common\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="blog-layout blog-latest section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('img/blog/blog-1.jpg')"></span>
                                <a href="#" class="bizwheel-btn theme-2">ادامه مطلب</a>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="blog-single.html">ما بهترین خدمات مشاوره و خلاقیت را به شما ارائه می دهیم</a></h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>شهریور 1399</li>
                                        <li class="view"><i class="fa fa-comments"></i>89</li>
                                        <li class="heart"><i class="fa fa-heart"></i>20</li>
                                    </ul>
                                    <div class="news-text"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد  </p></div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                    <div class="col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('img/blog/blog-2.jpg')"></span>
                                <a href="#" class="bizwheel-btn theme-2">ادامه مطلب</a>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="blog-single.html">با این مقالات عالی کسب و کار آنلاین خود را رشد دهید</a></h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>شهریور 1399</li>
                                        <li class="view"><i class="fa fa-comments"></i>89</li>
                                        <li class="heart"><i class="fa fa-heart"></i>20</li>
                                    </ul>
                                    <div class="news-text"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد  </p></div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                    <div class="col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('img/blog/blog-3.jpg')"></span>
                                <a href="#" class="bizwheel-btn theme-2">ادامه مطلب</a>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="blog-single.html">با این مقالات عالی کسب و کار آنلاین خود را رشد دهید</a></h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>شهریور 1399</li>
                                        <li class="view"><i class="fa fa-comments"></i>89</li>
                                        <li class="heart"><i class="fa fa-heart"></i>20</li>
                                    </ul>
                                    <div class="news-text"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد  </p></div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                    <div class="col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('img/blog/blog-4.jpg')"></span>
                                <a href="#" class="bizwheel-btn theme-2">ادامه مطلب</a>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="blog-single.html">با این مقالات عالی کسب و کار آنلاین خود را رشد دهید</a></h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>شهریور 1399</li>
                                        <li class="view"><i class="fa fa-comments"></i>89</li>
                                        <li class="heart"><i class="fa fa-heart"></i>20</li>
                                    </ul>
                                    <div class="news-text"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد  </p></div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                    <div class="col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('img/blog/blog-5.jpg')"></span>
                                <a href="#" class="bizwheel-btn theme-2">ادامه مطلب</a>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="blog-single.html">با این مقالات عالی کسب و کار آنلاین خود را رشد دهید</a></h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>شهریور 1399</li>
                                        <li class="view"><i class="fa fa-comments"></i>89</li>
                                        <li class="heart"><i class="fa fa-heart"></i>20</li>
                                    </ul>
                                    <div class="news-text"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد  </p></div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                    <div class="col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('img/blog/blog-6.jpg')"></span>
                                <a href="#" class="bizwheel-btn theme-2">ادامه مطلب</a>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="blog-single.html">با این مقالات عالی کسب و کار آنلاین خود را رشد دهید</a></h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>شهریور 1399</li>
                                        <li class="view"><i class="fa fa-comments"></i>89</li>
                                        <li class="heart"><i class="fa fa-heart"></i>20</li>
                                    </ul>
                                    <div class="news-text"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد  </p></div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <div class="pagination-plugin">
                            <ul class="pagination-list">
                                <li class="prev"><a href="#">قبلی</a></li>
                                <li class="page-numbers"><a href="#">1</a></li>
                                <li class="page-numbers current"><a href="#">2</a></li>
                                <li class="page-numbers"><a href="#">3</a></li>
                                <li class="next"><a href="#">بعدی</a></li>
                            </ul>
                        </div>
                        <!--/ End Pagination -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Blog Sidebar -->
                <div class="blog-sidebar">
                    <!-- Single Sidebar -->
                    <div class="single-sidebar blog_search">
                        <form class="searchform" action="#">
                            <input type="text" placeholder="هر چیزی را جستجو کنید .." value="" name="s" id="s">
                            <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/ End Single Sidebar -->
                    <!-- News Sidebar -->
                    <div class="single-sidebar bizwheel_latest_news_widget">
                        <h2 class="sidebar-title">پست های محبوب</h2>
                        <!-- Single News -->
                        <div class="single-f-news">
                            <div class="post-thumb"><a href="#"><img src="img/blog/blog-3.jpg" alt="#"></a></div>
                            <div class="content">
                                <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>15 شهریور 1399</time></p>
                                <h4 class="title"><a href="blog-sngle.html">ما بهترین خدمات مشاوره و خلاقیت را به شما ارائه می دهیم</a></h4>
                            </div>
                        </div>
                        <!--/ End Single News -->
                        <!-- Single News -->
                        <div class="single-f-news">
                            <div class="post-thumb"><a href="#"><img src="img/blog/blog-4.jpg" alt="#"></a></div>
                            <div class="content">
                                <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>15 شهریور 1399</time></p>
                                <h4 class="title"><a href="blog-sngle.html">با این مقالات عالی کسب و کار آنلاین خود را رشد دهید</a></h4>
                            </div>
                        </div>
                        <!--/ End Single News -->
                        <!-- Single News -->
                        <div class="single-f-news">
                            <div class="post-thumb"><a href="#"><img src="img/blog/blog-5.jpg" alt="#"></a></div>
                            <div class="content">
                                <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>15 شهریور 1399</time></p>
                                <h4 class="title"><a href="blog-sngle.html">ما بهترین خدمات مشاوره و خلاقیت را به شما ارائه می دهیم</a></h4>
                            </div>
                        </div>
                        <!--/ End Single News -->
                        <!-- Single News -->
                        <div class="single-f-news">
                            <div class="post-thumb"><a href="#"><img src="img/blog/blog-6.jpg" alt="#"></a></div>
                            <div class="content">
                                <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>15 شهریور 1399</time></p>
                                <h4 class="title"><a href="blog-sngle.html">ما بهترین خدمات مشاوره و خلاقیت را به شما ارائه می دهیم</a></h4>
                            </div>
                        </div>
                        <!--/ End Single News -->
                    </div>
                    <!--/ End Single Sidebar -->
                    <!-- News Tags -->
                    <div class="single-sidebar tagcloud">
                        <h2 class="sidebar-title">برچسب ها</h2>
                        <ul>
                            <li><a href="#">آموزش</a></li>
                            <li><a href="#">setinco</a></li>
                            <li><a href="#">آموزش</a></li>
                            <li><a href="#">طراحی</a></li>
                            <li><a href="#">نمونه کارها</a></li>
                            <li><a href="#">طراحی</a></li>
                        </ul>
                    </div>
                    <!--/ End News Tags -->
                    <!-- News Tags -->
                    <div class="single-sidebar subscribe-form">
                        <h2 class="sidebar-title">اشتراک</h2>
                        <form action="#" method="post">
                            <input type="email" placeholder="آدرس ایمیل شما">
                            <button type="submit" value="send">اشتراک</button>
                        </form>
                    </div>
                    <!--/ End News Tags -->
                </div>
                <!--/ End Blog Sidebar -->
            </div>
        </div>
    </div>
</section>

		