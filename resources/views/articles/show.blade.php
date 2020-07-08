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
                                <a href="#" class="m-2 font-bold font-mono ">{{@$article->user->name}}</a> <span class="lnr lnr-user"></span>
                                @foreach($article->user->committees as $committee)
                                    <a href="#" class="py-2 px-4 bg-blue-900 text-white rounded-lg">

                                        {{$committee->name}}
                                    </a> <span class="lnr lnr-eye"></span>
                                @endforeach
                            </div>
                        </div>
                        <div class="lg:w-3/4 pr-4 pl-4 md:w-3/4 pr-4 pl-4 ">
                            <div class="feature-img">
                                <img class="max-w-full h-auto" src="../../../{{$article->image}}" alt="">
                            </div>

                            <a class="posts-title" href="blog-single.html"><h3>{{$article->title}}</h3></a>
                            <p class="excert">
                                {{$article->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 pr-4 pl-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                        @livewire('search-article')
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <div class="lg:flex">
                                <img src="{{@$article->user->avatar}}"  style="width:70px; height: 70px;border-radius: 100% "  alt="">
                                <p class="p-2 ml-3 overflow-hidden h-24">
                                    {{@$article->user->bio}}
                                </p>
                            </div>
                            <a href="#"><h4> {{@$article->user->name}}</h4></a>

                            <p>
                                @foreach(@$article->user->roles as $role)
                                    {{$role->name}}

                                @endforeach

                                of @foreach(@$article->user->committees as $committee)
                                <p class="view lg:w-full pr-4 pl-4 md:w-full pr-4 pl-4 w-1/2"><a href="#">
                                        {{@$committee->name}}
                                    </a> <span class="lnr lnr-eye"></span></p>
                                </p>
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

                                    <div class="details">
                                        <a href="/article/{{$article->id}}"><h6>{{$article->name}}</a>
                                        <p>{{$article->created_at}}</p>
                                    </div>
                                </div>

                                </div>

                            </div>
                        </div>

                </div>

            </div>



              @livewire('comment',['article'=>$article])
{{--    end comment--}}
        </div>

</section>
<!-- End post-content Area -->
</x-app>
