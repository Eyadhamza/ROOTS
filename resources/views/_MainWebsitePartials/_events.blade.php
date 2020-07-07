
<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap  flex justify-center">
            <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                <div class="title text-center">
                  
                    <h1 class="mb-10 text-3xl lg:text-6xl font-bold">Our Events</h1>
                    <p class="text-xl font-bold font-mono">it's all about the first move !</p>
                </div>
            </div>
        </div>

            <div class="flex flex-wrap ">

                <div class="active-popular-carusel">
                    @foreach($events as $event1)
                    <div class="single-popular-carusel m-6">
                        @if($event1->image)
                        <div class="thumb-wrap relative">
                            <div class="thumb relative" style="width: 300px; height: 300px">
                                <div class="overlay overlay-bg"></div>
                                <img class="max-w-full h-auto" src="{{($event1->image)}}" alt="" >
                            </div>
                            <div class="meta flex justify-between">

                            </div>
                        </div>
                        @endif
                        <div class="details p-6">
                            <a href="/events">
                                <h4>
                                    {{$event1->name}}
                                </h4>
                            </a>
                            <p style="width:200px; height: fit-content;  word-break: break-all;">
                                {{$event1->description}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

    </div>
</section>
<!-- End popular-course Area -->
