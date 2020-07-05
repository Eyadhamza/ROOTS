
<x-app>

@include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
<!-- Start popular-course Area -->
    <section class="popular-course-area section-gap ">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap  flex justify-center">
                <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Events .. </h1>
                        <p>it's all about the first move !</p>
                    </div>
                </div>
            </div>
            @foreach($events as $event1)


                <div class="flex flex-wrap  justify-center">

                    <div class="justify-center">
                        <a href="#">
                            <h4 class="text-gray-900">
                                Event Name :      {{$event1->name}}
                            </h4>

                        </a>
                        <div class="thumb-wrap relative justify-center">
                            <div class="thumb relative justify-center">
                                <div class="overlay overlay-bg"></div>
                                <img class="max-w-full h-auto" src="{{$event1->image}}" alt="">
                            </div>

                        </div>
                        <div class=" ">

                            <div class="details justify-center">
                                Event Details :
                                <p style="width: 400px">
                                    {{$event1->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @if($event1->embedVideo)
                    <div class="single-popular-carusel" >
                        <div class="fb-video" data-href="{{$event1->embedVideo}}" data-width="1000" data-show-text="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="{{$event1->embedVideo}}">
                                    <a href="{{$event1->embedVideo}}">How to Share With Just Friends</a>
                                    <p>How to share with just friends.</p>
                                    Posted by <a href="https://www.facebook.com/rootscommunity1">Roots</a> on April 2020
                                </blockquote>
                            </div>
                        </div>

                    </div>
                @endif
                <hr>
            @endforeach
        </div>
    </section>
    <!-- End popular-course Area -->
    @include('_MainWebsitePartials._instructors')


</x-app>
