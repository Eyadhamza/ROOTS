<!--/ Section Services Star /-->
<section id="service" class="services-mf route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        My Committees..
                    </h3>
                    <p class="subtitle-a">
                        in here you can know more about your committee news
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        @foreach($user->committees as $committee)
            <div class="col-md-4">
                <div class="service-box">
                    <div class="work-img">
                        <img src="/../../{{$committee->image}}" alt="" class="img-fluid " style="height: 250px;width: 300px;">
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">{{$committee->name}}</h2>
                        <p class="s-description text-center">
                            {{$committee->description}}

                        </p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
