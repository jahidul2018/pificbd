@extends('layouts.app')
@section('content')	
<!-- Breadcrumb -->
<div class="breadcrumbs bread-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="index.html">PIFIC</a></li>
                            <li><a href="blog-single-left.html">News</a></li>
                            <li><a href="#">News Articles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / End Breadcrumb -->

<!-- Blog Single -->
<section class="news-area archive blog-single section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-single-main">
                            <div class="main-image">
                                <img src="https://via.placeholder.com/950x470" alt="#">
                            </div>
                            <div class="blog-detail">
                                <!-- News meta -->
                                <ul class="news-meta">
                                    <li><i class="fa fa-user"></i>Bizwheel</li>
                                    <li><i class="fa fa-pencil"></i>April 15, 2020</li>
                                    <li><i class="fa fa-comments"></i>0 comments</li>
                                </ul>
                                <h2 class="blog-title">Grow your Online Business With Awesome Articles</h2>
                                <p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris non scelerisque venenatis. Sed non rutrum sem. Duis eget lectus vitae orci pellentesque viverra a non magna. Aenean maximus, nisl non porttitor feugiat, felis odio pretium elit, nec lobortis ante augue non enim. Aliquam tempor dui vel libero suscipit laoreet. Aenean varius, lorem vitae vulputate efficitur, tortor tellus tristique diam, a vulputate est quam feugiat ex. Sed posuere nisi nibh, a tristique enim euismod</p>
                                <div class="row blog-space">
                                    <div class="col-lg-6">
                                        <img src="https://via.placeholder.com/455x515" alt="#">
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>What we’re doing right now!</h5>
                                        <p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris non scelerisque venenatis. Sed non rutrum sem.lobortis ante augue non enim aliqua</p>
                                        <h5>Our some of future project</h5>
                                        <ul>
                                            <li>We’re creative thinker</li>
                                            <li>We give you free consulting service</li>
                                            <li>Included top level domain every package</li>
                                            <li>Great way to represent your business</li>
                                            <li>99% Server Up-time guarantee</li>
                                            <li>24/7 Lifetime service</li>
                                            <li>We give you free consulting service</li>
                                            <li>Included top level domain every package</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris non scelerisque venenatis. Sed non rutrum sem. Duis eget lectus vitae orci pellentesque viverra a non magna. Aenean maximus, nisl non porttitor feugiat, felis odio pretium elit, nec lobortis ante augue non enim. Aliquam tempor dui vel libero suscipit laoreet. Aenean varius, lorem vitae vulputate efficitur, tortor tellus tristique diam, a vulputate est quam feugiat ex. Sed posuere nisi nibh, a tristique enim euismod</p>
                                <!-- Blockquote -->
                                <blockquote class="wp-block-quote">
                                    <p> Aenean maximus, nisl non porttitor feugiat, felis odio pretium elit, nec lobortis ante augue non enim. Aliquam tempor dui vel libero suscipit laoreet. Aenean varius, lorem vitae vulputate efficitu  tortor tellus tristique diam, a vulputate est quam feugiat ex. Sed posuere nisi nibh, a tristique enim euismod quis </p>
                                    <cite>– Stoman Spark</cite>
                                </blockquote>
                                <p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris non scelerisque venenatis. Sed non rutrum sem. Duis eget lectus vitae orci pellentesque viverra a non magna. Aenean maximus, nisl non porttitor feugiat, felis odio pretium elit, nec lobortis ante augue non enim. Aliquam tempor dui vel libero suscipit laoreet. Aenean varius, lorem vitae vulputate efficitur, tortor tellus tristique diam, a vulputate est quam feugiat ex. Sed posuere nisi nibh, a tristique enim euismod</p>
                                <!-- Post Nav -->
                                <div class="posts_nav">
                                    <div class="post-left"><a href="asdf">Previous Post</a></div>
                                    <div class="post-right"><a href="asdf">Next Post</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-comments-form">
                            <div class="bottom-title">
                                <h2>Leave a comment</h2>
                                <p>All fields marked with an asterisk (*) are required </p>
                            </div>
                            <!-- Comment Form -->
                            <form class="form" method="post" action="mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Your Name<span>*</span></label>
                                            <input type="text" name="name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Your Email<span>*</span></label>
                                            <input type="email" name="email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label>Your Website<span>*</span></label>
                                            <input type="url" name="website" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Comment<span>*</span></label>
                                            <textarea name="message" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">	
                                            <button type="submit" class="bizwheel-btn primary effect">Submit Comment<i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Comment Form -->
                        </div>
                    </div>							
                </div>							
            </div>		
        </div>
    </div>
</section>	
<!--/ End Services -->    
@endsection