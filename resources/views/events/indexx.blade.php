
<x-app>

@include('_header')
    @include('_banner')
<!-- Start popular-course Area -->
    <section class="popular-course-area section-gap ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Events .. </h1>
                        <p>it's all about the first move !</p>
                    </div>
                </div>
            </div>
            @foreach($events as $event1)


                <div class="row justify-content-center">

                    <div class="justify-content-center">
                        <a href="#">
                            <h4 class="text-dark">
                                Event Name :      {{$event1->name}}
                            </h4>

                        </a>
                        <div class="thumb-wrap relative justify-content-center">
                            <div class="thumb relative justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{$event1->image}}" alt="">
                            </div>

                        </div>
                        <div class=" ">

                            <div class="details justify-content-center">
                                Event Details :
                                <p style="width: 400px">
                                    {{$event1->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </section>
    <!-- End popular-course Area -->
    @include('_search-tracks')
    @include('_instructors')


</x-app>
