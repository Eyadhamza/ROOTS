
<section class="">
          <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                <h1 class="mb-10">our latest achievements.. </h1>
                <p>Those are our heroes  !</p>
                   </div>
               </div>
          </div>
        <div class="container">
            <div class="row">
                    <div class="active-popular-carusel">
                        @foreach($achievements as $achievement)
                            <div class="single-popular-carusel m-3">
                                <div class="thumb-wrap relative">
                                    <h4>
                                        {{$achievement->title}}
                                    </h4>
                                    <div class="thumb relative">

                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{($achievement->image)}}" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">

                                    </div>
                                </div>
                                <div class="details p-4">
                                    <a href="#">

                                    </a>
                                    <p style="width:200px; height: fit-content;  word-break: break-all;">
                                        {{$achievement->description}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

        </div>


</section>

