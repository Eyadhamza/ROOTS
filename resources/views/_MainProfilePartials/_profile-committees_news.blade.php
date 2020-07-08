<!--/ Section Services Star /-->
<section id="service" class="services-mf route">
    <div class="sm:w-full pr-4 pl-4">
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
    <div class="container mx-auto sm:px-4 lg:flex justify-center">

        @foreach($user->committees as $committee)
            <div class="md:w-1/3 pr-4 pl-4 w-full">
                <div class="service-box">
                    <div class="work-img">
                        <img src="/../../{{$committee->image}}" alt="" class="max-w-full h-auto " style="height: 250px;width: 300px;">
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">{{$committee->name}}</h2>
                        <p class="s-description text-center h-48 p-3">
                            {{$committee->description}}

                        </p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
