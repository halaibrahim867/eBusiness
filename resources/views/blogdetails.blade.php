<!DOCTYPE html>
<html lang="en">

<body>


@extends('layouts.components')

@section('content')

<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2">
                                <h1 class="title2">Blog Details </h1>
                            </div>
                            <div class="layer3">
                                <h2 class="title3">profesional Blog Page</h2>
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
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Search...">
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
                                                <img src="assets/img/blog/1.jpg" alt="">
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
                                    <li>
                                        <a href="#">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#">Project</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>
                                    </li>
                                    <li>
                                        <a href="#">wordpress</a>
                                    </li>
                                    <li>
                                        <a href="#">Joomla</a>
                                    </li>
                                    <li>
                                        <a href="#">Html</a>
                                    </li>
                                    <li>
                                        <a href="#">Website</a>
                                    </li>
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
                                            <a href="#">{{$tag->name}}</a>
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- single-blog start -->

                            <article class="blog-post-wrapper">
                                <div class="post-thumbnail">
                                    <img src="{{ asset($article->photo)}}" alt=""/>

                                </div>
                                <div class="post-information">
                                    <h2>{{$article->title}}</h2>
                                    <div class="entry-meta">
                                        <span class="author-meta"><i class="bi bi-person"></i> <a
                                                href="#">admin</a></span>
                                        <span><i class="bi bi-clock"></i> {{$article->created_at}}</span>
                                        <span class="tag-meta">
                                            <i class="bi bi-folder"></i>
                                            <a href="#">painting</a>,
                                            <a href="#">work</a>
                                        </span>
                                        <span>
                                             <i class="bi bi-tags"></i>
                                            <a href="#">tools</a>,
                                            <a href="#"> Humer</a>,
                                            <a href="#">House</a>
                                        </span>
                                        <span><i class="bi bi-chat"></i> <a href="#"> {{$commentCount}} <p>comments</p></a></span>
                                    </div>
                                    <div class="entry-content">
                                        <p> {{$article->partial}}</p>

                                        <p>{{$article->content }}</p>
                                    </div>
                                </div>
                            </article>
                            <div class="clear"></div>
                            <div class="single-post-comments">
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>{{$commentCount}}</h3>
                                    </div>
                                    @if(session('success'))
                                        <div class="success-message">
                                            {{session('success')}}
                                        </div>
                                    @endif
                                        <div class="comments-list">
                                            <ul>
                                                @foreach($comments as $comment)
                                                    <li class="threaded-comments">
                                                        <div class="comments-details">
                                                            <div class="comments-list-img">
                                                                <img
                                                                    src="{{$comment->user ? $comment->user->photo : '' }}"
                                                                    alt="post-author">
                                                            </div>
                                                            <div class="comments-content-wrap">
                                                      <span>
                                                        <b><a href="#">demo</a></b>
                                                        {{$comment ->user ? $comment->user->name : ''}}
                                                        <span class="post-time">{{$comment->created_at}}</span>
                                                        <a href="#">Reply</a>
                                                      </span>
                                                                <p>{{$comment->content}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply </h3>
                                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                    @auth
                                        <form action="{{route('comment.store',['article_id'=>$article->id])}}"
                                              method="post">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="article_id" value="{{$article->id}}">
                                                <div class="col-lg-4 col-md-4">
                                                    <p>Name *</p>
                                                    <input type="text" name="name"/>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <p>Email *</p>
                                                    <input type="email" name="email"/>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                    <p>Write Your Comment</p>
                                                    <textarea id="message-box" cols="30" rows="10"
                                                              name="content"></textarea>
                                                </div>
                                                <input type="submit" value="Post Comment">

                                            </div>
                                        </form>
                                    @else
                                        <p>Please <a href="{{route('login')}}">Login</a> Or <a
                                                href="{{route('register')}}"> Sign up</a> to make a comment.</p>
                                    @endauth
                                </div>
                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->

</main>


@endsection

</body>


</html>
