<x-profile :user="$user">
    <div class="section-counter paralax-mf bg-image" style="background-image: url(../../../assets2/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">{{$user->tasks_performance}}</p>
                            <span class="counter-text">Tasks COMPLETED</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section achievements /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            My Achievements
                        </h3>
                        <p class="subtitle-a">
                            everything has a price
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    @foreach($user->achievements as $achievement)
                        <div class="work-box">

                            <a href="/achievements/{{$achievement->id}}" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="../../storage/images/roo.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">

                                        <div class="col-sm-8">

                                            <h2 class="w-title">  {{$achievement->name}}</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">  {{$achievement->description}}</span>
                                                <span class="w-date">{{$achievement->updated_at}}</span>
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

</x-profile>
