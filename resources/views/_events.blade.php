
<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Our Events.. </h1>
                    <p>it's all about the first move !</p>
                </div>
            </div>
        </div>
        @foreach($events as $event1)
            <div class="row">
                <div class="active-popular-carusel">

                    <div class="single-popular-carusel">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{($event1->image)}}" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">

                            </div>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4>
                                    {{$event1->name}}
                                </h4>
                            </a>
                            <p>
                                {{$event1->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- End popular-course Area -->
