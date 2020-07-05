<div class="font-bold text-dark bg-white fullwidth p-4 d-flex justify-content-center " style="font-size: 60px;">
    My Duty as a Member
</div>

@livewire('notifications')


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

<a href="#" class="font-bold text-dark bg-white d-flex justify-content-center" style="font-size: 60px">
    My Instructors
</a>
@foreach($user->committees as $committee)
    @foreach($committee->users as $user)
        @if($user->all_roles()->contains('Instructor'))
    <div class="list-group border-bottom">

        <a href="/profile/{{$user->id}}" class=" font-bold text-black btn btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
        <a  href="{{$user->telegram_url}}" class=" font-bold text-white btn btn-dark">
            Send direct Message
        </a>
        <a  href="/profile/{{$user->id}}" class=" font-bold text-white btn btn-dark">
            View Profile
        </a>
        <a  href="/notifications/{{$user->id}}" class=" font-bold text-white btn btn-dark">
            deliver Task
        </a>

    </div>
    @endif
@endforeach
@endforeach
