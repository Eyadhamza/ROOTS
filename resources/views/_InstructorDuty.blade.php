
<div class="font-bold text-dark bg-white fullwidth p-4 d-flex justify-content-center " style="font-size: 60px;">
    My Duty as an Instructor
</div>

@livewire('notifications')


@foreach($user->committees as $committee)
    <div class="list-group">
        <a href="#" class="font-bold text-white btn btn-dark " style="font-size: 60px">
            MY MEMBERS OF {{$committee->name}}
        </a>
        <a  href="/committees/{{$committee->id}}" class=" font-bold text-white btn btn-dark">
            View Committee.
        </a>
        <a  href="/notifications" class=" font-bold text-white btn btn-dark">
            Give Everyone A Task.
        </a>
        @foreach($committee->users as $user)
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
    </div>
@endforeach
