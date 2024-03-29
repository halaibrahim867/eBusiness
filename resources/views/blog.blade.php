<!DOCTYPE html>
<html lang="en">

<body>


<!-- ======= Header ======= -->
@extends('layouts.components')
@section('content')


<!-- End Header -->

<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2">
                                <h1 class="title2">My Blog</h1>
                            </div>
                            <div class="layer3">
                                <h2 class="title3">Profesional Blog Page</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                            <!-- search option start -->
                            <form action="{{route('blog.search')}}" method="GET">
                                <div class="search-option">
                                    <input type="text" name="query" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="single-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>categories</h4>
                                <ul>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('blog.index',$category->name)}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>archive</h4>
                                <ul>
                                    <li>
                                        <a href="#">07 July 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">29 June 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">13 May 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">20 March 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">09 Fabruary 2016</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-blog-page">
                            <div class="left-tags blog-tags">
                                <div class="popular-tag left-side-tags left-blog">
                                    <h4>popular tags</h4>
                                    <ul>
                                        @foreach($tags as $tag)
                                        <li>
                                            <a href="{{route('blog.index',$tag->name)}}">{{$tag->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="{{route("blogdetails",['article_id'=>$article->id])}}">
                                            <img src="{{ asset($article->photo)}}" alt="Image of article"/>
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                    <span class="comments-type">
                                      <i class="bi bi-chat">{{$commentCount}}</i>
                                        <p>Comments</p>
                                    </span>
                                        <span class="date-type">
                                       <i class="bi bi-calendar"></i>
                                        {{$article->created_at->format('Y-m-d / H:i:s')}}
                                    </span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a href="{{route("blogdetails",['article_id'=>$article->id])}}">{{$article->title}}</a>
                                        </h4>
                                        <p>
                                            {{$article->partial}}
                                        </p>
                                    </div>
                                    <span>
                                    <a href="{{route("blogdetails",['article_id'=>$article->id])}}" class="ready-btn">Read more</a>
                                </span>
                                </div>
                            </div>
                        @endforeach
                        {{$articles->links()}}
                        <!-- End single blog -->

                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@endsection
<!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

<script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{URL::asset('assets/js/main.js')}}"></script>
</body>


</html>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
