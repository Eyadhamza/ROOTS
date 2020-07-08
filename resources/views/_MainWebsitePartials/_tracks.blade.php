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
                            <div class="thumb relative w-full h-48">
                                <img class=" w-full " src="{{$track1->image}}" alt="">
                            </div>
                            <div class="meta flex justify-between">

                            </div>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4 class="p-6 text-2xl">
                                    {{$track1->name}}
                                </h4>
                            </a>
                            <p class="w-3/4 h-64 ">
                                {{$track1->description}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>


</section>
