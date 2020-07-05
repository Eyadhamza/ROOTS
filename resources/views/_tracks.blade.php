
<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Tracks in our community</h1>
                    <p>learn more.. take a step .</p>
                </div>
            </div>
        </div>
        @foreach($track as $track1)
        <div class="row">
            <div class="active-popular-carusel">

                <div class="single-popular-carusel">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative"  style="width: 300px; height: 300px">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/storage/{{($track1->image)}}" alt="">
                        </div>

                    </div>
                    <div class="details">
                        <a href="#">
                            <h4>
                                {{$track1->name}}
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
