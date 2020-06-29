<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="box-shadow-full">
                    <div class="p-4 " style="font-size: 50px ">
                        My Member Profile
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="{{$user->avatar}}" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span>{{$user->name}}</span></p>
                                        <p><span class="title-s">Committee: </span> <span>@foreach($user->committees as $committee)
                                                    {{$committee->name}},
                                                @endforeach</span></p>
                                        <p><span class="title-s">Email: </span> <span>{{$user->email}}</span></p>
                                        <p><span class="title-s">Phone: </span> <span>{{$user->number}}</span></p>
                                        @can('edit',$user)
                                        <a href="/profile/{{$user->id}}/edit" class="btn btn-primary a-btn-slide-text w-75">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            <span><strong>Edit</strong></span>
                                        </a>
                                            @endcan
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">

                                    <p class="title-s">Performance</p>
                                    <span>Required Tasks</span> <span class="pull-right">{{$user->tasks_performance}}%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{$user->tasks_performance}}%" aria-valuenow="85" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <span>Knowledge</span> <span class="pull-right">{{$user->knowledge_performance}}%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{$user->knowledge_performance}}%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <span>Interaction</span> <span class="pull-right">{{$user->interaction_performance}}%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{$user->interaction_performance}}%" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                <p class="lead">
                                    {{$user->bio}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                                    <img src="../../{{$achievement->image}}" alt="" class="img-fluid" style="height: 200px;width: 200px;">
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

