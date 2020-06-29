<div class="row d-flex justify-content-center">
    <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
            <h1 class="mb-10">latest Articles from our Blog.. </h1>
            <p>learn while you are here  !</p>
        </div>
    </div>
</div>
<!-- Start review Area -->
<section class="">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="active-review-carusel" >
                @foreach($articles as $article)
                <div class="single-review item">


                    <div class="title justify-content-start d-flex">
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
                        <img class="img-fluid" src="{{($article->image)}}" alt="" style="width: 200px;height: 200px">
                    </div>
                @endforeach
            </div>
       </div>
    </div>
</section>
<!-- End review Area -->
