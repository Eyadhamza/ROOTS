<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        my Articles
                    </h3>
                    <p class="subtitle-a">
                        somethings i wrote !
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                @foreach($user->articles as $article)
                    <div class="work-box">

                        <a href="/articles/{{$article->id}}" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/../../{{$article->image}}" alt="" class="img-fluid " style="height: 200px;width: 200px;">
                            </div>
                            <div class="work-content">
                                <div class="row">

                                    <div class="col-sm-8">

                                        <h2 class="w-title"> Committee:{{@$article->committee->name}}</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">  {{$article->title}}</span>
                                            <span class="w-date">{{$article->updated_at}}</span>
                                        </div>


                                    </div>

                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
