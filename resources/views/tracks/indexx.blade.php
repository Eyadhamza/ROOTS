<x-app>

@include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="flex flex-wrap  flex justify-center">
                <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                    <div class="title text-center">
                        <h1 class="mb-10 text-6xl font-mono font-bold">Popular Tracks in our community</h1>
                        <p class="font-mono font-bold">learn more.. take a step .</p>
                    </div>
                </div>
            </div>
            @foreach($tracks as $track1)


                    <div class="active-popular-carusel w-full">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="w-1/3 h-64" src="{{$track1->image}}" alt="">
                            </div>

                        </div>
                        <div class="single-popular-carusel ml-10 w-full">

                            <div class="details">
                                <a href="#">
                                    <h4 class="text-3xl">
                                        {{$track1->name}}
                                    </h4>

                                </a>
                                <p class="">
                                    {{$track1->description}}
                                </p>
                            </div>
                        </div>
                        @if($track1->embedVideo)
                        <div class="single-popular-carusel ml-10  " style="width: 500px">
                            <div class="fb-video" data-href="{{$track1->embedVideo}}" data-width="1000" data-show-text="false">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="{{$track1->embedVideo}}">
                                        <a href="{{$track1->embedVideo}}">How to Share With Just Friends</a>
                                        <p>How to share with just friends.</p>
                                        Posted by <a href="https://www.facebook.com/rootscommunity1">Roots</a> on April 2020
                                    </blockquote>
                                </div>
                            </div>

                        </div>
                            @endif
                    </div>

                @endforeach
            {{$tracks->links()}}
        </div>
    </section>
    <!-- End popular-course Area -->

</x-app>
