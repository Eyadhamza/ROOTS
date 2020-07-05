<x-app>
@include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
<!-- Start post-content Area -->

    <!------ Include the above in your HEAD tag ---------->


<section class="post-content-area">
    @foreach($articles as $article)
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="lg:w-2/3 pr-4 pl-4 posts-list">
                <div class="single-post flex flex-wrap ">
                    <div class="lg:w-1/4 pr-4 pl-4  md:w-1/4 pr-4 pl-4 meta-details">

                        <div class="user-details flex flex-wrap ">
                            <p class="user-name lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">{{@$article->user->name}}</a> <span class="lnr lnr-user"></span></p>
                            <p class="date lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">{{$article->created_at}}</a> <span class="lnr lnr-calendar-full"></span></p>
                            @foreach(@$article->user->committees as $committee)
                            <p class="view lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 w-3/4 text-white">

                                        {{@$committee->name}}
                                </a> <span class="lnr lnr-eye"></span></p>
                            @endforeach
                        </div>
                    </div>
                    <div class="lg:w-3/4 pr-4 pl-4 md:w-3/4 pr-4 pl-4 ">
                        <div class="feature-img">
                            <img class="max-w-full h-auto" src="{{$article->image}}" alt="">
                        </div>

                        <a class="posts-title" href="article/{{$article->id}}"><h3>{{$article->title}}</h3></a>
                        <p class="excert">
                            {{$article->description}}
                        </p>
                        <a href="/article/{{$article->id}}" class="primary-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 pr-4 pl-4 sidebar-widgets">
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
                            <p class="view lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">
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
                            <div class="single-post-list flex flex-row items-center">
                                <div class="thumb">
                                    <img class="max-w-full h-auto" src="" alt="">
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
