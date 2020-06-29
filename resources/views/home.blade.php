<x-app>

    @include('_header')
    @include('_banner')
    @include('_featured')


    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Popular Tracks in our community</h1>
                        <p>learn more.. take a step closer.</p>
                    </div>
                </div>
            </div>


            <div class="row">


                <div class="active-popular-carusel">
                    @foreach($tracks as $track1)
                    <div class="single-popular-carusel">

                        <div class="thumb-wrap relative">
                            <div class="thumb relative w-50 h-50">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid  " src="{{$track1->image}}" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">

                            </div>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4 class="p-4">
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
    @include('_events')
    @include('_achievements')
    @include('_articles')
    @guest
    @include('_instructors')
    @endguest
</x-app>
