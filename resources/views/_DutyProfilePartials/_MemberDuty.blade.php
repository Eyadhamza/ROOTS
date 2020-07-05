<div class="font-bold text-gray-900 bg-white fullwidth p-6 flex justify-center " style="font-size: 60px;">
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

<a href="#" class="font-bold text-gray-900 bg-white flex justify-center" style="font-size: 60px">
    My Instructors
</a>
@foreach($user->committees as $committee)
    @foreach($committee->users as $user)
        @if($user->all_roles()->contains('Instructor'))
    <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300 border-b">

        <a href="/profile/{{$user->id}}" class=" font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
        <a  href="{{$user->telegram_url}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
            Send direct Message
        </a>
        <a  href="/profile/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
            View Profile
        </a>
        <a  href="/notifications/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
            deliver Task
        </a>

    </div>
    @endif
@endforeach
@endforeach
