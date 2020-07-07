<div class="flex flex-wrap  flex justify-center">
    <div class="menu-content pb-70 lg:w-2/3 pr-4 pl-4">
        <div class="title text-center">
            <h1 class="mb-10 text-3xl lg:text-6xl font-bold">latest Articles from our Blog</h1>
            <p class="text-xl font-bold font-mono mx-auto flex justify-center">learn while you are here  !</p>

        </div>
    </div>
</div>
<!-- Start review Area -->
<section class="review-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="active-review-carusel" >
                @foreach($articles as $article)
                <div class="single-review item">


                    <div class="title justify-start flex">
                        <a href="/article/{{$article->id}}"><h4> {{$article->title }}</h4></a>

                    </div>
                    @if(@$article->user->name)
                    <p>Written by :  {{@$article->user->name}}</p>
                    @endif
                    <p style=" ;
                     width: 200px;
                     height: fit-content;
                     word-break: break-all;
                    ">
                        {{$article->description}}
                    </p>
                </div>
                    <div class="thumb relative" style="width: 200px;height: 200px">

                        <div class="overlay overlay-bg"></div>
                        <img class="max-w-full h-auto" src="{{($article->image)}}" alt="" style="width: 200px;height: 200px">
                    </div>
                @endforeach
            </div>
       </div>
    </div>
</section>
<!-- End review Area -->
