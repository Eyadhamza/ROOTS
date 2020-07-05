
<x-app>

@include('_MainWebsitePartials._header')
<!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap  flex justify-center">
                <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                    <div class="title text-center">
                        <h1 class="mb-10">Popular Tracks in our community</h1>
                        <p>learn more.. take a step .</p>
                    </div>
                </div>
            </div>
            @foreach($tracks as $track1)

                <div class="flex flex-wrap ">

                    <div class="active-popular-carusel">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="max-w-full h-auto" src="{{$track1->image}}" alt="">
                            </div>
                            <div class="meta flex justify-between">
                                <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                <h4>$150</h4>
                            </div>
                        </div>
                        <div class="single-popular-carusel">

                            <div class="details">
                                <a href="#">
                                    <h4>
                                        {{$track1->name}}
                                    </h4>
                                    <h4>
                                        Under supervision of:
                                        {{$track1->instructors}}
                                    </h4>
                                </a>
                                <p>
                                    {{$track1->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End popular-course Area -->
    @include('_MainWebsitePartials._search-tracks')
    @include('_MainWebsitePartials._instructors')


</x-app>
