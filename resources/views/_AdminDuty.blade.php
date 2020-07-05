<div class="font-bold text-dark bg-white fullwidth p-4 d-flex justify-content-center " style="font-size: 60px;">
    My Duty as an Admin
</div>

@livewire('edit-all')
@livewire('notifications')
@livewire('search-committee')


        <a href="#" class="font-bold text-dark bg-white d-flex justify-content-center" style="font-size: 60px">
            RR Members
        </a>

        <a  href="/notifications/RR" class=" font-bold text-white btn btn-dark d-flex justify-content-center">
            Give Everyone A Task.
        </a>
        <a  href="/notifications/RR" class=" font-bold text-white btn btn-dark d-flex justify-content-center">
             Send Everyone a message
        </a>

                @foreach($RRusers as $user)
            <div class="list-group border-bottom">

                <a href="/profile/{{$user->id}}" class=" font-bold text-black btn btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
                <a  href="{{$user->telegram_url}}" class=" font-bold text-white btn btn-dark">
                    Send Message
                </a>
                <a  href="/profile/{{$user->id}}" class=" font-bold text-white btn btn-dark">
                    View Profile
                </a>
                <a  href="/notifications/{{$user->id}}" class=" font-bold text-white btn btn-dark">
                    Give Task
                </a>
                @livewire('progress-counter',['user' => $user])

                <a  href="/notifications/{{$user->id}}" class=" font-bold text-white btn btn-dark">
                    Give A Warning
                </a>


            </div>
                @endforeach



<div class="p-4 d-flex justify-content-center" style="font-size: 50px ">
    Content Management

</div>
<hr>

<div class="p-4 d-flex justify-content-around">

    <h3>Review Achievements ..</h3>
    <a href="/achievements/create" class="btn btn-dark">Create achievement</a>
    <a href="/achievements" class="btn btn-dark">View all achievements    </a>

</div>
<hr>

<div class="p-4 d-flex justify-content-around">

    <h3>Review Articles ..</h3>
    <a href="/articles/create" class="btn btn-dark">Create Article</a>
    <a href="/articles" class="btn btn-dark">View all articles    </a>

</div>
<hr>

<div class="p-4 d-flex justify-content-around">
    <h3>Review Tracks ..</h3>
    <a href="/tracks/create" class="btn btn-dark">Create Track</a>
    <a href="/tracks" class="btn btn-dark">View all Tracks</a>


</div>
<hr>
<div class="p-4 d-flex justify-content-around">

    <h3>Review Events ..</h3>
    <a href="/events/create" class="btn btn-dark">Create Event</a>
    <a href="/tracks" class="btn btn-dark">View all Events    </a>

</div>

<hr>

