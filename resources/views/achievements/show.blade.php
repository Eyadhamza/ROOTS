<x-app>
@include('_MainWebsitePartials._header')
@include('_MainWebsitePartials._banner')

<!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap ">
                <div class="lg:w-2/3 pr-4 pl-4 posts-list">
                    <div class="single-post flex flex-wrap ">
                        <div class="lg:w-1/4 pr-4 pl-4  md:w-1/4 pr-4 pl-4 meta-details">

                            <div class="user-details flex flex-wrap ">
                                <p class="user-name lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">{{$achievement->user->name}}</a> <span class="lnr lnr-user"></span></p>
                                <p class="date lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">{{$achievement->created_at}}</a> <span class="lnr lnr-calendar-full"></span></p>
                                @foreach($achievement->user->committees as $committee)
                                    <p class="view lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 w-3/4 text-white">

                                            {{$committee->name}}
                                        </a> <span class="lnr lnr-eye"></span></p>
                                @endforeach
                            </div>
                        </div>
                        <div class="lg:w-3/4 pr-4 pl-4 md:w-3/4 pr-4 pl-4 ">
                            <div class="feature-img">
                                <img class="max-w-full h-auto" src="{{$achievement->image}}" alt="">
                            </div>

                            <a class="posts-title" href="blog-single.html"><h3>{{$achievement->title}}</h3></a>
                            <p class="excert">
                                {{$achievement->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 pr-4 pl-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="{{$achievement->user->avatar}}"  style="width:70px; height: 70px;border-radius: 100% "  alt="">
                            <a href="#"><h4> {{@$achievement->user->name}}</h4></a>

                            <p>
                                @foreach(@$achievement->user->roles as $role)
                                    {{$role->name}} Member,

                                @endforeach

                                of @foreach(@$achievement->user->committees as $committee)
                                <p class="view lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">
                                        {{@$committee->name}}
                                    </a> <span class="lnr lnr-eye"></span></p>
                                </p>
                                <ul class="social-links">
                                    <li><a href="  {{@$achievement->user->facebook_id}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{@$achievement->user->google_id}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                                <p>
                                    {{@$achievement->user->bio}}
                                </p>
                        </div>
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Latest Achievements</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list flex flex-row items-center">

                                    <div class="details">
                                        <a href="/achievement/{{$achievement->id}}"><h6>{{$achievement->name}}</a>
                                        <p>{{$achievement->created_at}}</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach



            @livewire('achievement-comment',['achievement'=>$achievement])
        {{--    end comment--}}

    </section>
    <!-- End post-content Area -->
</x-app>
