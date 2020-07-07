<section class="popular-course-area section-gap">
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap  flex justify-center">
            <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                <div class="title text-center">
                    <h1 class="mb-10 text-3xl lg:text-6xl font-bold">Popular Tracks in our community</h1>
                    <p class="text-xl font-bold font-mono">learn more.. take a step closer.</p>
                </div>
            </div>
        </div>


        <div class="flex flex-wrap ">


            <div class="active-popular-carusel">
                @foreach($tracks as $track1)
                    <div class="single-popular-carusel">

                        <div class="thumb-wrap relative">
                            <div class="thumb relative w-1/2 h-50">
                                <div class="overlay overlay-bg"></div>
                                <img class="max-w-full h-auto  " src="{{$track1->image}}" alt="">
                            </div>
                            <div class="meta flex justify-between">

                            </div>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4 class="p-6">
                                    {{$track1->name}}
                                </h4>
                            </a>
                            <p style="width:200px; height: fit-content;  word-break: break-all;">
                                {{$track1->description}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>


</section>
