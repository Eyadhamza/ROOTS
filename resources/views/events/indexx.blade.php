
<x-app>

@include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
<!-- Start popular-course Area -->
    <section class="popular-course-area section-gap ">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap  flex justify-center">
                <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                    <div class="title text-center">
                        <h1 class="mb-10 text-6xl" >Our Events .. </h1>
                        <p class="font-mono text-xl">it's all about the first move !</p>
                    </div>
                </div>
            </div>
            @foreach($events as $event1)

                <section class="bg-white border-b py-8">
                    <div class="container max-w-5xl mx-auto m-8">
                        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">{{$event1->name}}</h1>
                        <div class="w-full mb-4">
                            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-5/6 sm:w-1/2 p-6">
                                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                    Event Details :
                                </h3>
                                <p class="text-gray-600 mb-8">{{$event1->description}}<br /><br />
                                    @if($event1->embedVideo)
                                        <div class="single-popular-carusel" >
                                            <div class="fb-video" data-href="{{$event1->embedVideo}}" data-width="1000" data-show-text="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="{{$event1->embedVideo}}"><a href="{{$event1->embedVideo}}">How to Share With Just Friends</a>
                                <p>How to share with just friends.</p>
                                Posted by <a href="https://www.facebook.com/rootscommunity1">Roots</a> on April 2020
                                </blockquote>
                            </div>
                        </div>

                    </div>
                @endif
        </div>
        <div class="w-full sm:w-1/2 p-6">
            <img class="max-w-full h-auto" src="{{$event1->image}}" alt="">

        </div>
    </section>

            @endforeach
        {{$events->links()}}

    <!-- End popular-course Area -->
</x-app>
