<x-app>
@include('_header')
    @include('_banner')
<!-- Start post-content Area -->

    <!------ Include the above in your HEAD tag ---------->


<section class="post-content-area">
    @foreach($articles as $article)
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">

                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{@$article->user->name}}</a> <span class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$article->created_at}}</a> <span class="lnr lnr-calendar-full"></span></p>
                            @foreach(@$article->user->committees as $committee)
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#" class="btn btn-dark w-75 text-white">

                                        {{@$committee->name}}
                                </a> <span class="lnr lnr-eye"></span></p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{$article->image}}" alt="">
                        </div>

                        <a class="posts-title" href="article/{{$article->id}}"><h3>{{$article->title}}</h3></a>
                        <p class="excert">
                            {{$article->description}}
                        </p>
                        <a href="/article/{{$article->id}}" class="primary-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget search-widget">

                    </div>
                    <div class="single-sidebar-widget user-info-widget">
                        <img src="{{@$article->user->avatar}}"  style="width:70px; height: 70px;border-radius: 100% "  alt="">
                        <a href="#"><h4 style="color: #1b1e21"> {{@$article->user->name}}</h4></a>

                        <p>
                            @foreach(@$article->user->roles as $role)
                                {{$role->name}} Member,

                            @endforeach

                            of @foreach(@$article->user->committees as $committee)
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">
                                    {{@$committee->name}}
                                </a> <span class="lnr lnr-eye"></span></p>
                            @endforeach
                        <ul class="social-links">
                            <li><a href="  {{@$article->user->facebook_id}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{@$article->user->google_id}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <p>
                            {{@$article->user->bio}}
                        </p>
                    </div>
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="popular-title">Popular Posts</h4>
                        <div class="popular-post-list">
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="" alt="">
                                </div>



                                <ul>
                                    <li>
                                        @foreach(@$article->user->articles as $article)
                                        <a href="/article/{{@$article->id}}"><h6>{{@$article->title}}</h6></a>
                                        <p>{{@$article->created_at}}</p>
                                        @endforeach
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>
        </div>
    </div>
    @endforeach

</section>
<!-- End post-content Area -->
</x-app>
