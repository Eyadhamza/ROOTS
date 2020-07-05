
<section class="cta-one-area relative section-gap text-gray-900">
          <div class="flex flex-wrap  flex justify-center">
               <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
                  <div class="title text-center">
                <h1 class="mb-10">our latest achievements.. </h1>
                <p>Those are our heroes  !</p>
                   </div>
               </div>
          </div>
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap ">
                    <div class="active-popular-carusel">
                        @foreach($achievements as $achievement)
                            <div class="single-popular-carusel m-6">
                                <div class="thumb-wrap relative">
                                    <h4>
                                        {{$achievement->title}}
                                    </h4>
                                    <div class="thumb relative">

                                        <div class="overlay overlay-bg"></div>
                                        <img class="max-w-full h-auto" src="{{($achievement->image)}}" alt="">
                                    </div>
                                    <div class="meta flex justify-between">

                                    </div>
                                </div>
                                <div class="details p-6">
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

