    @include('_MainProfilePartials._profile-info',['title'=>'My Member Profile'])


<div class="section-counter paralax-mf bg-image" style="background-image: url(../../../assets2/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap ">
                <div class="sm:w-1/4 pr-4 pl-4 lg:w-1/4 pr-4 pl-4">
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
        <div class="container mx-auto sm:px-4">
            <div class="flex flex-wrap ">
                <div class="sm:w-full pr-4 pl-4">
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
                    @foreach($user->achievements as $achievement)
                        <div class=" rounded overflow-hidden shadow-lg block mx-auto m-4 w-1/2">

                            <a href="/achievements/{{$achievement->id}}" class=" h-75">
                                <img class="h-30 w-50" src="../../{{$achievement->image}}" alt="Achievement">
                            </a>
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 block">{{$achievement->title}}</div>
                                <p class="text-gray-700 text-base">
                                    {{$achievement->description}}
                                </p>
                                {{$achievement->updated_at}}
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#passion</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#persevere</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#achievement</span>
                            </div>
                        </div>

                    @endforeach
        </div>
    </section>

