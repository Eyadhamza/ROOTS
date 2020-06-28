<x-app>
@include('_header')
    @include('_banner')
<!-- Start post-content Area -->

    <!------ Include the above in your HEAD tag ---------->


<section class="post-content-area">
    @foreach($achievements as $achievement)
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">

                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{@$achievement->user->name}}</a> <span class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$achievement->created_at}}</a> <span class="lnr lnr-calendar-full"></span></p>
                            @foreach($achievement->user->committees as $committee)
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#" class="btn btn-dark w-75 text-white">

                                        {{$committee->name}}
                                </a> <span class="lnr lnr-eye"></span></p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{$achievement->image}}" alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html"><h3>{{$achievement->title}}</h3></a>
                        <p class="excert">
                            {{$achievement->description}}
                        </p>
                        <a href="/achievement/{{$achievement->id}}" class="primary-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget search-widget">
                        <form class="search-form" action="#">
                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-sidebar-widget user-info-widget">
                        <img src="{{$achievement->user->avatar}}" style="width:70px; height: 70px;border-radius: 100% " alt="">
                        <a href="#"><h4> {{$achievement->user->name}}</h4></a>
                        <p>
                            {{$achievement->user->role}} of @foreach($achievement->user->committees as $committee)
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">
                                    {{$committee->name}}
                                </a> <span class="lnr lnr-eye"></span></p>
                            @endforeach
                        </p>
                        <ul class="social-links">
                            <li><a href="  {{$achievement->user->facebook_id}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$achievement->user->google_id}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <p>
                            {{$achievement->user->bio}}
                        </p>
                    </div>
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="popular-title">Popular Posts</h4>
                        <div class="popular-post-list">
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Asteroids telescope</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    @endforeach

</section>
<!-- End post-content Area -->
</x-app>
